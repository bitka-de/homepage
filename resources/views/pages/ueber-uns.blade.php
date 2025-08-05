@extends('layouts.app')

@section('title', 'Über mich – Jan Behrens')
@section('meta_description',
    'Ich bin Jan Behrens, Webentwickler mit über 20 Jahren Erfahrung aus Karlsruhe. Hier
    erfahren Sie, was mich ausmacht – fachlich und menschlich.')

@section('content')

    {{-- Hero --}}
    <section class="relative text-white py-24 pb-10 clip-1">
        {{-- Hintergrundbild --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-2.webp') }}" alt="Jan Behrens – Webentwicklung"
                class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-black/60"></div> {{-- dunkles Overlay --}}
        </div>

        {{-- Inhalt --}}
        <div class="relative bitka-mw mx-auto z-10 p-4 text-balance">
            <h1 class="text-4xl sm:text-5xl font-bold mt-12 leading-tight">
                Weblösungen mit Verstand.
            </h1>
            <p class="text-lg text-white/80 leading-relaxed max-w-[60ch]">
                Ich bin Jan Behrens – Webentwickler aus Karlsruhe. Ich helfe Unternehmen, online sichtbar und erfolgreich zu
                werden – mit klarer Strategie, technischer Präzision und ehrlicher Beratung.
            </p>
        </div>
    </section>


    {{-- Über mich --}}
    <section class="bg-white py-20 relative">

        <div class="bitka-mw mx-auto px-4 max-w-6xl grid md:grid-cols-2 gap-12 items-center z-10">

            <div class=" z-20">
                <x-ui.badge text="Über mich" />
                <h2 class="text-3xl font-bold mb-4">Mehr als nur Webdesign</h2>
                <p class="text-base text-gray-700 leading-relaxed mb-6">
                    Seit über zwei Jahrzehnten begleite ich Projekte im Web – von lokalen Handwerksbetrieben bis zu
                    internationalen Marken. Ich bin ausgebildeter Anwendungsentwickler, denke strategisch und arbeite
                    lösungsorientiert. Bei mir gibt’s keine Technik-Spielereien, sondern durchdachte Systeme, die
                    funktionieren – sauber, wartbar und performant.
                </p>

                <p class="text-base text-gray-700 leading-relaxed mb-6">
                    Du suchst jemanden, der dir offen sagt, was sinnvoll ist – und was du besser lassen solltest? Dann bist
                    du bei mir richtig. Ich kombiniere technisches Know-how mit unternehmerischem Denken. Für Ergebnisse,
                    die wirken – digital und real.
                </p>

                <ul class="space-y-2 text-sm w-full flex flex-col text-gray-600">
                    <x-ui.list.check text="Lösungsorientiert"></x-ui.list.check>
                    <x-ui.list.check text="Erfahrung in Webentwicklung & Strategie"></x-ui.list.check>
                    <x-ui.list.check text="Klartext statt Blabla"></x-ui.list.check>
                    <x-ui.list.check text="Technisch saubere Umsetzung"></x-ui.list.check>
                    <x-ui.list.check text="Individuelle Lösungen"></x-ui.list.check>
                </ul>
            </div>

            <div class="flex justify-center z-20 rotate-3 ">
                <img src="{{ asset('images/jaypiii.jpg') }}" alt="Jan Behrens – Webentwickler aus Karlsruhe"
                    class="rounded-2xl shadow-xl w-full max-w-[60vw]">
            </div>
        </div>
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/bg/jaypiii.jpg') }}" alt="JayPiii Bleistiftzeichnung"
                class="h-full ml-auto object-cover grayscale contrast-125" />
            <div class="absolute inset-0 bg-white/50 sm:bg-white/60"></div> {{-- Overlay für Lesbarkeit --}}
        </div>


    </section>

    {{-- Techstack --}}
    <section class="bg-gray-100 py-20 text-center">
        <div class="container mx-auto px-4 max-w-4xl">
            <x-ui.badge text="Technologien & Tools" />
            <h2 class="text-2xl sm:text-3xl font-bold mb-10">Mit diesen Tools arbeite ich täglich</h2>

            <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-800">
                <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-800">

                    <x-card.small-icon
                        path="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"
                        label="Laravel" />

                    <x-card.small-icon
                        path="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"
                        label="PHP" />


                    <x-card.small-icon
                        path="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"
                        label="JavaScript" />



                    <x-card.small-icon
                        path="m8.286 10.578.512-8.657a.306.306 0 0 1 .247-.282L17.377.006a.306.306 0 0 1 .353.385l-1.558 5.403a.306.306 0 0 0 .352.385l2.388-.46a.306.306 0 0 1 .332.438l-6.79 13.55-.123.19a.294.294 0 0 1-.252.14c-.177 0-.35-.152-.305-.369l1.095-5.301a.306.306 0 0 0-.388-.355l-1.433.435a.306.306 0 0 1-.389-.354l.69-3.375a.306.306 0 0 0-.37-.36l-2.32.536a.306.306 0 0 1-.374-.316zm14.976-7.926L17.284 3.74l-.544 1.887 2.077-.4a.8.8 0 0 1 .84.369.8.8 0 0 1 .034.783L12.9 19.93l-.013.025-.015.023-.122.19a.801.801 0 0 1-.672.37.826.826 0 0 1-.634-.302.8.8 0 0 1-.16-.67l1.029-4.981-1.12.34a.81.81 0 0 1-.86-.262.802.802 0 0 1-.165-.67l.63-3.08-2.027.468a.808.808 0 0 1-.768-.233.81.81 0 0 1-.217-.6l.389-6.57-7.44-1.33a.612.612 0 0 0-.64.906L11.58 23.691a.612.612 0 0 0 1.066-.004l11.26-20.135a.612.612 0 0 0-.644-.9z"
                        label="Vite" />

                    <x-card.small-icon
                        path="M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.539-.541-.674-1.337-.404-1.996L12.86 8.955v6.525c.176.086.342.203.488.348.713.721.713 1.883 0 2.6-.719.721-1.889.721-2.609 0-.719-.719-.719-1.879 0-2.598.182-.18.387-.316.605-.406V8.835c-.217-.091-.424-.222-.6-.401-.545-.545-.676-1.342-.396-2.009L7.636 3.7.45 10.881c-.6.605-.6 1.584 0 2.189l10.48 10.477c.604.604 1.582.604 2.186 0l10.43-10.43c.605-.603.605-1.582 0-2.187"
                        label="Git" />

                    <x-card.small-icon
                        path="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                        label="Tailwind CSS" />

                </div>
    </section>

    {{-- Persönlicher Touch --}}
    <section class="relative bg-white text-black overflow-hidden">
        {{-- Hintergrundbild mit Effekt --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/bg/hund-schach.jpg') }}" alt="Hund am Schachbrett"
                class="h-full ml-auto object-cover grayscale contrast-125" />
            <div class="absolute inset-0 bg-white/80 sm:bg-white/70"></div> {{-- Overlay für Lesbarkeit --}}
        </div>

        {{-- Inhalt --}}
        <div class="relative z-10 py-20 min-h-[60vh] px-4 bitka-mw mx-auto flex items-start justify-center flex-col">
            <x-ui.badge text="Wenn ich nicht programmiere..." />
            <h2 class="text-3xl sm:text-4xl font-bold mb-4 max-w-[30ch]">
                Dann spiele ich Schach oder bin mit meinen Hunden unterwegs.
            </h2>
            <p class="text-base sm:text-lg leading-relaxed text-black/80  max-w-[50ch]">
                Ich glaube an Fokus, Klarheit und Qualität – im Beruf genauso wie im Alltag.
                Meine besten Ideen kommen oft beim Spaziergang mit meinen Hunden <strong>Coco</strong> und
                <strong>Hazel</strong>
                oder beim Nachdenken über das nächste Schachspiel.
            </p>
        </div>
    </section>


    {{-- CTA --}}
    <section class="bg-gray-900 text-white py-24 text-center relative overflow-hidden">
        {{-- Hintergrundbild mit Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/bg/cta-bg.jpg') }}" alt="Abstrakter Hintergrund"
                class="w-full h-full object-cover object-center opacity-40 blur-sm" />
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-800/70 to-gray-900/90"></div>
        </div>
        <div class="container mx-auto px-4 max-w-2xl relative z-10">
            <x-ui.badge text="Interesse geweckt?" variant="dark" />
            <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-balance">Lass uns über dein Projekt sprechen.</h2>
            <p class="text-white/80 mb-8 text-lg text-balance">
                Du suchst einen Partner für Webentwicklung, der Klartext spricht und Ergebnisse liefert? Melde dich oder
                informiere dich über meine Leistungen.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('leistungen') }}"
                    class="inline-block bg-gradient-to-tr from-black/20 to-white/20 text-white/60 px-6 py-3 rounded hover:bg-gray-100 hover:text-black transition">
                    Leistungen entdecken
                </a>

                <div class="flex mx-auto items-center my-2 text-xs">
                    <span class="h-px w-8 bg-white/40"></span>
                    <span class="mx-3 text-white/70">oder</span>
                    <span class="h-px w-8 bg-white/40"></span>
                </div>

                <a href="{{ route('kontakt') }}"
                    class="inline-block bg-gradient-to-l from-two/80 via-one/40 to-three/60 text-white px-6 py-3 rounded hover:bg-gray-100 hover:text-black transition">
                    Kontakt aufnehmen
                </a>
            </div>
        </div>
    </section>

@endsection
