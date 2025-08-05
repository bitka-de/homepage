<footer class="text-sm text-gray-800 flex justify-center  bg-gradient-to-tl from-one via-two to-three">
    <div class="bitka-mw mx-auto flex flex-col sm:flex-row justify-between sm:bg-none bg-gradient-to-tr from-white/50 via-black/30 to-white/70 py-4 w-full">
        <div class="flex gap-4 justify-center">
            <a href="{{ route('impressum') }}" class="hover:underline">Impressum</a>
            <a href="{{ route('datenschutz') }}" class="hover:underline">Datenschutz</a>
            <a href="{{ route('agb') }}" class="hover:underline">AGB</a>
        </div>
        <p class="opacity-50 text-xs text-center mt-1 sm:opacity-100 sm:text-sm">&copy; {{ date('Y') }} Bitka – Weblösung für Profis</p>
    </div>
</footer>