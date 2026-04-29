<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-[#151515] border border-[#D4AF37]/35 rounded-md font-semibold text-xs text-[#e9dfc6] uppercase tracking-widest shadow-sm hover:border-[#D4AF37]/65 hover:text-[#f8f4e7] focus:outline-none focus:ring-2 focus:ring-[#D4AF37]/50 focus:ring-offset-2 focus:ring-offset-[#161616] disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
