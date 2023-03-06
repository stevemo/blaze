@props([
    'sortable' => null,
    'direction' => null,
])


<th scope="col" {{ $attributes->merge(['class' => 'px-4 py-3.5 text-left text-sm font-semibold text-gray-900'])->only('class') }}>
    @unless ($sortable)
        <span>{{ $slot }}</span>
    @else
        <a {{ $attributes->except('class') }} href="#" class="inline-flex group">
            <span>{{ $slot }}</span>
            @if ($direction === 'asc')
                <span class="flex-none ml-2 text-gray-500 rounded group-hover:text-blue-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12"></path>
                    </svg>
                </span>
            @elseif ($direction === 'desc')
                <span class="flex-none ml-2 text-gray-500 rounded group-hover:text-blue-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0l-3.75-3.75M17.25 21L21 17.25"></path>
                    </svg>
                </span>
            @else
                <span class="flex-none ml-2 text-gray-500 rounded group-hover:text-blue-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9">
                        </path>
                    </svg>
                </span>
            @endif
        </a>
    @endif
</th>
