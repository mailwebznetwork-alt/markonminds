<div class="space-y-8 rounded-xl bg-[#0b0b0c] p-8">
    <div class="grid gap-8 sm:grid-cols-2 xl:grid-cols-4">
        <a
            href="{{ route('admin.operations.bookings') }}"
            wire:navigate
            class="h-48 rounded-xl border border-[#2b2f36] bg-[#111214]/50 p-4 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.4)] backdrop-blur-md transition hover:-translate-y-0.5"
            style="box-shadow: 0 0 0 1px rgba(59,130,246,0.16), 0 0 10px rgba(59,130,246,0.16), 0 10px 15px -3px rgba(0,0,0,0.4);"
        >
            <div class="flex h-full flex-col justify-between">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#f3f4f6]">AI Pal Intelligence</p>
                    <svg class="size-4 text-[#3b82f6]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 17l4 4 4-4"/><path d="M12 3v18"/></svg>
                </div>
                <div>
                    <p class="text-4xl font-bold text-[#f3f4f6]">94%</p>
                    <p class="mt-1 text-xs text-[#3b82f6]">Active signal +12.8%</p>
                </div>
            </div>
        </a>
        <a
            href="{{ route('admin.operations.jobs') }}"
            wire:navigate
            class="h-48 rounded-xl border border-[#2b2f36] bg-[#111214]/50 p-4 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.4)] backdrop-blur-md transition hover:-translate-y-0.5"
        >
            <div class="flex h-full flex-col justify-between">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#f3f4f6]">Job Portal</p>
                    <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 7h18"/><path d="M6 7V5h12v2"/><rect x="3" y="7" width="18" height="12" rx="2"/></svg>
                </div>
                <div>
                    <p class="text-4xl font-bold text-[#f3f4f6]">128</p>
                    <p class="mt-1 text-xs text-[#3b82f6]">Active listings +8%</p>
                </div>
            </div>
        </a>
        <a
            href="{{ route('admin.operations.services') }}"
            wire:navigate
            class="h-48 rounded-xl border border-[#2b2f36] bg-[#111214]/50 p-4 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.4)] backdrop-blur-md transition hover:-translate-y-0.5"
        >
            <div class="flex h-full flex-col justify-between">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#f3f4f6]">Services</p>
                    <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="3"/><path d="M5 21a7 7 0 0 1 14 0"/></svg>
                </div>
                <div>
                    <p class="text-4xl font-bold text-[#f3f4f6]">42</p>
                    <p class="mt-1 text-xs text-[#3b82f6]">Coverage ratio 87%</p>
                </div>
            </div>
        </a>
        <a
            href="{{ route('admin.operations.locations') }}"
            wire:navigate
            class="h-48 rounded-xl border border-[#2b2f36] bg-[#111214]/50 p-4 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.4)] backdrop-blur-md transition hover:-translate-y-0.5"
        >
            <div class="flex h-full flex-col justify-between">
                <div class="flex items-center justify-between">
                    <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#f3f4f6]">Locations</p>
                    <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 21s7-5.2 7-11a7 7 0 1 0-14 0c0 5.8 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                </div>
                <div>
                    <p class="text-4xl font-bold text-[#f3f4f6]">16</p>
                    <p class="mt-1 text-xs text-[#3b82f6]">Reach index +5.4%</p>
                </div>
            </div>
        </a>
    </div>

    <div class="min-h-[46vh] rounded-xl border border-[#2b2f36] bg-[#111214]/50 p-4 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.4)] backdrop-blur-md"></div>
</div>
