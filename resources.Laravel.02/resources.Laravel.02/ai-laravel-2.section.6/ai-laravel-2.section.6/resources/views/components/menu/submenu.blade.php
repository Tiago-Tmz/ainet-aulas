@php
    $uniqueSubMenuId = 'submenu-' . str()->random(10);
@endphp
<div data-submenu="{{$uniqueSubMenuId}}"
     {{ $attributes->merge(['class' => 'relative group flex flex-col me-0 sm:me-0 lg:me-2']) }}
     tabindex="10">
    @if($selectable ?? false)
        @if($selected ?? false)
            <button class="grow inline-flex items-center h-16 px-3 sm:px-1 pt-1 min-w-0
                    text-sm font-medium text-gray-500 dark:text-gray-400
                    border-b-2 border-indigo-400 dark:border-indigo-500
                  focus:border-indigo-700 dark:focus:border-indigo-300
                  hover:text-gray-700 dark:hover:text-gray-300
                    focus:outline-none focus:text-gray-700 dark:focus:text-gray-300
                    hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900">

        @else
        <button class="grow inline-flex items-center h-16 px-3 sm:px-1 pt-1 min-w-0
                    text-sm font-medium text-gray-500 dark:text-gray-400
                    border-b-2 border-transparent
                    hover:border-gray-300 dark:hover:text-gray-300
                    dark:hover:border-gray-700
                    hover:text-gray-700
                    focus:outline-none focus:border-gray-300 dark:focus:border-gray-700
                    focus:text-gray-700 dark:focus:text-gray-300
                    hover:bg-gray-100 dark:hover:bg-gray-800
                    sm:hover:bg-white dark:sm:hover:bg-gray-900">

        @endif
    @else
        <button class="grow inline-flex items-center h-16 px-3 sm:px-1 pt-1 min-w-0
                        text-sm font-medium text-gray-500 dark:text-gray-400
                        border-b-2 border-transparent hover:text-gray-700 dark:hover:text-gray-300
                        focus:outline-none focus:text-gray-700 dark:focus:text-gray-300
                        hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900">

    @endif
        {{$text ?? ''}}
        <div>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    <div id="{{$uniqueSubMenuId}}" class="sm:absolute
                @if($submenuAlign ?? 'left' == 'right')
                    sm:right-2 sm:top-14 sm:origin-bottom-right
                @else
                    sm:left-2 sm:top-14 sm:origin-bottom-left
                @endif
                w-full sm:w-48 bg-white dark:bg-gray-900
                grid grid-cols-1
                text-left
                sm:rounded-md sm:ring-1 sm:ring-gray-200 dark:sm:ring-gray-800 sm:shadow-lg
                ps-6 sm:ps-0
                invisible sm:invisible
                group-focus-within:visible
                max-h-0 sm:max-h-none group-focus-within:max-h-none                ">
        {{ $slot }}
    </div>
</div>
