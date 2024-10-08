<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Alerts') }}</h1>
    </x-slot>

    <x-section>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
            <div x-data="{ showMessage: false }">
                <button @click="showMessage =!showMessage" class="flex items-center justify-center w-full px-3 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform rounded-lg sm:w-auto gap-x-2 bg-emerald-500 hover:bg-emerald-600 focus:outline-none focus:bg-emerald-500 focus:ring focus:ring-emerald-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    {{__('Success Message')}}
                </button>

                <div x-show="showMessage" 
                    x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-20 opacity-0 rtl:-translate-x-20" 
                    x-transition:enter-end="translate-x-0 opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="translate-x-0 opacity-100" 
                    x-transition:leave-end="translate-x-20 opacity-0 rtl:-translate-x-20"
                    class="fixed inset-x-0 z-30 lg:inset-x-auto top-6 lg:right-8 xl:right-10 xl:bottom-8 rtl:lg:left-8 rtl:lg:right-auto"
                >
                    <div class="px-6 lg:w-96 lg:px-0">
                        <div class="p-2 rounded-lg shadow-lg bg-emerald-500 sm:p-3">
                            <div class="flex items-center justify-between text-white">
                                <div class="flex items-center flex-1 w-0 gap-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <p class="font-medium truncate">
                                        {{__('Your project created successfully')}}
                                    </p>
                                </div>
                                
                                <div class="flex-shrink-0 order-2 sm:order-3 sm:ml-2">
                                    <button @click="showMessage = false" type="button" class="flex p-2 -mr-1 rounded-md hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ showMessage: false }">
                <button @click="showMessage =!showMessage" class="flex items-center justify-center w-full px-3 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-500 rounded-lg sm:w-auto gap-x-3 hover:bg-yellow-400 focus:outline-none focus:bg-yellow-500 focus:ring focus:ring-yellow-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>

                    {{__('Warning Message')}}
                </button>
            
                <div x-show="showMessage" 
                    x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-20 opacity-0 rtl:-translate-x-20" 
                    x-transition:enter-end="translate-x-0 opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="translate-x-0 opacity-100" 
                    x-transition:leave-end="translate-x-20 opacity-0 rtl:-translate-x-20"
                    class="fixed inset-x-0 z-30 lg:inset-x-auto top-6 lg:right-8 xl:right-10 xl:bottom-8 rtl:lg:left-8 rtl:lg:right-auto"
                >
                    <div class="px-6 lg:w-96 lg:px-0">
                        <div class="p-2 bg-yellow-500 rounded-lg shadow-lg sm:p-3">
                            <div class="flex items-center justify-between text-white">
                                <div class="flex items-center flex-1 w-0 gap-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                    </svg>

                                    <p class="font-medium truncate">
                                        {{__('Your password is too week')}}
                                    </p>
                                </div>
                                
                                <div class="flex-shrink-0 order-2 sm:order-3 sm:ml-2">
                                    <button @click="showMessage = false" type="button" class="flex p-2 -mr-1 rounded-md hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ showMessage: false }">
                <button @click="showMessage =!showMessage" class="flex items-center justify-center w-full px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-lg sm:w-auto gap-x-2 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    {{__('Error Message')}}
                </button>
            
                <div x-show="showMessage" 
                    x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="translate-x-20 opacity-0 rtl:-translate-x-20" 
                    x-transition:enter-end="translate-x-0 opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="translate-x-0 opacity-100" 
                    x-transition:leave-end="translate-x-20 opacity-0 rtl:-translate-x-20"
                    class="fixed inset-x-0 z-30 lg:inset-x-auto top-6 lg:right-8 xl:right-10 xl:bottom-8 rtl:lg:left-8 rtl:lg:right-auto"
                >
                    <div class="px-6 lg:w-96 lg:px-0">
                        <div class="p-2 bg-red-500 rounded-lg shadow-lg sm:p-3">
                            <div class="flex items-center justify-between text-white">
                                <div class="flex items-center flex-1 w-0 gap-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <p class="font-medium truncate">
                                        {{__('Title is required')}}
                                    </p>
                                </div>
                                
                                <div class="flex-shrink-0 order-2 sm:order-3 sm:ml-2">
                                    <button @click="showMessage = false" type="button" class="flex p-2 -mr-1 rounded-md hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>
</x-app-layout>