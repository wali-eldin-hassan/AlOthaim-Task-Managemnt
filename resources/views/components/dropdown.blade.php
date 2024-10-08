<div x-data="{ isOpen: false }" class="relative inline-block">
    <div @click="isOpen = ! isOpen">
        {{ $button }}
    </div>

    <div class="{{ $width }} absolute right-0 z-20 mt-2 origin-top-right overflow-hidden dark:border-gray-700 dark:bg-gray-800 bg-white border border-gray-100 rounded-md shadow-lg rtl:right-auto rtl:left-0"
        x-show="isOpen" 
        x-cloak 
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" 
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100" 
        x-transition:leave-end="opacity-0 scale-95"
        @click.away="isOpen = false"
    >
    {{ $slot }}
</div>