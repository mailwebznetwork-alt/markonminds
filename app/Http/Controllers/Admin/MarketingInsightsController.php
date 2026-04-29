<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class MarketingInsightsController extends Controller
{
    public function index(): View
    {
        $geminiApiKey = config('gemini.api_key');

        return view('admin.marketing-insights.index', [
            'hasGeminiApiKey' => filled($geminiApiKey),
            'insights' => [
                [
                    'title' => 'Arekere Priority Lead Window',
                    'detail' => 'Identify high-intent leads within a 25km radius for premium health packages.',
                ],
                [
                    'title' => 'Authority Campaign Positioning',
                    'detail' => 'Emphasize specialist-led care, rapid appointments, and concierge follow-ups.',
                ],
                [
                    'title' => 'Retention Opportunity',
                    'detail' => 'Recommend post-consultation preventive checkup reminders at 30 and 90 days.',
                ],
            ],
        ]);
    }
}
