<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ filled(config('app.name')) ? config('app.name') : 'MarkOnMinds Console' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
        </style>
    </head>
    <body class="min-h-screen bg-[#050b1a] text-slate-100 antialiased" style="font-family: 'Noto Sans', sans-serif;">
        <aside class="fixed inset-y-0 left-0 z-40 w-72 border-r border-[#1d2a4f] bg-[#050c1f]">
            <div class="flex h-[80px] items-center justify-between border-b border-[#1d2a4f] bg-[#2e63d2] px-4">
                <div>
                    <h1 class="text-xl font-semibold text-white">MarkOnMinds</h1>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-blue-100">Console</p>
                </div>
                <button type="button" class="rounded-md border border-blue-200/30 bg-blue-500/30 px-2 py-1 text-xs text-blue-100">&laquo;</button>
            </div>
            <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar px-3 py-4 text-sm">
                <p class="px-2 text-[10px] uppercase tracking-[0.18em] text-slate-500">Core Pillars</p>
                <nav class="mt-2 space-y-1 text-slate-300">
                    <a href="{{ route('admin.dashboard') }}" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Dashboard</a>
                    <a href="#" class="block rounded-lg bg-[#2e63d2] px-3 py-2 text-white">Site Architect</a>
                </nav>
                <p class="mt-5 px-2 text-[10px] uppercase tracking-[0.18em] text-slate-500">Filament</p>
                <nav class="mt-2 space-y-1 text-slate-300">
                    <a href="#" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Pages</a>
                    <a href="#" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Blocks</a>
                </nav>
                <p class="mt-5 px-2 text-[10px] uppercase tracking-[0.18em] text-slate-500">Operations</p>
                <nav class="mt-2 space-y-1 text-slate-300">
                    <a href="#" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Bookings</a>
                    <a href="#" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Job Portals</a>
                    <a href="#" class="block rounded-lg px-3 py-2 hover:bg-[#0f1a35]">Growth Center</a>
                </nav>
            </div>
        </aside>
        <div class="ml-72 min-h-screen">
            <header class="sticky top-0 z-30 flex h-20 items-center justify-between border-b border-[#1d2a4f] bg-[#040913]/95 px-6 backdrop-blur">
                <div class="w-full max-w-xl">
                    <label class="sr-only" for="command-search">Search command center</label>
                    <input id="command-search" type="text" placeholder="Search command center..." class="w-full rounded-md border border-[#1d2a4f] bg-[#060f26] px-4 py-2 text-sm text-slate-200 placeholder:text-slate-500 focus:border-[#2e63d2] focus:outline-none focus:ring-1 focus:ring-[#2e63d2]">
                </div>
                <div class="ml-6 rounded-md border border-[#2e63d2]/50 bg-[#091533] px-3 py-2 text-xs font-semibold tracking-wide text-blue-200">
                    {{ auth()->check() ? auth()->user()->name : 'Guest' }}
                </div>
            </header>
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
