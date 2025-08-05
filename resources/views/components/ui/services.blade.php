    <section
        class="bg-gradient-to-b sm:sticky sm:top-0 from-white via-gray-50 to-gray-100 text-gray-900 min-h-[70vh] py-24 flex flex-col justify-center items-center">
        <div class="mx-auto px-4 bitka-mw text-center">

            {{-- Label --}}
            <x-ui.badge text="Unsere Leistungen" />


            {{-- Headline --}}
            <h2 class="text-3xl sm:text-4xl font-bold mb-12 text-balance">
                Alles für deinen digitalen Erfolg
            </h2>

            {{-- Grid --}}
            <div class="grid gap-6 grid-cols-2 sm:grid-cols-4">

                {{-- Webseite --}}

                <x-card.service title="Webseite"
                    href="{{ route('webseiten') }}"
                    text="Individuelle, moderne Websites – perfekt auf deine Marke und Zielgruppe zugeschnitten."
                    iconPath="M128 24a104 104 0 1 0 104 104A104.12 104.12 0 0 0 128 24Zm88 104a87.61 87.61 0 0 1-3.33 24h-38.51a157.44 157.44 0 0 0 0-48h38.51a87.61 87.61 0 0 1 3.33 24Zm-114 40h52a115.11 115.11 0 0 1-26 45 115.27 115.27 0 0 1-26-45Zm-3.9-16a140.84 140.84 0 0 1 0-48h59.88a140.84 140.84 0 0 1 0 48ZM40 128a87.61 87.61 0 0 1 3.33-24h38.51a157.44 157.44 0 0 0 0 48H43.33A87.61 87.61 0 0 1 40 128Zm114-40h-52a115.11 115.11 0 0 1 26-45 115.27 115.27 0 0 1 26 45Zm52.33 0h-35.62a135.28 135.28 0 0 0-22.3-45.6A88.29 88.29 0 0 1 206.37 88Zm-98.74-45.6A135.28 135.28 0 0 0 85.29 88H49.63a88.29 88.29 0 0 1 57.96-45.6ZM49.63 168h35.66a135.28 135.28 0 0 0 22.3 45.6A88.29 88.29 0 0 1 49.63 168Zm98.78 45.6a135.28 135.28 0 0 0 22.3-45.6h35.66a88.29 88.29 0 0 1-57.96 45.6Z" />

                <x-card.service title="Onlineshop"
                    href="{{ route('onlineshops') }}"
                    text="Verkaufe erfolgreich online mit einem professionellen, skalierbaren Shop-System."
                    iconPath="M232 96a7.89 7.89 0 0 0-.3-2.2l-14.35-50.2A16.07 16.07 0 0 0 202 32H54a16.07 16.07 0 0 0-15.35 11.6L24.31 93.8A7.89 7.89 0 0 0 24 96v16a40 40 0 0 0 16 32v72a8 8 0 0 0 8 8h160a8 8 0 0 0 8-8v-72a40 40 0 0 0 16-32V96ZM54 48h148l11.42 40H42.61Zm50 56h48v8a24 24 0 0 1-48 0Zm-16 0v8a24 24 0 0 1-35.12 21.26 7.88 7.88 0 0 0-1.82-1.06A24 24 0 0 1 40 112v-8Zm112 104H56v-56.8a40.57 40.57 0 0 0 8 .8 40 40 0 0 0 32-16 40 40 0 0 0 64 0 40 40 0 0 0 32 16 40.57 40.57 0 0 0 8-.8Zm4.93-75.8a8.08 8.08 0 0 0-1.8 1.05A24 24 0 0 1 168 112v-8h48v8a24 24 0 0 1-11.07 20.2Z" />

                <x-card.service title="Programmierung"
                    href="{{ route('programmierung') }}"

                    text="Maßgeschneiderte Webentwicklung, Schnittstellen & individuelle Software-Lösungen."
                    iconPath="M86.75,44.3,33.48,128l53.27,83.7a8,8,0,0,1-2.46,11.05A7.91,7.91,0,0,1,80,224a8,8,0,0,1-6.76-3.71l-56-88a8,8,0,0,1,0-8.59l56-88a8,8,0,1,1,13.5,8.59Zm152,79.41-56-88a8,8,0,1,0-13.5,8.59L222.52,128l-53.27,83.7a8,8,0,0,0,2.46,11.05A7.91,7.91,0,0,0,176,224a8,8,0,0,0,6.76-3.71l56-88A8,8,0,0,0,238.75,123.71Z" />

                <x-card.service title="Beratung"
                    href="{{ route('beratung') }}"

                    text="Strategische Beratung & digitale Konzepte für nachhaltigen Online-Erfolg."
                    iconPath="M116 128a12 12 0 1 1 12 12 12 12 0 0 1-12-12Zm-32 12a12 12 0 1 0-12-12 12 12 0 0 0 12 12Zm88 0a12 12 0 1 0-12-12 12 12 0 0 0 12 12Zm60-76v128a16 16 0 0 1-16 16H83l-32.6 28.16-.09.07A15.89 15.89 0 0 1 40 240a16.13 16.13 0 0 1-6.8-1.52A15.85 15.85 0 0 1 24 224V64a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16ZM40 224ZM216 64H40v160l34.77-30a8 8 0 0 1 5.23-2h136Z" />

            </div>
        </div>
    </section>
