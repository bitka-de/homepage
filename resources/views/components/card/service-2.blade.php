@props([
    'title' => '',
    'text' => '',
    'image' => null,
    'href' => '#',
])

<a href="{{ $href }}" class="ball group block sticky top-2 rounded-xl overflow-hidden border border-gray-200 shadow-md hover:shadow-2xl transition-all duration-300  bg-white hover:from-gray-50 hover:to-primary/10 sm:relative">
    @if ($image)
        <div class="aspect-video bg-gradient-to-tr from-primary/20 overflow-clip to-gray-200 relative flex items-center justify-center">
            <img src="{{ asset($image) }}" alt="{{ $title }}" class="object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-lg" />
            <div class="absolute inset-0 bg-black/10 group-hover:bg-primary/10 transition"></div>
            <div class="absolute top-2 right-2 flex space-x-1 bg-white p-1 px-2.5 rounded-full shadow-lg">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse"></span>
            </div>
        </div>
    @endif

    <div class="p-5">
        <h3 class="text-xl md:text-2xl uppercase font-extrabold text-primary mb-2 group-hover:text-primary-dark transition-colors tracking-widest flex items-center gap-2">
            <svg class="w-5 h-5 shrink-0 text-primary-dark group-hover:animate-spin" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2v2m0 16v2m8-10h2M2 12H4m15.07-7.07l-1.41 1.41M6.34 17.66l-1.41 1.41m12.02 0l1.41-1.41M6.34 6.34L4.93 4.93" />
            </svg>
            {{ $title }}
        </h3>
        <p class="text-base text-gray-800 leading-relaxed font-mono group-hover:text-gray-900 transition-colors">
            {{ $text }}
        </p>
    </div>

    <div class="absolute bottom-2 right-4 text-xs text-primary/60 font-semibold opacity-0 group-hover:opacity-100 transition">
        <span class="inline-flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
            Explore
        </span>
    </div>
</a>
