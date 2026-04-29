@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#e9dfc6]']) }}>
    {{ $value ?? $slot }}
</label>
