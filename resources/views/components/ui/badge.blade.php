@props([
    'text' => 'Label',
    'variant' => 'default', // oder 'dark'
])

@php
    $base = 'inline-block text-sm font-semibold uppercase tracking-wide px-4 py-1 rounded-full mb-4';

    $styles = [
        'default' => 'text-gray-500 text-xs shadow bg-white',
        'dark' => 'text-white text-xs shadow bg-black/5 outline outline-white/30',
    ];

    $classes = $base . ' ' . ($styles[$variant] ?? $styles['default']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $text }}
</span>
