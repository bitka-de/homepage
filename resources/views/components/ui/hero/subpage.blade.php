@props([
    'title' => 'Webseiten, die Eindruck machen',
    'highlight' => 'Webseiten,',
    'text' => 'Maßgeschneiderte Webauftritte – technisch stark, visuell klar, strategisch sinnvoll.',
    'image' => 'images/bg-4.png',
])

<section class="text-white py-24 sticky top-0 -z-10 pb-10 clip-1">
    {{-- Hintergrundbild --}}
    <div class="absolute inset-0">
        <img src="{{ asset($image) }}" alt="{{ $title }}"
             class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    {{-- Inhalt --}}
    <div class="relative bitka-mw mx-auto z-10 p-4 text-balance">
        <h1 class="text-4xl sm:text-5xl font-bold mt-12 leading-tight">
            <span class="text-gradient block">{{ $highlight }}</span>{{ Str::replaceFirst($highlight, '', $title) }}
        </h1>
        <p class="text-lg text-white/80 leading-relaxed max-w-[60ch]">
            {{ $text }}
        </p>
    </div>
</section>
