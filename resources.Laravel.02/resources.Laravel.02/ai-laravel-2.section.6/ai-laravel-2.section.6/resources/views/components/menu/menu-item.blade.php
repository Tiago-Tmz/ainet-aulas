<div {{ $attributes->merge(['class' => 'flex me-0 sm:me-0 lg:me-2']) }}>
    @if($selectable ?? true)
        @if($selected ?? false)
            <a class="grow inline-flex items-center h-16 px-3 pt-1
                        text-sm font-medium
                        text-gray-900 dark:text-gray-50
                        border-b-2 border-indigo-400 dark:border-indigo-500
                        focus:outline-none focus:border-indigo-700 dark:focus:border-indigo-300"
                href="{{ $href ?? '#' }}">
                @if ($slot->hasActualContent())
                     {{ $slot }}
                @else
                     {{ $text ?? '' }}
                @endif
            </a>
        @else
            <a class="grow inline-flex items-center h-16 px-3 pt-1
                        text-sm font-medium text-gray-500 dark:text-gray-400
                        border-b-2 border-transparent
                        hover:border-gray-300 dark:hover:text-gray-300
                        dark:hover:border-gray-700
                        hover:text-gray-700
                        focus:outline-none focus:border-gray-300 dark:focus:border-gray-700

                        focus:text-gray-700 dark:focus:text-gray-300
                        hover:bg-gray-100 dark:hover:bg-gray-800
                        sm:hover:bg-white dark:sm:hover:bg-gray-900"
                    href="{{ $href ?? '#' }}">
                @if ($slot->hasActualContent())
                     {{ $slot }}
                @else
                     {{ $text ?? '' }}
                @endif
            </a>
        @endif
    @else
        <a class="grow inline-flex items-center h-16 px-3 sm:px-1 pt-1
                    text-sm font-medium text-gray-500 dark:text-gray-400
                    border-b-2 border-transparent hover:text-gray-700 dark:hover:text-gray-300
                    focus:outline-none focus:text-gray-700 dark:focus:text-gray-300
                    hover:bg-gray-100 dark:hover:bg-gray-800 sm:hover:bg-white dark:sm:hover:bg-gray-900"
            href="{{ $href ?? '#' }}">
                @if ($slot->hasActualContent())
                     {{ $slot }}
                @else
                     {{ $text ?? '' }}
                @endif
        </a>
    @endif
</div>
