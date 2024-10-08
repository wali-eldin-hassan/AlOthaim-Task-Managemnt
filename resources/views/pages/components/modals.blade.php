<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Modals') }}</h1>
    </x-slot>

    <x-section>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="px-4 py-2.5 text-sm font-medium w-full sm:w-auto text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    {{__('Review API Token')}}
                </button>
            
                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
                        >
                            <div class="flex items-center justify-between">
                                <h1 class="text-lg font-medium text-gray-800 ">{{__('Review API Token')}}</h1>
            
                                <button @click="modelOpen = false" class="text-gray-500 transition-colors duration-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-start p-3 mt-5 bg-gray-100 rounded-lg gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>


                                <p class="text-sm tracking-wide text-gray-600">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                    Accusantium perferendis dolor ipsa et enim vero debitis placeat fugit soluta eum.
                                </p>
                            </div>

                            <form class="mt-6">
                                <div class="mt-4">
                                    <x-input-label for="api-token" :value="__('API Token')" />

                                    <textarea disabled class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">a3b4ce5dwh4rfnj3kd7furt6ekmfj5fijd4fkdjsgg34iejgkjd34gt5gigg5er6ere4th67jrteg2fgdfgger1</textarea>
                                </div>
                                
                                <div class="flex justify-end mt-6">
                                    <button type="button" class="px-3 py-2 text-xs font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        {{__('Copy To Clipboard')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="flex items-center px-4 py-2.5 w-full sm:w-auto justify-center text-sm font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>

                    {{__('Share Board')}}
                </button>
            
                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen"
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
                        >
                            <div class="flex items-center justify-between">
                                <h1 class="text-lg font-medium text-gray-800 ">{{__('Share This Board')}}</h1>
            
                                <button @click="modelOpen = false" class="text-gray-500 transition-colors duration-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <p class="mt-2 text-sm text-gray-500">
                                {{__('Share it with any one you like')}}
                            </p>

                            <div class="mt-5">
                                <div class="relative flex items-center border rounded-md">
                                    <input disabled class="w-full py-4 pl-3 pr-24 text-sm text-gray-700 placeholder-gray-400 border-0 rounded-lg cursor-not-allowed rtl:pl-24 rtl:pr-3 focus:outline-none" type="link" value="https://tailwindcss.com/">
                                    
                                    <button class="absolute flex items-center px-3 py-2 text-xs font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 rtl:right-auto rtl:left-3 right-3 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                        </svg>

                                        {{__('Copy Link')}}
                                    </button>
                                </div>
            
                                <h1 class="mt-4 text-gray-800">{{__('Invited People')}}</h1>
            
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-x-2">
                                            <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Avatar">
                                            <a href="#" class="font-semibold text-gray-700">Jone Doe</a>
                                        </div>

                                        <select name="role" class="text-sm text-gray-600 border-none focus:outline-none focus:ring-0">
                                            <option selected>owner</option>
                                            <option>can view</option>
                                            <option>can edit</option>
                                        </select>
                                    </div>
            
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-x-2">
                                            <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Avatar">
                                            <a href="#" class="font-semibold text-gray-700">Mia</a>
                                        </div>
            
                                        <select name="role" class="text-sm text-gray-600 border-none focus:outline-none focus:ring-0">
                                            <option>owner</option>
                                            <option selected>can view</option>
                                            <option>can edit</option>
                                        </select>
                                    </div>
            
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-x-2">
                                            <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1608174386344-80898cec6beb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Avatar">
                                            <a href="#" class="font-semibold text-gray-700">Junior REIS</a>
                                        </div>
            
                                        <select name="role" class="text-sm text-gray-600 border-none focus:outline-none focus:ring-0">
                                            <option>owner</option>
                                            <option>can view</option>
                                            <option selected>can edit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="flex items-center px-4 py-2.5 w-full sm:w-auto justify-center text-sm font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>

                    {{__('Invite Member')}}
                </button>
            
                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
                        >
                            <div class="flex items-center justify-between">
                                <h1 class="text-lg font-medium text-gray-800 ">{{__('Invite team memebr')}}</h1>
            
                                <button @click="modelOpen = false" class="text-gray-500 transition-colors duration-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
            
                            <p class="mt-2 text-sm text-gray-500 ">
                                {{__('Add your teammate to your team and start work to get things done')}}
                            </p>
            
                            <form class="mt-5">
                                <div>
                                    <x-input-label for="teammate-name" :value="__('Teammate name')" />
                                    <input placeholder="Arthur Melo" type="text" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                </div>
            
                                <div class="mt-4">
                                    <x-input-label for="teammate-email" :value="__('teammate email')" />
                                    <input placeholder="arthurmelo@example.app" type="email" class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                </div>
                                
                                <div class="mt-4">
                                    <h1 class="text-xs font-medium text-gray-400 uppercase">{{__('Permissions')}}</h1>
            
                                    <div class="mt-4 space-y-5">
                                        <div class="flex items-center cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                <label for="show"
                                                    @click="show =!show"
                                                    class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                    :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                            </div>
            
                                            <p class="px-3 text-gray-500">{{__('Can make task')}}</p>
                                        </div>
            
                                        <div class="flex items-center cursor-pointer" x-data="{ show: false }" @click="show =!show">
                                            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                <label for="show"
                                                    @click="show =!show"
                                                    class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                    :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                            </div>
            
                                            <p class="px-3 text-gray-500">{{__('Can delete task')}}</p>
                                        </div>
            
                                        <div class="flex items-center cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                            <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                <label for="show"
                                                    @click="show =!show"
                                                    class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                    :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                            </div>
            
                                            <p class="px-3 text-gray-500">{{__('Can edit task')}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex justify-end mt-6">
                                    <button type="button" class="font-medium w-full sm:w-auto px-4 py-2.5 text-xs tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        {{__('Invite Member')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="flex items-center px-4 py-2.5 w-full sm:w-auto justify-center text-sm font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                    </svg>

                    {{__('Give A Feedback')}}
                </button>
            
                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
                        >
                            <div class="flex items-center justify-between">
                                <h1 class="text-lg font-medium text-gray-800 ">{{__('Give A Feedback')}}</h1>
            
                                <button @click="modelOpen = false" class="text-gray-500 transition-colors duration-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
            
                            <form class="mt-5">
                                <p class="text-sm text-gray-500 ">
                                    {{__('what do you think of this dashboard?')}}
                                </p>
                                
                                <div class="grid grid-cols-5 gap-4 mt-2 place-items-center">
                                    <button class="p-2 text-gray-500 rounded-full focus:outline-none hover:bg-gray-50 hover:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="roun">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 15.25a3.5 3.5 0 0 1 5 0" />
                                            <path d="M17.566 17.606a2 2 0 1 0 2.897 .03l-1.463 -1.636l-1.434 1.606z" />
                                            <path d="M20.865 13.517a8.937 8.937 0 0 0 .135 -1.517a9 9 0 1 0 -9 9c.69 0 1.36 -.076 2 -.222" />
                                        </svg>
                                    </button>
                                    
                                    <button class="p-2 text-gray-500 rounded-full focus:outline-none hover:bg-gray-50 hover:text-pink-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 16a10 10 0 0 1 6 -1.5" />
                                        </svg>
                                    </button>

                                    <button class="p-2 text-gray-500 rounded-full focus:outline-none hover:bg-gray-50 hover:text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <line x1="9" y1="15" x2="15" y2="15" />
                                        </svg>
                                    </button>

                                    <button class="p-2 text-blue-500 rounded-full bg-gray-50 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="10" x2="9.01" y2="10" />
                                            <line x1="15" y1="10" x2="15.01" y2="10" />
                                            <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                                        </svg>
                                    </button>

                                    <button class="p-2 text-gray-500 rounded-full focus:outline-none hover:bg-gray-50 hover:text-emerald-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="9" y1="9" x2="9.01" y2="9" />
                                            <line x1="15" y1="9" x2="15.01" y2="9" />
                                            <path d="M8 13a4 4 0 1 0 8 0m0 0h-8" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-4">
                                    <p class="text-sm text-gray-500">
                                        {{__("Do you have any thoughts you'd like to share?")}}
                                    </p>

                                    <textarea class="block w-full h-32 px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                                </div>
                                
                                <div class="flex justify-end mt-6">
                                    <button type="button" class="px-3 py-2 text-xs font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        {{__('Send A feedback')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="flex items-center px-4 py-2.5 w-full sm:w-auto justify-center text-sm font-medium text-indigo-700 transition-colors duration-200 bg-indigo-100 rounded-lg gap-x-2 focus:ring focus:ring-indigo-100 hover:bg-indigo-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>

                    {{__('Send Command')}}
                </button>
            
                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl rtl:text-right 2xl:max-w-2xl"
                        >
                            <div class="flex items-center justify-between">
                                <h1 class="text-lg font-medium text-gray-800 ">{{__('Send Command')}}</h1>

                                <button @click="modelOpen = false" class="text-gray-500 transition-colors duration-200 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-center p-3 mt-5 bg-gray-100 rounded-lg gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 shrink-0">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>


                                <p class="text-sm tracking-wide text-gray-600">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                    Accusantium perferendis.
                                </p>
                            </div>

                            <form>
                                <div class="mt-4">
                                    <div>
                                        <x-input-label for="search-downlink" :value="__('search downlink')" />

                                        <div class="relative mt-2">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                </svg>
                                            </span>
                                            
                                            <input type="text" class="w-full py-2.5 pl-10 pr-4 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="{{__('Search')}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div>
                                        <x-input-label for="select-downlink" :value="__('select downlink')" />

                                        <div class="p-4 mt-2 border border-gray-200 rounded-lg">
                                            <div class="flex items-center gap-x-2">
                                                <input  type="radio" name="downlink" class="p-2 text-indigo-500 border-gray-200 rounded-full focus:ring-indigo-500">

                                                <label class="block text-sm font-medium text-gray-600 capitalize"><span class="text-gray-400">#1</span> {{__('Request Device Information')}}</label>
                                            </div>

                                            <hr class="my-4">

                                            <p class="text-sm text-gray-500 ">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, commodi!</p>
                                        </div>
                                        
                                        <div class="p-4 mt-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center gap-x-2">
                                                <input  type="radio" name="downlink" class="p-2 text-indigo-500 border-gray-200 rounded-full focus:ring-indigo-500">

                                                <label class="block text-sm font-medium text-gray-600 capitalize"><span class="text-gray-400">#2</span> {{__('Request settings')}}</label>
                                            </div>

                                            <hr class="my-4">

                                            <p class="text-sm text-gray-500 ">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        
                                        <div class="p-4 mt-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center gap-x-2">
                                                <input  type="radio" name="downlink" class="p-2 text-indigo-500 border-gray-200 rounded-full focus:ring-indigo-500">

                                                <label class="block text-sm font-medium text-gray-600 capitalize"><span class="text-gray-400">#3</span> {{__('update settings')}}</label>
                                            </div>

                                            <hr class="my-4">

                                            <p class="text-sm text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        
                                        <div class="p-4 mt-4 border border-gray-200 rounded-lg">
                                            <div class="flex items-center gap-x-2">
                                                <input  type="radio" name="downlink" class="p-2 text-indigo-500 border-gray-200 rounded-full focus:ring-indigo-500">

                                                <label class="block text-sm font-medium text-gray-600 capitalize"><span class="text-gray-400">#4</span> {{__('update firmware')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex justify-end mt-6">
                                    <button type="button" class="px-3 py-2 text-xs font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        {{__('Send Command')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>
</x-app-layout>