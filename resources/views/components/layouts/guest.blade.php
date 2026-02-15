<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @livewireStyles
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-white text-slate-900 dark:bg-slate-950 dark:text-white transition-colors duration-500">
    <div class="min-h-screen">
        <x-layouts.navigation />
            <main id="guest-container" class="mx-auto flex flex-col">
                {{ $slot }}
            </main>
        <x-layouts.footer />
    </div>
    @livewireScripts
</body>
</html>
