<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<aside x-cloak :class="sidebarOpen ? 'translate-x-0 ease-in' : '-translate-x-full ease-out'" class="fixed inset-y-0 left-0 z-30 flex flex-col w-64 px-6 py-8 overflow-y-auto transition duration-200 transform bg-white border-r border-gray-100 dark:bg-gray-800 dark:border-gray-900 lg:translate-x-0 lg:relative lg:inset-0 ">
    <div class="flex items-center">
        <img class="w-auto h-8" src="/images/logo.svg" alt="">
    </div>

    <nav class="flex-1 mt-8 space-y-8">
        <div class="space-y-2">
            <h3 class="text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">{{ __('Pages') }}</h3>

            <x-sidebar-link title="{{ __('Dashboard') }}" route="dashboard">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <x-sidebar-link title="{{ __('Charts') }}" route="charts">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <div x-data="{ open: {{ request()->routeIs('components.*') ? 'true' : 'false' }} }" class="flex-1 -mx-3">
                <button @click="open = !open" class="flex items-center justify-between flex-1 w-full px-3 py-2 text-gray-500 transition-colors duration-200 transform rounded-lg dark:hover:text-gray-200 dark:hover:bg-gray-700/50 dark:text-gray-300 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>

                        <span class="mx-2 text-sm font-medium capitalize">{{ __('Components') }}</span>
                    </span>
    
                    <span class="rtl:rotate-180">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
    
                <div 
                    x-show="open" 
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-5"
                    class="mt-2 space-y-2"
                >
                    <a href="{{ route('components.alerts') }}" class="block capitalize py-2 pl-10 text-sm {{ request()->routeIs('components.alerts') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize">
                        {{ __('Alerts') }}
                    </a>

                    <a href="{{ route('components.buttons') }}" class="block capitalize py-2 pl-10 text-sm {{ request()->routeIs('components.buttons') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize">
                        {{ __('Buttons') }}
                    </a>

                    <a href="{{ route('components.inputs') }}" class="block capitalize py-2 pl-10 text-sm {{ request()->routeIs('components.inputs') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize">
                        {{ __('Inputs') }}
                    </a>

                    <a href="{{ route('components.modals') }}" class="block capitalize py-2 pl-10 text-sm {{ request()->routeIs('components.modals') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize">
                        {{ __('Modals') }}
                    </a>
                </div>
            </div>

            <div x-data="{ open: {{ request()->routeIs('ecommerce.customers') || request()->routeIs('ecommerce.invoices') || request()->routeIs('ecommerce.orders') || request()->routeIs('ecommerce.products') ? 'true' : 'false' }} }" class="flex-1 -mx-3">
                <button @click="open = !open" class="flex items-center justify-between flex-1 w-full px-3 py-2 text-gray-500 transition-colors duration-200 transform rounded-lg dark:hover:text-gray-200 dark:hover:bg-gray-700/50 dark:text-gray-300 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>

                        <span class="mx-2 text-sm font-medium capitalize">{{ __('E-Commerce') }}</span>
                    </span>
    
                    <span class="rtl:rotate-180">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
    
                <div 
                    x-show="open" 
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-5"
                    class="mt-2 space-y-2"
                >
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('ecommerce.customers') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/ecommerce/customers">{{ __('Customers') }}</a>
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('ecommerce.invoices') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/ecommerce/invoices">{{ __('Invoices') }}</a>
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('ecommerce.orders') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/ecommerce/orders">{{ __('Orders') }}</a>
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('ecommerce.products') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/ecommerce/products">{{ __('Products') }}</a>
                </div>
            </div>
    
            <x-sidebar-link title="{{ __('Forms') }}" route="forms" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <x-sidebar-link title="{{ __('Tasks') }}" route="tasks">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <x-sidebar-link title="{{ __('Integrations') }}" route="integrations">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <div x-data="{ open: {{ request()->routeIs('blank') || request()->routeIs('404') ? 'true' : 'false' }} }" class="flex-1 -mx-3">
                <button @click="open = !open" class="flex items-center justify-between flex-1 w-full px-3 py-2 text-gray-500 transition-colors duration-200 transform rounded-lg dark:hover:text-gray-200 dark:hover:bg-gray-700/50 dark:text-gray-300 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>

                        <span class="mx-2 text-sm font-medium capitalize">{{ __('Other Pages') }}</span>
                    </span>
    
                    <span class="rtl:rotate-180">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>
    
                <div 
                    x-show="open" 
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-5"
                    class="mt-2 space-y-2"
                >
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('blank') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/blank">{{ __('Blank') }}</a>
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('404') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/404">{{ __('404 Not Found') }}</a>
                    <a class="block py-2 pl-10 text-sm {{ request()->routeIs('500') ? 'text-indigo-500 bg-indigo-100 dark:text-indigo-400 dark:bg-gray-700/50' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-200 dark:hover:bg-gray-700/50' }} transition-colors duration-200 transform rounded-lg rtl:pr-10 capitalize" href="/500">{{ __('500 Server Error') }}</a>
                </div>
            </div>
        </div>

        <div class="space-y-2">
            <h3 class="text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">{{ __('Account Pages') }}</h3>

            <x-sidebar-link title="{{ __('Profile') }}" route="profile">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <x-sidebar-link title="{{ __('Login') }}" route="login">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                    </svg>
                </x-slot>
            </x-sidebar-link>

            <x-sidebar-link title="{{ __('Register') }}" route="register">
                 <x-slot name="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                     </svg>
                 </x-slot>
            </x-sidebar-link>
        </div>
    </nav>

    <div class="p-3 mt-6 rounded-lg bg-gradient-to-r from-indigo-700 to-sky-600 dark:bg-gray-700">
        <h2 class="text-sm font-medium text-white">{{ __('New feature available!') }}</h2>

        <p class="mt-1 text-xs text-gray-200">{{ __('Dark Mode, Setting page, Language switcher, design improvements, and more') }}</p>
    </div>
</aside>