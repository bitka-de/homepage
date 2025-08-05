@extends('layouts.app')

@section('title', 'Strategische Web-Beratung – Analyse, Insights & Empfehlungen | Bitka')
@section('meta_description', 'Wir analysieren deine Website oder deinen Online-Shop und finden heraus, wo Potenzial verschenkt wird – mit klaren Handlungsempfehlungen für bessere Performance und höhere Conversion.')

@section('content')

{{-- Hero --}}
<x-ui.hero.subpage 
    image="images/leistungen/beratung.webp"
    highlight="Web-Beratung,"
    title="die den Unterschied macht"
    text="Wir analysieren deine Website oder deinen Shop – und sagen dir ehrlich, was besser geht. Verständlich. Umsetzbar. Ehrlich."
/>

{{-- 1. Einleitung --}}
<section class="bg-white py-24">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <x-ui.badge text="Webanalyse mit Tiefgang" />
        <h2 class="text-4xl font-bold mb-6">Deine Seite sieht gut aus – aber performt sie auch?</h2>
        <p class="text-gray-700 text-lg leading-relaxed">
            Wir schauen genau hin: Wie performt deine Website technisch? Ist die Struktur durchdacht? Wird deine Zielgruppe klar angesprochen? Und wo verlierst du unnötig Conversions? Du bekommst Klartext – und konkrete Vorschläge zur Optimierung.
        </p>
    </div>
</section>

{{-- 2. Was wir analysieren --}}
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-4 max-w-6xl">
        <x-ui.badge text="Was wir prüfen" />
        <div class="grid md:grid-cols-2 gap-8 mt-8">
            <x-ui.list.check text="Ladegeschwindigkeit & technische Performance" as="span" />
            <x-ui.list.check text="Conversion-Hürden im Design & in der Nutzerführung" as="span" />
            <x-ui.list.check text="Zielgruppenansprache – Tonalität, Bildwelt & Inhalte" as="span" />
            <x-ui.list.check text="SEO-Grundlagen & Sichtbarkeit bei Google" as="span" />
            <x-ui.list.check text="Vertrauen, Wirkung & Positionierung" as="span" />
        </div>
    </div>
</section>

{{-- 3. Was du bekommst --}}
<section class="bg-white py-24">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <x-ui.badge text="Klarheit für deinen Webauftritt" />
        <h2 class="text-4xl font-bold mb-4">Ein klarer Bericht mit echten Aha-Momenten</h2>
        <p class="text-gray-700 text-lg mb-6">
            Du erhältst nach der Analyse einen übersichtlichen Report mit allen Auffälligkeiten, Erklärungen und konkreten Handlungsempfehlungen – unabhängig, ehrlich und nachvollziehbar.
        </p>
        <ul class="text-left text-gray-800 text-sm space-y-2 max-w-md mx-auto">
            <x-ui.list.check text="Detaillierter Bericht als PDF (inkl. Screenshots & Empfehlungen)" />
            <x-ui.list.check text="Maßnahmen mit Priorisierung nach Aufwand & Wirkung" />
            <x-ui.list.check text="Umsetzbar mit deiner bestehenden Agentur oder mit uns" />
        </ul>
    </div>
</section>

{{-- 4. Warum Bitka? --}}
<section class="bg-gray-100 py-24">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <x-ui.badge text="Unsere Perspektive – dein Vorteil" />
        <h2 class="text-4xl font-bold mb-4">Wir sind nicht betriebsblind – und sagen dir, was Sache ist</h2>
        <p class="text-gray-700 text-lg mb-6">
            Seit über 20 Jahren entwickeln wir Weblösungen für große und kleine Unternehmen. Wir sehen, was funktioniert – und was nicht. Unsere Beratung ist ehrlich, konkret und darauf ausgerichtet, dich wirklich weiterzubringen.
        </p>
    </div>
</section>

{{-- 5. CTA --}}
<section class="bg-black text-white py-24 text-center">
    <div class="container mx-auto px-4 max-w-2xl">
        <x-ui.badge text="Lust auf Klartext?" variant="dark" />
        <h2 class="text-4xl sm:text-5xl font-bold mb-4">Web-Check mit echtem Mehrwert</h2>
        <p class="text-white/80 mb-6 text-lg">
            Buche deinen Website- oder Shop-Check – und mach aus deiner Online-Präsenz endlich einen echten Kundenmagneten.
        </p>
            <x-ui.link>
                Kontakt aufnehmen
            </x-ui.link>
    </div>
</section>

@endsection
