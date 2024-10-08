<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Buttons') }}</h1>
    </x-slot>

    <x-section>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
            <div class="space-y-4 ">
                <button class="font-medium w-full sm:w-auto px-4 py-2.5 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    {{__('Button')}}
                </button>

                <button class="px-4 py-2.5 w-full sm:w-auto font-medium flex items-center justify-center gap-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                    </svg>

                    {{__('Button with Icon')}}
                </button>
            </div>

            <div class="space-y-4 ">
                <button class="px-4 py-2.5 text-sm font-medium w-full sm:w-auto text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    {{__('Button')}}
                </button>

                <button class="flex items-center px-4 py-2.5 w-full sm:w-auto justify-center text-sm font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                    </svg>

                    {{__('Button with Icon')}}
                </button>
            </div>
        </div>
    </x-section>
</x-app-layout>