<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Dashboard') }}</h1>
    </x-slot>

    <section class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4">
        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Total Revenue')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">$512,854</h2>

                    <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                        <span>55%</span>
                    </p>
                </div>
            </div>

            <div class="p-2 rounded-lg text-emerald-500 bg-emerald-100/60 dark:bg-emerald-700/30 dark:text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Total Customer')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">20,548</h2>
                    
                    <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                        <span>21%</span>
                    </p>
                </div>
            </div>

            <div class="p-2 rounded-lg text-sky-500 bg-sky-100/60 dark:bg-sky-700/30 dark:text-sky-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Total Orders')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">13,052</h2>
                    
                    <p class="flex items-center mx-2 text-red-500 2xl:mx-6 gap-x-1 dark:text-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                        </svg>

                        <span>16%</span>
                    </p>
                </div>
            </div>

            <div class="p-2 text-indigo-500 rounded-lg bg-indigo-100/60 dark:bg-indigo-700/30 dark:text-indigo-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Total Products')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">157,509</h2>
                    
                    <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                        <span>36%</span>
                    </p>
                </div>
            </div>

            <div class="p-2 text-teal-500 rounded-lg bg-teal-100/60 dark:bg-teal-700/30 dark:text-teal-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </div>
        </div>
    </section>

    <section class="mt-6">
        <x-section class="w-full">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                <span>active users </span>

                <p class="flex items-center mt-1 text-sm sm:mt-0 gap-x-1 text-emerald-500 dark:text-emerald-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>

                    <span class="font-normal ">10% <span>from yesterday</span> </span>
                </p>
            </h1>

            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">online users on the website for the last 16 hours</p>

            <div class="mt-4 rounded-lg bg-gradient-to-r from-indigo-800 to-gray-900" >
                <canvas id="barChart" height="80"></canvas>
            </div>
        </x-section>
    </section>

    <section class="flex flex-col gap-6 mt-6 xl:flex-row">
        <x-section class="w-full xl:w-1/3">
            <h2 class="text-lg font-medium text-gray-700 capitalize dark:text-gray-300 sm:text-xl">Activity</h2>
            
            <p class="flex items-center mt-2 text-sm text-gray-500 dark:text-gray-400 gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
        
                <span>27k done this month</span>
            </p>

            <div class="mt-6 space-y-4">
                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Basic Tee T-shirt</a> for $56
                       </p>
                       
                       <p class="text-gray-400">May 26 2023, 1:33 AM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Nomad Pouch Backpack</a> for $110
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 2:00 PM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Zip Tote Basket</a> for $140
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 1:01 PM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Basic Tee White T-shirt</a> for $90
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 12:20 PM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Chunky Knit Beanie Hat</a> for $35
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 11:23 PM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">Smell the Roses T-shirt</a> for $105
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 11:05 AM</p>
                   </div>
                </div>

                <div class="flex items-center text-sm gap-x-2">
                   <span class=" text-emerald-500 dark:text-emerald-400">$</span>

                   <div class="sm:flex sm:items-center sm:gap-x-2">
                       <p class="text-gray-800 dark:text-white">
                           New Sale of <a href="#" class="underline hover:text-indigo-500 dark:hover:text-indigo-400">High Wall Tote</a> for $120
                       </p>
                       
                       <p class="text-gray-400">May 25 2023, 10:50 AM</p>
                   </div>
                </div>
            </div>
        </x-section>

         <x-section class="w-full xl:w-1/3">
            <h2 class="text-lg font-medium text-gray-700 capitalize dark:text-gray-300 sm:text-xl">Top Products</h2>
            
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Top 3 of the week based on total sold
            </p>

            <div class="grid grid-cols-3 gap-4 mt-6">
                <a href="#" class="w-full overflow-hidden bg-gray-200 rounded-md lg:h-60">
                    <img src="https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Front of men's Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                </a>

                <a href="#" class="w-full overflow-hidden bg-gray-200 rounded-md lg:h-60">
                    <img src="https://images.unsplash.com/photo-1543512214-318c7553f230?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Front of men's Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                </a>

                <a href="#" class="w-full overflow-hidden bg-gray-200 rounded-md lg:h-60">
                    <img src="https://images.unsplash.com/photo-1598640877587-bd8f35df4021?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Front of men's Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                </a>
            </div>
        </x-section>

        <x-section class="w-full xl:w-1/3">
            <h2 class="text-lg font-medium text-gray-700 capitalize dark:text-gray-300 sm:text-xl">{{__('Orders overview')}}</h2>

            <div class="flow-root mt-4">
                <ul class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 rtl:right-4 rtl:left-auto -ml-px h-full w-0.5 bg-gray-100 dark:bg-gray-700" aria-hidden="true"></span>
                            <div class="relative flex items-center gap-x-6">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 text-blue-500 bg-gray-100 rounded-full ring-4 dark:ring-gray-700 ring-gray-100 dark:bg-gray-700">
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                    </span>
                                </div>
                                
                                <div class="flex-1 min-w-0">
                                    <div>
                                        <p class="text-sm text-gray-800 dark:text-white">New order #4219424</p>
                                        <p class="w-32 mt-1 text-sm text-gray-400 truncate sm:w-auto">22 DEC 7:20 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 -ml-px rtl:right-4 rtl:left-auto h-full w-0.5 bg-gray-100 dark:bg-gray-700" aria-hidden="true"></span>
                            <div class="relative flex items-center gap-x-6">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 text-blue-500 bg-gray-100 rounded-full ring-4 dark:ring-gray-700 ring-gray-100 dark:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                    </span>
                                </div>
                                
                                <div class="flex-1 min-w-0">
                                    <div>
                                        <p class="text-sm text-gray-800 dark:text-white">New order #4219423</p>
                                        <p class="w-32 mt-1 text-sm text-gray-400 truncate dark:text-gray-400 sm:w-auto">21 DEC 11:21 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 left-4 -ml-px rtl:right-4 rtl:left-auto h-full w-0.5 bg-gray-100 dark:bg-gray-700" aria-hidden="true"></span>
                            <div class="relative flex items-center gap-x-6">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full text-emerald-500 ring-4 dark:ring-gray-700 ring-gray-100 dark:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                        </svg>
                                    </span>
                                </div>
                                
                                <div class="flex-1 min-w-0">
                                    <div>
                                        <p class="text-sm text-gray-800 dark:text-white">New card added for order #3210145</p>
                                        <p class="w-32 mt-1 text-sm text-gray-400 truncate dark:text-gray-400 sm:w-auto">21 DEC 11:21 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex items-center gap-x-6">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 text-indigo-500 bg-gray-100 rounded-full ring-4 dark:ring-gray-700 ring-gray-100 dark:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                        </svg>
                                    </span>
                                </div>

                                
                                <div class="flex-1 min-w-0">
                                    <div>
                                        <p class="text-sm text-gray-800 dark:text-white">New delivered order #4219420</p>
                                        <p class="w-32 mt-1 text-sm text-gray-400 truncate dark:text-gray-400 sm:w-auto">21 DEC 9:28 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </x-section>
    </section>
</x-app-layout>