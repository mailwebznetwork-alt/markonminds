<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'MarkOnMinds')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
            body { font-family: 'Noto Sans', sans-serif; }
        </style>
    </head>
    <body class="min-h-screen bg-[#121212] text-slate-100 antialiased">
        <header class="fixed top-0 right-0 left-0 z-40 h-20 border-b border-[#D4AF37]/35 bg-[#121212]">
            <div class="flex h-full items-center justify-between px-6">
                <h1 class="text-2xl font-semibold tracking-wide text-[#f8f4e7]">MarkOnMinds</h1>
                @auth
                    <span class="text-sm font-medium text-[#D4AF37]">{{ auth()->user()->name }}</span>
                @endauth
            </div>
        </header>

        <aside class="fixed top-20 bottom-0 left-0 z-30 w-72 border-r border-[#D4AF37]/35 bg-gradient-to-b from-[#171717] via-[#121212] to-[#0f0f0f]">
            <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar">
                <nav class="space-y-2 px-3 py-4">
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="block rounded-xl border border-[#D4AF37]/35 bg-[#181818] px-4 py-3 text-sm font-medium text-[#f8f4e7] transition hover:border-[#D4AF37]/60"
                    >
                        Dashboard
                    </a>
                    <a
                        href="{{ route('profile.show') }}"
                        class="block rounded-xl border border-[#D4AF37]/25 bg-[#151515] px-4 py-3 text-sm font-medium text-[#d9d0b2] transition hover:border-[#D4AF37]/60"
                    >
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="w-full rounded-xl border border-[#D4AF37]/25 bg-[#151515] px-4 py-3 text-left text-sm font-medium text-[#d9d0b2] transition hover:border-[#D4AF37]/60"
                        >
                            Logout
                        </button>
                    </form>
                </nav>
            </div>
        </aside>

        <div class="ml-72 pt-20 min-h-screen">
            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </body>
</html>
