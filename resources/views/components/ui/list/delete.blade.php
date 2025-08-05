@props([
    'text' => '',
    'as' => 'li', // 'li' oder 'span'
])

<{{ $as }} {{ $attributes->merge(['class' => 'flex gap-1 text-sm text-gray-800']) }}>
<svg viewBox="0 0 256 256" class="size-6 text-red-700">
  <path fill="none" d="M0 0h256v256H0z"/>
  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16" d="M216 56H40m64 48v64m48-64v64m48-112v152a8 8 0 0 1-8 8H64a8 8 0 0 1-8-8V56m112 0V40a16 16 0 0 0-16-16h-48a16 16 0 0 0-16 16v16"/>
</svg>
    <span class="font-semibold">{{ $text }}</span>
</{{ $as }}>
