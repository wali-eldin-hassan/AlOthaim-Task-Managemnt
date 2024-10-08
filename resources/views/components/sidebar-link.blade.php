<a href="{{ route($route) }}" class="flex items-center capitalize px-3 py-2 -mx-3 {{ request()->routeIs($route) ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg bg-opacity-40">
    {{ $icon }}

    <span class="mx-2 text-sm font-medium capitalize">{{ $title }}</span>
</a>