<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
        </style>
    </head>
    <body class="min-h-screen bg-[#0a0f1c] text-slate-100 antialiased">
        <div class="flex min-h-screen">
            <aside class="w-72 border-r border-cyan-400/20 bg-slate-950/60 backdrop-blur-xl">
                <div class="flex h-20 items-center border-b border-cyan-400/20 px-6">
                    <div>
                        <p class="text-xs uppercase tracking-[0.2em] text-cyan-300/80">MarkOnMinds</p>
                        <h1 class="text-lg font-semibold text-white">Admin Authority</h1>
                    </div>
                </div>

                <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar">
                    <nav class="space-y-1 px-3 py-4">
                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="block rounded-xl border border-cyan-400/25 bg-slate-900/70 px-4 py-3 text-sm font-medium text-cyan-100 transition hover:border-cyan-300/60 hover:bg-slate-800/90"
                        >
                            Overview
                        </a>
                        <a
                            href="{{ route('admin.marketing-insights.index') }}"
                            class="block rounded-xl border border-violet-400/20 bg-slate-900/70 px-4 py-3 text-sm font-medium text-violet-100 transition hover:border-violet-300/60 hover:bg-slate-800/90"
                        >
                            Marketing Insights
                        </a>
                    </nav>
                </div>
            </aside>

            <div class="flex-1">
                <header class="flex h-20 items-center justify-between border-b border-cyan-400/20 bg-slate-950/40 px-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.2em] text-slate-400">Premium Healthcare Operations</p>
                        <h2 class="text-xl font-semibold text-cyan-100">@yield('header', 'Dashboard')</h2>
                    </div>
                </header>

                <main class="p-8">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
