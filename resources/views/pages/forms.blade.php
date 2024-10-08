<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Forms') }}</h1>
    </x-slot>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 ">
        <x-section>
            <h1 class="text-lg font-medium text-gray-700 capitalize dark:text-gray-300">
                Create new Invoice
            </h1>

            <div class="flex items-center justify-between mt-4">
                <a href="#" class="font-medium text-indigo-500 hover:underline">#NR 0001/8/2023</a>

                <button class="flex items-center text-sm text-gray-500 gap-x-2 hover:text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>

                    Copy Link
                </button>
            </div>

            <form class="mt-6 space-y-8">
                <div>
                    <label for="details section" class="font-medium text-gray-700 capitalize">Details</label>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <x-input-label for="bill-from" :value="__('bill from')" />
                            <input type="text" placeholder="Jane Doe" name="from" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>

                        <div>
                            <x-input-label for="bill-to" :value="__('bill to')" />
                            <input type="text" placeholder="Khatab Wedaa" name="to" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="recipient-email" :value="__('recipient email')" />
                        <input type="email" name="email" placeholder="khatabwedaa@merakiui.com" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>

                    <div class="mt-4">
                        <x-input-label for="bill-title" :value="__('bill title')" />
                        <input type="text" name="bill-title" placeholder="Order number" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <x-input-label for="issued-on" :value="__('issued on')" />
                            <input type="date" name="issued-on" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>

                        <div>
                            <x-input-label for="due-on" :value="__('due on')" />
                            <input type="date" name="due-on" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                    </div>
                </div>

                <div x-data="{ items: 1 }">
                    <label for="invoice items section" class="font-medium text-gray-700 capitalize">Invoice items</label>

                    <template x-for="item in items" :key="item">
                        <div class="grid grid-cols-3 gap-4 mt-4 sm:grid-cols-6">
                            <div class="col-span-3 ">
                                <x-input-label for="product" :value="__('product')" />

                                <select name="product" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    <option value="1">Basic Tee T-shirt</option>
                                    <option value="2">Nomad Pouch Backpack</option>
                                    <option value="3">Chunky Knit Beanie Hat</option>
                                    <option value="4">Smell the Roses T-shirt </option>
                                    <option value="5">High Wall Tote </option>
                                </select>
                            </div>

                            <div>
                                <x-input-label for="price" :value="__('price')" />
                                <input type="text" name="price" placeholder="$500" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>

                            <div>
                                <x-input-label for="qty" :value="__('qty')" />
                                <input type="text" name="qty" placeholder="1" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>

                            <div>
                                <x-input-label for="total-price" :value="__('total price')" />
                                <input type="text" name="total-price" placeholder="$500" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            </div>
                        </div>
                    </template>

                    <div @click="items += 1" class="flex items-center justify-between mt-4">
                        <button type="button" class="flex items-center text-sm text-indigo-500 transition-colors duration-200 gap-x-1 hover:text-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
    
                            Add Item
                        </button>

                        <div class="flex items-center gap-x-4">
                            <x-input-label for="total-amont" :value="__('total amont')" />

                            <p class="text-xl font-medium text-emerald-500 ">$500</p>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="notes section" class="font-medium text-gray-700 capitalize">Notes</label>
                    
                    <div>
                        <textarea name="notes" placeholder="Write your note here..." class="block h-40 w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                    </div>
                </div>

                <div class="flex sm:justify-end">
                    <button class="font-medium w-full sm:w-auto px-4 py-2.5 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        {{__('Create Invoice')}}
                    </button>
                </div>
            </form>
        </x-section>

        <x-section>
            <h1 class="text-lg font-medium text-gray-700 capitalize dark:text-gray-300">
                Add new product
            </h1>

            <form class="mt-4 space-y-8">
                <div>
                    <label for="basic info section" class="font-medium text-gray-700 capitalize">basic info</label>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('name')" />
                        <input type="text" name="name" placeholder="Basic Tee T-shirt" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>

                    <div class="mt-4">
                        <x-input-label for="category" :value="__('category')" />
                        
                        <select name="category" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <option value="1">T-shirt</option>
                            <option value="2">Backpack</option>
                            <option value="3">Hat</option>
                            <option value="4">Watch</option>
                            <option value="5">Desk Setup</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <x-input-label for="price" :value="__('price')" />
                            <input type="text" name="price" placeholder="120$" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>

                        <div>
                            <x-input-label for="stock" :value="__('stock')" />
                            <input type="text" name="stock" placeholder="300" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>

                    </div>

                    <div class="mt-4">
                        <x-input-label for="color" :value="__('color')" />
                        <input type="color" name="color" placeholder="300" class="block w-full h-10 px-4 py-2 mt-2 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    </div>

                    <div class="mt-4">
                        <x-input-label for="image" :value="__('image')" />

                        <label class="flex flex-col items-center justify-center w-full h-48 mt-2 text-gray-500 transition-colors duration-200 border-2 border-dashed rounded-lg cursor-pointer hover:text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>

                            <span class="mt-2">{{__('Upload image or drag and drop')}}</span>

                            <input type="file" class="hidden">
                        </label>
                    </div>
                </div>

                <div>
                    <label for="description section" class="font-medium text-gray-700 capitalize">Description</label>
                    
                    <div>
                        <textarea name="description" placeholder="Write your description here..." class="block h-40 w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                    </div>
                </div>

                <div class="flex sm:justify-end">
                    <button class="font-medium w-full sm:w-auto px-4 py-2.5 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        {{__('Add Product')}}
                    </button>
                </div>
            </form>
        </x-section>
    </div>
</x-app-layout>