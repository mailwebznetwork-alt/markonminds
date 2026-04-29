<div class="space-y-4">
    <div class="flex justify-end">
        <button
            type="button"
            wire:click="createPage"
            class="rounded-md border border-[#2e3e57] bg-[#16213a] px-3 py-1.5 text-xs font-semibold text-slate-100 transition hover:border-[#3b82f6]/60"
        >
            Create Page
        </button>
    </div>

    <div class="overflow-hidden rounded-lg border border-[#243247]">
        <table class="min-w-full divide-y divide-[#243247] text-sm">
            <thead class="bg-[#121a2d] text-left text-slate-300">
                <tr>
                    <th class="px-4 py-3 font-medium">Name</th>
                    <th class="px-4 py-3 font-medium">Slug</th>
                    <th class="px-4 py-3 font-medium">Live</th>
                    <th class="px-4 py-3 font-medium">Live Review</th>
                    <th class="px-4 py-3 font-medium">Manage</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#1f2b40] bg-[#0e1526] text-slate-100">
                @foreach ($rows as $index => $row)
                    <tr>
                        <td class="px-4 py-3">{{ $row['name'] }}</td>
                        <td class="px-4 py-3">
                            <input wire:model.live="rows.{{ $index }}.slug" type="text" class="w-full rounded border border-[#2e3e57] bg-[#111b31] px-2 py-1 text-sm text-slate-100 focus:border-[#3b82f6]/65 focus:outline-none">
                        </td>
                        <td class="px-4 py-3">
                            <button type="button" wire:click="toggleLive({{ $index }})" class="rounded-full border px-3 py-1 text-xs {{ $row['live'] ? 'border-emerald-400/50 bg-emerald-500/20 text-emerald-200' : 'border-[#2e3e57] bg-[#1a253d] text-slate-300' }}">
                                {{ $row['live'] ? 'On' : 'Off' }}
                            </button>
                        </td>
                        <td class="px-4 py-3">
                            <button type="button" wire:click="reviewItem({{ $index }})" class="rounded-md border border-[#2e3e57] px-2 py-1 text-xs text-slate-300 hover:border-[#3b82f6]/55">View</button>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <button type="button" wire:click="editItem({{ $index }})" title="Edit" class="rounded border border-[#2e3e57] p-1.5 text-slate-300 hover:border-[#3b82f6]/55"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h6"/><path d="M14.7 4.3a2.1 2.1 0 0 1 3 3L8 17l-4 1 1-4 9.7-9.7z"/></svg></button>
                                <button type="button" wire:click="duplicateItem({{ $index }})" title="Duplicate" class="rounded border border-[#2e3e57] p-1.5 text-slate-300 hover:border-[#3b82f6]/55"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="9" y="9" width="11" height="11" rx="2"/><rect x="4" y="4" width="11" height="11" rx="2"/></svg></button>
                                <button type="button" wire:click="deleteItem({{ $index }})" title="Delete" class="rounded border border-[#2e3e57] p-1.5 text-slate-300 hover:border-red-500/70 hover:text-red-300"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 6h18"/><path d="M8 6V4h8v2"/><path d="M6 6l1 14h10l1-14"/></svg></button>
                                <button type="button" wire:click="revisionHistory({{ $index }})" title="Revision History" class="rounded border border-[#2e3e57] p-1.5 text-slate-300 hover:border-[#3b82f6]/55"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v4h4"/><path d="M12 7v5l3 2"/></svg></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
