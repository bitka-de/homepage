@extends('layouts.app')

@section('title', 'AGB | Webagentur Bitka')
@section('meta_description', 'Allgemeine Geschäftsbedingungen der Webagentur Bitka – transparente Regeln für erfolgreiche Webprojekte.')
@section('og_image', asset('images/bitka-preview.jpg'))

@section('content')
    <section class="min-h-[60vh] py-24 flex flex-col justify-center items-center bg-gradient-to-br from-stone-800 to-stone-600 via-black text-white">
        <div class="bitka-mw mx-auto px-4 text-center text-balance">
            <x-ui.badge text="AGB" variant="dark" />
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 drop-shadow-lg">Allgemeine Geschäftsbedingungen (AGB)</h1>
            <p class="text-lg sm:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Die nachfolgenden Bedingungen regeln die Zusammenarbeit zwischen Dir und der {{ config('company.name.long') }}.<br>
                <span class="text-sm mt-4 select-none">Anbieter: {{ config('company.name.long') }}, <span class="opacity-30">Inh:</span> {{ config('company.owner.firstname') }} {{ config('company.owner.name') }}, {{ config('company.adress.street') }}, {{ config('company.adress.zip') }} {{ config('company.adress.city') }}</span>
            </p>
            <div class="grid gap-8 mb-12 text-left">
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">§1. Geltungsbereich</strong>
                    <p>Diese AGB gelten für alle Verträge, Leistungen und Angebote der Webagentur Bitka gegenüber ihren Kunden.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">§2. Vertragsabschluss</strong>
                    <p>Ein Vertrag kommt durch schriftliche Bestätigung, E-Mail oder die Annahme eines Angebots zustande.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">§3. Leistungen</strong>
                    <p>Der Leistungsumfang ergibt sich aus dem jeweiligen Angebot oder der Projektvereinbarung. Änderungen und Ergänzungen bedürfen der Schriftform.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">§4. Vergütung und Zahlungsbedingungen</strong>
                    <p>Die Vergütung richtet sich nach dem vereinbarten Angebot. Pro Projekt sind 60% des Gesamtbetrags als Anzahlung nach Auftragserteilung fällig, die restlichen 40% bei Fertigstellung und Abnahme des Projekts. Zahlungen sind innerhalb von 10 Tagen nach Rechnungsstellung ohne Abzug fällig. Bei Zahlungsverzug behält sich die Webagentur Bitka vor, Leistungen zurückzuhalten oder den Vertrag zu kündigen.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">§5. Mitwirkungspflichten des Kunden</strong>
                    <p>Der Kunde stellt alle zur Durchführung des Projekts erforderlichen Informationen, Inhalte und Zugänge rechtzeitig zur Verfügung. Verzögerungen, die durch fehlende Mitwirkung entstehen, verlängern die Projektlaufzeit entsprechend und können zusätzliche Kosten verursachen.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">§6. Abnahme und Gewährleistung</strong>
                    <p>Nach Fertigstellung wird das Projekt zur Abnahme bereitgestellt. Die Abnahme gilt als erfolgt, wenn der Kunde das Projekt nutzt oder keine wesentlichen Mängel innerhalb von 10 Tagen schriftlich meldet. Bei berechtigten Mängeln erfolgt eine Nachbesserung. Weitergehende Ansprüche sind ausgeschlossen, sofern nicht gesetzlich anders geregelt.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">§7. Nutzungsrechte und Eigentum</strong>
                    <p>Der Kunde erhält nach vollständiger Zahlung ein einfaches, nicht übertragbares Nutzungsrecht an den im Rahmen des Projekts erstellten Werken (z.B. Quellcode, Designs, Texte). Ein Eigentumsrecht am Quellcode oder an Entwicklungsdokumenten wird nicht eingeräumt. Die Webagentur Bitka bleibt Inhaberin aller Urheberrechte, sofern nicht ausdrücklich anders vereinbart. Eine Weitergabe, Veröffentlichung oder Bearbeitung durch Dritte ist nur mit schriftlicher Zustimmung gestattet.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">§8. Referenznennung</strong>
                    <p>Die Webagentur Bitka ist berechtigt, das Projekt und den Namen des Kunden als Referenz auf der eigenen Website und in Werbematerialien zu nennen, sofern der Kunde dem nicht ausdrücklich widerspricht.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">§9. Rücktritt und Kündigung</strong>
                    <p>Beide Parteien können aus wichtigem Grund vom Vertrag zurücktreten. Im Falle eines Rücktritts durch den Kunden nach Projektbeginn sind die bis dahin erbrachten Leistungen und Aufwände zu vergüten. Bereits geleistete Anzahlungen werden mit den entstandenen Kosten verrechnet.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-one">§10. Haftung</strong>
                    <p>Die Webagentur Bitka haftet nur für Vorsatz und grobe Fahrlässigkeit. Für Datenverluste, mittelbare Schäden und entgangenen Gewinn wird keine Haftung übernommen. Die Haftung für leichte Fahrlässigkeit ist ausgeschlossen.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-two">§11. Datenschutz</strong>
                    <p>Personenbezogene Daten werden gemäß der Datenschutzerklärung und den gesetzlichen Vorgaben verarbeitet.</p>
                </div>
                <div class="bg-white/10 p-6 rounded-lg shadow-md">
                    <strong class="block font-semibold mb-2 text-three">§12. Schlussbestimmungen</strong>
                    <p>Es gilt das Recht der Bundesrepublik Deutschland. Gerichtsstand ist, soweit gesetzlich zulässig, Karlsruhe. Sollten einzelne Bestimmungen dieser AGB unwirksam sein, bleibt die Wirksamkeit der übrigen Regelungen unberührt.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
