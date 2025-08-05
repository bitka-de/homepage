@extends('layouts.app')

@section('title', 'Leistungen – Bitka')
@section('meta_description',
    'Unsere Leistungen: Webseiten, Online-Shops, individuelle Webentwicklung und persönliche
    Beratung – alles aus einer Hand.')

@section('content')

    {{-- Hero mit Bildhintergrund --}}
    <section class="relative text-white py-24 clip-1">
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-3.webp') }}" alt="Bitka Leistungen"
                class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="relative container mx-auto px-4 text-center max-w-3xl z-10">
            <h1 class="text-4xl sm:text-5xl font-bold mb-6">Unsere Leistungen</h1>
            <p class="text-lg text-white/80 leading-relaxed">
                Klar, ehrlich, wirkungsvoll – und perfekt auf dein Projekt abgestimmt.
            </p>
        </div>
    </section>

    {{-- Leistungsübersicht --}}
    <section class=" py-20">
        <div class="bitka-mw mx-auto px-4 max-w-6xl">
            <x-ui.badge text="Was wir anbieten" />
            <h2 class="text-4xl font-bold mb-10">Für dich entwickeln wir digitale Lösungen, die funktionieren</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6">
                <x-card.service-2 title="Webseiten" image="{{ asset('images/bitka-webseite.jpg') }}"
                    text="Moderne, suchmaschinenfreundliche und responsive Websites – individuell entwickelt mit Fokus auf Conversion, Ladezeit und Stil." />

                <x-card.service-2 title="Online-Shops" image="{{ asset('images/bitka-onlineshop.jpg') }}"
                    text="WooCommerce- oder Laravel-basierte Shopsysteme – optimiert für Performance, rechtssicher umgesetzt, technisch wartbar." />

                <x-card.service-2 title="Beratung" image="{{ asset('images/bitka-beratung.jpg') }}"
                    text="Strategische Begleitung – technisch fundiert, ehrlich kommuniziert. Wir sagen dir, was Sinn ergibt. Und was nicht." />

                <x-card.service-2 title="Programmierung" image="{{ asset('images/bitka-programmierung.jpg') }}"
                    text="Maßgeschneiderte Weblösungen: Ob komplexe Logik, API-Anbindung oder individuelle Features – wir programmieren, was gebraucht wird." />
            </div>
        </div>
    </section>


@endsection
