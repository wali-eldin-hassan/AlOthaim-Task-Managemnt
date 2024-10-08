<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meraki UI Dashboard') }}</title>

    <link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative overflow-hidden font-sans isolate dark:bg-gray-900" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <x-dark-mode class="hidden"/>

    <div class="absolute top-0 right-0 hidden -ml-24 overflow-hidden lg:block left-1/2 -z-10 transform-gpu blur-3xl lg:ml-24 xl:ml-48">
        <svg viewBox="0 0 801 1036" aria-hidden="true" class="w-[50.0625rem]">
        <path fill="url(#70656b7e-db44-4b9b-b7d2-1f06791bed52)" fill-opacity=".3" d="m282.279 843.371 32.285 192.609-313.61-25.32 281.325-167.289-58.145-346.888c94.5 92.652 277.002 213.246 251.009-45.597C442.651 127.331 248.072 10.369 449.268.891c160.956-7.583 301.235 116.434 351.256 179.39L507.001 307.557l270.983 241.04-495.705 294.774Z" />
        <defs>
            <linearGradient id="70656b7e-db44-4b9b-b7d2-1f06791bed52" x1="508.179" x2="-28.677" y1="-116.221" y2="1091.63" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC" />
            <stop offset="1" stop-color="#FF80B5" />
            </linearGradient>
        </defs>
        </svg>
    </div>

    <div class="absolute top-0 hidden overflow-hidden rotate-180 lg:block -left-52 -z-10 transform-gpu blur-3xl">
        <svg viewBox="0 0 801 1036" aria-hidden="true" class="w-[50.0625rem]">
        <path fill="url(#70656b7e-db44-4b9b-b7d2-1f06791bed52)" fill-opacity=".3" d="m282.279 843.371 32.285 192.609-313.61-25.32 281.325-167.289-58.145-346.888c94.5 92.652 277.002 213.246 251.009-45.597C442.651 127.331 248.072 10.369 449.268.891c160.956-7.583 301.235 116.434 351.256 179.39L507.001 307.557l270.983 241.04-495.705 294.774Z" />
        <defs>
            <linearGradient id="70656b7e-db44-4b9b-b7d2-1f06791bed52" x1="508.179" x2="-28.677" y1="-116.221" y2="1091.63" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC" />
            <stop offset="1" stop-color="#FF80B5" />
            </linearGradient>
        </defs>
        </svg>
    </div>

    <main class="container flex items-center justify-center h-screen px-6 mx-auto ">
        {{ $slot }}
    </main>
</body>
</html>
