<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#D4AF37] border border-[#D4AF37] rounded-md font-semibold text-xs text-[#121212] uppercase tracking-widest hover:bg-[#e3c668] focus:bg-[#e3c668] active:bg-[#c39d2a] focus:outline-none focus:ring-2 focus:ring-[#D4AF37]/60 focus:ring-offset-2 focus:ring-offset-[#161616] disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
