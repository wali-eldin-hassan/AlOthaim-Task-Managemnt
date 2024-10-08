@props(['disabled' => false])

<input 
    {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge(['class' => 'block w-full px-4 py-2.5 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40']) !!}
>
