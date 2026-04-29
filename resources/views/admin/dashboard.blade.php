@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('header', 'Executive Dashboard')

@section('content')
    <section class="grid gap-6 md:grid-cols-3">
        <article class="rounded-2xl border border-cyan-300/30 bg-slate-900/70 p-6 shadow-[0_0_40px_rgba(34,211,238,0.08)]">
            <p class="text-xs uppercase tracking-[0.2em] text-cyan-300">Service Radius</p>
            <h3 class="mt-3 text-3xl font-semibold text-white">25km</h3>
            <p class="mt-2 text-sm text-slate-300">Primary premium-care catchment around Arekere, Bangalore.</p>
        </article>
        <article class="rounded-2xl border border-violet-300/30 bg-slate-900/70 p-6 shadow-[0_0_40px_rgba(167,139,250,0.08)]">
            <p class="text-xs uppercase tracking-[0.2em] text-violet-300">Brand Mode</p>
            <h3 class="mt-3 text-3xl font-semibold text-white">Authority</h3>
            <p class="mt-2 text-sm text-slate-300">Minimal, high-contrast interface optimized for executive workflows.</p>
        </article>
        <article class="rounded-2xl border border-emerald-300/30 bg-slate-900/70 p-6 shadow-[0_0_40px_rgba(52,211,153,0.08)]">
            <p class="text-xs uppercase tracking-[0.2em] text-emerald-300">AI Stack</p>
            <h3 class="mt-3 text-3xl font-semibold text-white">Gemini Ready</h3>
            <p class="mt-2 text-sm text-slate-300">Marketing Intelligence module is scaffolded and configuration-aware.</p>
        </article>
    </section>
@endsection
