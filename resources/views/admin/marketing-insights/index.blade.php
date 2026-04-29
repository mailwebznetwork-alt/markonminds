@extends('layouts.admin')

@section('title', 'Marketing Insights')
@section('header', 'Marketing Insights')

@section('content')
    <section class="space-y-6">
        <div class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Gemini Configuration</p>
            <h3 class="font-display mt-2 text-3xl font-semibold text-[#f8f4e7]">AI Integration Status</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">
                Marketing Insights reads Gemini credentials from <code class="rounded bg-[#121212] px-1.5 py-0.5 text-[#f0d98f]">config('gemini.api_key')</code>.
            </p>
            <p class="mt-4 inline-flex rounded-full border px-3 py-1 text-xs font-medium {{ $hasGeminiApiKey ? 'border-emerald-300/40 bg-emerald-950/20 text-emerald-200' : 'border-amber-300/40 bg-amber-950/20 text-amber-200' }}">
                {{ $hasGeminiApiKey ? 'Configured' : 'Missing API key in environment' }}
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($insights as $insight)
                <article class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-5 shadow-[0_0_30px_rgba(212,175,55,0.1)]">
                    <h4 class="font-display text-xl font-semibold text-[#f8f4e7]">{{ $insight['title'] }}</h4>
                    <p class="mt-2 text-sm leading-relaxed text-[#c9c0a8]">{{ $insight['detail'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
