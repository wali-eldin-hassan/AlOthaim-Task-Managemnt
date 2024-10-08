<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Products') }}</h2>

                    <span class="px-3 py-1 text-xs text-indigo-600 bg-indigo-100 rounded-full dark:bg-gray-800 dark:text-indigo-400">189 items</span>
                </div>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300">These Products added in the last 12 months.</p>
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

                    <span>{{ __('Add Product') }}</span>
                </button>
            </div>
        </div>
    </x-slot>

    {{-- Products Table --}}
    <section>
        <div class="md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button class="px-5 py-2 text-xs font-medium text-white transition-colors duration-200 bg-indigo-500 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                    All Products
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    T-Shirt
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Backpack
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Hat
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Watch
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Desk Setup
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
                    <div class="overflow-hidden border md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-white dark:bg-gray-900">
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">
                                        <div class="flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">
                                            Name
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">Category</th>
                                    
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">Color</th>
                                    
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">Price</th>

                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">Stock</th>
                                    
                                    <th scope="col" class="px-4 py-4 text-sm font-normal text-left text-gray-500 rtl:text-right dark:text-gray-400">Total Revenue</th>

                                    <th scope="col" class="relative px-4 py-4">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1598640877587-bd8f35df4021?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="">
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Hilfiger watch</h2>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm font-medium text-indigo-500 dark:text-indigo-300 whitespace-nowrap">Watch</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="w-6 h-6 bg-orange-700 rounded-lg"></div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$90</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">120 items</td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$2,600</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1543508282-5c1f427f023f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2030&q=80" alt="">
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Nike Air</h2>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm font-medium text-indigo-500 dark:text-indigo-300 whitespace-nowrap">Shoes</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="w-6 h-6 bg-black rounded-lg"></div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$150</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">35 items</td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$4,900</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1968&h=1968&q=80" alt="">
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Headset</h2>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm font-medium text-indigo-500 dark:text-indigo-300 whitespace-nowrap">Headphones</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="w-6 h-6 bg-gray-800 rounded-lg"></div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$40</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">85 items</td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$1,700</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1632414959370-f80bff483032?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&h=2076&q=80" alt="">
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Air Pods</h2>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm font-medium text-indigo-500 dark:text-indigo-300 whitespace-nowrap">Headphones</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="w-6 h-6 bg-gray-200 rounded-lg"></div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$150</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">200 items</td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$5,800</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-6">
                                            <input type="checkbox" class="p-2 text-indigo-500 border-gray-200 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700 focus:ring-indigo-500">

                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-10 h-10 rounded-lg" src="https://images.unsplash.com/photo-1611864598766-0dadbf1f21d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&h=2076&q=80" alt="">
                                                <h2 class="font-medium text-gray-800 dark:text-white ">Apple Watch</h2>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 text-sm font-medium text-indigo-500 dark:text-indigo-300 whitespace-nowrap">Watch</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="w-6 h-6 bg-gray-200 rounded-lg"></div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$180</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">60 items</td>
                                    <td class="px-4 py-4 text-sm font-medium text-emerald-500 dark:text-emerald-300 whitespace-nowrap">$6,890</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>

                                            <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
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