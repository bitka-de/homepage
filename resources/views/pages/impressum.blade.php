@extends('layouts.app')

@section('title', 'Webagentur Bitka | Karlsruhe')
@section('meta_description', 'Starte dein Webprojekt mit Bitka – Webseiten, Onlineshops und individuelle Webentwicklung.')
@section('og_image', asset('images/bitka-preview.jpg'))

@section('content')
    <section class="min-h-[60vh] py-24 flex flex-col justify-center items-center bg-gradient-to-br from-stone-800 to-stone-600 via-black text-white">
        <div class="bitka-mw mx-auto px-4 mt-16 text-center text-balance">
            <x-ui.badge text="Impressum" variant="dark" />
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 drop-shadow-lg">Impressum</h1>
            <p class="text-lg sm:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Angaben gemäß § 5 Digitale-Dienste-Gesetz (DDG) und § 55 Rundfunkstaatsvertrag (RStV) für die Webseite der Webagentur Bitka.
            </p>
            <div class="grid sm:grid-cols-2 gap-8 my-12 text-left">
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">Anbieter</strong>
                    <p class="mb-1">Bitka Webagentur</p>
                    <p>{{ config('company.owner.firstname') }} {{ config('company.owner.name') }}</p>
                    <p>{{ config('company.adress.street') }}</p>
                    <p>{{ config('company.adress.zip') }} {{ config('company.adress.city') }}</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">Kontakt</strong>
                    <p class="mb-1">Telefon: <a href="tel:{{ config('company.contact.phone') }}" class="underline">{{ config('company.contact.phone') }}</a></p>
                    <p>E-Mail: <a href="mailto:{{ config('company.contact.mail') }}" class="underline">{{ config('company.contact.mail') }}</a></p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md sm:col-span-2">
                    <strong class="block font-semibold mb-2 text-three">Steuernummer</strong>
                    <p>{{ config('company.tax.tax-no') }}</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md sm:col-span-2">
                    <strong class="block font-semibold mb-2 text-one">Verantwortlich für den Inhalt</strong>
                    <p>{{ config('company.owner.firstname') }} {{ config('company.owner.name') }}, Anschrift wie oben</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md sm:col-span-2">
                    <strong class="block font-semibold mb-2 text-two">Haftungsausschluss für externe Links</strong>
                    <p>Unsere Webseite enthält ggf. Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
                </div>
            </div>
        </div>
    </section>
@endsection