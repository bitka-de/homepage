@extends('layouts.app')

@section('title', 'Webagentur Bitka | Karlsruhe')
@section('meta_description',
    'Starte dein Webprojekt mit Bitka – Webseiten, Onlineshops und individuelle
    Webentwicklung.')
@section('og_image', asset('images/bitka-preview.jpg'))

@section('content')


    <section class="relative hero clip-1 bg-slate-700/20">
        <img src="{{ asset('images/bg-1.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="">

        <div class="absolute inset-0 h-full w-full flex items-end bg-black/60 bg-gradient-to-tr from-black/50 sm:py-16">
            <div class="p-4 text-white bitka-mw w-full mx-auto text-balance">
                <h1 class="text-4xl sm:text-5xl leading-tight mb-6 uppercase font-bold">
                    Web<span class="opacity-70">lösungen</span> mit <span class="text-gradient">wirkung.</span>
                </h1>
                <p class="text-lg sm:text-xl max-w-2xl mb-8">
                    Bitka entwickelt professionelle Webseiten, Onlineshops und individuelle Anwendungen – klar
                    strukturiert, technisch sauber und mit dem Blick für das Wesentliche.
                </p>

                <div
                    class="hidden sm:grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-white/80 bg-black/20 backdrop-blur-md py-12">
                    <div class="flex items-center gap-2 justify-center">
                        <svg viewBox="0 0 256 256" class="h-6 opacity-60">
                            <path fill="none" d="M0 0h256v256H0z" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"
                                d="M128 128h88m-88-64h88m-88 128h88M40 64l16 16 32-32m-48 80 16 16 32-32m-48 80 16 16 32-32" />
                        </svg> Klare Strategie
                    </div>
                    <div class="flex items-center gap-2 justify-center">
                        <svg viewBox="0 0 256 256" class="h-6 opacity-60">
                            <path fill="none" d="M0 0h256v256H0z" />
                            <circle cx="128" cy="128" r="40" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"
                                d="M41.43 178.09a99.14 99.14 0 0 1-10.07-24.29l16.78-21a81.59 81.59 0 0 1 0-9.64l-16.77-21a99.43 99.43 0 0 1 10.05-24.3l26.71-3a81 81 0 0 1 6.81-6.81l3-26.7a99.14 99.14 0 0 1 24.26-9.99l21 16.78a81.59 81.59 0 0 1 9.64 0l21-16.77a99.43 99.43 0 0 1 24.3 10.05l3 26.71a81 81 0 0 1 6.81 6.81l26.7 3a99.14 99.14 0 0 1 10.07 24.29l-16.78 21a81.59 81.59 0 0 1 0 9.64l16.77 21a99.43 99.43 0 0 1-10 24.3l-26.71 3a81 81 0 0 1-6.81 6.81l-3 26.7a99.14 99.14 0 0 1-24.29 10.07l-21-16.78a81.59 81.59 0 0 1-9.64 0l-21 16.77a99.43 99.43 0 0 1-24.3-10l-3-26.71a81 81 0 0 1-6.81-6.81Z" />
                        </svg> Maßgeschneiderte Technik
                    </div>
                    <div class="flex items-center gap-2 justify-center">
                        <svg viewBox="0 0 256 256" class="h-6 opacity-60">
                            <path fill="none" d="M0 0h256v256H0z" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16" d="M144 224h-32" />
                            <circle cx="128" cy="100" r="12" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"
                                d="M94.81 192c-57.29-96.68 9.06-159.47 28.28-174.32a8 8 0 0 1 9.82 0c19.22 14.85 85.57 77.64 28.28 174.32Z" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="16"
                                d="m183.84 110.88 30.31 36.36a8 8 0 0 1 1.66 6.86l-12.36 55.63a8 8 0 0 1-12.81 4.51L161.19 192m-89.03-81.12-30.31 36.36a8 8 0 0 0-1.66 6.86l12.36 55.63a8 8 0 0 0 12.81 4.51L94.81 192" />
                        </svg> Starker Auftritt im Netz
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Das Problem --}}

    <section class="sm:sticky sm:top-0  text-gray-900 min-h-[70vh] py-24 flex flex-col justify-center items-center">
        <div class="container mx-auto px-4 bitka-mw text-center text-balance">

            <x-ui.badge text="Das Problem" />


            {{-- Headline --}}
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                Ohne professionelle Website wirst du übersehen.
            </h2>

            {{-- Beschreibung --}}
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-6">
                In einer digitalen Welt entscheidet der erste Eindruck – und der entsteht online. Wer keine moderne Website
                hat oder gar nicht gefunden wird, verliert Kund:innen an die Konkurrenz. Das schadet deinem Umsatz und
                deiner Außenwirkung.
            </p>

            <p class="text-sm text-gray-500 italic mb-12">
                Fakt: Über 80 % aller Kunden informieren sich zuerst online. Ohne überzeugenden Webauftritt wirst du nicht
                gewählt – egal wie gut dein Angebot ist.
            </p>

            {{-- Probleme (Karten) --}}
            <div class="grid sm:grid-cols-3 gap-6 text-sm">
                <div class="bg-white/30 p-6 shadow-sm border border-gray-100">
                    <strong class="block font-semibold mb-2">Keine Sichtbarkeit bei Google & Co.</strong>
                    Deine Website wird nicht gefunden – deine Konkurrenz schon.
                </div>
                <div class="bg-white/30 p-6 shadow-sm border border-gray-100">
                    <strong class="block font-semibold mb-2">Weniger Anfragen & Umsatz</strong>
                    Ohne digitale Präsenz verlierst du potenzielle Kunden – oft unbemerkt.
                </div>
                <div class="bg-white/30 p-6 shadow-sm border border-gray-100">
                    <strong class="block font-semibold mb-2">Geringes Vertrauen bei Neukunden</strong>
                    Eine veraltete oder unprofessionelle Website wirkt abschreckend.
                </div>
            </div>

        </div>
    </section>



    <section
        class="bg-gradient-to-br sm:sticky sm:top-0 from-stone-800 to-stone-600 via-black text-white min-h-[70vh] py-24 flex flex-col justify-center items-center">
        <div class="bitka-mw mx-auto px-4 bitka-mw text-center text-balance">

            {{-- Label --}}
            {{-- <span
                class="inline-block text-sm font-semibold uppercase tracking-wide bg-white/10 text-white px-4 py-1 rounded-full mb-4">
                Die Lösung
            </span> --}}

            <x-ui.badge text="Die Lösung" variant="dark" />


            {{-- Headline --}}
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                Mit einer professionellen Website zum Erfolg.
            </h2>

            {{-- Beschreibung --}}
            <p class="text-base sm:text-lg text-white/90 leading-relaxed mb-6">
                Wir entwickeln für dich einen modernen, individuellen Webauftritt, der begeistert, überzeugt – und gefunden
                wird. Deine neue Website ist schnell, mobil-optimiert, suchmaschinenfreundlich und spiegelt deine Marke
                perfekt wieder.
            </p>

            <p class="text-sm text-white/80 italic mb-12">
                Vorteil: Du wirst online sichtbar, gewinnst neue Kunden und hebst dich von der Konkurrenz ab – mit einer
                Website, die wirklich verkauft.
            </p>

            {{-- Vorteile / Benefits --}}
            <div class="grid sm:grid-cols-3 gap-6 text-sm">
                <div class="bg-white/10 p-6 backdrop-blur-sm">
                    <strong class="block font-semibold mb-2 text-one">Modernes, responsives Design</strong>
                    Deine Website sieht auf jedem Gerät professionell aus – vom Handy bis zum großen Bildschirm.
                </div>
                <div class="bg-white/10 p-6 backdrop-blur-sm">
                    <strong class="block font-semibold mb-2 text-two">Optimiert für Google & Mobilgeräte</strong>
                    Schnelle Ladezeiten, klare Struktur & mobile UX – für Top-Platzierungen & gute Nutzung.
                </div>
                <div class="bg-white/10 p-6 backdrop-blur-sm">
                    <strong class="block font-semibold mb-2 text-three">Mehr Vertrauen & Anfragen</strong>
                    Ein professioneller Auftritt stärkt dein Image – und sorgt für mehr Kontaktaufnahmen.
                </div>
            </div>


        </div>
    </section>




    <x-ui.services />




    <section
        class="bg-gradient-to-bl sm:sticky sm:top-0 from-stone-800 to-stone-600 via-black text-white py-20 overflow-clip">
        <div class="container bitka-mw mx-auto px-4 grid md:grid-cols-2 gap-12 items-center relative">

            {{-- Textblock --}}
            <div class="order-2 sm:order-1 z-20">
                <x-ui.badge text="Über mich" variant="dark" />


                <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                    Hi, ich bin <span class="opacity-30 font-thin">Jan Behrens</span><br>
                    <span class="text-gradient">Webentwickler</span> mit Leidenschaft für Wirkung
                </h2>

                <p class="text-lg text-gray-300 leading-relaxed mb-6">
                    Seit über 15 Jahren entwickle ich digitale Lösungen, die wirklich etwas bewegen – von individuellen
                    Websites bis zu komplexen Webanwendungen. Nach Stationen bei internationalen Marken setze ich mein
                    Know-how heute gezielt für Selbstständige und Unternehmen ein, die online sichtbar sein und wachsen
                    wollen.
                </p>

                <div class="grid sm:grid-cols-3 grid-cols-2 gap-4 mb-6">
                    <div class="border border-one/50 p-4 text-center justify-between flex flex-col">
                        <p class="text-sm text-one mb-1">20+ Jahre</p>
                        <p class="font-semibold">Web-Erfahrung</p>
                    </div>
                    <div class="border border-two/50 p-4 text-center justify-between flex flex-col">
                        <p class="text-sm text-two mb-1">Top-Marken</p>
                        <p class="font-semibold">Digitalprojekte</p>
                    </div>
                    <div
                        class="border border-three/50 p-4 col-span-2 sm:col-span-1 text-center justify-center flex flex-col">
                        <p class="text-sm text-three mb-1">Aus Karlsruhe</p>
                        <p class="font-semibold hidden sm:block">nahbar & direkt</p>
                    </div>
                </div>

                <p class="text-base text-gray-400">
                    Mein Anspruch: <span class="text-white font-semibold">Digitale Lösungen mit Substanz</span> – klar,
                    skalierbar und technisch sauber. Lass uns gemeinsam dein Projekt realisieren.
                </p>


                <a href="{{ route('ueber-uns') }}"
                    class="inline-flex items-center gap-2 my-4 text-one opacity-70 hover:opacity-100 transition">
                    <span class="inline-block mb-1">Mehr über mich</span>

                    <svg viewBox="0 0 256 256" class="h-6">
                        <path fill="none" d="M0 0h256v256H0z" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" d="m120 200-.01-63.99L56 136m-16 80 80-80" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" d="M160 184h48a8 8 0 0 0 8-8V48a8 8 0 0 0-8-8H80a8 8 0 0 0-8 8v48" />
                    </svg>
                </a>

            </div>

            {{-- Bildblock --}}
            <div class="flex justify-center order-1 sm:order-2 z-10">
                <div
                    class="overflow-hidden shadow-lg absolute sm:block -top-24 -right-4 sm:right-auto rounded-bl-full  max-w-[70%] opacity-50 border-none">
                    <img src="{{ asset('images/jaypiii.webp') }}" alt="Jan Behrens – Webentwickler aus Karlsruhe"
                        class="w-full h-auto object-cover">
                </div>
            </div>

        </div>

    </section>






@endsection
