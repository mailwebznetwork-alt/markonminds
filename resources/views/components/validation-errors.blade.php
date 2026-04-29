@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'rounded-md border border-red-500/45 bg-red-900/20 p-3']) }}>
        <div class="font-medium text-red-300">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-200">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
