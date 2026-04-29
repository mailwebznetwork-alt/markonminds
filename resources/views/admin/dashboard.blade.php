@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('header', 'Executive Dashboard')

@section('content')
    <section class="grid gap-6 md:grid-cols-3">
        <article class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Service Radius</p>
            <h3 class="font-display mt-3 text-3xl font-semibold text-[#f8f4e7]">25km</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">Primary premium-care catchment around Arekere, Bangalore.</p>
        </article>
        <article class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">Brand Mode</p>
            <h3 class="font-display mt-3 text-3xl font-semibold text-[#f8f4e7]">Authority</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">Minimal, high-contrast interface optimized for executive workflows.</p>
        </article>
        <article class="rounded-2xl border border-[#D4AF37]/70 bg-[#1a1a1a] p-6 shadow-[0_0_40px_rgba(212,175,55,0.1)]">
            <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]">AI Stack</p>
            <h3 class="font-display mt-3 text-3xl font-semibold text-[#f8f4e7]">Gemini Ready</h3>
            <p class="mt-2 text-sm text-[#c9c0a8]">Marketing Intelligence module is scaffolded and configuration-aware.</p>
        </article>
    </section>
@endsection
