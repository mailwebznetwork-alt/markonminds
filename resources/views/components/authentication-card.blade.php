<div class="min-h-[calc(100vh-80px)] flex flex-col sm:justify-center items-center px-4 py-8">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-5 bg-[#161616] border border-[#D4AF37]/45 shadow-[0_0_30px_rgba(212,175,55,0.12)] overflow-hidden sm:rounded-lg text-[#e9dfc6]">
        {{ $slot }}
    </div>
</div>
