<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meraki UI Dashboard') }}</title>

    <link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js'])
</head>
<body class="overflow-hidden" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div x-data="{ sidebarOpen: false }" class="relative flex h-screen font-sans text-gray-800 bg-white rtl:font-noto-sans">
        <x-sidebar />

        <div class="flex flex-col flex-1 overflow-hidden bg-gray-100 dark:bg-gray-900">
            <x-header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto">
                <div class="px-4 py-6 sm:py-8 sm:px-6">
                    {{ $header }}

                    <div class="mt-4 2xl:mt-6">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
