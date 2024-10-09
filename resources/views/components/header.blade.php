<header class="bg-white border-b border-gray-100 dark:border-gray-900 dark:bg-gray-800">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6">
        <div class="flex items-center">
            {{-- Mobile Menu Button --}}
            <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 lg:hidden focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </button>

            {{-- Search Input --}}
            <x-search/>
        </div>

        <div class="flex items-center gap-x-4">
            {{-- Language switcher --}}
            <x-langauge-switcher/>

            {{-- Dark Mode Switcher --}}
            <x-dark-mode/>

            {{-- Notifications Dropdown --}}
            <x-dropdown width="w-64 sm:w-80">
                <x-slot:button>
                    <button class="relative z-10 block p-1.5 text-gray-600 transition-colors dark:text-gray-300 dark:hover:bg-gray-800 duration-200 rounded-lg hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                        </svg>

                        @if($notifications->count() > 0)
                            <p class="absolute top-0 right-0 px-1.5 font-medium py-0.5 text-xs text-white rounded-full bg-emerald-400">{{ $notifications->count() }}</p>
                        @endif
                    </button>
                </x-slot>
                @forelse ($notifications as $notification)
                    <div class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="flex items-center justify-between px-4 py-3">
                            <h4 class="text-base font-medium text-gray-700 capitalize dark:text-gray-200">
                                {{__('notifications')}}</h4>
                            <form action="{{ route('notifications.markAllAsRead') }}" method="POST">
                                @csrf
                                <button class="text-sm text-indigo-500 dark:text-indigo-300 hover:underline focus:outline-none">
                                    {{__('Mark all as read')}}</button>
                            </form>
                        </div>

                        <a href="{{ route('tasks.show', $notification->data['task_id']) }}" class="block transition-colors duration-200 transform cursor-pointer dark:hover:bg-gray-700 hover:bg-gray-50">
                            <div class="px-4 py-4">
                                <h3 class="text-sm font-medium text-gray-700 dark:text-gray-200">
                                    {{ $notification->data['title'] ?? 'Notification' }}
                                    <span class="text-indigo-500 dark:text-indigo-300">#{{ $notification->data['task_id'] }}</span>
                                </h3>

                                <p class="text-sm mt-0.5 text-gray-500 dark:text-gray-400">
                                    {{ $notification->data['message'] ?? 'You have a new notification.' }}
                                </p>

                                <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">
                                    {{ $notification->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="px-4 py-4 text-sm text-gray-500 dark:text-gray-400">
                        {{__ ('No new notifications')}}
                    </div>
                @endforelse

            </x-dropdown>
        </div>

        <div class="hidden w-px h-8 bg-gray-200 dark:bg-gray-700 sm:block"></div>

        {{-- User Dropdown --}}
        <x-dropdown width="w-56">
            <x-slot:button>
                <button class="relative z-10 flex items-center flex-shrink-0 text-sm font-medium text-gray-600 transition-colors duration-200 dark:text-gray-200 hover:text-indigo-500 gap-x-3 focus:outline-none">
                    <span class="hidden sm:inline">{{auth()->user()->name }}</span>

                    <img class="flex-shrink-0 object-cover rounded-full w-7 h-7"
                         src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200"
                         alt="john avatar">
                </button>
            </x-slot>

            <a href="/profile"
               class="flex items-center p-3 text-sm text-gray-600 transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <img class="flex-shrink-0 object-cover rounded-full w-9 h-9"
                     src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200"
                     alt="jane avatar">

                <div>
                    <h1 class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ auth()->user()->name}}</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{auth()->user()->email}}</p>
                </div>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform gap-x-2 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                    </svg>
                    {{ __('Sign Out') }}
                </button>
            </form>
        </x-dropdown>
    </div>
</header>
