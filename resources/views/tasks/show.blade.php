<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __(' Show Task') }}</h1>

    </x-slot>

    <x-section>

        <div class="grid gap-6 md:grid-cols-1">
            <div>
                <x-input-label for="title" :value="__('title')"/>

                <input type="text" value="{{$task->title}}" readonly
                       class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"/>
            </div>
            <div>
                <x-input-label for="description" :value="__('description')"/>
                <textarea readonly
                          class="block w-full h-32 px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">{{$task->description}}</textarea>
            </div>

            <div>
                <div>
                    <x-input-label for="user" :value="__('user')"/>

                    <input type="text" value="{{$task->user->name}}" readonly
                           class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"/>
                </div>
            </div>
            <div>
                <div>
                    <x-input-label for="status" :value="__('status')"/>

                    <input type="text" value="{{$task->status}}" readonly
                           class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"/>
                </div>
            </div>
        </div>
        </div>
    </x-section>
</x-app-layout>