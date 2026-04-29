<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MarketingInsightsController extends Controller
{
    public function index(): View
    {
        $geminiApiKey = config('gemini.api_key');

        return view('admin.marketing-insights.index', [
            'hasGeminiApiKey' => filled($geminiApiKey),
        ]);
    }

    public function generate(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'business_goal' => ['required', 'string', 'min:20', 'max:1200'],
        ]);

        $geminiApiKey = config('gemini.api_key');

        if (blank($geminiApiKey)) {
            return redirect()
                ->route('admin.marketing-insights.index')
                ->withErrors(['business_goal' => 'Gemini API key is missing. Please set GEMINI_API_KEY in your .env file.'])
                ->withInput();
        }

        try {
            $response = Http::baseUrl('https://generativelanguage.googleapis.com')
                ->acceptJson()
                ->connectTimeout(10)
                ->timeout(30)
                ->retry([200, 500])
                ->withQueryParameters(['key' => $geminiApiKey])
                ->post('/v1beta/models/gemini-2.0-flash:generateContent', [
                    'contents' => [
                        [
                            'parts' => [
                                [
                                    'text' => $this->buildPrompt($validated['business_goal']),
                                ],
                            ],
                        ],
                    ],
                ])
                ->throw()
                ->json();
        } catch (\Throwable $exception) {
            Log::warning('Marketing strategy generation failed.', [
                'source' => 'gemini',
                'error' => $exception->getMessage(),
            ]);

            return redirect()
                ->route('admin.marketing-insights.index')
                ->withErrors(['business_goal' => 'Unable to generate strategy right now. Please try again in a moment.'])
                ->withInput();
        }

        $strategy = $this->extractGeneratedText($response);

        if (blank($strategy)) {
            return redirect()
                ->route('admin.marketing-insights.index')
                ->withErrors(['business_goal' => 'Gemini returned an empty strategy. Please refine the goal and retry.'])
                ->withInput();
        }

        return redirect()
            ->route('admin.marketing-insights.index')
            ->with('generatedStrategy', $strategy)
            ->with('submittedGoal', $validated['business_goal']);
    }

    private function buildPrompt(string $businessGoal): string
    {
        return <<<PROMPT
You are a senior marketing strategist for premium brands.

Business goal:
{$businessGoal}

Generate a high-level strategy tailored for premium brand positioning.
Use exactly these sections with concise bullets:
1) Positioning Narrative
2) Campaign Pillars (3 pillars)
3) Channel Mix
4) 30-60-90 Day Execution Plan
5) KPI Framework

Keep the tone authoritative, luxury-oriented, and practical for executive review.
PROMPT;
    }

    /**
     * @param  array<string, mixed>  $payload
     */
    private function extractGeneratedText(array $payload): ?string
    {
        $primaryText = data_get($payload, 'candidates.0.content.parts.0.text');

        if (is_string($primaryText) && filled(trim($primaryText))) {
            return trim($primaryText);
        }

        $parts = data_get($payload, 'candidates.0.content.parts', []);

        if (! is_array($parts)) {
            return null;
        }

        $texts = collect($parts)
            ->map(fn (mixed $part): ?string => is_array($part) && isset($part['text']) && is_string($part['text']) ? trim($part['text']) : null)
            ->filter(fn (?string $text): bool => filled($text))
            ->values();

        return $texts->isNotEmpty() ? $texts->implode("\n\n") : null;
    }
}
