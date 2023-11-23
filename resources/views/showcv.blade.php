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
    <div class="flex flex-col justify-center items-center h-screen">
        <iframe src="{{ Vite::asset('resources/files/es/fabricio_rivera_cv.pdf') }}" class="fixed top-0 left-0 z-50" width="100%" height="100%">
        </iframe>
    </div>
</body>
</html>