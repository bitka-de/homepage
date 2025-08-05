<header class="absolute w-full top-0 z-50">
    <div class="navbar flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-xl font-bold text-white drop-shadow" aria-label="Bitka – Startseite">
            <svg fill="none" viewBox="0 0 187 48" class="h-8 w-auto" aria-hidden="true">
                <path fill="currentColor"
                    d="M85 31.2195C85 35.8724 81.272 39 75.0059 39H61V11h13.1872c6.0586 0 9.5847 2.8807 9.5847 7.4513 0 2.5953-1.4355 5.2675-3.8481 6.1344C83.3243 25.3265 85 28.2071 85 31.214v.0055Zm-17.0789-14.535v5.8436h5.2017c2.62 0 4.0555-1.3169 4.0555-3.1276 0-1.8107-1.3919-2.716-4.0555-2.716h-5.2017Zm10.3216 13.6296c0-1.7284-1.4356-2.716-4.0119-2.716h-6.3097v5.6406h6.1842c2.8656 0 4.1374-1.2785 4.1374-2.9246ZM96 11v28h-7V11h7Zm29 6.218h-9.371V39h-7.258V17.218H99V11h26v6.218Zm13.376 11.3273-4.228 4.7746V39H127V11h7.148v12.8475L145.608 11h8.462l-10.953 12.2713L155 39h-8.924l-7.7-10.4602v.0055Zm39.148 5.6362h-12.081L163.553 39H156l12.12-28h6.799L187 39h-7.553l-1.929-4.8185h.006Zm-2.309-5.8064-3.735-9.4284-3.734 9.4284h7.469ZM40.9031 10.9173C40.537 2.36185 33.3161 0 24.4844 0H0v31.9102C0 40.7798 7.37292 48 16.4356 48h15.1232C40.6271 48 48 40.7798 48 31.9102V10.9173h-7.0969Zm-.766 20.9929c0 4.5554-3.8414 8.2525-8.5783 8.2525H16.4356c-4.7313 0-8.57266-3.6914-8.57266-8.2525V7.8317H24.4788c4.7369 0 8.5726 2.00841 8.5726 6.5694l-9.6372 13.9748 16.7172-6.8219v10.3562h.0057Z" />
            </svg>
        </a>

        {{-- Mobile Toggle --}}
        <button id="nav-toggle" class="sm:hidden text-black focus:outline-none absolute top-0 m-2 right-0 bg-white p-3" aria-label="Menü öffnen">
            <svg viewBox="0 0 256 256" class="h-6" aria-hidden="true">
                <path fill="none" d="M0 0h256v256H0z" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="16" d="M40 128h176M40 64h176M40 192h176" />
            </svg>
        </button>

        {{-- Navigation --}}
        <nav id="main-nav" class="hidden sm:flex gap-6 items-center text-sm font-medium bg-back/70 backdrop-blur-md p-2 shadow border-b border-white/20 rounded-lg *:hover:text-white text-white/60 px-4">
            @php
                $links = [
                    ['route' => 'home', 'label' => 'Startseite'],
                    ['route' => 'ueber-uns', 'label' => 'Über mich'],
                    ['route' => 'webseiten', 'label' => 'Webseiten'],
                    ['route' => 'onlineshops', 'label' => 'Onlineshops'],
                    ['route' => 'programmierung', 'label' => 'Programmierung'],
                    ['route' => 'beratung', 'label' => 'Beratung'],
                ];
            @endphp
            @foreach ($links as $link)

            @if($link['route'] !== 'home')
                <a href="{{ route($link['route']) }}" class="">{{ $link['label'] }}</a>
            @endif
            @endforeach
            <a 
                href="{{ route('kontakt') }}" 
                class="bg-black/60 text-white px-3 py-2 rounded transition-colors duration-200 hover:bg-black hover:outline  hover:outline-offset-2"
            >
                Kontakt
            </a>
        </nav>
    </div>

{{-- Mobile Navigation --}}
<div id="mobile-mask" class="sm:hidden fixed inset-0 bg-black/60 backdrop-blur-md z-30 transition-opacity duration-300 opacity-0 pointer-events-none"></div>
<div id="mobile-nav" class="sm:hidden fixed flex items-center justify-end top-0 right-0 h-full w-80 bg-gradient-to-bl from-black to-gray-800 shadow-2xl transform translate-x-full transition-transform duration-300 z-40 cp-1 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <svg class="absolute animate-move-slow left-8 top-16" width="80" height="80" viewBox="0 0 80 80">
            <defs>
                <filter id="blur1" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="12" />
                </filter>
            </defs>
            <circle cx="40" cy="40" r="32" class="fill-one/30" filter="url(#blur1)" />
        </svg>
        <svg class="absolute animate-move-medium right-10 top-32" width="60" height="60" viewBox="0 0 60 60">
            <defs>
                <filter id="blur2" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="10" />
                </filter>
            </defs>
            <rect x="10" y="10" width="40" height="40" rx="8" class="fill-two/30" filter="url(#blur2)" />
        </svg>
        <svg class="absolute animate-move-fast left-20 bottom-10" width="50" height="50" viewBox="0 0 50 50">
            <defs>
                <filter id="blur3" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="8" />
                </filter>
            </defs>
            <polygon points="25,5 45,45 5,45" class="fill-three/30" filter="url(#blur3)" />
        </svg>
        <!-- Wechselnde Formen und Farben -->
        <svg class="absolute animate-move-fast right-8 bottom-20" width="60" height="60" viewBox="0 0 60 60">
            <defs>
                <filter id="blur4" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="14" />
                </filter>
            </defs>
            <circle cx="30" cy="30" r="24" class="fill-three/20" filter="url(#blur4)" />
        </svg>
        <svg class="absolute animate-move-medium left-10 top-40" width="50" height="50" viewBox="0 0 50 50">
            <defs>
                <filter id="blur5" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="10" />
                </filter>
            </defs>
            <rect x="8" y="8" width="34" height="34" rx="6" class="fill-one/20" filter="url(#blur5)" />
        </svg>
        <svg class="absolute animate-move-slow right-16 top-10" width="40" height="40" viewBox="0 0 40 40">
            <defs>
                <filter id="blur6" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="7" />
                </filter>
            </defs>
            <polygon points="20,5 35,35 5,35" class="fill-two/10" filter="url(#blur6)" />
        </svg>
    </div>
    <nav class="flex flex-col gap-6 text-2xl font-bold p-8 text-right relative z-10">
        @foreach ($links as $link)
            <a 
            href="{{ route($link['route']) }}" 
            class="text-white transition-all duration-200 pr-2 {{ Route::currentRouteName() === $link['route'] ? '!text-one' : 'hover:text-one' }}"
            >
            {{ $link['label'] }}
            </a>
        @endforeach
        <a href="{{ route('kontakt') }}" class="bg-black font-thin text-white px-5 py-3 rounded-lg self-end hover:bg-one text-right">Kontakt</a>
    </nav>
</div>

{{-- Mobile Menu Toggle Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('nav-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        const mobileMask = document.getElementById('mobile-mask');
        function openMobileNav() {
            mobileNav.classList.remove('translate-x-full');
            mobileNav.classList.add('translate-x-0');
            mobileMask.classList.remove('opacity-0', 'pointer-events-none');
            mobileMask.classList.add('opacity-100');
            mobileMask.style.pointerEvents = 'auto';
        }
        function closeMobileNav() {
            mobileNav.classList.add('translate-x-full');
            mobileNav.classList.remove('translate-x-0');
            mobileMask.classList.add('opacity-0');
            mobileMask.classList.remove('opacity-100');
            mobileMask.style.pointerEvents = 'none';
        }
        toggle?.addEventListener('click', openMobileNav);
        mobileMask?.addEventListener('click', closeMobileNav);
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeMobileNav();
        });
        // Optional: Close menu when clicking outside nav/toggle
        document.addEventListener('click', (e) => {
            if (!mobileNav.contains(e.target) && !toggle.contains(e.target) && !mobileMask.contains(e.target)) {
                closeMobileNav();
            }
        });
    });
</script>
<style>
@keyframes moveSlow {
    0% { transform: translateY(0) scale(1) rotate(0deg); }
    25% { transform: translateY(10px) scale(1.05) rotate(3deg); }
    50% { transform: translateY(0) scale(1) rotate(-2deg); }
    75% { transform: translateY(-8px) scale(0.98) rotate(2deg); }
    100% { transform: translateY(0) scale(1) rotate(0deg); }
}
@keyframes moveMedium {
    0% { transform: translateY(0) scale(1) rotate(0deg); }
    25% { transform: translateY(-8px) scale(0.98) rotate(-2deg); }
    50% { transform: translateY(0) scale(1.03) rotate(2deg); }
    75% { transform: translateY(8px) scale(1) rotate(-3deg); }
    100% { transform: translateY(0) scale(1) rotate(0deg); }
}
@keyframes moveFast {
    0% { transform: translateX(0) scale(1) rotate(0deg); }
    25% { transform: translateX(12px) scale(1.03) rotate(2deg); }
    50% { transform: translateX(0) scale(1) rotate(-2deg); }
    75% { transform: translateX(-10px) scale(0.97) rotate(3deg); }
    100% { transform: translateX(0) scale(1) rotate(0deg); }
}
.animate-move-slow { animation: moveSlow 6s ease-in-out infinite alternate; }
.animate-move-medium { animation: moveMedium 5s ease-in-out infinite alternate; }
.animate-move-fast { animation: moveFast 4s ease-in-out infinite alternate; }
</style>
</header>
