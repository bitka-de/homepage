@extends('layouts.landing')

@section('title', 'Meta25 Infovideo – Mehr Reichweite & Umsatz 2025')
@section('meta_description', 'Meta25: Das exklusive Infovideo für Instagram & Co. 2025. Erfahre aktuelle Strategien, No-Go’s und praxisnahe Tipps für mehr Reichweite und Umsatz. Jetzt Zugang sichern!')
@section('og_image', asset('media/video.png'))

@section('content')

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 flex items-center gap-3"
            role="alert" aria-live="assertive">
            <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4m0 4h.01M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" />
            </svg>
            <div>
                <strong>Fehler:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 flex items-center gap-3"
            role="alert" aria-live="assertive">
            <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4m0 4h.01M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" />
            </svg>
            <div>
                <strong>Fehler:</strong> {{ session('error') }}
            </div>
        </div>
    @endif
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center gap-3"
            role="status" aria-live="polite">
            <svg class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <div>
                <strong>Erfolg:</strong> {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Conversion-Optimized Sticky Header -->
    <header
        class="sticky top-0 z-50 bg-gradient-to-r from-purple-900 via-pink-700 to-red-600 backdrop-blur border-b border-transparent shadow-lg">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <div class="flex items-center gap-3 text-white">
                <svg viewBox="0 0 256 256" class="size-7 animate-bounce" fill="currentColor">
                    <path
                        d="M223.85 47.12a16 16 0 0 0-15-15c-12.58-.75-44.73.4-71.41 27.07L132.69 64H74.36A15.91 15.91 0 0 0 63 68.68L28.7 103a16 16 0 0 0 9.07 27.16l38.47 5.37 44.21 44.21 5.37 38.49a15.94 15.94 0 0 0 10.78 12.92 16.11 16.11 0 0 0 5.1.83 15.91 15.91 0 0 0 11.3-4.68l34.32-34.3a15.91 15.91 0 0 0 4.68-11.36v-58.33l4.77-4.77c26.68-26.68 27.83-58.83 27.08-71.42ZM74.36 80h42.33l-39.53 39.52L40 114.34Zm74.41-9.45a76.65 76.65 0 0 1 59.11-22.47 76.46 76.46 0 0 1-22.42 59.16L128 164.68 91.32 128ZM176 181.64 141.67 216l-5.19-37.17L176 139.31Zm-74.16 9.5C97.34 201 82.29 224 40 224a8 8 0 0 1-8-8c0-42.29 23-57.34 32.86-61.85a8 8 0 0 1 6.64 14.56c-6.43 2.93-20.62 12.36-23.12 38.91 26.55-2.5 36-16.69 38.91-23.12a8 8 0 1 1 14.56 6.64Z" />
                </svg>
                <span class="font-extrabold text-2xl tracking-wide drop-shadow-lg">Meta25</span>
            </div>
            <nav class="hidden md:flex gap-8 text-base font-bold">
                <a href="#video" class="hover:text-yellow-300 transition">Teaser</a>
                <a href="#inhalte" class="hover:text-yellow-300 transition">Inhalte</a>
                <a href="#stimmen" class="hover:text-yellow-300 transition">Stimmen</a>
                <a href="#kaufen" class="hover:text-yellow-300 transition">Kaufen</a>
            </nav>
            <a href="#kaufen"
                class="hidden md:inline-block rounded-full bg-yellow-400 px-6 py-2 text-purple-900 font-bold shadow-lg hover:bg-yellow-300 transition animate-pulse">Jetzt
                kaufen</a>
        </div>
    </header>
    <!-- Conversion-Optimized Hero -->
    <section
        class="relative bg-gradient-to-r from-purple-900 via-pink-700 to-red-600 px-6 py-32 text-center text-white overflow-hidden flex flex-col items-center justify-center">
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-white/10 rounded-full blur-3xl animate-pulse">
            </div>
        </div>
        <div class="mx-auto max-w-2xl z-10">
            <h1 class="mb-6 text-5xl leading-tight font-extrabold drop-shadow-2xl tracking-tight">🚀 Mehr Reichweite. Mehr
                Umsatz. <span class="text-yellow-400">Meta25</span></h1>
            <p class="mb-8 text-xl md:text-2xl font-medium">Das <span class="text-yellow-300 font-bold">exklusive
                    Infovideo</span> für alle, die 2025 auf Instagram & Co. durchstarten wollen. <span
                    class="block mt-2 text-lg text-white/80">Sichere dir jetzt deinen Zugang und erfahre, wie du <span
                        class="underline decoration-yellow-400">Fehler vermeidest</span> und <span
                        class="underline decoration-yellow-400">deine Community verdoppelst</span>.</span></p>
            <div class="flex flex-col md:flex-row gap-4 justify-center items-center mt-8">
                <a href="#video"
                    class="rounded-full bg-yellow-400 px-10 py-5 text-2xl font-extrabold text-purple-900 shadow-xl transition hover:scale-110 hover:bg-yellow-300 active:scale-95 duration-200 animate-bounce">Vorschau
                    ansehen</a>
            </div>

        </div>
    </section>

    <!-- Video Teaser Bereich -->
    <section id="video" class="bg-gradient-to-br from-purple-100 via-pink-100 to-white px-6 py-20 text-center relative">
        <h2 class="mb-6 text-3xl font-bold text-purple-700 relative z-30">Meta Infovideo</h2>
        <p class="mb-8 text-lg text-gray-700 z-30 relative">Schau dir den Teaser an! Das komplette Video gibt’s nach dem
            Kauf.</p>

        <div id="videoOverlay" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm z-40 transition-opacity"></div>
        <div class="mx-auto max-w-2xl relative z-40">
            <div class="relative rounded-lg overflow-clip w-full aspect-video">
                <video id="meta25teaser" class="absolute z-50 top-0 left-0 w-full h-full "
                    src="{{ asset('media/meta-webinar-prev.mp4') }}" poster="{{ asset('media/prev.png') }}"></video>
            </div>
            <div class="mt-4 flex flex-col items-center gap-2">
                <div class="w-full max-w-lg flex items-center gap-3">
                    <span id="currentTime" class="text-xs font-mono text-gray-600 min-w-[40px]">00:00</span>
                    <div class="flex-1 h-2 bg-gray-300 rounded-full relative overflow-hidden">
                        <div id="progressBar" class="h-2 bg-purple-600 rounded-full transition-all" style="width:0%"></div>
                    </div>
                    <span id="remainingTime" class="text-xs font-mono text-gray-600 min-w-[40px]">-00:00</span>
                </div>
            </div>
            <div class="mt-6 flex justify-center gap-4">
                <button id="toggleBtn"
                    class="bg-purple-700 text-white px-6 py-2 rounded-full font-bold shadow hover:bg-pink-600 transition">Play</button>
                <button id="fullscreenBtn"
                    class="bg-gray-200 text-purple-700 px-6 py-2 rounded-full font-bold shadow hover:bg-purple-100 transition flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 4h6M4 4v6M4 4l6 6M20 20h-6M20 20v-6M20 20l-6-6" />
                    </svg>

                </button>
            </div>
            <div class="mt-10">
                <a id="ctaBtn" href="#kaufen"
                    class="inline-block rounded-full bg-pink-600 px-8 py-4 text-white font-bold shadow-lg transition hover:bg-purple-700 opacity-0 pointer-events-none">Jetzt
                    komplettes Video ansehen</a>
            </div>
        </div>
        <script>
            const video = document.getElementById('meta25teaser');
            const ctaBtn = document.getElementById('ctaBtn');
            const toggleBtn = document.getElementById('toggleBtn');
            const fullscreenBtn = document.getElementById('fullscreenBtn');
            const overlay = document.getElementById('videoOverlay');
            const progressBar = document.getElementById('progressBar');
            const currentTimeEl = document.getElementById('currentTime');
            const remainingTimeEl = document.getElementById('remainingTime');
            let isPlaying = false;

            video.removeAttribute('controls');

            function formatTime(seconds) {
                const m = Math.floor(seconds / 60);
                const s = Math.floor(seconds % 60);
                return `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
            }

            function updateProgress() {
                if (video.duration) {
                    const percent = (video.currentTime / video.duration) * 100;
                    progressBar.style.width = percent + '%';
                    currentTimeEl.textContent = formatTime(video.currentTime);
                    const remaining = video.duration - video.currentTime;
                    remainingTimeEl.textContent = '-' + formatTime(remaining);
                } else {
                    progressBar.style.width = '0%';
                    currentTimeEl.textContent = '00:00';
                    remainingTimeEl.textContent = '-00:00';
                }
            }

            toggleBtn.onclick = () => {
                if (isPlaying) {
                    video.pause();
                    toggleBtn.textContent = 'Play';
                    overlay.classList.add('hidden');
                } else {
                    video.play();
                    toggleBtn.textContent = 'Stopp';
                    overlay.classList.remove('hidden');
                }
                isPlaying = !isPlaying;
            };

            fullscreenBtn.onclick = () => {
                if (video.requestFullscreen) {
                    video.requestFullscreen();
                } else if (video.webkitRequestFullscreen) {
                    video.webkitRequestFullscreen();
                } else if (video.msRequestFullscreen) {
                    video.msRequestFullscreen();
                }
            };

            video.addEventListener('pause', () => {
                toggleBtn.textContent = 'Play';
                overlay.classList.add('hidden');
                isPlaying = false;
            });

            video.addEventListener('play', () => {
                toggleBtn.textContent = 'Stopp';
                overlay.classList.remove('hidden');
                isPlaying = true;
            });

            video.addEventListener('ended', () => {
                ctaBtn.classList.remove('opacity-0', 'pointer-events-none');
                ctaBtn.classList.add('opacity-100');
                toggleBtn.textContent = 'Play';
                overlay.classList.add('hidden');
                isPlaying = false;
            });

            video.addEventListener('timeupdate', updateProgress);
            video.addEventListener('loadedmetadata', updateProgress);
        </script>
    </section>

    <!-- Inhalte -->
    <section id="inhalte" class="bg-transparent px-6 py-20">
        <div class="mx-auto grid max-w-6xl gap-8 md:grid-cols-3">
            <div class="glass p-8 text-center shadow-xl transition hover:scale-105 duration-200">
                <h3 class="mb-3 text-xl font-bold flex gap-2 justify-center">
                    <svg viewBox="0 0 256 256" class=" size-8 inline-flex fill-blue-500">
                        <path
                            d="M225.86 102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28 23.51 138.44 16 128 16s-18.27 7.51-25.18 14.14c-3.94 3.77-8 7.67-11.57 9.14-3.25 1.36-8.69 1.44-13.94 1.52-9.76.15-20.82.31-28.51 8s-7.8 18.75-8 28.51c-.08 5.25-.16 10.67-1.52 13.94-1.47 3.56-5.37 7.63-9.14 11.57C23.51 109.72 16 117.56 16 128s7.51 18.27 14.14 25.18c3.77 3.94 7.67 8 9.14 11.57 1.36 3.27 1.44 8.69 1.52 13.94.15 9.76.31 20.82 8 28.51s18.75 7.85 28.51 8c5.25.08 10.67.16 13.94 1.52 3.56 1.47 7.63 5.37 11.57 9.14 6.9 6.63 14.74 14.14 25.18 14.14s18.27-7.51 25.18-14.14c3.94-3.77 8-7.67 11.57-9.14 3.27-1.36 8.69-1.44 13.94-1.52 9.76-.15 20.82-.31 28.51-8s7.85-18.75 8-28.51c.08-5.25.16-10.67 1.52-13.94 1.47-3.56 5.37-7.63 9.14-11.57 6.63-6.9 14.14-14.74 14.14-25.18s-7.51-18.27-14.14-25.18Zm-11.55 39.29c-4.79 5-9.75 10.17-12.38 16.52-2.52 6.1-2.63 13.07-2.73 19.82-.1 7-.21 14.33-3.32 17.43s-10.39 3.22-17.43 3.32c-6.75.1-13.72.21-19.82 2.73-6.35 2.63-11.52 7.59-16.52 12.38S132 224 128 224s-9.15-4.92-14.11-9.69-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82-2.63-6.35-7.59-11.52-12.38-16.52S32 132 32 128s4.92-9.15 9.69-14.11 9.75-10.17 12.38-16.52c2.52-6.1 2.63-13.07 2.73-19.82.1-7 .21-14.33 3.32-17.43s10.39-3.22 17.43-3.32c6.75-.1 13.72-.21 19.82-2.73 6.35-2.63 11.52-7.59 16.52-12.38S124 32 128 32s9.15 4.92 14.11 9.69 10.17 9.75 16.52 12.38c6.1 2.52 13.07 2.63 19.82 2.73 7 .1 14.33.21 17.43 3.32s3.22 10.39 3.32 17.43c.1 6.75.21 13.72 2.73 19.82 2.63 6.35 7.59 11.52 12.38 16.52S224 124 224 128s-4.92 9.15-9.69 14.11Zm-40.65-43.77a8 8 0 0 1 0 11.32l-56 56a8 8 0 0 1-11.32 0l-24-24a8 8 0 0 1 11.32-11.32L112 148.69l50.34-50.35a8 8 0 0 1 11.32 0Z" />
                    </svg>
                    Aktuelle Strategien
                </h3>
                <p class="text-gray-700">Was 2025 wirklich Reichweite auf Instagram & Co. bringt.</p>
            </div>
            <div class="glass p-8 text-center shadow-xl transition hover:scale-105 duration-200">
                <h3 class="mb-3 text-xl font-bold flex gap-2 justify-center">
                    <svg viewBox="0 0 256 256" class=" size-8 inline-flex fill-red-500">
                        <path
                            d="M120 136V96a8 8 0 0 1 16 0v40a8 8 0 0 1-16 0Zm8 48a12 12 0 1 0-12-12 12 12 0 0 0 12 12Zm96-128v56c0 52.72-25.52 84.67-46.93 102.19-23.06 18.86-46 25.27-47 25.53a8 8 0 0 1-4.2 0c-1-.26-23.91-6.67-47-25.53C57.52 196.67 32 164.72 32 112V56a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16Zm-16 0H48v56c0 37.3 13.82 67.51 41.07 89.81A128.25 128.25 0 0 0 128 223.62a129.3 129.3 0 0 0 39.41-22.2C194.34 179.16 208 149.07 208 112Z" />
                    </svg>
                    No-Go’s
                </h3>
                <p class="text-gray-700">Welche Fehler du vermeiden musst, um nicht als Spam zu gelten.</p>
            </div>
            <div class="glass p-8 text-center shadow-xl transition hover:scale-105 duration-200">
                <h3 class="mb-3 text-xl font-bold flex gap-2 justify-center">
                    <svg viewBox="0 0 256 256" class=" size-8 inline-flex fill-green-500">
                        <path
                            d="M234 80.12A24 24 0 0 0 216 72h-56V56a40 40 0 0 0-40-40 8 8 0 0 0-7.16 4.42L75.06 96H32a16 16 0 0 0-16 16v88a16 16 0 0 0 16 16h172a24 24 0 0 0 23.82-21l12-96A24 24 0 0 0 234 80.12ZM32 112h40v88H32Zm191.94-15-12 96a8 8 0 0 1-7.94 7H88v-94.11l36.71-73.43A24 24 0 0 1 144 56v24a8 8 0 0 0 8 8h64a8 8 0 0 1 7.94 9Z" />
                    </svg>
                    Praxisnah
                </h3>
                <p class="text-gray-700">Direkt umsetzbare Tipps für dein Wachstum – ab heute.</p>
            </div>
        </div>
    </section>

    <!-- Agenda / Überblick -->
    <section id="agenda" class="px-6 py-20">
        <div class="mx-auto max-w-4xl glass p-10 text-center shadow-xl">
            <h2 class="mb-6 text-3xl font-bold text-purple-700 flex items-center justify-center gap-2">
                <svg viewBox="0 0 256 256" class="size-8 inline-flex fill-purple-700">
                    <path
                        d="M128 24a104 104 0 1 0 104 104A104.12 104.12 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88Zm8-152h-16v64l56 33.94l8-13.81l-48-29.13Z" />
                </svg>
                Überblick & Agenda
            </h2>
            <ul class="mb-8 text-lg text-left mx-auto max-w-2xl list-disc list-inside text-gray-700">
                <li>Die wichtigsten Meta-Updates 2025</li>
                <li>Engagement-Regeln & Content-Moderation</li>
                <li>SEO & Google-Indexierung</li>
                <li>Instagram Features & KI</li>
                <li>Werberichtlinien & Datenschutz</li>
                <li>Domain-Tipps für mehr Reichweite</li>
                <li>Strategien & praktische Tipps</li>
                <li>FAQ</li>
            </ul>
            <a href="#video"
                class="rounded-full bg-purple-700 px-8 py-4 font-bold text-white shadow-lg transition hover:scale-110 hover:bg-pink-600 active:scale-95 duration-200">Teaser
                ansehen</a>
        </div>
    </section>


    <!-- Social Proof -->
    <section id="stimmen" class="bg-white/80 px-6 py-20 text-center backdrop-blur">
        <div class="mx-auto max-w-3xl">
            <h2 class="mb-6 text-3xl font-bold">🔥 Stimmen zu Meta25</h2>
            <div class="grid gap-6 md:grid-cols-3">
                <div class="glass p-6 shadow-xl flex flex-col items-center">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Lisa M."
                        class="w-16 h-16 rounded-full mb-4 shadow-lg border-2 border-purple-200 object-cover">
                    <p class="text-gray-700 italic">„Kurz, knackig, auf den Punkt – endlich weiß ich, was 2025 noch
                        funktioniert.“</p>
                    <span class="mt-3 block font-semibold text-purple-600">Lisa M.<br><span
                            class="text-xs text-gray-500">Berlin</span></span>
                </div>
                <div class="glass p-6 shadow-xl flex flex-col items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Kevin H."
                        class="w-16 h-16 rounded-full mb-4 shadow-lg border-2 border-purple-200 object-cover">
                    <p class="text-gray-700 italic">„Hab sofort Tipps umgesetzt und meine Reichweite ist direkt gestiegen.“
                    </p>
                    <span class="mt-3 block font-semibold text-purple-600">Kevin H.<br><span
                            class="text-xs text-gray-500">Hamburg</span></span>
                </div>
                <div class="glass p-6 shadow-xl flex flex-col items-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah K."
                        class="w-16 h-16 rounded-full mb-4 shadow-lg border-2 border-purple-200 object-cover">
                    <p class="text-gray-700 italic">„Meta25 spart mir stundenlanges Testen. Absolute Empfehlung.“</p>
                    <span class="mt-3 block font-semibold text-purple-600">Sarah K.<br><span
                            class="text-xs text-gray-500">München</span></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Kauf CTA -->
    <section id="kaufen"
        class="bg-gradient-to-r from-purple-700 via-pink-600 to-red-500 px-6 py-24 text-center text-white">
        <div class="mx-auto max-w-3xl">
            <h2 class="mb-4 text-4xl font-extrabold drop-shadow-lg text-balance">Sichere dir jetzt deinen Zugang</h2>
            <p class="mb-8 text-lg text-balance">Hol dir das volle 35-minütige Infovideo für nur <strong>19 €</strong> –
                sofort
                verfügbar nach dem Kauf.</p>

            <div class="bg-white/90 rounded-2xl shadow-2xl p-8 mx-auto max-w-lg border-4 border-pink-600">
                <form action="{{ route('meta.checkout') }}" method="POST" class="flex flex-col items-center gap-6">
                    @csrf
                    <div class="text-center">
                        <span class="text-2xl font-bold text-gray-800">Statt <span
                                class="line-through inline-block text-gray-400">29&nbsp;€</span></span>
                        <span class="ml-2 block text-4xl font-extrabold text-pink-600 drop-shadow">
                            Jetzt nur <span class="">19&nbsp;€</span></span>
                    </div>
                    <ul class="text-left text-gray-700 space-y-1.5 text-balance">
                        <li><span class="font-bold text-pink-600">Sofortiger Zugang</span> zum kompletten Video</li>
                        <li><span class="font-bold text-pink-600">Praxis-Tipps</span> für mehr Reichweite</li>
                    </ul>
                    <button type="submit"
                        class="w-full rounded-full bg-gradient-to-r from-pink-600 via-purple-700 to-red-500 px-10 py-5 text-2xl font-extrabold text-white shadow-xl transition hover:scale-105 hover:bg-pink-700 active:scale-95 duration-200">
                        Jetzt kaufen
                    </button>

                    <p class="text-xs text-black opacity-80">Sicher zahlen via <svg
                            class="InlineSVG inline-flex fill-black Icon BJN199Au__PoweredByStripe-icon Icon--md"
                            focusable="false" width="33" height="15" role="img"
                            aria-labelledby="stripe-title">
                            <title id="stripe-title">Stripe</title>
                            <g fill-rule="evenodd">
                                <path
                                    d="M32.956 7.925c0-2.313-1.12-4.138-3.261-4.138-2.15 0-3.451 1.825-3.451 4.12 0 2.719 1.535 4.092 3.74 4.092 1.075 0 1.888-.244 2.502-.587V9.605c-.614.307-1.319.497-2.213.497-.876 0-1.653-.307-1.753-1.373h4.418c0-.118.018-.588.018-.804zm-4.463-.859c0-1.02.624-1.445 1.193-1.445.55 0 1.138.424 1.138 1.445h-2.33zM22.756 3.787c-.885 0-1.454.415-1.77.704l-.118-.56H18.88v10.535l2.259-.48.009-2.556c.325.235.804.57 1.6.57 1.616 0 3.089-1.302 3.089-4.166-.01-2.62-1.5-4.047-3.08-4.047zm-.542 6.225c-.533 0-.85-.19-1.066-.425l-.009-3.352c.235-.262.56-.443 1.075-.443.822 0 1.391.922 1.391 2.105 0 1.211-.56 2.115-1.39 2.115zM18.04 2.766V.932l-2.268.479v1.843zM15.772 3.94h2.268v7.905h-2.268zM13.342 4.609l-.144-.669h-1.952v7.906h2.259V6.488c.533-.696 1.436-.57 1.716-.47V3.94c-.289-.108-1.346-.307-1.879.669zM8.825 1.98l-2.205.47-.009 7.236c0 1.337 1.003 2.322 2.34 2.322.741 0 1.283-.135 1.581-.298V9.876c-.289.117-1.716.533-1.716-.804V5.865h1.716V3.94H8.816l.009-1.96zM2.718 6.235c0-.352.289-.488.767-.488.687 0 1.554.208 2.241.578V4.202a5.958 5.958 0 0 0-2.24-.415c-1.835 0-3.054.957-3.054 2.557 0 2.493 3.433 2.096 3.433 3.17 0 .416-.361.552-.867.552-.75 0-1.708-.307-2.467-.723v2.15c.84.362 1.69.515 2.467.515 1.879 0 3.17-.93 3.17-2.548-.008-2.692-3.45-2.213-3.45-3.225z">
                                </path>
                            </g>
                        </svg> • Sofortiger Zugriff</p>


                </form>
            </div>
            <div class="text-xs mt-4 text-white flex items-center gap-2 justify-center">
                <svg class="inline-block fill-pink-600" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 1.01 4.5 2.09C13.09 4.01 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54z" />
                </svg>
                Über 100+ begeisterte Käufer
            </div>
        </div>
    </section>


    <footer class="bg-gray-900 text-gray-300 px-6 py-10">
        <div class="mx-auto max-w-6xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <svg viewBox="0 0 256 256" class="size-7 fill-purple-500">
                    <path
                        d="M223.85 47.12a16 16 0 0 0-15-15c-12.58-.75-44.73.4-71.41 27.07L132.69 64H74.36A15.91 15.91 0 0 0 63 68.68L28.7 103a16 16 0 0 0 9.07 27.16l38.47 5.37 44.21 44.21 5.37 38.49a15.94 15.94 0 0 0 10.78 12.92 16.11 16.11 0 0 0 5.1.83 15.91 15.91 0 0 0 11.3-4.68l34.32-34.3a15.91 15.91 0 0 0 4.68-11.36v-58.33l4.77-4.77c26.68-26.68 27.83-58.83 27.08-71.42ZM74.36 80h42.33l-39.53 39.52L40 114.34Zm74.41-9.45a76.65 76.65 0 0 1 59.11-22.47 76.46 76.46 0 0 1-22.42 59.16L128 164.68 91.32 128ZM176 181.64 141.67 216l-5.19-37.17L176 139.31Zm-74.16 9.5C97.34 201 82.29 224 40 224a8 8 0 0 1-8-8c0-42.29 23-57.34 32.86-61.85a8 8 0 0 1 6.64 14.56c-6.43 2.93-20.62 12.36-23.12 38.91 26.55-2.5 36-16.69 38.91-23.12a8 8 0 1 1 14.56 6.64Z" />
                </svg>
                <span class="font-bold text-lg text-white">Meta25</span>
            </div>
            <nav class="flex gap-6 text-sm">
                <a href="#video" class="hover:text-pink-400 transition">Teaser</a>
                <a href="#inhalte" class="hover:text-pink-400 transition">Inhalte</a>
                <a href="#stimmen" class="hover:text-pink-400 transition">Stimmen</a>
                <a href="#kaufen" class="hover:text-pink-400 transition">Kaufen</a>
            </nav>
            <div class="text-xs text-gray-400 text-center md:text-right">
                &copy; {{ date('Y') }} Webagentur Bitka &ndash; <a href="/impressum"
                    class="underline hover:text-pink-400">Impressum</a> &middot; <a href="/datenschutz"
                    class="underline hover:text-pink-400">Datenschutz</a>
            </div>
        </div>
    </footer>

@endsection
