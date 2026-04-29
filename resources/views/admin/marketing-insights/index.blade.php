@extends('layouts.admin')

@section('title', 'Marketing Insights')
@section('header', 'Marketing Insights')

@section('content')
    <section class="space-y-6">
        <form action="{{ route('admin.marketing-insights.generate') }}" method="POST" class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            @csrf
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Input</p>
            <h3 class="font-display mt-2 text-3xl font-semibold text-[#f8f4e7]">Generate Strategy</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">Enter a business goal to generate a high-level marketing strategy.</p>

            <div class="mt-5 space-y-2">
                <label for="business_goal" class="text-sm font-medium text-[#f8f4e7]">Business Goal</label>
                <textarea
                    id="business_goal"
                    name="business_goal"
                    rows="5"
                    class="w-full rounded-xl border border-[#D4AF37]/40 bg-[#121212] px-4 py-3 text-sm text-[#f8f4e7] placeholder:text-[#9d9275] focus:border-[#D4AF37] focus:outline-none"
                    placeholder="Example: Increase qualified inbound leads by 30% in the next quarter."
                >{{ old('business_goal') }}</textarea>
                @error('business_goal')
                    <p class="text-sm text-rose-300">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="mt-5 inline-flex items-center rounded-xl border border-[#D4AF37] bg-[#D4AF37]/10 px-5 py-2.5 text-sm font-semibold text-[#f3e7c1] transition hover:bg-[#D4AF37]/20">
                Generate Strategy
            </button>
        </form>

        <div class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Gemini Configuration</p>
            <h3 class="font-display mt-2 text-3xl font-semibold text-[#f8f4e7]">AI Integration Status</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">
                Gemini credentials are loaded from <code class="rounded bg-[#121212] px-1.5 py-0.5 text-[#f0d98f]">config('gemini.api_key')</code>.
            </p>
            <p class="mt-4 inline-flex rounded-full border px-3 py-1 text-xs font-medium {{ $hasGeminiApiKey ? 'border-emerald-300/40 bg-emerald-950/20 text-emerald-200' : 'border-amber-300/40 bg-amber-950/20 text-amber-200' }}">
                {{ $hasGeminiApiKey ? 'Configured' : 'Missing API key in environment' }}
            </p>
        </div>

        @if (session('generatedStrategy'))
            <article class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
                <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Generated Output</p>
                <h4 class="font-display mt-2 text-3xl font-semibold text-[#f8f4e7]">Marketing Strategy</h4>
                @if (session('submittedGoal'))
                    <p class="mt-3 rounded-lg border border-[#D4AF37]/30 bg-[#121212] px-4 py-3 text-sm text-[#d3c9ad]">
                        <span class="font-medium text-[#f2e8c9]">Goal:</span> {{ session('submittedGoal') }}
                    </p>
                @endif
                <div class="mt-4 whitespace-pre-line rounded-lg border border-[#D4AF37]/30 bg-[#121212] p-4 text-sm leading-7 text-[#e8dfc5]">{{ session('generatedStrategy') }}</div>
            </article>
        @endif
    </section>
@endsection
