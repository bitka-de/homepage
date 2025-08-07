{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Titel dynamisch, mit Fallback --}}
    <title>@yield('title', 'Bitka – Weblösung für Profis')</title>
    <meta name="robots" content="noindex, nofollow">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicons/favicon-32x32.ico') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('images/favicons/mstile-310x310.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('images/favicons/mstile-310x310.png') }}">

    {{-- Styles / Scripts: Vite oder Manifest --}}
    @env('local')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssPath = $manifest['resources/css/app.css']['file'] ?? null;
        $jsPath = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp

    @if ($cssPath)
        <link rel="stylesheet" href="{{ asset('build/' . $cssPath) }}">
    @endif

    @if ($jsPath)
        <script type="module" src="{{ asset('build/' . $jsPath) }}"></script>
    @endif
    @endenv
</head>


<body class="font-sans antialiased text-gray-800 bg-[#23272f]">
    <header class=" text-white py-4 shadow-xl">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2 opacity-70">
                <a href="{{ route('home') }}">
                    <svg viewBox="0 0 256 256" class="size-7">
                        <path fill="none" d="M0 0h256v256H0z" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" d="M32 128h192" />
                        <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" d="M168 128c0 64-40 96-40 96s-40-32-40-96 40-96 40-96 40 32 40 96Z" />
                    </svg>
                </a>

                <a href="{{ route('dashboard') }}" class="text-2xl font-thin text-white/60 hover:underline">Bitka Inside</a>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('profile.edit') }}" class="hover:underline">Profil</a></li>
                    @if (Auth::user() && Auth::user()->role === 'master')
                        <li><a href="{{ route('users.index') }}" class="hover:underline">Benutzer</a></li>
                    @endif

                    <li><a href="{{ route('blog.create') }}" class="hover:underline">Blog</a></li>


                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="hover:underline">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="min-h-screen">
        @yield('content')
    </main>

    @vite('resources/js/app.js')
</body>

</html>
