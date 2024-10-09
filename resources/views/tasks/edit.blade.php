@php use App\Enums\TaskStatus;use App\Models\User; @endphp
<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Edit Task') }}</h1>

    </x-slot>

    <x-section>
        <form method="POST" action="{{ route('tasks.update',$task) }}">
            @csrf
            @method('PUT')
            <div class="grid gap-6 md:grid-cols-1">
                <div>
                    <x-input-label for="title" :value="__('title')"/>

                    <input placeholder="Arthur Melo" type="text" value="{{$task->title}}"
                           class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"/>
                </div>
                @error('title')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <div>
                    <x-input-label for="description" :value="__('description')"/>
                    <textarea
                            class="block w-full h-32 px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        {{$task->description}}
                    </textarea>
                </div>
                @error('description')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div>
                    <x-input-label for="users" :value="__('assigned to')"/>

                    <select name="assigned_to"
                            class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        @foreach(User::all() as $user)
                            <option value="{{$user->id}}" {{ old('assigned_to', $selectedUserId ?? '') == $user->id ? 'selected' : '' }}>
                                {{$user->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('assigned_to')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <div>
                    <x-input-label for="status" :value="__('status')"/>

                    <select name="status"
                            class="block w-full px-4 py-2.5 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        @foreach (TaskStatus::cases() as $taskStatus)
                            <option value="{{ $taskStatus->value }}"
                                    {{ old('status', $selectedStatus ?? '') == $taskStatus ? 'selected' : '' }}>
                                {{  $taskStatus->name }}
                            </option>
                        @endforeach

                    </select>
                </div>
                @error('status')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <button
                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">

                    <span>{{__('Edit')}}</span>
                </button>
            </div>
        </form>
    </x-section>
</x-app-layout>