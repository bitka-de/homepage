{{-- Einleitung --}}
@extends('layouts.base')

@section('title', 'Bitka Links')
@section('meta')
    <meta name="description" content="Alle wichtigen Bitka-Links auf einen Blick.">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <div class="min-h-screen flex py-12 flex-col items-center justify-center px-4 relative overflow-hidden"
        style="background: linear-gradient(135deg, #181c22 0%, #23272f 100%);">
        <canvas id="particles-bg" class="absolute inset-0 w-full h-screen z-0 pointer-events-none"></canvas>


        <div class="w-full max-w-md mx-auto text-center relative z-10 text-balance">
            <img src="{{ asset('images/favicons/android-icon-192x192.png') }}" alt="Bitka Logo"
                class="mx-auto mb-6 w-20 h-20 rounded-lg">
            <p class="text-gray-400 mb-8">Alle wichtigen Links auf einen Blick.</p>
            <div class="flex flex-col gap-8">

                <div
                    class="bg-gradient-to-br from-[#23272f]/50 via-[#181c22] to-[#23272f]/50 border border-one rounded-xl shadow-lg p-6 pb-0 flex flex-col items-center text-center">
                    <div class="mb-4">
                        <span class="inline-block bg-one/20 rounded-full p-3 text-2xl text-one shadow">
                            <svg class="size-12 mx-auto" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M208 40H48a24 24 0 0 0-24 24v112a24 24 0 0 0 24 24h160a24 24 0 0 0 24-24V64a24 24 0 0 0-24-24Zm8 136a8 8 0 0 1-8 8H48a8 8 0 0 1-8-8V64a8 8 0 0 1 8-8h160a8 8 0 0 1 8 8Zm-48 48a8 8 0 0 1-8 8H96a8 8 0 0 1 0-16h64a8 8 0 0 1 8 8Zm-3.56-110.66-48-32A8 8 0 0 0 104 88v64a8 8 0 0 0 12.44 6.66l48-32a8 8 0 0 0 0-13.32ZM120 137.05V103l25.58 17Z" />
                            </svg>
                        </span>
                    </div>
                    <div class="font-bold text-xl text-one mb-2">Exklusive Meta Info Video</div>
                    <p class="text-gray-400 mb-4">Egal ob Instagram oder Co. das ist das einzige Video was du schauen musst
                        um Reichweite in 2025 in Social Media zu generieren.</p>
                    <a href="https://buy.stripe.com/4gM6oIbbH31reXh2aXbV600" target="_blank" rel="noopener"
                        class="inline-flex px-6 py-3 gap-2 mt-2 rounded-t-lg bg-one text-gray-900 font-semibold shadow hover:bg-one transition">
                         <svg viewBox="0 0 256 256" class="size-6 mx-auto">
                            <path
                                d="M232.4 114.49 88.32 26.35a16 16 0 0 0-16.2-.3A15.86 15.86 0 0 0 64 39.87v176.26A15.94 15.94 0 0 0 80 232a16.07 16.07 0 0 0 8.36-2.35l144.04-88.14a15.81 15.81 0 0 0 0-27ZM80 215.94V40l143.83 88Z" />
                        </svg>
                        Video ansehen
                    </a>
                </div>

                <div class="text-left">
                    <div class="text-lg font-thin text-white mb-4 tracking-wide uppercase bg-black/50 p-3 text-center">Dienstleistungen</div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 sm:gap-4 overflow-x-auto flex-nowrap flex sm:grid sm:overflow-visible"
                        style="scroll-snap-type: x mandatory;">
                        <a href="{{ route('webseiten') }}"
                            class="group min-w-[260px] sm:min-w-0 flex-shrink-0 scroll-snap-align-start block w-full p-0 rounded-xl border border-one/40 bg-gradient-to-br from-[#23272f] via-[#181c22] to-[#23272f] shadow-lg hover:border-one hover:shadow-[0_0_16px_4px_#7cfdff44] transition-all duration-300">
                            <div class="flex items-center gap-3 px-4 py-3">
                                <span class="inline-block bg-one/20 rounded-full p-2 text-xl text-one shadow">
                                    <svg class="size-6 mx-auto" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M128 24a104 104 0 1 0 104 104A104.12 104.12 0 0 0 128 24Zm88 104a87.61 87.61 0 0 1-3.33 24h-38.51a157.44 157.44 0 0 0 0-48h38.51a87.61 87.61 0 0 1 3.33 24Zm-114 40h52a115.11 115.11 0 0 1-26 45 115.27 115.27 0 0 1-26-45Zm-3.9-16a140.84 140.84 0 0 1 0-48h59.88a140.84 140.84 0 0 1 0 48ZM40 128a87.61 87.61 0 0 1 3.33-24h38.51a157.44 157.44 0 0 0 0 48H43.33A87.61 87.61 0 0 1 40 128Zm114-40h-52a115.11 115.11 0 0 1 26-45 115.27 115.27 0 0 1 26 45Zm52.33 0h-35.62a135.28 135.28 0 0 0-22.3-45.6A88.29 88.29 0 0 1 206.37 88Zm-98.74-45.6A135.28 135.28 0 0 0 85.29 88H49.63a88.29 88.29 0 0 1 57.96-45.6ZM49.63 168h35.66a135.28 135.28 0 0 0 22.3 45.6A88.29 88.29 0 0 1 49.63 168Zm98.78 45.6a135.28 135.28 0 0 0 22.3-45.6h35.66a88.29 88.29 0 0 1-57.96 45.6Z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="font-bold text-base text-one group-hover:text-two tracking-wide">Webseiten ab
                                    850 €</span>
                            </div>
                        </a>
                        <a href="{{ route('onlineshops') }}"
                            class="group min-w-[260px] sm:min-w-0 flex-shrink-0 scroll-snap-align-start block w-full p-0 rounded-xl border border-two/40 bg-gradient-to-br from-[#23272f] via-[#181c22] to-[#23272f] shadow-lg hover:border-two hover:shadow-[0_0_16px_4px_#eeffa344] transition-all duration-300">
                            <div class="flex items-center gap-3 px-4 py-3">
                                <span class="inline-block bg-two/20 rounded-full p-2 text-xl text-two shadow">
                                    <svg class="size-6 mx-auto" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M232 96a7.89 7.89 0 0 0-.3-2.2l-14.35-50.2A16.07 16.07 0 0 0 202 32H54a16.07 16.07 0 0 0-15.35 11.6L24.31 93.8A7.89 7.89 0 0 0 24 96v16a40 40 0 0 0 16 32v72a8 8 0 0 0 8 8h160a8 8 0 0 0 8-8v-72a40 40 0 0 0 16-32V96ZM54 48h148l11.42 40H42.61Zm50 56h48v8a24 24 0 0 1-48 0Zm-16 0v8a24 24 0 0 1-35.12 21.26 7.88 7.88 0 0 0-1.82-1.06A24 24 0 0 1 40 112v-8Zm112 104H56v-56.8a40.57 40.57 0 0 0 8 .8 40 40 0 0 0 32-16 40 40 0 0 0 64 0 40 40 0 0 0 32 16 40.57 40.57 0 0 0 8-.8Zm4.93-75.8a8.08 8.08 0 0 0-1.8 1.05A24 24 0 0 1 168 112v-8h48v8a24 24 0 0 1-11.07 20.2Z">
                                        </path>
                                    </svg>
                                </span>
                                <span
                                    class="font-bold text-base text-two group-hover:text-one tracking-wide">Onlineshops</span>
                            </div>
                        </a>
                        <a href="{{ route('programmierung') }}"
                            class="group min-w-[260px] sm:min-w-0 flex-shrink-0 scroll-snap-align-start block w-full p-0 rounded-xl border border-three/40 bg-gradient-to-br from-[#23272f] via-[#181c22] to-[#23272f] shadow-lg hover:border-three hover:shadow-[0_0_16px_4px_#ffc6c644] transition-all duration-300">
                            <div class="flex items-center gap-3 px-4 py-3">
                                <span class="inline-block bg-three/20 rounded-full p-2 text-xl text-three shadow">
                                    <svg class="size-6 mx-auto" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M86.75,44.3,33.48,128l53.27,83.7a8,8,0,0,1-2.46,11.05A7.91,7.91,0,0,1,80,224a8,8,0,0,1-6.76-3.71l-56-88a8,8,0,0,1,0-8.59l56-88a8,8,0,1,1,13.5,8.59Zm152,79.41-56-88a8,8,0,1,0-13.5,8.59L222.52,128l-53.27,83.7a8,8,0,0,0,2.46,11.05A7.91,7.91,0,0,0,176,224a8,8,0,0,0,6.76-3.71l56-88A8,8,0,0,0,238.75,123.71Z">
                                        </path>
                                    </svg>
                                </span>
                                <span
                                    class="font-bold text-base text-three group-hover:text-one tracking-wide">Programmierung</span>
                            </div>
                        </a>
                        <a href="{{ route('beratung') }}"
                            class="group min-w-[260px] sm:min-w-0 flex-shrink-0 scroll-snap-align-start block w-full p-0 rounded-xl border border-white/40 bg-gradient-to-br from-[#23272f] via-[#181c22] to-[#23272f] shadow-lg hover:border-one hover:shadow-[0_0_16px_4px_#7cfdff44] transition-all duration-300">
                            <div class="flex items-center gap-3 px-4 py-3">
                                <span class="inline-block bg-white/20 rounded-full p-2 text-xl text-white shadow">
                                    <svg class="size-6 mx-auto" fill="currentColor" viewBox="0 0 256 256">
                                        <path
                                            d="M116 128a12 12 0 1 1 12 12 12 12 0 0 1-12-12Zm-32 12a12 12 0 1 0-12-12 12 12 0 0 0 12 12Zm88 0a12 12 0 1 0-12-12 12 12 0 0 0 12 12Zm60-76v128a16 16 0 0 1-16 16H83l-32.6 28.16-.09.07A15.89 15.89 0 0 1 40 240a16.13 16.13 0 0 1-6.8-1.52A15.85 15.85 0 0 1 24 224V64a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16ZM40 224ZM216 64H40v160l34.77-30a8 8 0 0 1 5.23-2h136Z">
                                        </path>
                                    </svg>
                                </span>
                                <span
                                    class="font-bold text-base text-white group-hover:text-two tracking-wide">Beratung</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    @push('scripts')
        <script>
            // Auffälliger Partikel-Hintergrund
            document.addEventListener('DOMContentLoaded', function() {
                const canvas = document.getElementById('particles-bg');
                if (!canvas) return;
                const ctx = canvas.getContext('2d');
                let w = canvas.width = window.innerWidth;
                let h = canvas.height = window.innerHeight;
                const colors = ['#7cfdff', '#eeffa3', '#ffc6c6', '#23272f', '#181c22'];
                const particles = Array.from({
                    length: 120
                }, () => ({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    r: Math.random() * 4 + 1.5,
                    dx: (Math.random() - 0.5) * 0.5,
                    dy: (Math.random() - 0.5) * 0.5,
                    color: colors[Math.floor(Math.random() * colors.length)]
                }));

                function draw() {
                    ctx.clearRect(0, 0, w, h);
                    ctx.save();
                    ctx.globalAlpha = 0.45;
                    for (const p of particles) {
                        ctx.beginPath();
                        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                        ctx.fillStyle = p.color;
                        ctx.shadowColor = p.color;
                        ctx.shadowBlur = 12;
                        ctx.fill();
                    }
                    ctx.restore();
                }

                function update() {
                    for (const p of particles) {
                        p.x += p.dx;
                        p.y += p.dy;
                        if (p.x < 0 || p.x > w) p.dx *= -1;
                        if (p.y < 0 || p.y > h) p.dy *= -1;
                    }
                }

                function loop() {
                    update();
                    draw();
                    requestAnimationFrame(loop);
                }
                loop();
                window.addEventListener('resize', () => {
                    w = canvas.width = window.innerWidth;
                    h = canvas.height = window.innerHeight;
                });
            });
        </script>
    @endpush


@endsection
