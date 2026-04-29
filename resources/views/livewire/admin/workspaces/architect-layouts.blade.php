<div class="space-y-4">
    <div class="flex justify-end">
        <button
            type="button"
            wire:click="createLayout"
            class="rounded-md border border-[#d4af37]/45 bg-[#1a253d] px-3 py-1.5 text-xs font-semibold text-[#f3e4c0] transition hover:border-[#d4af37]/70"
        >
            Create Layout
        </button>
    </div>

    <div class="overflow-hidden rounded-lg border border-[#d4af37]/25">
        <table class="min-w-full divide-y divide-[#d4af37]/20 text-sm">
            <thead class="bg-[#121a2d] text-left text-[#c9b37d]">
                <tr>
                    <th class="px-4 py-3 font-medium">Name</th>
                    <th class="px-4 py-3 font-medium">Code</th>
                    <th class="px-4 py-3 font-medium">Live</th>
                    <th class="px-4 py-3 font-medium">Live Review</th>
                    <th class="px-4 py-3 font-medium">Manage</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#d4af37]/10 bg-[#0e1526] text-[#f0e1be]">
                @foreach ($rows as $index => $row)
                    <tr>
                        <td class="px-4 py-3">{{ $row['name'] }}</td>
                        <td class="px-4 py-3">
                            <input wire:model.live="rows.{{ $index }}.code" type="text" class="w-full rounded border border-[#d4af37]/30 bg-[#111b31] px-2 py-1 text-sm text-[#f5e7c4] focus:border-[#d4af37]/65 focus:outline-none">
                        </td>
                        <td class="px-4 py-3">
                            <button type="button" wire:click="toggleLive({{ $index }})" class="rounded-full border px-3 py-1 text-xs {{ $row['live'] ? 'border-emerald-400/50 bg-emerald-500/20 text-emerald-200' : 'border-[#d4af37]/30 bg-[#1a253d] text-[#d1bd8b]' }}">
                                {{ $row['live'] ? 'On' : 'Off' }}
                            </button>
                        </td>
                        <td class="px-4 py-3">
                            <button type="button" wire:click="reviewItem({{ $index }})" class="rounded-md border border-[#d4af37]/30 px-2 py-1 text-xs text-[#d1bd8b] hover:border-[#d4af37]/60">View</button>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <button type="button" wire:click="editItem({{ $index }})" title="Edit" class="rounded border border-[#d4af37]/30 p-1.5 text-[#d9c594] hover:border-[#d4af37]/60"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h6"/><path d="M14.7 4.3a2.1 2.1 0 0 1 3 3L8 17l-4 1 1-4 9.7-9.7z"/></svg></button>
                                <button type="button" wire:click="duplicateItem({{ $index }})" title="Duplicate" class="rounded border border-[#d4af37]/30 p-1.5 text-[#d9c594] hover:border-[#d4af37]/60"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="9" y="9" width="11" height="11" rx="2"/><rect x="4" y="4" width="11" height="11" rx="2"/></svg></button>
                                <button type="button" wire:click="deleteItem({{ $index }})" title="Delete" class="rounded border border-[#d4af37]/30 p-1.5 text-[#d9c594] hover:border-red-500/70 hover:text-red-300"><svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 6h18"/><path d="M8 6V4h8v2"/><path d="M6 6l1 14h10l1-14"/></svg></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
