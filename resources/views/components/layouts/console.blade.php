<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title ?? 'MarkOnMinds Console' }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <style>
            .custom-scrollbar::-webkit-scrollbar { width: 4px; }
            .custom-scrollbar::-webkit-scrollbar-thumb { background: #3b2d11; border-radius: 10px; }

            /* Livewire full-page root: grow in .console-slot but stay block layout. Do NOT use flex
               column here — fixed sidebar/overlay are still flex items and can reserve ~100vh, pushing
               the main column down. */
            .console-slot > [wire\:id] {
                flex: 1 1 0%;
                min-height: 0;
            }
        </style>
    </head>
    <body class="flex min-h-screen min-h-dvh flex-col bg-[#0a0f1c] text-[#f5e7c4] antialiased" style="font-family: 'Noto Sans', sans-serif;">
        <div class="console-slot flex min-h-0 flex-1 flex-col">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
