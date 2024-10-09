<x-guest-layout>
    <form class="w-full max-w-md" action="{{route('login.store')}}" method="post">
        @csrf
        <img class="w-auto h-8 sm:h-9" src="/images/logo.svg" alt="">

        <h1 class="mt-4 text-2xl font-semibold text-gray-800 capitalize sm:text-3xl dark:text-white">{{ __('Welcome Back') }}</h1>

        <div class="relative flex items-center mt-8">
            <span class="absolute mx-3 text-gray-300 dark:text-gray-500">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                </svg>
            </span>

            <input type="email" name="email"
                   class="block w-full py-3 text-gray-700 bg-white border border-gray-200 rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-400 dark:focus:border-indigo-300 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40"
                   placeholder="{{ __('Email address') }}">

        </div>
        @error('email')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror

        <div class="relative flex items-center mt-4">
            <span class="absolute mx-3 text-gray-300 dark:text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                </svg>
            </span>

            <input type="password" name="password"
                   class="block w-full px-10 py-3 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-indigo-400 dark:focus:border-indigo-300 focus:ring-indigo-300 focus:outline-none focus:ring focus:ring-opacity-40"
                   placeholder="{{ __('Password') }}">

        </div>
        @error('password')
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
        @enderror

        <div class="mt-6">
            <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-indigo-500 rounded-lg hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                {{ __('Login') }}
            </button>

            <p class="mt-4 text-center text-gray-600 dark:text-gray-400">{{ __('or sign in with') }}</p>

            <p class="mt-6 text-sm text-center text-gray-400 dark:text-gray-300">
                {{ __('Don\'t have an account?') }} <a href="{{route('register')}}"
                                                       class="text-indigo-500 dark:text-indigo-400 focus:outline-none focus:underline hover:underline">{{ __('Register') }}</a>.
            </p>
        </div>
    </form>
</x-guest-layout>