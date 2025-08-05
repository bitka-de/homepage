@extends('layouts.app')

@section('title', 'Webseiten Preisrechner | Bitka')
@section('meta_description', 'Berechne jetzt dein individuelles Webseiten-Angebot mit einmaligen und monatlichen Kosten. Optional inklusive SEO, Newsletter, CMS und Hosting.')

@section('content')

<x-ui.hero.subpage 
    image="images/leistungen/webseite.png"
    highlight="Webseiten-Kalkulator"
    title="Individuelle Website zum Festpreis kalkulieren"
    text="Stell dir deine Wunsch-Website zusammen – inkl. Funktionen, Seiten & Betreuung. Der Preis passt sich automatisch an."
/>

<section class="bg-white py-24">
    <div class="container max-w-6xl mx-auto px-4">
        <x-ui.badge text="Kalkulator" />

        <div x-data="webCalc()" class="grid md:grid-cols-2 gap-10 mt-10">
            {{-- Linke Spalte: Optionen --}}
            <div class="space-y-6">
                <div class="bg-gray-50 p-4 rounded border">
                    <h2 class="font-semibold text-lg mb-2">Was du bekommst</h2>
                    <p class="text-sm text-gray-700">
                        Mit diesem Kalkulator kannst du deine Wunsch-Website planen – vom einfachen Onepager bis zur individuellen Weblösung.
                        Im Preis enthalten: Konzeption, Gestaltung, Text, Grafik, Layout und Basic SEO. Nach dem Absenden erhältst du ein verbindliches Angebot.
                    </p>
                </div>

                {{-- Seitenanzahl --}}
                <div>
                    <label class="font-medium block mb-2">Anzahl Unterseiten (Startseite ist inklusive)</label>
                    <input type="range" min="0" max="20" step="1" x-model.number="seiten" class="w-full">
                    <div class="text-sm text-gray-600 mt-1">Zusätzliche Seiten: <span x-text="seiten"></span></div>
                </div>

                {{-- Zusatzfunktionen --}}
                <div class="space-y-2">
                    <label class="font-semibold block mb-2">Zusätzliche Features</label>
                    <template x-for="feature in features" :key="feature.name">
                        <label class="flex items-start gap-2">
                            <input type="checkbox" x-model="feature.active" class="accent-black mt-1">
                            <div>
                                <span class="font-medium" x-text="feature.name"></span>
                                <p class="text-xs text-gray-600" x-text="feature.desc"></p>
                            </div>
                        </label>
                    </template>
                </div>

                {{-- Hosting --}}
                <div class="pt-4 border-t">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" x-model="hosting" class="accent-black">
                        Hosting & Betreuung (35 €/Monat zzgl. MwSt.)
                    </label>
                    <p class="text-sm text-gray-500 ml-6">Inkl. kleiner monatlicher Änderungen (bis 30 min)</p>
                </div>

                {{-- Express --}}
                <div class="pt-4">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" x-model="express" class="accent-black">
                        Express-Umsetzung (+20 % Aufschlag)
                    </label>
                    <p class="text-sm text-gray-500 ml-6">Fertig in 5 Tagen Vorlauf + Entwicklungszeit</p>
                </div>

                {{-- Rabattcode --}}
                <div class="pt-6 border-t">
                    <label class="font-medium block mb-2">Rabattcode</label>
                    <input type="text" x-model="code" placeholder="z. B. D1511" class="w-full border rounded px-3 py-2">
                    <template x-if="codeValid">
                        <p class="text-green-600 text-sm mt-1 bg-green-50">Rabatt aktiviert</p>
                    </template>
                </div>
            </div>

            {{-- Rechte Spalte: Preisübersicht --}}
            <div class="bg-gray-50 rounded p-6 shadow-lg sticky top-8">
                <h3 class="text-xl font-semibold mb-4">Deine Zusammenfassung</h3>

                {{-- Fertigstellung --}}
                <div class="text-sm text-gray-700 mb-4">
                    <strong>Voraussichtliche Fertigstellung:</strong>
                    <span class="text-black font-semibold" x-text="fertigstellung"></span>
                </div>

                <ul class="text-sm space-y-2">
                    <li class="flex justify-between"><span>Basispreis (Onepager)</span> <span>850 €</span></li>
                    <li class="flex justify-between"><span>Zusätzliche Seiten (<span x-text="seiten"></span>)</span> <span x-text="seitenPreis + ' €'"></span></li>
                    <template x-for="feature in features" :key="feature.name">
                        <template x-if="feature.active">
                            <li class="flex justify-between">
                                <span x-text="feature.name"></span>
                                <span x-text="feature.price + ' €'"></span>
                            </li>
                        </template>
                    </template>
                    <template x-if="codeValid">
                        <li class="flex justify-between text-green-700 bg-green-50 py-2 font-semibold">
                            <span>Rabatt</span>
                            <span>-<span x-text="discountAmount + ' €'"></span></span>
                        </li>
                    </template>
                    <template x-if="express">
                        <li class="flex justify-between text-red-600">
                            <span>Express-Aufschlag (20 %)</span>
                            <span x-text="expressAmount + ' €'"></span>
                        </li>
                    </template>
                </ul>

                <hr class="my-4">

                <div class="text-sm">
                    <div class="flex justify-between font-bold text-lg">
                        <span>Einmalig netto</span>
                        <span x-text="total + ' €'"></span>
                    </div>
                    <div class="flex justify-between font-medium mt-1">
                        <span>inkl. MwSt (19 %)</span>
                        <span x-text="Math.round(total * 1.19) + ' €'"></span>
                    </div>
                </div>

                <div class="flex justify-between text-sm text-gray-600 mt-2" x-show="hosting">
                    <span>Monatlich</span>
                    <span>35 € zzgl. MwSt.</span>
                </div>

                <div class="text-sm text-gray-700 mt-4">
                    <strong>Zahlungsplan:</strong><br>
                    <span>60 % Anzahlung = <span x-text="Math.round(total * 0.6) + ' €'"></span><br>
                    40 % bei Übergabe = <span x-text="Math.round(total * 0.4) + ' €'"></span></span>
                </div>

                {{-- AGB Checkbox --}}
                <div class="mt-4 text-sm">
                    <label class="flex items-start gap-2">
                        <input type="checkbox" x-model="agb" class="accent-black mt-1">
                        <span>Ich akzeptiere die <a href="/agb" class="underline">AGB</a> und <a href="/datenschutz" class="underline">Datenschutzbestimmungen</a>.</span>
                    </label>
                </div>

                {{-- Button --}}
                <button :disabled="!agb" x-bind:class="agb ? 'bg-black hover:bg-gray-800' : 'bg-gray-300 cursor-not-allowed'"
                        class="mt-6 block w-full text-center text-white font-semibold px-6 py-3 rounded transition">
                    Verbindlich beauftragen
                </button>
            </div>
        </div>
    </div>
</section>

<script>
function webCalc() {
    return {
        seiten: 0,
        hosting: false,
        express: false,
        code: '',
        agb: false,
        features: [
            { name: 'Newsletter Formular (DSGVO)', price: 55, desc: 'Ein DSGVO-konformes Newsletter-Anmeldeformular mit Double-Opt-In-Prozess.', days: 0.5, active: false },
            { name: 'SEO Plus (je Seite)', price: 55, desc: 'Erweiterte SEO-Optimierung inkl. Meta-Daten, Page Speed & Keywordstruktur.', days: 0.5, active: false },
            { name: 'Besucher Analyse Tool', price: 75, desc: 'Integriertes DSGVO-konformes Besucher-Tracking mit z. B. Matomo.', days: 0.5, active: false },
            { name: 'Interaktive Map (bis 10 Standorte)', price: 85, desc: 'Eine klickbare interaktive Karte mit bis zu 10 Standorten.', days: 0.5, active: false },
            { name: 'CMS Modul (Inhalte selbst ändern)', price: 185, desc: 'Einfache Bearbeitung von Inhalten direkt im Browser ohne Programmierkenntnisse.', days: 1.5, active: false },
        ],

        get seitenPreis() {
            let preis = 0;
            for (let i = 1; i <= this.seiten; i++) {
                let einzelpreis = 135 - (i - 1) * 5;
                preis += Math.max(einzelpreis, 95);
            }
            return Math.round(preis);
        },

        get rabattTyp() {
            const code = this.code.trim().toUpperCase();
            if (['HALBHALB', '50%', '15%'].includes(code)) return 'prozent';
            if (['RABATT100', 'RABATT150', 'RABATT200', 'RABATT250'].includes(code)) return 'fix';
            return null;
        },

        get rabattWert() {
            const code = this.code.trim().toUpperCase();
            switch (code) {
                case 'RABATT100': return 100;
                case 'RABATT150': return 150;
                case 'RABATT200': return 200;
                case 'RABATT250': return 250;
                case 'HALBHALB': return 0.5;
                case '50%': return 0.5;
                case '15%': return 0.15;
                default: return 0;
            }
        },

        get codeValid() {
            return this.rabattTyp !== null;
        },

        get expressFactor() {
            return this.express ? 1.2 : 1;
        },

        get expressAmount() {
            return Math.round((this.baseSum + this.extraSum) * 0.2);
        },

        get baseSum() {
            return 850 + this.seitenPreis;
        },

        get extraSum() {
            return this.features.filter(f => f.active).reduce((sum, f) => sum + f.price, 0);
        },

        get totalBeforeDiscount() {
            return Math.round((this.baseSum + this.extraSum) * this.expressFactor);
        },

        get discountAmount() {
            if (this.rabattTyp === 'fix') {
                return Math.min(this.rabattWert, this.totalBeforeDiscount);
            } else if (this.rabattTyp === 'prozent') {
                return Math.round(this.totalBeforeDiscount * this.rabattWert);
            }
            return 0;
        },

        get total() {
            return this.totalBeforeDiscount - this.discountAmount;
        },

        get fertigstellung() {
            const tage = 3 + this.features.filter(f => f.active).reduce((s, f) => s + f.days, 0) + this.seiten * 0.5;
            const vorlauf = this.express ? 5 : 14;
            const gesamt = Math.ceil(vorlauf + tage);
            const d = new Date();
            d.setDate(d.getDate() + gesamt);
            return d.toLocaleDateString('de-DE', { day: '2-digit', month: '2-digit', year: 'numeric' });
        },
    };
}
</script>


@endsection