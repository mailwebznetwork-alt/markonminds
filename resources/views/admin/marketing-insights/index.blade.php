@extends('layouts.admin')

@section('title', 'Marketing Insights')
@section('header', 'Marketing Insights')

@section('content')
    <section class="space-y-6">
        <div class="rounded-2xl border border-cyan-300/30 bg-slate-900/70 p-6 shadow-[0_0_40px_rgba(34,211,238,0.08)]">
            <p class="text-xs uppercase tracking-[0.2em] text-cyan-300">Gemini Configuration</p>
            <h3 class="mt-2 text-2xl font-semibold text-white">AI Integration Status</h3>
            <p class="mt-2 text-sm text-slate-300">
                Marketing Insights reads Gemini credentials from <code class="rounded bg-slate-800 px-1.5 py-0.5 text-cyan-200">config('gemini.api_key')</code>.
            </p>
            <p class="mt-4 inline-flex rounded-full border px-3 py-1 text-xs font-medium {{ $hasGeminiApiKey ? 'border-emerald-300/40 text-emerald-200' : 'border-amber-300/40 text-amber-200' }}">
                {{ $hasGeminiApiKey ? 'Configured' : 'Missing API key in environment' }}
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($insights as $insight)
                <article class="rounded-2xl border border-violet-300/30 bg-slate-900/70 p-5 shadow-[0_0_30px_rgba(167,139,250,0.08)]">
                    <h4 class="text-base font-semibold text-violet-100">{{ $insight['title'] }}</h4>
                    <p class="mt-2 text-sm leading-relaxed text-slate-300">{{ $insight['detail'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
