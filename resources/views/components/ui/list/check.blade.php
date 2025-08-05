@props([
    'text' => '',
    'as' => 'li', // 'li' oder 'span'
])

<{{ $as }} {{ $attributes->merge(['class' => 'inline-flex items-center gap-1 text-sm text-gray-800']) }}>
    <svg class="size-6 text-green-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
    </svg>
    <span class="font-semibold">{{ $text }}</span>
</{{ $as }}>
