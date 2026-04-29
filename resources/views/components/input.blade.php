@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-[#D4AF37]/35 bg-[#121212] text-[#f3ead4] placeholder:text-[#8f7f53] focus:border-[#D4AF37] focus:ring-[#D4AF37]/50 rounded-md shadow-sm']) !!}>
