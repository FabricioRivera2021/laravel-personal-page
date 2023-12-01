<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Fabricio Rivera</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}"/>
</head>
<body>
    {{-- <div class="animate__animated animate__fadeIn bg-gray-100"> --}}

        {{ $slot }}
        
    {{-- </div> --}}
</body>
</html>
