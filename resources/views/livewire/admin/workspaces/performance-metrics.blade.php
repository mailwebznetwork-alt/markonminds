<div class="space-y-4">
    <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
        <a
            href="{{ route('admin.operations.bookings') }}"
            wire:navigate
            class="rounded-lg border border-[#d4af37]/30 bg-[#121a2d] px-4 py-3 text-sm font-medium text-[#f5e7c4] transition hover:border-[#d4af37]/60 hover:bg-[#1a243b]"
        >
            Bookings
        </a>
        <a
            href="{{ route('admin.operations.jobs') }}"
            wire:navigate
            class="rounded-lg border border-[#d4af37]/30 bg-[#121a2d] px-4 py-3 text-sm font-medium text-[#f5e7c4] transition hover:border-[#d4af37]/60 hover:bg-[#1a243b]"
        >
            Job Portal
        </a>
        <a
            href="{{ route('admin.operations.services') }}"
            wire:navigate
            class="rounded-lg border border-[#d4af37]/30 bg-[#121a2d] px-4 py-3 text-sm font-medium text-[#f5e7c4] transition hover:border-[#d4af37]/60 hover:bg-[#1a243b]"
        >
            Services
        </a>
        <a
            href="{{ route('admin.operations.locations') }}"
            wire:navigate
            class="rounded-lg border border-[#d4af37]/30 bg-[#121a2d] px-4 py-3 text-sm font-medium text-[#f5e7c4] transition hover:border-[#d4af37]/60 hover:bg-[#1a243b]"
        >
            Locations
        </a>
    </div>

    <div class="min-h-[46vh] rounded-lg border border-[#d4af37]/20 bg-[#0b1222]"></div>
</div>
