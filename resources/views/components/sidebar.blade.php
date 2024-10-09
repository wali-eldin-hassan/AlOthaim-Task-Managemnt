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

            <x-sidebar-link title="{{ __('Tasks') }}" route="tasks.index">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                </x-slot>
            </x-sidebar-link>


{{--        <div class="space-y-2">--}}
{{--            <h3 class="text-xs tracking-wider text-gray-500 uppercase dark:text-gray-400">{{ __('Account Pages') }}</h3>--}}

{{--            <x-sidebar-link title="{{ __('Profile') }}" route="profile">--}}
{{--                <x-slot name="icon">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />--}}
{{--                    </svg>--}}
{{--                </x-slot>--}}
{{--            </x-sidebar-link>--}}
{{--            --}}
{{--        </div>--}}
    </nav>

</aside>