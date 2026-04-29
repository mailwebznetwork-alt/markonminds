@extends('layouts.admin')

@section('title', 'MarkOnMinds Console')

@section('content')
    <section class="min-h-[calc(100vh-128px)] rounded-xl border border-[#1d2a4f] bg-[#060f26] p-5">
        <h2 class="text-3xl font-semibold text-slate-100">Block Factory</h2>
        <div class="mt-4 flex flex-wrap gap-2 text-xs text-slate-300">
            <span class="rounded-md border border-[#1d2a4f] bg-[#08132f] px-3 py-1">Pages</span>
            <span class="rounded-md border border-[#1d2a4f] bg-[#08132f] px-3 py-1">Blog Builder</span>
            <span class="rounded-md border border-[#2e63d2] bg-[#2e63d2]/20 px-3 py-1 text-blue-200">Block Factory (Blade)</span>
            <span class="rounded-md border border-[#1d2a4f] bg-[#08132f] px-3 py-1">Filament - Pages</span>
            <span class="rounded-md border border-[#1d2a4f] bg-[#08132f] px-3 py-1">Filament - Blocks</span>
        </div>
        <div class="mt-4 h-[520px] rounded-lg border border-[#1d2a4f] bg-[#050b1a]"></div>
    </section>
@endsection
