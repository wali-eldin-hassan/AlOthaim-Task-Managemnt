<header class="bg-white border-b border-gray-100 dark:border-gray-900 dark:bg-gray-800">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6">
        <div class="flex items-center">
            {{-- Mobile Menu Button --}}
            <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 lg:hidden focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            {{-- Search Input --}}
            <x-search />
        </div>

        <div class="flex items-center gap-x-4">
            {{-- Language switcher --}}
            <x-langauge-switcher />

            {{-- Dark Mode Switcher --}}
            <x-dark-mode />

            {{-- Notifications Dropdown --}}
            <x-dropdown width="w-64 sm:w-80">
                <x-slot:button>
                    <button class="relative z-10 block p-1.5 text-gray-600 transition-colors dark:text-gray-300 dark:hover:bg-gray-800 duration-200 rounded-lg hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>

                        <p class="absolute top-0 right-0 px-1.5 font-medium py-0.5 text-xs text-white rounded-full bg-emerald-400">3</p>
                    </button>
                </x-slot>

                <div class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="flex items-center justify-between px-4 py-3">
                            <h4 class="text-base font-medium text-gray-700 capitalize dark:text-gray-200">notifications</h4>
                            <button class="text-sm text-indigo-500 dark:text-indigo-300 hover:underline focus:outline-none">Mark all as read</button>
                        </div>
                        
                        <div class="px-4 py-4 transition-colors duration-200 transform cursor-pointer dark:hover:bg-gray-700 hover:bg-gray-50">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-200 ">Server Alert <span class="text-indigo-500 dark:text-indigo-300">#12</span></h3>

                            <p class="text-sm mt-0.5 text-gray-500 dark:text-gray-400 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">5h ago</p>
                        </div>

                        <div class="px-4 py-4 transition-colors duration-200 transform cursor-pointer dark:hover:bg-gray-700 hover:bg-gray-50">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-200 ">Server Alert <span class="text-indigo-500 dark:text-indigo-300">#11</span></h3>

                            <p class="text-sm mt-0.5 text-gray-500 dark:text-gray-400 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">5h ago</p>
                        </div>

                        <div class="px-4 py-4 transition-colors duration-200 transform cursor-pointer dark:hover:bg-gray-700 hover:bg-gray-50">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-200 ">Server Alert <span class="text-indigo-500 dark:text-indigo-300">#10</span></h3>

                            <p class="text-sm mt-0.5 text-gray-500 dark:text-gray-400 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">5h ago</p>
                        </div>
                    </div>
                </div>
            </x-dropdown>

            <div class="hidden w-px h-8 bg-gray-200 dark:bg-gray-700 sm:block"></div>

            {{-- User Dropdown --}}
            <x-dropdown width="w-56">
                <x-slot:button>
                    <button class="relative z-10 flex items-center flex-shrink-0 text-sm font-medium text-gray-600 transition-colors duration-200 dark:text-gray-200 hover:text-indigo-500 gap-x-3 focus:outline-none">
                        <span class="hidden sm:inline">{{ __('Jane Doe') }}</span>

                        <img class="flex-shrink-0 object-cover rounded-full w-7 h-7" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="john avatar">
                    </button>
                </x-slot>

                <a href="/profile" class="flex items-center p-3 text-sm text-gray-600 transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <img class="flex-shrink-0 object-cover rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
                    
                    <div>
                        <h1 class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Jane Doe') }}</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">janedoe@exampl.com</p>
                    </div>
                </a>

                <hr class="border-gray-100 dark:border-gray-700 ">

                <a href="/profile" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

                    {{ __('Profile') }}
                </a>

                <a href="/settings" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    {{ __('Settings') }}
                </a>

                <hr class="border-gray-100 dark:border-gray-700 ">

                <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    {{ __('Team') }}
                </a>

                <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>

                    {{ __('Invite Colleagues') }}
                </a>

                <hr class="border-gray-100 dark:border-gray-700 ">

                <a href="#" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>

                    {{ __('Help') }}
                </a>

                <a href="/login" class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>

                    {{ __('Sign Out') }}
                </a>
            </x-dropdown>
        </div>
    </div>
</header>
