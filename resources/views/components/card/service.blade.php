@props([
    'title' => 'Titel',
    'text' => 'Beschreibungstext.',
    'iconPath' => '', // Pfad für das Hauptsymbol
    'viewBox' => '0 0 256 256',
    'fill' => 'currentColor',
    'iconClass' => 'size-12 mx-auto',
    'bgIconClass' => 'size-36 opacity-[3%] absolute top-0 -right-16',
    'wrapperClass' => 'p-6 shadow-md border border-gray-100 hover:shadow-lg transition relative overflow-clip',
    'href' => '#',
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => $wrapperClass . ' block group']) }}>
    
    {{-- Vordergrund-Icon --}}
    @if ($iconPath)
        <svg class="{{ $iconClass }}" fill="{{ $fill }}" viewBox="{{ $viewBox }}">
            <path d="{{ $iconPath }}" />
        </svg>
    @endif

    {{-- Hintergrund-Icon --}}
    @if ($iconPath)
        <svg class="{{ $bgIconClass }}" fill="{{ $fill }}" viewBox="{{ $viewBox }}">
            <path d="{{ $iconPath }}" />
        </svg>
    @endif

    {{-- Inhalt --}}
    <h3 class="font-semibold text-lg mb-2 group-hover:text-primary transition">{{ $title }}</h3>
    <p class="text-sm text-gray-700 leading-snug">{{ $text }}</p>
</a>
