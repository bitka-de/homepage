@extends('layouts.app')

@section('title', 'Webagentur Bitka | Karlsruhe')
@section('meta_description',
    'Starte dein Webprojekt mit Bitka – Webseiten, Onlineshops und individuelle
    Webentwicklung.')
@section('og_image', asset('images/bitka-preview.jpg'))

@section('content')
    <section
        class="min-h-screen py-24 flex flex-col justify-center items-center bg-gradient-to-br from-stone-800 to-stone-600 via-black text-white">
        <div class="bitka-mw mx-auto px-4 text-center text-balance">
            <x-ui.badge text="Say Hello" variant="dark" />
            <h1 class="text-4xl sm:text-5xl font-bold mb-6 drop-shadow-lg">Kontaktiere uns</h1>
            <p class="text-lg sm:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Du hast Fragen, möchtest ein Projekt starten oder einfach unverbindlich sprechen? Wir sind gerne für dich da
                – persönlich, direkt und unkompliziert.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                @php
                    $contacts = [
                        [
                            'label' => 'E-Mail',
                            'value' => config('company.contact.mail'),
                            'href' => 'mailto:' . config('company.contact.mail'),
                            'textClass' => 'text-one',
                        ],
                        [
                            'label' => 'Telefon',
                            'value' => config('company.contact.phone'),
                            'href' => 'tel:' . config('company.contact.phone'),
                            'textClass' => 'text-two',
                        ],
                    ];
                @endphp

                @foreach ($contacts as $contact)
                    <div class="bg-white/10 col-span-2 sm:col-span-1 p-6 rounded-lg shadow-md flex flex-col items-center">
                        <strong class="block font-semibold mb-2 {{ $contact['textClass'] }}">{{ $contact['label'] }}</strong>
                        <a href="{{ $contact['href'] }}"
                            class="text-white/90 text-2xl font-black">{{ $contact['value'] }}</a>
                    </div>
                @endforeach

                <div class="bg-gradient-to-bl from-green-400 to-green-600 hover:from-green-600 hover:to-green-700 text-white col-span-2 p-6 rounded-lg shadow-md sm:hidden flex flex-col items-center">
                    <div class="flex w-full justify-center items-center">
                        <a href="https://wa.me/{{ config('company.contact.whatsapp') }}" target="_blank" rel="noopener"
                            class="inline-flex items-center gap-2 transition-all duration-150"
                            style="box-shadow: 0 2px 8px rgba(37,211,102,0.2);">
                            <svg xml:space="preserve" viewBox="0 0 30.667 30.667" class="size-8 fill-white">
                                <path
                                    d="M30.667 14.939c0 8.25-6.74 14.938-15.056 14.938-2.639 0-5.118-.675-7.276-1.857L0 30.667l2.717-8.017C1.347 20.4.558 17.758.558 14.938.559 6.688 7.297 0 15.613 0c8.315.002 15.054 6.689 15.054 14.939zM15.61 2.382c-6.979 0-12.656 5.634-12.656 12.56 0 2.748.896 5.292 2.411 7.362l-1.58 4.663 4.862-1.545c2 1.312 4.393 2.076 6.963 2.076 6.979 0 12.658-5.633 12.658-12.559C28.27 8.016 22.59 2.382 15.61 2.382zm7.604 15.998c-.094-.151-.34-.243-.708-.427-.367-.184-2.184-1.069-2.521-1.189-.34-.123-.586-.185-.832.182-.243.367-.951 1.191-1.168 1.437-.215.245-.43.276-.799.095-.369-.186-1.559-.57-2.969-1.817-1.097-.972-1.838-2.169-2.052-2.536-.217-.366-.022-.564.161-.746.165-.165.369-.428.554-.643.185-.213.246-.364.369-.609.121-.245.06-.458-.031-.643-.092-.184-.829-1.984-1.138-2.717-.307-.732-.614-.611-.83-.611-.215 0-.461-.03-.707-.03s-.646.089-.983.456-1.291 1.252-1.291 3.054c0 1.804 1.321 3.543 1.506 3.787.186.243 2.554 4.062 6.305 5.528 3.753 1.465 3.753.976 4.429.914.678-.062 2.184-.885 2.49-1.739.308-.858.308-1.593.215-1.746z" />
                            </svg>
                            WhatsApp&nbsp;Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
