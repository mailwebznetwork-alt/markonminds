<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ filled(config('app.name')) ? config('app.name') : 'Laravel' }}</title>
    </head>
    <body class="min-h-screen bg-[#121212]"></body>
</html>
