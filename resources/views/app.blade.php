<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description">
        <!-- Google ucun -->
        <meta name="description" content="{{$settings->meta_description ?? ''}}">
        <meta name="keywords" content="{{ $settings->meta_keywords ?? '' }}">
        <meta name="robots" content="index, follow">
        <!-- Google ucun -->

        <title inertia>{{$settings->meta_title ?? 'Default title'}}</title>

        <!-- <title inertia>{{ config('app.name', 'Laravel') }}</title> -->
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         @vite('resources/css/app.css')
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body class="bg-light-bg text-light-text dark:bg-dark-bg dark:text-dark-text transition-colors duration-300">
        @inertia
    </body>
</html>
