@extends('layouts.app')

@section('title', 'Webagentur Bitka | Karlsruhe')
@section('meta_description', 'Starte dein Webprojekt mit Bitka – Webseiten, Onlineshops und individuelle Webentwicklung.')
@section('og_image', asset('images/bitka-preview.jpg'))

@section('content')
    <section class="min-h-[60vh] py-24 flex flex-col justify-center items-center bg-gradient-to-br from-stone-800 to-stone-600 via-black text-white">
        <div class="bitka-mw mx-auto px-4 mt-16 text-center text-balance">
            <x-ui.badge text="Datenschutz" variant="dark" />
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 drop-shadow-lg">Datenschutzerklärung</h1>
            <p class="text-lg sm:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Wir nehmen den Schutz deiner persönlichen Daten sehr ernst. Nachfolgend informieren wir dich über die Erhebung, Verarbeitung und Nutzung deiner Daten im Rahmen unserer Webseite gemäß den Vorgaben der DSGVO.
            </p>
            <div class="grid gap-8 mb-12 text-left">
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">Verantwortlicher</strong>
                    <p>Bitka Webagentur<br>
                    {{ config('company.owner.firstname') }} {{ config('company.owner.name') }}<br>
                    {{ config('company.adress.street') }}<br>
                    {{ config('company.adress.zip') }}  {{ config('company.adress.city') }}</p>
                    <p>Telefon: <a href="tel:{{ config('company.contact.phone') }}" class="underline">{{ config('company.contact.phone') }}</a><br>
                    E-Mail: <a href="mailto:{{ config('company.contact.mail') }}" class="underline">{{ config('company.contact.mail') }}</a></p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">Hosting</strong>
                    <p>Unsere Website wird bei Netcup GmbH, Daimlerstraße 25, 76185 Karlsruhe gehostet. Die Server befinden sich in Nürnberg, Deutschland. Es werden Logfiles (z.B. IP-Adresse, Zeitpunkt des Zugriffs) zur Sicherstellung des Betriebs und zur Fehleranalyse gespeichert. Die Datenverarbeitung erfolgt ausschließlich in Deutschland.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">Erhebung und Verarbeitung personenbezogener Daten</strong>
                    <p>Wir verarbeiten personenbezogene Daten (z.B. Name, E-Mail, Telefonnummer), wenn du uns diese freiwillig über das Kontaktformular oder per E-Mail mitteilst. Die Daten werden ausschließlich zur Bearbeitung deiner Anfrage verwendet und nicht ohne deine Einwilligung weitergegeben. Daten, die über das Kontaktformular übermittelt werden, werden nur temporär und zweckgebunden gespeichert und nach Erfüllung des Zwecks (z.B. Beantwortung deiner Anfrage) unverzüglich gelöscht, sofern keine gesetzlichen Aufbewahrungspflichten bestehen.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">Server-Logfiles</strong>
                    <p>Beim Besuch unserer Website werden automatisch Informationen in sogenannten Server-Logfiles gespeichert. Dazu gehören z.B. IP-Adresse, Browsertyp, Betriebssystem, Referrer-URL und Uhrzeit des Zugriffs. Diese Daten dienen ausschließlich der technischen Überwachung und Fehleranalyse und werden nicht mit anderen Datenquellen zusammengeführt.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">Cookies und Laravel</strong>
                    <p>Unsere Website verwendet ausschließlich technisch notwendige Cookies, die für die Funktionalität und Sicherheit erforderlich sind (z.B. Session-Cookies von Laravel). Es werden keine Marketing-, Tracking- oder Analyse-Cookies eingesetzt. Du kannst die Speicherung von Cookies in deinem Browser deaktivieren, allerdings kann die Funktionalität der Website dadurch eingeschränkt sein.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">Deine Rechte</strong>
                    <p>Du hast das Recht auf Auskunft, Berichtigung, Löschung und Einschränkung der Verarbeitung deiner personenbezogenen Daten sowie das Recht auf Datenübertragbarkeit. Bei Fragen oder zur Ausübung deiner Rechte kannst du dich jederzeit an uns wenden.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">Kontakt Datenschutz</strong>
                    <p>Bei Fragen zum Datenschutz kannst du dich jederzeit an uns wenden:<br>
                    E-Mail: <a href="mailto:{{ config('company.contact.mail') }}" class="underline">{{ config('company.contact.mail') }}</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection