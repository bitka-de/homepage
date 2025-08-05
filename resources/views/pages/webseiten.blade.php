@extends('layouts.app')

@section('title', 'Webseiten erstellen lassen – professionell & individuell | Bitka')
@section('meta_description',
    'Moderne, individuelle Webseiten. Klar strukturiert, mobiloptimiert, datenschutzkonform.
    Entwicklung ab 850 € – ehrlich, effizient, effektiv.')

@section('content')

    <x-ui.hero.subpage highlight="Webseiten," title="Webseiten, die Eindruck machen"
        text="Maßgeschneiderte Webauftritte – technisch stark, visuell klar, strategisch sinnvoll."
        image="images/leistungen/webseiten.webp" />




    {{-- Einleitung --}}
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <x-ui.badge text="Individuell. Klar. Effektiv." />
            <h2 class="text-3xl font-bold mb-6">Eine Website, die wirkt – für dich, für deine Kunden, für Google</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Deine Website ist mehr als eine digitale Visitenkarte: Sie ist dein Verkaufsraum, dein Pitch, dein
                Aushängeschild. Wir entwickeln individuelle Seiten, die Vertrauen schaffen und Ergebnisse liefern – ohne
                Schnickschnack, aber mit Strategie.
            </p>
        </div>
    </section>

    {{-- Was wir machen --}}
    <section class="bg-gray-50 py-24">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid md:grid-cols-3 gap-8">
                <x-card.service title="Design & UX"
                    text="Klar strukturiert, markengerecht und mobilfreundlich. Design, das wirkt."
                    image="images/cards/design.jpg" href="#design" />
                <x-card.service title="Technik & Performance"
                    text="Sauberer Code, schnelle Ladezeiten und SEO-ready. Für eine starke Basis."
                    image="images/cards/technik.jpg" href="#technik" />
                <x-card.service title="Beratung inklusive"
                    text="Ehrlich, praxisnah und zielorientiert. Wir sagen dir, was Sinn macht – und was nicht."
                    image="images/cards/beratung.jpg" href="#beratung" />
            </div>
        </div>
    </section>

    {{-- Wie wir arbeiten --}}
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <x-ui.badge text="Unser Ansatz" />
            <h2 class="text-3xl font-bold mb-4">Effizient, transparent und ohne Umwege</h2>
            <p class="text-gray-700 text-lg mb-6">
                Wir setzen auf direkte Kommunikation, nachvollziehbare Abläufe und ehrliches Feedback. Du bekommst eine
                Lösung, die zu dir passt – technisch, inhaltlich und strategisch.
            </p>
            <ul class="text-left text-gray-800 text-sm space-y-2 max-w-md mx-auto">
                <li>✓ Gemeinsame Zielklärung & Strategie</li>
                <li>✓ Struktur & Inhalte mit Fokus auf Nutzer</li>
                <li>✓ Entwicklung mit modernen Webstandards</li>
                <li>✓ Launch & Support bei Bedarf</li>
            </ul>
        </div>
    </section>


    <x-ui.services />


    {{-- Preisrahmen CTA --}}
    <section class="bg-black text-white py-24 text-center sticky top-0 min-h-screen rotating-background">
        <div class="container mx-auto px-4 max-w-2xl">
            <x-ui.badge text="Was kostet das?" variant="dark" />
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Webseiten ab <span class="text-gradient">850 €</span></h2>
            <p class="text-white/80 mb-6 text-lg">
                Jedes Projekt ist individuell. Aber: Du bekommst klare Preise, faire Leistung und transparente
                Kommunikation. Ohne versteckte Kosten.
            </p>
            <x-ui.link>
                Kontakt aufnehmen
            </x-ui.link>
        </div>
    </section>

@endsection
