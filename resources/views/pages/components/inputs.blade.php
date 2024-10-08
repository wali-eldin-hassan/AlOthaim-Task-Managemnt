<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Inputs') }}</h1>
    </x-slot>

    <x-section>
        <div class="grid gap-6 md:grid-cols-2">
            <div>
                <x-input-label for="username" :value="__('username')" />

                <input placeholder="Arthur Melo" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" />
                <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>

            <div>
                <x-input-label for="with-icon" :value="__('With Icon')" />

                <div class="relative mt-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    
                    <input type="text" class="w-full py-2.5 pl-10 pr-4 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="{{__('Search')}}" />
                </div>
            </div>

            <div>
                <x-input-label for="success" :value="__('success')" />
                <input placeholder="{{__('Password')}}" type="password" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-emerald-500 rounded-lg focus:border-emerald-400 focus:outline-none focus:ring focus:ring-emerald-300 focus:ring-opacity-40">
                <p class="mt-2 text-sm text-emerald-500">{{__('Your password is strong.')}}</p>
            </div>

            <div>
                <x-input-label for="error" :value="__('error')" />
                <input placeholder="{{__('Password')}}" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-red-500 rounded-lg focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40">
                <p class="mt-2 text-sm text-red-500">{{__('Your password is too short.')}}</p>
            </div>

            <div>
                <x-input-label for="disabled" :value="__('disabled')" />
                <input disabled placeholder="Arthur Melo" type="password" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
            </div>

            <div>
                <x-input-label for="select" :value="__('Select')" />
                
                <select class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <option>Jane Doe</option>
                    <option>John Doe</option>
                    <option>Pamela Anderson</option>
                    <option>Arthur Melo</option>
                    <option>Olivia Wathan</option>
                    <option>Joseph Gonzalez</option>
                </select>
            </div>

            <div>
                <x-input-label for="description" :value="__('description')" />
                <textarea class="block w-full h-32 px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
            </div>

            <div>
                <x-input-label for="users" :value="__('users')" />

                <select multiple class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <option>Jane Doe</option>
                    <option>John Doe</option>
                    <option>Pamela Anderson</option>
                    <option>Arthur Melo</option>
                    <option>Olivia Wathan</option>
                    <option>Joseph Gonzalez</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <x-input-label for="image" :value="__('image')" />

                <label class="flex flex-col items-center justify-center w-full h-48 mt-2 text-gray-500 transition-colors duration-200 border-2 border-dashed rounded-lg cursor-pointer hover:text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>

                    <span class="mt-2">{{__('Upload image or drag and drop')}}</span>

                    <input type="file" class="hidden">
                </label>
            </div>

            <div class="space-y-2 md:space-y-4">
                <div class="flex items-center gap-x-2">
                    <input type="checkbox" id="checkbox" class="p-2 text-indigo-500 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <label for="checkbox" class="block text-gray-700 capitalize cursor-pointer">{{__('checkbox')}}</label>
                </div>
        
                <div class="flex items-center gap-x-2">
                    <input type="checkbox" id="checkbox-active" checked class="p-2 text-indigo-500 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <label for="checkbox-active" class="block text-gray-700 capitalize cursor-pointer">{{__('Checked')}}</label>
                </div>
            </div>

            <div class="space-y-2 md:space-y-4">
                <div class="flex items-center gap-x-2">
                    <input type="radio" id="radio-input" name="radio-input" class="p-2 text-indigo-500 bg-white border border-gray-200 rounded-full focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <label for="radio-input" class="block text-gray-700 capitalize cursor-pointer">{{__('Radio Button')}}</label>
                </div>
        
                <div class="flex items-center gap-x-2">
                    <input type="radio" id="radio-input2" name="radio-input" checked class="p-2 text-indigo-500 bg-white border border-gray-200 rounded-full focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    <label for="radio-input2" class="block text-gray-700 capitalize cursor-pointer">{{__('Checked')}}</label>
                </div>
            </div>
        </div>
    </x-section>
</x-app-layout>