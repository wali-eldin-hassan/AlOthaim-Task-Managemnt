<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __(' Edit Task') }}</h1>

    </x-slot>

    <x-section>
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div class="grid gap-6 md:grid-cols-1">
                <div>
                    <x-input-label for="title" :value="__('title')"/>

                    <input placeholder="Arthur Melo" type="text"
                           class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"/>
                    <p class="mt-2 text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div>
                    <x-input-label for="description" :value="__('description')"/>
                    <textarea
                            class="block w-full h-32 px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"></textarea>
                </div>

                <div>
                    <x-input-label for="users" :value="__('user')"/>

                    <select
                            class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <option>Jane Doe</option>
                        <option>John Doe</option>
                        <option>Pamela Anderson</option>
                        <option>Arthur Melo</option>
                        <option>Olivia Wathan</option>
                        <option>Joseph Gonzalez</option>
                    </select>
                </div>
                <div>
                    <x-input-label for="status" :value="__('status')"/>

                    <select
                            class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        <option>Jane Doe</option>
                        <option>John Doe</option>
                        <option>Pamela Anderson</option>
                        <option>Arthur Melo</option>
                        <option>Olivia Wathan</option>
                        <option>Joseph Gonzalez</option>
                    </select>
                </div>
            </div>
        </form>
    </x-section>
</x-app-layout>