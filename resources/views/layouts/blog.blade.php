{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Titel dynamisch, mit Fallback --}}
    <title>@yield('title', 'Bitka – Weblösung für Profis')</title>
    <meta name="description" content="@yield('meta_description', 'Wir entwickeln Webseiten, Onlineshops und individuelle Softwarelösungen für Profis.')">
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicons/favicon-32x32.ico') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('images/favicons/mstile-310x310.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('images/favicons/mstile-310x310.png') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
    @stack('styles')
</head>


<body class="font-sans antialiased text-gray-800">
    @include('partials.header')

    <div class="min-h-40 bg-gray-700"></div>

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
