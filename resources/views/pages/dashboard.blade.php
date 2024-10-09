@php use App\Enums\TaskStatus;use App\Models\User; @endphp
<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-medium text-gray-800 dark:text-gray-200 sm:text-2xl">{{ __('Dashboard') }}</h1>
    </x-slot>

    <section class="grid grid-cols-1 gap-4 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4">
        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Pending Task')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">{{auth()->user()->tasks()->where('status',TaskStatus::Pending->value)->count()}}</h2>

                    <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                        </svg>

                    </p>
                </div>
            </div>

            <div class="p-2 rounded-lg text-orange-500 bg-orange-100/60 dark:bg-emerald-700/30 dark:text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </div>
        </div>

        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('In Progress Tasks')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">{{auth()->user()->tasks()->where('status',TaskStatus::InProgress->value)->count()}}</h2>

                    <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                        </svg>

                    </p>
                </div>
            </div>

            <div class="p-2 rounded-lg text-sky-500 bg-sky-100/60 dark:bg-sky-700/30 dark:text-sky-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                </svg>

            </div>
        </div>

        <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Completed Tasks')}}</p>

                <div class="flex items-center mt-1">
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white">{{auth()->user()->tasks()->where('status',TaskStatus::Completed->value)->count()}}</h2>

                    <p class="flex items-center mx-2 text-red-500 2xl:mx-6 gap-x-1 dark:text-red-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181"/>
                        </svg>

                    </p>
                </div>
            </div>

            <div class="p-2 text-green-500 rounded-lg bg-green-100/60 dark:bg-indigo-700/30 dark:text-indigo-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </div>
        </div>
        @can('create-task')
            <div class="flex items-center justify-between px-5 py-4 bg-white rounded-lg shadow-sm dark:bg-gray-800">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-300">{{__('Users Total')}}</p>

                    <div class="flex items-center mt-1">
                        <h2 class="text-xl font-medium text-gray-800 dark:text-white">{{User::query()->count()}}</h2>

                        <p class="flex items-center mx-2 2xl:mx-6 gap-x-1 text-emerald-500 dark:text-emerald-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                            </svg>

                        </p>
                    </div>
                </div>


                <div class="p-2 text-teal-500 rounded-lg bg-teal-100/60 dark:bg-teal-700/30 dark:text-teal-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </div>
            </div>
        @endcan

    </section>

    <section class="mt-6">
        <x-section class="w-full">
            <h1 class="text-lg font-medium text-gray-700 capitalize sm:flex sm:items-center sm:gap-x-2 dark:text-gray-300 sm:text-xl">
                <span>{{ __('Completed Tasks') }}</span>

                <p class="flex items-center mt-1 text-sm sm:mt-0 gap-x-1 text-emerald-500 dark:text-emerald-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                    </svg>

                    {{ round($percentageChange, 2) }}%
                    <span>{{ __('from yesterday') }}</span>
                </span>
                </p>
            </h1>

            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                {{ __('Completed tasks for the last 7 days') }}
            </p>

            <div class="mt-4 rounded-lg bg-gradient-to-r from-indigo-800 to-gray-900">
                <canvas id="completedTasksChart" height="80"></canvas>
            </div>
        </x-section>
    </section>


</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('completedTasksChart').getContext('2d');
    const completedTasksData = @json(array_values($completedTasksPerDay->toArray()));
    const completedTasksLabels = @json(array_keys($completedTasksPerDay->toArray()));

    const completedTasksChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: completedTasksLabels,
            datasets: [{
                label: '{{ __("Completed Tasks") }}',
                data: completedTasksData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
