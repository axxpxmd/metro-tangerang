<!-- Section: Laporan Utama (Modern Overlay Cards) -->
<section class="py-8 border-b border-neutral-200">
    <div class="flex items-center justify-between pb-4 mb-6">
        <h2 class="font-black text-xl tracking-tight text-black uppercase flex items-center gap-2">
            <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
            Laporan Utama
        </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <a href="{{ route('news.detail') }}" class="group relative block overflow-hidden rounded-xl aspect-[4/3] sm:aspect-[16/10] bg-neutral-900 border border-neutral-200">
            <img src="{{ asset('images/foto-dummy.jpg') }}" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.03] transition-all duration-700 opacity-80" alt="Investigasi Cisadane">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/45 to-transparent"></div>
            <!-- Content -->
            <div class="absolute inset-0 p-4 sm:p-6 flex flex-col justify-end z-10">
                <div>
                    <span class="font-mono text-[9px] font-bold text-red-100 bg-red-950/60 border border-red-800/40 px-2.5 py-1 rounded-full w-fit uppercase tracking-wider mb-2.5 inline-block">
                        INVESTIGASI
                    </span>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl font-black tracking-tight text-white leading-tight group-hover:text-sky-200 transition-colors">
                    Menelusuri Jejak Sejarah Pintu Air Sepuluh Sungai Cisadane yang Melegenda
                </h3>
                <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-400 mt-2.5">
                    <span>OLEH REDAKSI</span>
                    <span>•</span>
                    <span>27 JUNI 2026</span>
                </div>
            </div>
        </a>
        
        <!-- Card 2 -->
        <a href="{{ route('news.detail') }}" class="group relative block overflow-hidden rounded-xl aspect-[4/3] sm:aspect-[16/10] bg-neutral-900 border border-neutral-200">
            <img src="{{ asset('images/foto-dummy.jpg') }}" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.03] transition-all duration-700 opacity-80" alt="Kuliner Pasar Lama">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/45 to-transparent"></div>
            <!-- Content -->
            <div class="absolute inset-0 p-4 sm:p-6 flex flex-col justify-end z-10">
                <div>
                    <span class="font-mono text-[9px] font-bold text-amber-100 bg-amber-950/60 border border-amber-800/40 px-2.5 py-1 rounded-full w-fit uppercase tracking-wider mb-2.5 inline-block">
                        KULINER
                    </span>
                </div>
                <h3 class="text-base sm:text-lg md:text-xl font-black tracking-tight text-white leading-tight group-hover:text-sky-200 transition-colors">
                    Surga Kuliner Malam Pasar Lama Tangerang: Eksplorasi Rasa di Gang Lawas
                </h3>
                <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-400 mt-2.5">
                    <span>OLEH REDAKSI</span>
                    <span>•</span>
                    <span>27 JUNI 2026</span>
                </div>
            </div>
        </a>
    </div>
</section>
