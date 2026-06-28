<!-- Hero / Headline Section -->
<section class="grid grid-cols-1 lg:grid-cols-12 gap-8 border-b border-neutral-200 pb-8">
    
    <!-- Headline Carousel (8 Columns) -->
    <div class="lg:col-span-8 flex flex-col">
        <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 flex-grow flex flex-col justify-between">
            
            <!-- Slides Container -->
            <div class="relative">
                <!-- Slide 1 -->
                <div class="carousel-slide block transition-all duration-500 opacity-100" id="slide-1">
                    <a href="{{ route('news.detail') }}" wire:navigate class="group block relative">
                        <div class="relative overflow-hidden -mx-4 -mt-4 rounded-t-xl border-b border-neutral-200 aspect-[4/3] sm:aspect-video bg-neutral-100">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-10 font-mono text-[9px] font-bold bg-sky-50 text-sky-800 border border-sky-200/80 px-3 py-1 rounded-full uppercase tracking-wider">
                                PILHAN REDAKSI • 1 / 3
                            </div>
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 1">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent z-0"></div>
                            <!-- Title Overlay -->
                            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-6 z-10">
                                <h1 class="text-lg sm:text-lg md:text-xl lg:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                    Revolusi Transportasi Tangerang: Rute Baru LRT Terkoneksi Jabodebek Resmi Disepakati
                                </h1>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center gap-3 font-mono text-[10px] text-neutral-500 mb-2">
                                <span>OLEH REDAKSI</span>
                                <span>•</span>
                                <span>26 JUNI 2026</span>
                                <span>•</span>
                                <span>5 MIN READ</span>
                            </div>
                            <p class="text-neutral-600 text-sm leading-relaxed line-clamp-3 h-[68px]">
                                Pemerintah Kota Tangerang dan Kementerian Perhubungan resmi menandatangani nota kesepahaman (MoU) pembangunan jalur LRT terintegrasi. Proyek strategis nasional ini diharapkan dapat mengurai kepadatan lalu lintas harian lintas batas hingga 40%.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide hidden transition-all duration-500 opacity-0" id="slide-2">
                    <a href="{{ route('news.detail') }}" wire:navigate class="group block relative">
                        <div class="relative overflow-hidden -mx-4 -mt-4 rounded-t-xl border-b border-neutral-200 aspect-[4/3] sm:aspect-video bg-neutral-100">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-10 font-mono text-[9px] font-bold bg-sky-50 text-sky-800 border border-sky-200/80 px-3 py-1 rounded-full uppercase tracking-wider">
                                PILIHAN REDAKSI • 2 / 3
                            </div>
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 2">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent z-0"></div>
                            <!-- Title Overlay -->
                            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-6 z-10">
                                <h1 class="text-lg sm:text-lg md:text-xl lg:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                    Revitalisasi Pasar Anyar Tangerang Ditargetkan Rampung Akhir Tahun Ini
                                </h1>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center gap-3 font-mono text-[10px] text-neutral-500 mb-2">
                                <span>OLEH REDAKSI</span>
                                <span>•</span>
                                <span>25 JUNI 2026</span>
                                <span>•</span>
                                <span>4 MIN READ</span>
                            </div>
                            <p class="text-neutral-600 text-sm leading-relaxed line-clamp-3 h-[68px]">
                                Progres pengerjaan revitalisasi fisik Pasar Anyar Tangerang telah mencapai 75%. Pemkot memastikan kenyamanan bagi ribuan pedagang lama dengan fasilitas los yang lebih bersih, tertib, dan bebas dari banjir.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide hidden transition-all duration-500 opacity-0" id="slide-3">
                    <a href="{{ route('news.detail') }}" wire:navigate class="group block relative">
                        <div class="relative overflow-hidden -mx-4 -mt-4 rounded-t-xl border-b border-neutral-200 aspect-[4/3] sm:aspect-video bg-neutral-100">
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 z-10 font-mono text-[9px] font-bold bg-sky-50 text-sky-800 border border-sky-200/80 px-3 py-1 rounded-full uppercase tracking-wider">
                                PILIHAN REDAKSI • 3 / 3
                            </div>
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 3">
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent z-0"></div>
                            <!-- Title Overlay -->
                            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-6 z-10">
                                <h1 class="text-lg sm:text-lg md:text-xl lg:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                    Digitalisasi Pelayanan Publik, Aplikasi Tangerang Live Tembus 1 Juta Unduhan
                                </h1>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center gap-3 font-mono text-[10px] text-neutral-500 mb-2">
                                <span>OLEH REDAKSI</span>
                                <span>•</span>
                                <span>24 JUNI 2026</span>
                                <span>•</span>
                                <span>3 MIN READ</span>
                            </div>
                            <p class="text-neutral-600 text-sm leading-relaxed line-clamp-3 h-[68px]">
                                Superapps kebanggaan warga Tangerang mencatat tonggak sejarah baru dengan tembusnya satu juta unduhan di Google Play Store dan App Store, memberikan layanan perizinan, bansos, hingga laporan kedaruratan.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Carousel Controls -->
            <div class="flex items-center justify-between mt-6 pt-4 border-t border-neutral-200">
                <div class="flex gap-2">
                    <button id="carousel-dot-1" class="w-2 h-2 bg-black rounded-full" onclick="setSlide(1)"></button>
                    <button id="carousel-dot-2" class="w-2 h-2 bg-neutral-200 rounded-full hover:bg-neutral-400 transition" onclick="setSlide(2)"></button>
                    <button id="carousel-dot-3" class="w-2 h-2 bg-neutral-200 rounded-full hover:bg-neutral-400 transition" onclick="setSlide(3)"></button>
                </div>
                <div class="flex gap-4 font-mono text-[11px] font-bold">
                    <button class="hover:text-neutral-500 flex items-center gap-1" onclick="prevSlide()">
                        &larr; SEBELUMNYA
                    </button>
                    <span class="text-neutral-300">|</span>
                    <button class="hover:text-neutral-500 flex items-center gap-1" onclick="nextSlide()">
                        SELANJUTNYA &rarr;
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trending Sidebar / Terpopuler (4 Columns) -->
    <aside class="lg:col-span-4 flex flex-col">
        <div class="border border-neutral-200 rounded-xl p-6 bg-white flex-grow flex flex-col justify-between hover:border-neutral-400 transition-all duration-300">
            <div>
                <h2 class="font-mono text-xs font-bold tracking-widest text-black uppercase mb-6 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-black rounded-sm"></span>
                    BERITA TERPOPULER
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
                    <!-- Popular Item 1 -->
                    <a href="{{ route('news.detail') }}" wire:navigate class="group flex gap-4 items-start pb-5 border-b border-neutral-100 md:pb-0 md:border-b-0 lg:pb-5 lg:border-b last:border-0 last:pb-0">
                        <span class="font-mono text-3xl font-black text-sky-800 leading-none tracking-tighter">01</span>
                        <div class="space-y-1">
                            <span class="font-mono text-[9px] font-bold text-indigo-600 uppercase tracking-widest block">POLITIK</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-sky-800 transition-colors leading-snug">
                                Jelang Pilkada Tangerang, Peta Koalisi Partai Mulai Mengerucut
                            </h3>
                        </div>
                    </a>
                    
                    <!-- Item 2 -->
                    <a href="{{ route('news.detail') }}" wire:navigate class="group flex gap-4 items-start pb-5 border-b border-neutral-100 md:pb-0 md:border-b-0 lg:pb-5 lg:border-b last:border-0 last:pb-0">
                        <span class="font-mono text-3xl font-bold text-slate-300 group-hover:text-sky-800 transition-colors leading-none tracking-tighter">02</span>
                        <div class="space-y-1">
                            <span class="font-mono text-[9px] font-bold text-emerald-600 uppercase tracking-widest block">EKONOMI</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-sky-800 transition-colors leading-snug">
                                UMKM Kuliner Pasar Lama Alami Lonjakan Omzet 50% Akhir Pekan Ini
                            </h3>
                        </div>
                    </a>

                    <!-- Item 3 -->
                    <a href="{{ route('news.detail') }}" wire:navigate class="group flex gap-4 items-start pb-5 border-b border-neutral-100 md:pb-0 md:border-b-0 lg:pb-5 lg:border-b last:border-0 last:pb-0">
                        <span class="font-mono text-3xl font-bold text-slate-300 group-hover:text-sky-800 transition-colors leading-none tracking-tighter">03</span>
                        <div class="space-y-1">
                            <span class="font-mono text-[9px] font-bold text-sky-600 uppercase tracking-widest block">METRO</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-sky-800 transition-colors leading-snug">
                                Dinas Lingkungan Hidup Tambah 12 Armada Truk Sampah Baru
                            </h3>
                        </div>
                    </a>

                    <!-- Item 4 -->
                    <a href="{{ route('news.detail') }}" wire:navigate class="group flex gap-4 items-start pb-5 border-b border-neutral-100 md:pb-0 md:border-b-0 lg:pb-5 lg:border-b last:border-0 last:pb-0">
                        <span class="font-mono text-3xl font-bold text-slate-300 group-hover:text-sky-800 transition-colors leading-none tracking-tighter">04</span>
                        <div class="space-y-1">
                            <span class="font-mono text-[9px] font-bold text-amber-600 uppercase tracking-widest block">OLAHRAGA</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-sky-800 transition-colors leading-snug">
                                Persita Tangerang Rekrut Striker Asing Asal Brasil
                            </h3>
                        </div>
                    </a>

                    <!-- Item 5 -->
                    <a href="{{ route('news.detail') }}" wire:navigate class="group flex gap-4 items-start last:border-0 md:col-span-2 lg:col-span-1">
                        <span class="font-mono text-3xl font-bold text-slate-300 group-hover:text-sky-800 transition-colors leading-none tracking-tighter">05</span>
                        <div class="space-y-1">
                            <span class="font-mono text-[9px] font-bold text-rose-500 uppercase tracking-widest block">LIFESTYLE</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-sky-800 transition-colors leading-snug">
                                Wisata Kuliner Malam Tangerang Jadi Destinasi Favorit Akhir Pekan
                            </h3>
                        </div>
                    </a>
            </div>
        </div>
    </aside>
</section>
