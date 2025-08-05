@props([
    'label' => 'PHP',
    'path' => null, // SVG path data
])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2 bg-white text-gray-800 px-5 py-2.5 rounded shadow border border-gray-100 text-sm font-medium']) }}>
    @if ($path)
        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="currentColor" class="size-6 opacity-80">
            <path d="{{ $path }}" />
        </svg>
    @endif
    {{ $label }}
</span>
