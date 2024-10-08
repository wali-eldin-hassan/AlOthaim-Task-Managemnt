<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Orders') }}</h2>

                    <span class="px-3 py-1 text-xs text-indigo-600 bg-indigo-100 rounded-full dark:bg-gray-800 dark:text-indigo-400">1300 items</span>
                </div>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300">These orders has been placed in the last 12 months.</p>
            </div>

            <div class="flex items-center mt-4 gap-x-3">
                <button class="flex items-center justify-center w-1/2 px-5 py-2.5 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0l-3-3m3 3l3-3m-8.25 6a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>

                    <span>{{ __('Export') }}</span>
                </button>

                <button class="flex items-center justify-center w-1/2 px-5 py-2.5 text-sm tracking-wide text-white transition-colors duration-200 bg-indigo-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-indigo-600 dark:hover:bg-indigo-500 dark:bg-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span>{{ __('Add Order') }}</span>
                </button>
            </div>
        </div>
    </x-slot>

    {{-- Orders Table --}}
    <section>
        <div class="md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button class="px-5 py-2 text-xs font-medium text-white transition-colors duration-200 bg-indigo-500 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                    All Orders
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    On Hold
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Delivered
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Cancelled
                </button>
            </div>

            <div class="relative flex items-center mt-4 md:mt-0">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>

                <input type="text" placeholder="Search" class="block w-full py-2.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-400 dark:focus:border-indigo-300 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-white dark:bg-gray-900">
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
                                            
                                            <button class="flex items-center gap-x-2">
                                                <span>Order Number</span>
    
                                                <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </th>
    
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        Date
                                    </th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        Customer
                                    </th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        Delivery Date
                                    </th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        Status
                                    </th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        Amount
                                    </th>

                                    <th scope="col" class="relative px-4 py-4">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219424</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 6, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">authurmelo@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$250</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219425</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Andi Lane</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">andi@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Cancelled</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$560</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219426</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Kate Morrison</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">kate@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$480</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219427</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Candice Wu</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">candice@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-yellow-500 rounded-full gap-x-2 bg-yellow-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>

    
                                            <h2 class="text-sm font-normal">On Hold</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$289</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219428</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Orlando Diggs</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">orlando@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Draft</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$1230</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219424</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 6, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">authurmelo@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$250</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219425</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Andi Lane</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">andi@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Cancelled</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$560</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219426</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Kate Morrison</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">kate@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$480</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219427</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Candice Wu</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">candice@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-yellow-500 rounded-full gap-x-2 bg-yellow-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>

    
                                            <h2 class="text-sm font-normal">On Hold</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$289</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219428</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Orlando Diggs</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">orlando@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Draft</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$1230</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219424</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 6, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">authurmelo@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$250</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219425</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 5, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Andi Lane</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">andi@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Cancelled</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$560</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219426</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Kate Morrison</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">kate@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Delivered</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$480</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219427</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Candice Wu</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">candice@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-yellow-500 rounded-full gap-x-2 bg-yellow-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>

    
                                            <h2 class="text-sm font-normal">On Hold</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$289</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
    
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
    
                                            <span>#4219428</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Jan 4, 2022</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80" alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Orlando Diggs</h2>
                                                <p class="text-xs font-normal text-gray-600 dark:text-gray-400">orlando@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">15 Jan 2022</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 dark:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Draft</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$1230</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                View
                                            </button>
    
                                            <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Print
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mx-auto mt-6">
            <a href="#" class="px-4 py-2 mx-1 text-gray-500 capitalize bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
                <div class="flex items-center -mx-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span class="mx-2">
                        previous
                    </span>
                </div>
            </a>

            <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                1
            </a>

            <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                2
            </a>

            <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                3
            </a>

            <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                4
            </a>

            <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                5
            </a>

            <a href="#" class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-indigo-500 dark:hover:bg-indigo-500 hover:text-white dark:hover:text-gray-200">
                <div class="flex items-center -mx-1">
                    <span class="mx-2">
                        Next
                    </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </a>
        </div>
    </section>
</x-app-layout>