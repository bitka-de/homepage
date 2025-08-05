@extends('layouts.app')

@section('title', 'Online-Shops entwickeln lassen – professionell & individuell | Bitka')
@section('meta_description', 'Moderne, performante Online-Shops individuell entwickelt – technisch stark, strategisch
    durchdacht, verkaufsorientiert. Ab 850 €. Jetzt starten.')

@section('content')

    {{-- Hero --}}
    <x-ui.hero.subpage image="images/leistungen/webshops.webp" highlight="Online-Shops," title="Online-Shops, die verkaufen"
        text="Individuelle Shop-Lösungen mit Strategie, Technik und Nutzerfokus – für mehr Verkäufe und weniger Frust." />

    {{-- 1. Einleitung --}}
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <x-ui.badge text="Digital verkaufen lohnt sich" />
            <h2 class="text-4xl font-bold mb-6">Ein Webshop ist kein Luxus – sondern dein stärkster Vertriebskanal</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Menschen kaufen heute digital. Wer keinen eigenen Online-Shop hat, überlässt Umsatz und Kunden den
                Mitbewerbern. Ein maßgeschneiderter Webshop macht dich unabhängig, sichtbar und verkaufsstark – 24/7. Ob
                Einzelhändler, Manufaktur oder Berater: Mit einem Shop erschließt du neue Zielgruppen, automatisierst
                Prozesse und stärkst deine Marke.
            </p>
        </div>
    </section>

    {{-- 2. Vorteile --}}
    <section class="bg-gray-50 py-24">
        <div class="container mx-auto px-4 max-w-6xl">
            <x-ui.badge text="Vorteile auf einen Blick" />
            <div class="grid md:grid-cols-2 gap-8 mt-8">
                <x-ui.list.check text="24/7 geöffnet – verkaufe auch im Schlaf" as="span" />
                <x-ui.list.check text="Keine Plattformgebühren, volle Kontrolle" as="span" />
                <x-ui.list.check text="Markenerlebnis vom ersten Klick bis zum Checkout" as="span" />
                <x-ui.list.check text="Direkter Kundenkontakt & individuelle Kommunikation" as="span" />
                <x-ui.list.check text="Skalierbar, automatisierbar, messbar – jederzeit" as="span" />
                <x-ui.list.check text="Perfekte Basis für Werbung, Content & Community" as="span" />
            </div>
        </div>
    </section>

    {{-- 3. Warum mit uns --}}
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <x-ui.badge text="Warum Bitka?" />
            <h2 class="text-4xl font-bold mb-4">Weil ein guter Shop mehr ist als ein hübsches Theme</h2>
            <p class="text-gray-700 text-lg mb-6">
                Wir denken nicht in Templates, sondern in Lösungen. Jeder Online-Shop, den wir entwickeln, ist individuell
                auf Zielgruppe, Angebot und Strategie zugeschnitten. Technisch fundiert, rechtlich sicher, visuell
                überzeugend. Wir begleiten dich von der Idee bis zur Vermarktung – ehrlich, partnerschaftlich,
                vorausschauend.
            </p>
            <ul class="text-left text-gray-800 text-sm space-y-2 max-w-md mx-auto">
                <x-ui.list.check
                    text="Shop auf Basis von Laravel, WooCommerce oder Shopify – passgenau für dein Business" />
                <x-ui.list.check text="Rechtssicherheit: DSGVO, Impressum, AGB – wir denken mit" />
                <x-ui.list.check text="Klares Design mit Fokus auf Conversion & Vertrauen" />
                <x-ui.list.check text="Technischer Support, Beratung & Weiterentwicklung inklusive" />
            </ul>
        </div>
    </section>

    {{-- 4. Fehler vermeiden --}}
    <section class="bg-gray-100 py-24">
        <div class="container mx-auto px-4 max-w-3xl text-center">
            <x-ui.badge text="Typische Fehler vermeiden" />
            <h2 class="text-4xl font-bold mb-4">Diese Fehler kosten Kunden – und müssen nicht sein</h2>
            <p class="text-gray-700 text-lg mb-6">
                Die meisten Online-Shops scheitern nicht an der Idee, sondern an der Umsetzung. Zu langsam, zu kompliziert,
                zu austauschbar. Wir sorgen dafür, dass dein Shop sich abhebt – und funktioniert.
            </p>

            <p class="">Wir helfen dir, diese Fehler zu vermeiden und deinen Shop von Anfang an richtig aufzubauen.</p>
            <ul class="text-left text-gray-800 text-sm space-y-2 max-w-xl mt-5 mx-auto">
                <x-ui.list.delete text="Chaotische Navigation & schlechte UX" />
                <x-ui.list.delete text="Ladezeiten über 3 Sekunden – ein Conversion-Killer" />
                <x-ui.list.delete text="Keine oder fehlerhafte Rechtsseiten (Impressum, Datenschutz, AGB)" />
                <x-ui.list.delete text="Abgebrochene Kaufprozesse wegen technischer Hürden" />
                <x-ui.list.delete text="Fehlendes Vertrauen durch schwache Gestaltung oder unsichere Technik" />
            </ul>
        </div>
    </section>


    <x-ui.services />


    {{-- 5. CTA --}}
    <section class="bg-black sticky top-0 min-h-screen text-white py-24 text-center rotating-background">
        <div class="container mx-auto px-4 max-w-2xl">
            <x-ui.badge text="Bereit für den nächsten Schritt?" variant="dark" />
            <h2 class="text-4xl sm:text-5xl font-bold mb-4">Dein Shop. Deine Regeln. <span
                    class="block my-2 font-thin">Schon für <span class="text-gradient">1.650 €</span></span></h2>
            <p class="text-white/80 mb-6 text-lg">
                Lass uns über dein Vorhaben sprechen – ganz ehrlich, ganz unverbindlich. Wir zeigen dir, was möglich ist,
                worauf es ankommt und wie du mit einem starken Shop durchstartest.
            </p>
            <x-ui.link>
                Kontakt aufnehmen
            </x-ui.link>
        </div>
    </section>


@endsection
