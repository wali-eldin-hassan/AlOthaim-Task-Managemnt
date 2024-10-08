<x-guest-layout>
    <div class="flex flex-col items-center justify-center h-96">
        <h2 class="text-3xl font-semibold text-gray-800 dark:text-white md:text-4xl">{{__('Internal Server Error')}}</h2>

        <div class="w-32 h-1 my-6 bg-gradient-to-r from-indigo-700 to-sky-600 md:my-6"></div>

        <p class="text-gray-500 dark:text-gray-400">{{ __('The server encountered an unexpected condition that prevented it from fulfilling the request') }}</p>

        <a href="/" class="px-4 py-2.5 w-full sm:w-auto font-medium flex items-center justify-center gap-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg mt-6 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 rtl:rotate-180">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            {{__('Go Back')}}
        </a>
    </div>
</x-guest-layout>