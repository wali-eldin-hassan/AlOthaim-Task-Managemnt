<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Profile') }}</h1>
    </x-slot>

    <div>
        <div>
            <div class="w-full rounded-lg bg-gradient-to-r from-indigo-900 to-gray-900 h-36 sm:h-64"></div>
        </div>

        <div class="-mt-20">
            <div class="flex flex-col items-center">
                <img class="w-24 h-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32"
                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=880&q=80"
                    alt="">

                <div class="mt-4 text-center">
                    <h1 class="text-2xl font-bold text-gray-700 truncate">
                        John Doe
                    </h1>

                    <p class="mt-1 text-gray-500">
                        johndoe@example.om
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-8 mt-8 xl:grid-cols-2">
        <div class="p-4 bg-white rounded-lg xl:p-6">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl">{{__('Platform Settings')}}</h1>

            <div class="mt-6">
                <h1 class="text-xs font-medium text-gray-400 uppercase">{{__('ACCOUNT')}}</h1>

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

                        <p class="mx-3 text-gray-500">{{__('Email me when someone follows me')}}</p>
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

                        <p class="mx-3 text-gray-500">{{__('Email me when someone answers on my post')}}</p>
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

                        <p class="mx-3 text-gray-500">{{__('Email me when someone mentions me')}}</p>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <h1 class="text-xs font-medium text-gray-400 uppercase">{{__('APPLICATION')}}</h1>

                <div class="mt-4 space-y-5">
                    <div class="flex items-center cursor-pointer" x-data="{ show: false }" @click="show =!show">
                        <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                            :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                            <label for="show"
                                @click="show =!show"
                                class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                            <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                        </div>

                        <p class="mx-3 text-gray-500">{{__('New launches and projects')}}</p>
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

                        <p class="mx-3 text-gray-500">{{__('Monthly product updates')}}</p>
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

                        <p class="mx-3 text-gray-500">{{__('Subscribe to newsletter')}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white rounded-lg xl:p-6">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl">{{__('Profile Information')}}</h1>

            <form class="mt-6 space-y-5">
                <div>
                    <label for="username" class="block text-sm text-gray-700 capitalize">{{__('Full Name')}}</label>
                    <input value="John Doe" type="text" class="block w-full px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>

                <div>
                    <label for="phone" class="block text-sm text-gray-700 capitalize">{{__('phone')}}</label>
                    <input value="(44) 123 1234 123" type="text" class="block w-full px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>

                <div>
                    <label for="email" class="block text-sm text-gray-700 capitalize">{{__('e-mail')}}</label>
                    <input value="johndoe@example.com" type="text" class="block w-full px-3 py-2 mt-3 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                </div>

                <div class="flex justify-end">
                    <button class="flex items-center px-2 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <span class="mx-1">{{__('Update')}}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="p-4 mt-8 bg-white rounded-lg xl:p-6">
        <div class="md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl">{{__('Projects')}}</h1>
        
                <p class="mt-2 text-gray-500">{{__('Architects design houses')}}</p>
            </div>

            <a href="#" class="flex items-center justify-center w-full px-2 py-2 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md md:w-auto md:mt-0 hover:bg-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                <span class="mx-1">{{__('Create new project')}}</span>
            </a>
        </div>

        <div class="grid gap-8 mt-6 grid-cols-1s xl:grid-cols-4">
            <div>
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="">
                <h1 class="mt-4 text-lg font-medium text-gray-700 capitalize">{{__('Modern')}}</h1>
                <p class="mt-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rerum ipsa facilis.</p>
                <div class="flex items-center justify-between mt-6">
                    <button class="px-4 py-2 text-sm font-medium tracking-wide text-indigo-500 uppercase transition-colors duration-200 transform rounded-lg hover:bg-indigo-500 focus:outline-none ring-1 hover:text-white ring-indigo-500">
                        {{__('View all')}}
                    </button>
    
                    <div class="relative z-0 flex -space-x-1 overflow-hidden">
                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                </div>
            </div>

            <div>
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1521783988139-89397d761dce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1325&q=80" alt="">
                <h1 class="mt-4 text-lg font-medium text-gray-700 capitalize">{{__('Scandinavian')}}</h1>
                <p class="mt-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rerum ipsa facilis.</p>
                <div class="flex items-center justify-between mt-6">
                    <button class="px-4 py-2 text-sm font-medium tracking-wide text-indigo-500 uppercase transition-colors duration-200 transform rounded-lg hover:bg-indigo-500 focus:outline-none ring-1 hover:text-white ring-indigo-500">
                        {{__('View all')}}
                    </button>
    
                    <div class="relative z-0 flex -space-x-1 overflow-hidden">
                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                </div>
            </div>

            <div>
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1556020685-ae41abfc9365?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
                <h1 class="mt-4 text-lg font-medium text-gray-700 capitalize">{{__('Minimalist')}}</h1>
                <p class="mt-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rerum ipsa facilis.</p>
                <div class="flex items-center justify-between mt-6">
                    <button class="px-4 py-2 text-sm font-medium tracking-wide text-indigo-500 uppercase transition-colors duration-200 transform rounded-lg hover:bg-indigo-500 focus:outline-none ring-1 hover:text-white ring-indigo-500">
                        {{__('View all')}}
                    </button>
    
                    <div class="relative z-0 flex -space-x-1 overflow-hidden">
                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                </div>
            </div>

            <div>
                <img class="object-cover w-full h-56 rounded-lg" src="https://images.unsplash.com/photo-1523755231516-e43fd2e8dca5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="">
                <h1 class="mt-4 text-lg font-medium text-gray-700 capitalize">{{__('Classic')}}</h1>
                <p class="mt-2 text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio rerum ipsa facilis.</p>
                <div class="flex items-center justify-between mt-6">
                    <button class="px-4 py-2 text-sm font-medium tracking-wide text-indigo-500 uppercase transition-colors duration-200 transform rounded-lg hover:bg-indigo-500 focus:outline-none ring-1 hover:text-white ring-indigo-500">
                        {{__('View all')}}
                    </button>
    
                    <div class="relative z-0 flex -space-x-1 overflow-hidden">
                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>