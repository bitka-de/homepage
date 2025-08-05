{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Titel dynamisch, mit Fallback --}}
    <title>@yield('title', 'Bitka – Weblösung für Profis')</title>

    {{-- Meta Description --}}
    <meta name="description" content="@yield('meta_description', 'Wir entwickeln Webseiten, Onlineshops und individuelle Softwarelösungen für Profis.')">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Open Graph (Facebook & Co) --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title') ?? 'Bitka'))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description') ?? 'Weblösungen für Profis'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title') ?? 'Bitka'))">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description') ?? 'Weblösungen für Profis'))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-default.jpg'))">



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
</head>


<body class="font-sans antialiased text-gray-800">
    @include('partials.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')
    @vite('resources/js/app.js')
</body>

</html>
