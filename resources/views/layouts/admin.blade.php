<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'MarkOnMinds')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
        </style>
    </head>
    <body
        x-data="{ sidebarCollapsed: false, mobileSidebarOpen: false }"
        class="min-h-screen bg-[#0a0f1c] text-[#f5e7c4] antialiased"
        style="font-family: 'Noto Sans', sans-serif;"
    >
        <div
            x-show="mobileSidebarOpen"
            x-transition.opacity
            class="fixed inset-0 z-30 bg-black/60 lg:hidden"
            @click="mobileSidebarOpen = false"
        ></div>

        <aside
            class="fixed inset-y-0 left-0 z-40 border-r border-[#2c4ea3] bg-[#0d1324] transition-all duration-300"
            :class="[
                mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0',
                sidebarCollapsed ? 'w-20' : 'w-80'
            ]"
        >
            <div class="flex h-20 items-center justify-between border-b border-[#2b60df] bg-[#1e63ff] px-5">
                <div x-show="!sidebarCollapsed" class="transition duration-200">
                    <h1 class="font-extrabold leading-none tracking-tight text-white" style="font-size: 28px;">MarkOnMinds</h1>
                    <p class="mt-1 text-sm font-semibold uppercase tracking-[0.22em] text-white">Console</p>
                </div>
                <button
                    type="button"
                    class="rounded-xl border border-white/35 bg-[#1a56df] px-3 py-2 text-xs font-semibold text-white hover:bg-[#1549c4]"
                    @click="sidebarCollapsed = !sidebarCollapsed"
                >
                    <span x-text="sidebarCollapsed ? '>>' : '<<'"></span>
                </button>
            </div>

            <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar">
                <div class="space-y-6 px-3 py-4 text-sm">
                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Dashboard</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.performance-metrics') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.performance-metrics') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Performance Metrics</a>
                            <a href="{{ route('admin.system-status') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.system-status') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">System Status</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Operations</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.bookings') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.bookings') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Bookings</a>
                            <a href="{{ route('admin.job-portal') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.job-portal') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Job Portal</a>
                            <a href="{{ route('admin.services') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.services') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Services</a>
                            <a href="{{ route('admin.locations') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.locations') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Locations</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Site Architecture</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.page-style') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.page-style') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Page Style</a>
                            <a href="{{ route('admin.page-builder') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.page-builder') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Page Builder</a>
                            <a href="{{ route('admin.block-builder') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.block-builder') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Block Builder</a>
                            <a href="{{ route('admin.content-writing') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.content-writing') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Content Writing</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Marketing</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.marketing-strategy') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.marketing-strategy') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Marketing Strategy</a>
                            <a href="{{ route('admin.ad-clusters') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.ad-clusters') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Ad Clusters</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Integrity</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.reviews-ratings') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.reviews-ratings') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Reviews & Ratings</a>
                            <a href="{{ route('admin.privacy-eeat') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.privacy-eeat') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Privacy/EEAT</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Integrations</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.api-keys') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.api-keys') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">API Keys</a>
                            <a href="{{ route('admin.webhooks') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.webhooks') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Webhooks</a>
                            <a href="{{ route('admin.third-party-setup') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.third-party-setup') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Third-party Setup</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">Growth Centre</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.seo') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.seo') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">SEO</a>
                            <a href="{{ route('admin.local-seo') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.local-seo') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Local SEO</a>
                            <a href="{{ route('admin.gtm') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.gtm') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">GTM</a>
                            <a href="{{ route('admin.node-scaling') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.node-scaling') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Node Scaling</a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-white">User Management</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.roles') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.roles') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Roles</a>
                            <a href="{{ route('admin.audit-logs') }}" class="rounded-lg px-3 py-2 {{ request()->routeIs('admin.audit-logs') ? 'bg-[#2a1e0f] text-white' : 'text-white hover:bg-[#171f35]' }}">Audit Logs</a>
                        </nav>
                    </section>
                </div>
            </div>
        </aside>

        <div class="min-h-screen transition-all duration-300" :class="sidebarCollapsed ? 'lg:ml-20' : 'lg:ml-80'">
            <header class="sticky top-0 z-20 border-b border-[#d4af37]/20 bg-[#0a0f1c]/95 px-4 py-4 backdrop-blur sm:px-6">
                <div class="grid items-center gap-3 md:grid-cols-[auto,1fr,auto]">
                    <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-md border border-[#d4af37]/35 bg-[#121a2d] px-3 py-2 text-xs font-semibold text-[#d4af37] lg:hidden"
                        @click="mobileSidebarOpen = true"
                    >
                        Menu
                    </button>
                    <div class="mx-auto w-full max-w-2xl">
                        <label class="sr-only" for="global-search">Global Search</label>
                        <input
                            id="global-search"
                            type="search"
                            placeholder="Global Search"
                            class="w-full rounded-lg border border-[#d4af37]/35 bg-[#11192a] px-4 py-2.5 text-sm text-[#f5e7c4] placeholder:text-[#8a7448] focus:border-[#d4af37]/70 focus:outline-none focus:ring-2 focus:ring-[#d4af37]/30"
                        >
                    </div>
                    @auth
                        <div class="justify-self-end rounded-md border border-[#d4af37]/35 bg-[#141b2e] px-3 py-2 text-xs font-semibold tracking-wide text-[#e8d9b2]">
                            {{ auth()->user()->name }}
                        </div>
                    @endauth
                </div>
            </header>

            <main class="p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </body>
</html>
