<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="application-name"
        content="{{ config('app.name') }}"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <style>
        input:invalid,
        textarea:invalid,
        select:invalid {
            box-shadow: none !important;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')

    @isset($title)
        <title>{{ $title }} - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endisset
</head>

<body>
    <div class="antialiased">
        {{ $slot }}

        @filamentScripts
        @vite('resources/js/app.js')
    </div>
</body>

</html>
