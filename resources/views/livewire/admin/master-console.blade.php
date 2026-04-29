<div x-data="{ sidebarCollapsed: false, mobileSidebarOpen: false }" class="min-h-screen bg-[#0b1220]">
    <div
        x-show="mobileSidebarOpen"
        x-transition.opacity
        class="fixed inset-0 z-30 bg-black/60 lg:hidden"
        @click="mobileSidebarOpen = false"
    ></div>

    <aside
        class="fixed inset-y-0 left-0 z-40 border-r border-[#243247] bg-[#0f172a] transition-all duration-300"
        :class="[
            mobileSidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0',
            sidebarCollapsed ? 'w-20' : 'w-72'
        ]"
    >
        <div class="flex h-20 items-center justify-between border-b border-[#243247] px-4">
            <div x-show="!sidebarCollapsed" class="space-y-0.5">
                <h1 class="text-lg font-semibold tracking-wide text-slate-100">MarkOnMinds</h1>
                <p class="text-[10px] uppercase tracking-[0.16em] text-slate-400">Console</p>
            </div>
            <button
                type="button"
                class="rounded-md border border-[#2e3e57] bg-[#141d30] px-2 py-1 text-xs font-semibold text-slate-300"
                @click="sidebarCollapsed = !sidebarCollapsed"
            >
                <span x-text="sidebarCollapsed ? '>>' : '<<'"></span>
            </button>
        </div>

        <div class="h-[calc(100vh-80px)] overflow-y-auto custom-scrollbar px-3 py-4">
            <nav class="grid gap-2 text-sm">
                @foreach ($categories as $categoryKey => $category)
                    <button
                        type="button"
                        wire:click="selectCategory('{{ $categoryKey }}')"
                        x-bind:title="sidebarCollapsed ? '{{ $category['label'] }}' : ''"
                        class="flex items-center gap-3 rounded-lg border px-3 py-2 transition-colors duration-150"
                        :class="sidebarCollapsed ? 'justify-center' : 'justify-start'"
                    >
                        <span class="{{ $activeCategory === $categoryKey ? 'border-[#3b82f6]/50 bg-[#14233f] text-[#dbeafe]' : 'border-[#2e3e57] bg-[#111a2f] text-slate-400' }} inline-flex size-8 items-center justify-center rounded-md border">
                            @if ($category['icon'] === 'chart')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V10"/><path d="M10 20V4"/><path d="M16 20v-7"/><path d="M22 20v-4"/></svg>
                            @elseif ($category['icon'] === 'gear')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.5V23a2 2 0 1 1-4 0v-.2a1.7 1.7 0 0 0-1-1.5 1.7 1.7 0 0 0-1.9.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.5-1H1a2 2 0 1 1 0-4h.2a1.7 1.7 0 0 0 1.5-1 1.7 1.7 0 0 0-.3-1.9l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.9.3h0a1.7 1.7 0 0 0 1-1.5V1a2 2 0 1 1 4 0v.2a1.7 1.7 0 0 0 1 1.5h0a1.7 1.7 0 0 0 1.9-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.9v0a1.7 1.7 0 0 0 1.5 1H23a2 2 0 1 1 0 4h-.2a1.7 1.7 0 0 0-1.5 1z"/></svg>
                            @elseif ($category['icon'] === 'build')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M6 21V8l6-5 6 5v13"/><path d="M9 21v-5h6v5"/></svg>
                            @elseif ($category['icon'] === 'rocket')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 15c-1 0-2 1-2 2v2h2c1 0 2-1 2-2v-1l7-7a7 7 0 0 0 2-5h0a7 7 0 0 0-5 2l-7 7h-1z"/><path d="M15 9l3 3"/><circle cx="14" cy="6" r="1"/></svg>
                            @elseif ($category['icon'] === 'shield')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l7 3v6c0 5-3 8-7 9-4-1-7-4-7-9V6l7-3z"/></svg>
                            @elseif ($category['icon'] === 'plug')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 7V3"/><path d="M15 7V3"/><path d="M6 11h12"/><path d="M8 11v2a4 4 0 0 0 8 0v-2"/><path d="M12 17v4"/></svg>
                            @elseif ($category['icon'] === 'growth')
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20h16"/><path d="M6 16l4-4 3 3 5-6"/><path d="M18 9h-4V5"/></svg>
                            @else
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="2.5"/><circle cx="15" cy="8" r="2.5"/><path d="M3 20c0-3 2.5-5 6-5"/><path d="M21 20c0-3-2.5-5-6-5"/></svg>
                            @endif
                        </span>
                        <span x-show="!sidebarCollapsed" class="{{ $activeCategory === $categoryKey ? 'text-slate-100' : 'text-slate-300' }}">
                            {{ $category['label'] }}
                        </span>
                    </button>
                @endforeach
            </nav>
        </div>
    </aside>

    <div class="min-h-screen transition-all duration-300" :class="sidebarCollapsed ? 'lg:ml-20' : 'lg:ml-72'">
        <header class="sticky top-0 z-20 border-b border-[#243247] bg-[#0b1220]/95 px-4 py-4 backdrop-blur sm:px-6">
            <div class="grid items-center gap-3 md:grid-cols-[auto,1fr,auto]">
                <button
                    type="button"
                    class="inline-flex items-center justify-center rounded-md border border-[#2e3e57] bg-[#121a2d] px-3 py-2 text-xs font-semibold text-slate-300 lg:hidden"
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
                        class="w-full rounded-lg border border-[#2e3e57] bg-[#111a2e] px-4 py-2.5 text-sm text-slate-100 placeholder:text-slate-500 focus:border-[#3b82f6]/70 focus:outline-none focus:ring-2 focus:ring-[#3b82f6]/25"
                    >
                </div>
                @auth
                    <div class="justify-self-end rounded-md border border-[#2e3e57] bg-[#141d31] px-3 py-2 text-xs font-semibold tracking-wide text-slate-200">
                        {{ auth()->user()->name }}
                    </div>
                @endauth
            </div>
        </header>

        <main class="space-y-4 p-4 sm:p-6 lg:p-8">
            <section class="rounded-xl border border-[#243247] bg-[#10192c] px-4 py-3">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-[0.16em] text-slate-400">{{ $categories[$activeCategory]['label'] }}</p>
                        <h2 class="text-lg font-semibold text-slate-100">{{ $this->activeTabConfig['label'] }}</h2>
                    </div>
                    <p class="text-xs text-slate-400">{{ count($this->activeTabs) }} modules</p>
                </div>
            </section>

            <section class="rounded-xl border border-[#243247] bg-[#0f1728] p-3 sm:p-4">
                @if (count($this->activeTabs) > 1)
                    <div class="flex flex-wrap gap-2 border-b border-[#243247] pb-3">
                        @foreach ($this->activeTabs as $tab)
                            <button
                                type="button"
                                wire:click="selectTab('{{ $tab['slug'] }}')"
                                wire:key="tab-{{ $tab['slug'] }}"
                                class="rounded-md border px-4 py-2 text-[13px] font-medium transition-all duration-150 {{ $activeTab === $tab['slug'] ? 'border-[#3b82f6]/50 bg-[#13213e] text-[#e2edff]' : 'border-[#2e3e57] bg-[#121a2d] text-slate-300 hover:border-[#3b82f6]/45 hover:text-slate-100' }}"
                            >
                                {{ $tab['label'] }}
                            </button>
                        @endforeach
                    </div>
                @endif

                <div wire:loading.class="opacity-75" wire:target="selectTab" class="{{ count($this->activeTabs) > 1 ? 'mt-4' : '' }} min-h-[60vh] rounded-lg border border-[#243247] bg-[#0d1527] p-4 transition-opacity duration-150">
                    @livewire($this->activeTabConfig['component'], [], key($this->activeTabConfig['component'].'-'.$activeTab))
                </div>
            </section>
        </main>
    </div>
</div>
