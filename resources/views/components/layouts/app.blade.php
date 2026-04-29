<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? 'MarkOnMinds' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #3b2d11; border-radius: 10px; }
            .sidebar-link {
                display: flex;
                align-items: center;
                justify-content: flex-start;
            }
            .sidebar-icon {
                display: inline-flex;
                min-width: 2rem;
                justify-content: center;
                border-radius: 0.375rem;
                border: 1px solid rgba(212, 175, 55, 0.35);
                background: rgba(20, 27, 46, 0.8);
                padding: 0.125rem 0.375rem;
                font-size: 0.625rem;
                font-weight: 700;
                letter-spacing: 0.08em;
                color: #d4af37;
            }
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
            class="fixed inset-y-0 left-0 z-40 border-r border-[#d4af37]/30 bg-[#0d1324] transition-all duration-300"
            :class="[
                mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0',
                sidebarCollapsed ? 'w-20' : 'w-80'
            ]"
        >
            <div class="flex h-20 items-center justify-between border-b border-[#d4af37]/25 px-5">
                <div x-show="!sidebarCollapsed" class="transition duration-200">
                    <h1 class="text-xl font-semibold tracking-wide text-[#f8f1dc]">MarkOnMinds</h1>
                </div>
                <button type="button" class="rounded-md border border-[#d4af37]/40 bg-[#141c30] px-2 py-1 text-xs text-[#d4af37] hover:bg-[#1d2742]" @click="sidebarCollapsed = !sidebarCollapsed">
                    <span x-text="sidebarCollapsed ? '>>' : '<<'"></span>
                </button>
            </div>

            <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar px-3 py-4">
                <div class="space-y-6 text-sm">
                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Dashboard</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.performance-metrics') }}" x-bind:title="sidebarCollapsed ? 'Performance Metrics' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.performance-metrics') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">PM</span><span x-show="!sidebarCollapsed">Performance Metrics</span></a>
                            <a href="{{ route('admin.system-status') }}" x-bind:title="sidebarCollapsed ? 'System Status' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.system-status') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">SS</span><span x-show="!sidebarCollapsed">System Status</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Operations</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.bookings') }}" x-bind:title="sidebarCollapsed ? 'Bookings' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.bookings') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">BK</span><span x-show="!sidebarCollapsed">Bookings</span></a>
                            <a href="{{ route('admin.job-portal') }}" x-bind:title="sidebarCollapsed ? 'Job Portal' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.job-portal') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">JP</span><span x-show="!sidebarCollapsed">Job Portal</span></a>
                            <a href="{{ route('admin.services') }}" x-bind:title="sidebarCollapsed ? 'Services' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.services') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">SV</span><span x-show="!sidebarCollapsed">Services</span></a>
                            <a href="{{ route('admin.locations') }}" x-bind:title="sidebarCollapsed ? 'Locations' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.locations') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">LC</span><span x-show="!sidebarCollapsed">Locations</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Site Architecture</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.page-style') }}" x-bind:title="sidebarCollapsed ? 'Page Style' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.page-style') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">PS</span><span x-show="!sidebarCollapsed">Page Style</span></a>
                            <a href="{{ route('admin.page-builder') }}" x-bind:title="sidebarCollapsed ? 'Page Builder' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.page-builder') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">PB</span><span x-show="!sidebarCollapsed">Page Builder</span></a>
                            <a href="{{ route('admin.block-builder') }}" x-bind:title="sidebarCollapsed ? 'Block Builder' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.block-builder') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">BB</span><span x-show="!sidebarCollapsed">Block Builder</span></a>
                            <a href="{{ route('admin.content-writing') }}" x-bind:title="sidebarCollapsed ? 'Content Writing' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.content-writing') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">CW</span><span x-show="!sidebarCollapsed">Content Writing</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Marketing</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.marketing-strategy') }}" x-bind:title="sidebarCollapsed ? 'Marketing Strategy' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.marketing-strategy') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">MS</span><span x-show="!sidebarCollapsed">Marketing Strategy</span></a>
                            <a href="{{ route('admin.ad-clusters') }}" x-bind:title="sidebarCollapsed ? 'Ad Clusters' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.ad-clusters') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">AC</span><span x-show="!sidebarCollapsed">Ad Clusters</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Integrity</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.reviews-ratings') }}" x-bind:title="sidebarCollapsed ? 'Reviews & Ratings' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.reviews-ratings') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">RR</span><span x-show="!sidebarCollapsed">Reviews & Ratings</span></a>
                            <a href="{{ route('admin.privacy-eeat') }}" x-bind:title="sidebarCollapsed ? 'Privacy/EEAT' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.privacy-eeat') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">PE</span><span x-show="!sidebarCollapsed">Privacy/EEAT</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Integrations</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.api-keys') }}" x-bind:title="sidebarCollapsed ? 'API Keys' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.api-keys') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">AK</span><span x-show="!sidebarCollapsed">API Keys</span></a>
                            <a href="{{ route('admin.webhooks') }}" x-bind:title="sidebarCollapsed ? 'Webhooks' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.webhooks') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">WH</span><span x-show="!sidebarCollapsed">Webhooks</span></a>
                            <a href="{{ route('admin.third-party-setup') }}" x-bind:title="sidebarCollapsed ? 'Third-party Setup' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.third-party-setup') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">TS</span><span x-show="!sidebarCollapsed">Third-party Setup</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">Growth Centre</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.seo') }}" x-bind:title="sidebarCollapsed ? 'SEO' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.seo') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">SE</span><span x-show="!sidebarCollapsed">SEO</span></a>
                            <a href="{{ route('admin.local-seo') }}" x-bind:title="sidebarCollapsed ? 'Local SEO' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.local-seo') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">LS</span><span x-show="!sidebarCollapsed">Local SEO</span></a>
                            <a href="{{ route('admin.gtm') }}" x-bind:title="sidebarCollapsed ? 'GTM' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.gtm') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">GT</span><span x-show="!sidebarCollapsed">GTM</span></a>
                            <a href="{{ route('admin.node-scaling') }}" x-bind:title="sidebarCollapsed ? 'Node Scaling' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.node-scaling') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">NS</span><span x-show="!sidebarCollapsed">Node Scaling</span></a>
                        </nav>
                    </section>

                    <section>
                        <p x-show="!sidebarCollapsed" class="px-2 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8450]">User Management</p>
                        <nav class="mt-2 grid gap-1">
                            <a href="{{ route('admin.roles') }}" x-bind:title="sidebarCollapsed ? 'Roles' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.roles') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">RL</span><span x-show="!sidebarCollapsed">Roles</span></a>
                            <a href="{{ route('admin.audit-logs') }}" x-bind:title="sidebarCollapsed ? 'Audit Logs' : ''" class="sidebar-link rounded-lg px-3 py-2 {{ request()->routeIs('admin.audit-logs') ? 'bg-[#2a1e0f] text-[#f5e7c4]' : 'text-[#d7c7a1] hover:bg-[#171f35]' }}" :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"><span x-show="sidebarCollapsed" class="sidebar-icon">AL</span><span x-show="!sidebarCollapsed">Audit Logs</span></a>
                        </nav>
                    </section>
                </div>
            </div>
        </aside>

        <div class="min-h-screen transition-all duration-300" :class="sidebarCollapsed ? 'lg:ml-20' : 'lg:ml-80'">
            <header class="sticky top-0 z-20 border-b border-[#d4af37]/20 bg-[#0a0f1c]/95 px-4 py-4 backdrop-blur sm:px-6">
                <div class="grid items-center gap-3 md:grid-cols-[auto,1fr,auto]">
                    <button type="button" class="inline-flex items-center justify-center rounded-md border border-[#d4af37]/35 bg-[#121a2d] px-3 py-2 text-xs font-semibold text-[#d4af37] lg:hidden" @click="mobileSidebarOpen = true">
                        Menu
                    </button>
                    <div class="mx-auto w-full max-w-2xl">
                        <label class="sr-only" for="global-search">Global Search</label>
                        <input id="global-search" type="search" placeholder="Global Search" class="w-full rounded-lg border border-[#d4af37]/35 bg-[#11192a] px-4 py-2.5 text-sm text-[#f5e7c4] placeholder:text-[#8a7448] focus:border-[#d4af37]/70 focus:outline-none focus:ring-2 focus:ring-[#d4af37]/30">
                    </div>
                    @auth
                        <div class="justify-self-end rounded-md border border-[#d4af37]/35 bg-[#141b2e] px-3 py-2 text-xs font-semibold tracking-wide text-[#e8d9b2]">
                            {{ auth()->user()->name }}
                        </div>
                    @endauth
                </div>
            </header>

            <main class="p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>
