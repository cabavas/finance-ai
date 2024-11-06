<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased h-full">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @if (!Route::is('login'))
                @include('layouts.navigation')
            @endif

            <!-- Page Content -->
            <main class="m-0 p-0">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
