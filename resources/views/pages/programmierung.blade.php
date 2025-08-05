@extends('layouts.app')

@section('title', 'Individuelle Webentwicklung – flexibel, professionell & effizient | Bitka')
@section('meta_description', 'Individuelle Programmierung für Webprojekte – maßgeschneidert, skalierbar und strategisch durchdacht. Ab 65 €/Stunde. Jetzt Projekt starten.')

@section('content')

{{-- Hero --}}
<x-ui.hero.subpage 
    image="images/leistungen/programmieren.webp"
    highlight="Individuelle Lösungen,"
    title="Webentwicklung, die passt."
    text="Du brauchst mehr als Standard? Wir entwickeln digitale Lösungen, die exakt auf dein Projekt zugeschnitten sind."
/>

{{-- 1. Einleitung --}}
<section class="bg-white py-24">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <x-ui.badge text="Jede Idee verdient die passende Lösung" />
        <h2 class="text-4xl font-bold mb-6">Standard reicht nicht? Gut so!</h2>
        <p class="text-gray-700 text-lg leading-relaxed">
            Ob Schnittstelle, Tool, Datenbankanwendung oder komplexes Websystem: Wir entwickeln passgenaue Anwendungen, die deine Prozesse optimieren, dein Business voranbringen und sich nahtlos in dein bestehendes System einfügen.
        </p>
    </div>
</section>

{{-- 2. Vorteile individueller Entwicklung --}}
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-4 max-w-6xl">
        <x-ui.badge text="Warum individuell entwickeln lassen?" />
        <div class="grid md:grid-cols-2 gap-8 mt-8">
            <x-ui.list.check text="Perfekt zugeschnitten auf dein Business – kein Kompromiss" as="span" />
            <x-ui.list.check text="Zukunftssicher und skalierbar" as="span" />
            <x-ui.list.check text="Integration in bestehende Systeme und Workflows" as="span" />
            <x-ui.list.check text="Eigene Schnittstellen, Automatisierungen und Tools" as="span" />
            <x-ui.list.check text="Beratung, Konzeption und Entwicklung aus einer Hand" as="span" />
        </div>
    </div>
</section>

{{-- 3. Preise mit Toggle --}}
<section class="bg-white py-24">
    <div class="container mx-auto px-4 text-center">
        <x-ui.badge text="Faire Preise – volle Transparenz" />
        <h2 class="text-4xl font-bold mb-4">Abgerechnet wird nach Stunden – aber mit Plan</h2>
        <p class="text-gray-700 text-lg mb-12 max-w-2xl mx-auto">
            Du erhältst ein individuelles Angebot mit geschätztem Aufwand – und transparente Stundenpakete zu klaren Konditionen:
        </p>

        {{-- Toggle Buttons --}}
        <div class="flex justify-center gap-4 mb-10">
            <button onclick="showPrices('unternehmen')" class="px-4 py-2 rounded font-semibold bg-black text-white hover:bg-gray-800 transition" id="btn-unternehmen">Unternehmen</button>
            <button onclick="showPrices('agenturen')" class="px-4 py-2 rounded font-semibold bg-gray-200 hover:bg-gray-300 transition" id="btn-agenturen">Agenturen</button>
        </div>

        {{-- Preise: Unternehmen --}}
        <div id="preise-unternehmen" class="grid md:grid-cols-3 gap-6 text-left max-w-6xl mx-auto">
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold mb-2">Bis 60 Stunden</h3>
                <p class="text-gray-600 text-sm mb-4">Für kleinere Projekte, Tests und Add-ons</p>
                <p class="text-2xl font-bold">85 €/h</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 shadow-md bg-gray-50">
                <h3 class="text-xl font-bold mb-2">Ab 60 Stunden</h3>
                <p class="text-gray-600 text-sm mb-4">Ideal für mittelgroße Projekte oder Relaunches</p>
                <p class="text-2xl font-bold">75 €/h</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold mb-2">Ab 120 Stunden</h3>
                <p class="text-gray-600 text-sm mb-4">Für größere Systeme, langfristige Zusammenarbeit</p>
                <p class="text-2xl font-bold">65 €/h</p>
            </div>
        </div>

        {{-- Preise: Agenturen --}}
        <div id="preise-agenturen" class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto text-left hidden">
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm">
                <h4 class="text-xl font-bold mb-2">Ab 120 Stunden/Jahr</h4>
                <p class="text-gray-600 text-sm mb-4">Zuverlässige Unterstützung für wiederkehrende Projekte</p>
                <p class="text-2xl font-bold">55 €/h</p>
            </div>
            <div class="border border-gray-200 rounded-lg p-6 shadow-md bg-gray-50">
                <h4 class="text-xl font-bold mb-2">Ab 240 Stunden/Jahr</h4>
                <p class="text-gray-600 text-sm mb-4">Für langfristige Partnerschaften mit festen Kapazitäten</p>
                <p class="text-2xl font-bold">47,50 €/h</p>
            </div>
        </div>

        <script>
            function showPrices(type) {
                const u = document.getElementById('preise-unternehmen');
                const a = document.getElementById('preise-agenturen');
                const btnU = document.getElementById('btn-unternehmen');
                const btnA = document.getElementById('btn-agenturen');

                if (type === 'unternehmen') {
                    u.classList.remove('hidden');
                    a.classList.add('hidden');
                    btnU.classList.remove('bg-gray-200');
                    btnA.classList.remove('bg-black', 'text-white');
                    btnU.classList.add('bg-black', 'text-white');
                    btnA.classList.add('bg-gray-200');
                } else {
                    a.classList.remove('hidden');
                    u.classList.add('hidden');
                    btnA.classList.remove('bg-gray-200');
                    btnU.classList.remove('bg-black', 'text-white');
                    btnA.classList.add('bg-black', 'text-white');
                    btnU.classList.add('bg-gray-200');
                }
            }
        </script>
    </div>
</section>

{{-- 4. Warum Bitka? --}}
<section class="bg-gray-100 py-24">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <x-ui.badge text="Mit uns läuft's" />
        <h2 class="text-4xl font-bold mb-4">Technisch stark. Klar in der Kommunikation.</h2>
        <p class="text-gray-700 text-lg mb-6">
            Du bekommst mehr als nur Code: Wir beraten strategisch, planen sorgfältig und entwickeln mit Fokus auf Effizienz, Erweiterbarkeit und sauberen Code.
        </p>
        <ul class="text-left text-gray-800 text-sm space-y-2 max-w-md mx-auto">
            <x-ui.list.check text="Erfahrung mit Laravel, WordPress, APIs, Cronjobs & mehr" />
            <x-ui.list.check text="Klare Absprachen, kein Bullshit-Bingo" />
            <x-ui.list.check text="Solide OOP-Architektur & Clean Code Prinzipien" />
            <x-ui.list.check text="Langfristige Zusammenarbeit statt Schnellschuss" />
        </ul>
    </div>
</section>

{{-- 5. CTA --}}
<section class="bg-black text-white py-24 text-center">
    <div class="container mx-auto px-4 max-w-2xl">
        <x-ui.badge text="Bereit für dein Projekt?" variant="dark" />
        <h2 class="text-4xl sm:text-5xl font-bold mb-4">Individuelle Entwicklung ab 65 €/h</h2>
        <p class="text-white/80 mb-6 text-lg">
            Du hast ein Projekt, das nicht von der Stange ist? Dann lass uns reden. Unverbindlich, ehrlich und mit Blick auf dein Ziel.
        </p>
            <x-ui.link>
                Kontakt aufnehmen
            </x-ui.link>
    </div>
</section>

@endsection