<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Blank') }}</h1>
    </x-slot>

    <div class="flex items-center justify-center flex-1 p-6 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-700 h-96">
        <p class="text-xl text-gray-600 dark:text-gray-400">{{ __('Content Area') }}</p>
    </div>
</x-app-layout>