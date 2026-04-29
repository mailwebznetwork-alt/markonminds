<div wire:poll.10s="refreshMatrix" class="space-y-4">
    <div class="flex items-center justify-between rounded-lg border border-[#243247] bg-[#121a2d] px-4 py-2 text-xs text-slate-300">
        <span>Intelligence Feed</span>
        <span>{{ $lastAction }}</span>
    </div>

    <div class="grid gap-4 xl:grid-cols-2">
        <article class="rounded-lg border border-[#243247] bg-[#101a30] p-4">
            <div class="mb-3 flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-100">SEO & ORGANIC</h3>
                <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20h16"/><path d="M6 16l4-4 3 3 5-6"/><path d="M18 9h-4V5"/></svg>
            </div>
            <div class="space-y-1 text-xs text-slate-300">
                <p>Top Keyword Rank: <span class="text-slate-100">#{{ 3 + ($refreshCounter % 2) }}</span></p>
                <p>GMB Presence: <span class="text-emerald-300">Verified</span></p>
            </div>
            <button wire:click="runQuickAction('View SEO Reports')" class="mt-3 rounded-md border border-[#2e3e57] px-3 py-1.5 text-xs font-medium text-slate-200 hover:border-[#3b82f6]/55">View Reports</button>
        </article>

        <article class="rounded-lg border border-[#243247] bg-[#101a30] p-4">
            <div class="mb-3 flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-100">TRACKING ENGINE</h3>
                <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9"/></svg>
            </div>
            <div class="space-y-1 text-xs text-slate-300">
                <p>GTM: <span class="text-emerald-300">Active</span></p>
                <p>Meta Pixel: <span class="text-emerald-300">Active</span></p>
                <p>Conversion Tags: <span class="text-slate-100">{{ $this->tagEngineHealth }}</span></p>
            </div>
            <button wire:click="runQuickAction('Update Tags')" class="mt-3 rounded-md border border-[#2e3e57] px-3 py-1.5 text-xs font-medium text-slate-200 hover:border-[#3b82f6]/55">Update Tags</button>
        </article>

        <article class="rounded-lg border border-[#243247] bg-[#101a30] p-4">
            <div class="mb-3 flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-100">AD PULSE</h3>
                <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V10"/><path d="M10 20V4"/><path d="M16 20v-7"/><path d="M22 20v-4"/></svg>
            </div>
            <div class="space-y-1 text-xs text-slate-300">
                <p>Meta Clusters: <span class="text-slate-100">12 Active</span></p>
                <p>Google Clusters: <span class="text-slate-100">8 Active</span></p>
                <p>Daily Spend Health: <span class="text-emerald-300">On Target</span></p>
            </div>
            <button wire:click="runQuickAction('Open Ad Reports')" class="mt-3 rounded-md border border-[#2e3e57] px-3 py-1.5 text-xs font-medium text-slate-200 hover:border-[#3b82f6]/55">View Reports</button>
        </article>

        <article class="rounded-lg border border-[#243247] bg-[#101a30] p-4">
            <div class="mb-3 flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-100">LOCAL DOMINATION</h3>
                <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-5.3 7-11a7 7 0 1 0-14 0c0 5.7 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
            </div>
            <div class="space-y-1 text-xs text-slate-300">
                <p>Jio Local Reach: <span class="text-slate-100">{{ 74 + ($refreshCounter % 3) }}%</span></p>
                <p>Node Scaling Progress: <span class="text-slate-100">{{ 58 + ($refreshCounter % 4) }}%</span></p>
            </div>
            <button wire:click="runQuickAction('Scale Local Nodes')" class="mt-3 rounded-md border border-[#2e3e57] px-3 py-1.5 text-xs font-medium text-slate-200 hover:border-[#3b82f6]/55">Quick Action</button>
        </article>
    </div>

    <article class="rounded-lg border border-[#243247] bg-[#101a30] p-4">
        <div class="mb-3 flex items-center justify-between">
            <h3 class="text-sm font-semibold text-slate-100">RIVAL WATCH</h3>
            <svg class="size-4 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6-10-6-10-6z"/><circle cx="12" cy="12" r="2.5"/></svg>
        </div>
        <div class="grid gap-3 text-xs text-slate-300 sm:grid-cols-3">
            <p>Competitor Campaign Bursts: <span class="text-slate-100">{{ 2 + ($refreshCounter % 2) }}</span></p>
            <p>Keyword Pressure Index: <span class="text-slate-100">{{ 61 + ($refreshCounter % 5) }}</span></p>
            <p>Share-of-Voice Drift: <span class="text-amber-300">Watchlist</span></p>
        </div>
        <button wire:click="runQuickAction('Open Rival Watch')" class="mt-3 rounded-md border border-[#2e3e57] px-3 py-1.5 text-xs font-medium text-slate-200 hover:border-[#3b82f6]/55">View Reports</button>
    </article>
</div>
