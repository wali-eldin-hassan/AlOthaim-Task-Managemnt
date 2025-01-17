@php use App\Enums\TaskStatus; @endphp
<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:items-center sm:justify-between">
            <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Tasks') }}</h1>
            <a href="{{route('tasks.create')}}"
               class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>


                <span>{{__('Create')}}</span>
            </a>
        </div>
        </div>
        <div class="flex items-center justify-between px-4 mx-auto">
            <div class="flex overflow-x-auto overflow-y-hidden border-b border-gray-200 whitespace-nowrap dark:border-gray-700 justify-center">
                <a href="{{ route('tasks.index')}}"
                   class="inline-flex items-center h-10 px-4 py-2 text-gray-700 bg-transparent border-b-2 {{ request('status') == '' ? 'border-blue-500' : 'border-transparent' }} sm:px-4 dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
                    <span class="mx-1 text-sm sm:text-base">{{__('All')}}</span>
                </a>
                <a href="{{ route('tasks.index', ['status' => TaskStatus::Pending]) }}"
                   class="inline-flex items-center h-10 px-4 py-2 text-gray-700 bg-transparent border-b-2 {{ request('status') == TaskStatus::Pending->value ? 'border-blue-500' : 'border-transparent' }} sm:px-4 dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none">
                    <span class="mx-1 text-sm sm:text-base">{{__('Pending')}}</span>
                </a>

                <a href="{{ route('tasks.index', ['status' => TaskStatus::InProgress]) }}"
                   class="inline-flex items-center h-10 px-4 py-2 text-gray-700 bg-transparent border-b-2 {{ request('status') == TaskStatus::InProgress->value ? 'border-blue-500' : 'border-transparent' }} sm:px-4 dark:text-white whitespace-nowrap focus:outline-none">
                    <span class="mx-1 text-sm sm:text-base">{{__('In Progress')}}</span>
                </a>

                <a href="{{ route('tasks.index', ['status' => TaskStatus::Completed]) }}"
                   class="inline-flex items-center h-10 px-4 py-2 text-gray-700 bg-transparent border-b-2 {{ request('status') == TaskStatus::Completed->value ? 'border-blue-500' : 'border-transparent' }} sm:px-4 dark:text-white whitespace-nowrap focus:outline-none">
                    <span class="mx-1 text-sm sm:text-base">{{__('Completed')}}</span>
                </a>

            </div>
            <form action="{{ route('tasks.index') }}" method="GET" class="">
                <label for="assigned_user"
                       class="text-sm text-gray-600 dark:text-gray-300">{{ __('Assigned User') }}</label>
                <div class="flex items-center justify-center">

                    <select name="assigned_user" id="assigned_user" class="border rounded">
                        <option value="">{{ __('All Users') }}</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ request('assigned_user') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="mx-2 px-4 py-2.5 mt-1.5 text-white bg-blue-500 rounded ">{{ __('Filter') }}</button>
                </div>
            </form>
        </div>

    </x-slot>

    <section class="container px-4 mx-auto">

        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>{{__('#')}}</span>

                                            <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                      fill="currentColor" stroke="currentColor" stroke-width="0.1"/>
                                                <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                      fill="currentColor" stroke="currentColor" stroke-width="0.1"/>
                                                <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                      fill="currentColor" stroke="currentColor" stroke-width="0.3"/>
                                            </svg>
                                        </button>
                                    </div>
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{__('title')}}
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{__('status')}}
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{__('assigned to')}}
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    {{__('created at')}}
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">{{__('actions')}}</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach($tasks as $task)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <span>{{$task->id}}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{$task->title}}
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2
                                        {{ $task->status === TaskStatus::Pending ? 'bg-orange-100 text-orange-500' : '' }}
                                        {{ $task->status === TaskStatus::InProgress ? 'bg-blue-100 text-blue-500' : '' }}
                                        {{ $task->status === TaskStatus::Completed ? 'bg-green-100 text-green-500' : '' }}">
                                            <h2 class="text-sm font-normal">{{ $task->status->label() }}</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <img class="object-cover w-8 h-8 rounded-full"
                                                 src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80"
                                                 alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{$task->user->name}}</h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{$task->created_at->diffForHumans()}}
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex items-center gap-x-6">
                                            <a href="{{route('tasks.edit',$task)}}"
                                               class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                                </svg>

                                            </a>

                                            <a href="{{route('tasks.show',$task)}}"
                                               class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                                </svg>

                                            </a>
                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="size-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                                    </svg>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mt-3 mb-3 justify-center">
            {{-- Previous Page Link --}}
            @if ($tasks->onFirstPage())
                <span class="px-4 py-2 mx-1 text-gray-500 capitalize bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
            <div class="flex items-center -mx-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1 rtl:-scale-x-100" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                </svg>

                <span class="mx-1">
                    {{ __('Previous') }}
                </span>
            </div>
        </span>
            @else
                <a href="{{ $tasks->previousPageUrl() }}"
                   class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    <div class="flex items-center -mx-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1 rtl:-scale-x-100" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                        </svg>

                        <span class="mx-1">
                    {{ __('Previous') }}
                </span>
                    </div>
                </a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($tasks->getUrlRange(1, $tasks->lastPage()) as $page => $url)
                <a href="{{ $url }}"
                   class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:inline dark:bg-gray-800 dark:text-gray-900 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200 {{ $tasks->currentPage() == $page ? 'bg-blue-500 text-gray-700' : '' }}">
                    {{ $page }}
                </a>
            @endforeach

            {{-- Next Page Link --}}
            @if ($tasks->hasMorePages())
                <a href="{{ $tasks->nextPageUrl() }}"
                   class="px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                    <div class="flex items-center -mx-1">
                <span class="mx-1">
                    {{ __('Next') }}
                </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1 rtl:-scale-x-100" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </a>
            @else
                <span class="px-4 py-2 mx-1 text-gray-500 capitalize bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600">
            <div class="flex items-center -mx-1">
                <span class="mx-1">
                    {{ __('Next') }}
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1 rtl:-scale-x-100" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </div>
        </span>
            @endif
        </div>

    </section>
</x-app-layout>