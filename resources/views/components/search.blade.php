<div class="relative hidden sm:block" x-data="{ search: '' }" @click.away="search = ''">
    <div class="relative mx-4 lg:mx-0">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 dark:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </span>
    
        <input x-model="search" type="text" class="w-32 h-10 py-2 pl-10 pr-4 text-gray-700 placeholder-gray-400 transition-all duration-150 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-500 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 focus:border-indigo-400 dark:focus:border-indigo-300 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:w-44 sm:w-64 sm:focus:w-80 " placeholder="{{ __('Find anything...') }}">
    </div>

    <div class="absolute right-0 z-20 w-full py-4 mt-2 space-y-4 overflow-hidden bg-white border border-gray-100 rounded-md shadow-xl dark:border-gray-700 dark:bg-gray-800"
        x-show="search.length > 0" 
        x-cloak 
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" 
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100" 
        x-transition:leave-end="opacity-0 scale-95"
    >
        <div>
            <h3 class="px-5 text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">{{ __('Accounts') }}</h3>

            <div class="mt-2 ">
                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Esther Howard') }}
                </a>

                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Cameron Williamson') }}
                </a>
            </div>
        </div>

        <div>
            <h3 class="px-5 text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">{{ __('Projects') }}</h3>

            <div class="mt-2 ">
                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Minimalist') }}
                </a>

                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Scandinavian') }}
                </a>

                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Classic') }}
                </a>

                <a class="block px-5 py-3 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-100 bg-opacity-40" href="/">
                    {{ __('Modern') }}
                </a>
            </div>
        </div>
    </div>
</div>