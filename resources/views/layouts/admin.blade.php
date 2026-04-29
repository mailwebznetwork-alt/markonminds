<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
            body { font-family: 'Inter', sans-serif; }
            .font-display { font-family: 'Playfair Display', serif; }
        </style>
    </head>
    <body class="min-h-screen bg-[#121212] text-slate-100 antialiased">
        <div class="flex min-h-screen">
            <aside class="w-72 border-r border-[#D4AF37]/35 bg-gradient-to-b from-[#161616] to-[#101010] backdrop-blur-xl">
                <div class="flex h-20 items-center border-b border-[#D4AF37]/35 px-6">
                    <div>
                        <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]/80">Bike</p>
                        <h1 class="font-display text-xl font-semibold text-[#f8f4e7]">Executive Panel</h1>
                    </div>
                </div>

                <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar">
                    <nav class="space-y-2 px-3 py-4"></nav>
                </div>
            </aside>

            <div class="flex-1">
                <header class="flex h-20 items-center justify-between border-b border-[#D4AF37]/30 bg-[#121212]/95 px-8">
                    <div>
                        <p class="text-xs uppercase tracking-[0.2em] text-[#D4AF37]/75">Project Workspace</p>
                        <h2 class="font-display text-2xl font-semibold text-[#f8f4e7]">@yield('header', 'Dashboard')</h2>
                    </div>
                </header>

                <main class="p-8">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
