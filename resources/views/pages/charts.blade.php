<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Charts') }}</h1>
    </x-slot>

    <section class="mt-6 space-y-6">
        <div class="grid grid-cols-2 gap-6">
            <x-section class="w-full">
                <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                    Monthly Orders
        
                    <p class="flex items-center mt-1 text-sm font-normal text-red-500 sm:mt-0 gap-x-1 dark:text-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                        </svg>

                        -14% from yesterday
                    </p>
                </h1>
        
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">This Month orders vs Last Month orders.</p>
        
                <div class="mt-6">
                    <canvas id="lineChart3" height="40" width="100"></canvas>
                </div>
            </x-section>

            <x-section class="w-full">
                <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                    New Products

                    <p class="flex items-center mt-1 text-sm font-normal sm:mt-0 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                        87% from last week
                    </p>
                </h1>
        
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">total products for this week and last week</p>
        
                <div class="mt-6">
                    <canvas id="barChart2" height="40" width="100"></canvas>
                </div>
            </x-section>
        </div>

        <x-section class="w-full">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                active users
    
                <p class="flex items-center mt-1 text-sm font-normal sm:mt-0 gap-x-1 text-emerald-500 dark:text-emerald-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
    
                    10% from yesterday
                </p>
            </h1>
    
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">online users on the website for the last 16 hours</p>
    
            <div class="mt-6 rounded-lg bg-gradient-to-r from-indigo-800 to-gray-900" >
                <canvas id="barChart" height="80"></canvas>
            </div>
        </x-section>

        <x-section class="w-full">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                Total Sales

                <p class="flex items-center mt-1 text-sm font-normal text-red-500 sm:mt-0 gap-x-1 dark:text-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                    </svg>

                    -20% from last year
                </p>
            </h1>

            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Total Sales for the last 12 months</p>

            <div class="mt-6" >
                <canvas id="lineChart" height="80"></canvas>
            </div>
        </x-section>
    </section>
</x-app-layout>