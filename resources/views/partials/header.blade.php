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
                    ['route' => 'ueber-uns', 'label' => 'Über mich'],
                    ['route' => 'webseiten', 'label' => 'Webseiten'],
                    ['route' => 'onlineshops', 'label' => 'Onlineshops'],
                    ['route' => 'programmierung', 'label' => 'Programmierung'],
                    ['route' => 'beratung', 'label' => 'Beratung'],
                ];
            @endphp
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}" class="">{{ $link['label'] }}</a>
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
<div id="mobile-nav" class="sm:hidden fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-40">
    <nav class="flex flex-col gap-3 text-sm font-medium p-6">
        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}" class="hover:underline text-black">{{ $link['label'] }}</a>
        @endforeach
        <a href="{{ route('kontakt') }}" class="bg-black text-white px-3 py-2 rounded hover:bg-gray-800 text-center">Kontakt</a>
    </nav>
</div>

{{-- Mobile Menu Toggle Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('nav-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        toggle?.addEventListener('click', () => {
            mobileNav.classList.toggle('translate-x-full');
            mobileNav.classList.toggle('translate-x-0');
        });
        // Optional: Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileNav.contains(e.target) && !toggle.contains(e.target)) {
                mobileNav.classList.add('translate-x-full');
                mobileNav.classList.remove('translate-x-0');
            }
        });
    });
</script>
</header>
