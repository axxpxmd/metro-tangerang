@extends('layouts.app')

@section('title', 'Metro Tangerang - Suara Terpercaya Tangerang Raya')

@section('content')
<!-- Breaking News Ticker -->
<div class="bg-neutral-50 border-b border-neutral-200 py-2.5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-3">
        <span class="flex-shrink-0 font-mono text-[10px] font-extrabold tracking-widest bg-black text-white px-2 py-0.5 rounded uppercase">
            BREAKING
        </span>
        <div class="relative w-full overflow-hidden h-4 flex items-center">
            <div class="absolute whitespace-nowrap animate-marquee flex gap-12 font-mono text-xs text-neutral-700">
                <span>• Rencana Pembangunan LRT Koridor Tangerang-Jakarta Resmi Dimulai Kuartal III 2026</span>
                <span>• Pemkot Tangerang Luncurkan Program Beasiswa Mahasiswa Berprestasi Tingkat Kecamatan</span>
                <span>• Prakiraan Cuaca: Tangerang Berpotensi Hujan Ringan di Sore Hari</span>
                <span>• Persita Tangerang Menang Telak 3-0 dalam Laga Uji Coba Kandang</span>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .animate-marquee {
        animation: marquee 30s linear infinite;
    }
</style>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Hero / Headline Section -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 border-b border-neutral-200 pb-8">
        
        <!-- Headline Carousel (8 Columns) -->
        <div class="lg:col-span-8 flex flex-col">
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 flex-grow flex flex-col justify-between">
                
                <!-- Slides Container -->
                <div class="relative">
                    <!-- Slide 1 -->
                    <div class="carousel-slide block transition-all duration-500 opacity-100" id="slide-1">
                        <a href="#" class="group block relative">
                            <div class="relative overflow-hidden aspect-video rounded-lg bg-neutral-100 border border-neutral-200">
                                <div class="absolute top-4 left-4 z-10 font-mono text-[9px] font-bold bg-black text-white border border-neutral-850 px-3 py-1 rounded-full uppercase tracking-wider">
                                    PILIHAN REDAKSI • 1 / 3
                                </div>
                                <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover aspect-video grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 1">
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent z-0"></div>
                                <!-- Title Overlay -->
                                <div class="absolute inset-x-0 bottom-0 p-6 z-10">
                                    <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-355 mb-2">
                                        <span>OLEH REDAKSI</span>
                                        <span>•</span>
                                        <span>26 JUNI 2026</span>
                                        <span>•</span>
                                        <span>5 MIN READ</span>
                                    </div>
                                    <h1 class="text-xl md:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                        Revolusi Transportasi Tangerang: Rute Baru LRT Terkoneksi Jabodebek Resmi Disepakati
                                    </h1>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-neutral-600 text-sm leading-relaxed">
                                    Pemerintah Kota Tangerang dan Kementerian Perhubungan resmi menandatangani nota kesepahaman (MoU) pembangunan jalur LRT terintegrasi. Proyek strategis nasional ini diharapkan dapat mengurai kepadatan lalu lintas harian lintas batas hingga 40%.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide hidden transition-all duration-500 opacity-0" id="slide-2">
                        <a href="#" class="group block relative">
                            <div class="relative overflow-hidden aspect-video rounded-lg bg-neutral-100 border border-neutral-200">
                                <div class="absolute top-4 left-4 z-10 font-mono text-[9px] font-bold bg-black text-white border border-neutral-850 px-3 py-1 rounded-full uppercase tracking-wider">
                                    PILIHAN REDAKSI • 2 / 3
                                </div>
                                <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover aspect-video grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 2">
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent z-0"></div>
                                <!-- Title Overlay -->
                                <div class="absolute inset-x-0 bottom-0 p-6 z-10">
                                    <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-355 mb-2">
                                        <span>OLEH REDAKSI</span>
                                        <span>•</span>
                                        <span>25 JUNI 2026</span>
                                        <span>•</span>
                                        <span>4 MIN READ</span>
                                    </div>
                                    <h1 class="text-xl md:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                        Revitalisasi Pasar Anyar Tangerang Ditargetkan Rampung Akhir Tahun Ini
                                    </h1>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-neutral-600 text-sm leading-relaxed">
                                    Progres pengerjaan revitalisasi fisik Pasar Anyar Tangerang telah mencapai 75%. Pemkot memastikan kenyamanan bagi ribuan pedagang lama dengan fasilitas los yang lebih bersih, tertib, dan bebas dari banjir.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide hidden transition-all duration-500 opacity-0" id="slide-3">
                        <a href="#" class="group block relative">
                            <div class="relative overflow-hidden aspect-video rounded-lg bg-neutral-100 border border-neutral-200">
                                <div class="absolute top-4 left-4 z-10 font-mono text-[9px] font-bold bg-black text-white border border-neutral-850 px-3 py-1 rounded-full uppercase tracking-wider">
                                    PILIHAN REDAKSI • 3 / 3
                                </div>
                                <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover aspect-video grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image 3">
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent z-0"></div>
                                <!-- Title Overlay -->
                                <div class="absolute inset-x-0 bottom-0 p-6 z-10">
                                    <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-355 mb-2">
                                        <span>OLEH REDAKSI</span>
                                        <span>•</span>
                                        <span>24 JUNI 2026</span>
                                        <span>•</span>
                                        <span>3 MIN READ</span>
                                    </div>
                                    <h1 class="text-xl md:text-2xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                                        Digitalisasi Pelayanan Publik, Aplikasi Tangerang Live Tembus 1 Juta Unduhan
                                    </h1>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-neutral-600 text-sm leading-relaxed">
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
                    
                    <div class="space-y-6">
                        <!-- Popular Item 1 -->
                        <a href="#" class="group flex gap-4 items-start pb-5 border-b border-neutral-100 last:border-0 last:pb-0">
                            <span class="font-serif text-4xl font-extrabold text-black leading-none tracking-tighter">01</span>
                            <div class="space-y-1">
                                <span class="font-mono text-[9px] font-bold text-neutral-500 uppercase tracking-widest block">POLITIK</span>
                                <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors leading-snug">
                                    Jelang Pilkada Tangerang, Peta Koalisi Partai Mulai Mengerucut
                                </h3>
                            </div>
                        </a>
                        
                        <!-- Item 2 -->
                        <a href="#" class="group flex gap-4 items-start pb-5 border-b border-neutral-100 last:border-0 last:pb-0">
                            <span class="font-serif text-4xl font-light text-neutral-300 group-hover:text-black transition-colors leading-none tracking-tighter">02</span>
                            <div class="space-y-1">
                                <span class="font-mono text-[9px] font-bold text-neutral-500 uppercase tracking-widest block">EKONOMI</span>
                                <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors leading-snug">
                                    UMKM Kuliner Pasar Lama Alami Lonjakan Omzet 50% Akhir Pekan Ini
                                </h3>
                            </div>
                        </a>

                        <!-- Item 3 -->
                        <a href="#" class="group flex gap-4 items-start pb-5 border-b border-neutral-100 last:border-0 last:pb-0">
                            <span class="font-serif text-4xl font-light text-neutral-300 group-hover:text-black transition-colors leading-none tracking-tighter">03</span>
                            <div class="space-y-1">
                                <span class="font-mono text-[9px] font-bold text-neutral-500 uppercase tracking-widest block">METRO</span>
                                <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors leading-snug">
                                    Dinas Lingkungan Hidup Tambah 12 Armada Truk Sampah Baru
                                </h3>
                            </div>
                        </a>

                        <!-- Item 4 -->
                        <a href="#" class="group flex gap-4 items-start pb-5 border-b border-neutral-100 last:border-0 last:pb-0">
                            <span class="font-serif text-4xl font-light text-neutral-300 group-hover:text-black transition-colors leading-none tracking-tighter">04</span>
                            <div class="space-y-1">
                                <span class="font-mono text-[9px] font-bold text-neutral-500 uppercase tracking-widest block">OLAHRAGA</span>
                                <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors leading-snug">
                                    Persita Tangerang Rekrut Striker Asing Asal Brasil
                                </h3>
                            </div>
                        </a>

                        <!-- Item 5 -->
                        <a href="#" class="group flex gap-4 items-start last:border-0">
                            <span class="font-serif text-4xl font-light text-neutral-300 group-hover:text-black transition-colors leading-none tracking-tighter">05</span>
                            <div class="space-y-1">
                                <span class="font-mono text-[9px] font-bold text-neutral-500 uppercase tracking-widest block">LIFESTYLE</span>
                                <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors leading-snug">
                                    Wisata Kuliner Malam Tangerang Jadi Destinasi Favorit Akhir Pekan
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Ad Space (Ruang Iklan Banner Utama) -->
    <div class="py-8 border-b border-neutral-200">
        <div class="w-full bg-neutral-50 border border-neutral-200 py-6 px-4 rounded-xl text-center font-mono text-xs text-neutral-400">
            RUANG IKLAN BANNER UTAMA (728 x 90)
        </div>
    </div>

    <!-- Section: Laporan Utama (Modern Overlay Cards) -->
    <section class="py-8 border-b border-neutral-200">
        <div class="flex items-center justify-between pb-4 mb-6">
            <h2 class="font-black text-xl tracking-tight text-black uppercase flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-black rounded-sm"></span>
                Laporan Utama
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <a href="#" class="group relative block overflow-hidden rounded-xl aspect-[16/10] bg-neutral-900 border border-neutral-200">
                <img src="{{ asset('images/foto-dummy.jpg') }}" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.03] transition-all duration-700 opacity-80" alt="Investigasi Cisadane">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <!-- Content -->
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div>
                        <span class="font-mono text-[9px] font-bold text-white bg-black/60 border border-neutral-700 px-2.5 py-1 rounded-full w-fit uppercase tracking-wider mb-3 inline-block">
                            INVESTIGASI
                        </span>
                    </div>
                    <h3 class="text-lg md:text-xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                        Menelusuri Jejak Sejarah Pintu Air Sepuluh Sungai Cisadane yang Melegenda
                    </h3>
                    <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-400 mt-3">
                        <span>OLEH REDAKSI</span>
                        <span>•</span>
                        <span>27 JUNI 2026</span>
                    </div>
                </div>
            </a>
            
            <!-- Card 2 -->
            <a href="#" class="group relative block overflow-hidden rounded-xl aspect-[16/10] bg-neutral-900 border border-neutral-200">
                <img src="{{ asset('images/foto-dummy.jpg') }}" class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.03] transition-all duration-700 opacity-80" alt="Kuliner Pasar Lama">
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <!-- Content -->
                <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                    <div>
                        <span class="font-mono text-[9px] font-bold text-white bg-black/60 border border-neutral-700 px-2.5 py-1 rounded-full w-fit uppercase tracking-wider mb-3 inline-block">
                            KULINER
                        </span>
                    </div>
                    <h3 class="text-lg md:text-xl font-black tracking-tight text-white leading-tight group-hover:text-neutral-200 transition-colors">
                        Surga Kuliner Malam Pasar Lama Tangerang: Eksplorasi Rasa di Gang Lawas
                    </h3>
                    <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-400 mt-3">
                        <span>OLEH REDAKSI</span>
                        <span>•</span>
                        <span>27 JUNI 2026</span>
                    </div>
                </div>
            </a>
        </div>
    </section>


    <!-- Main Content Grid -->
    <section class="py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Column: Main News Feed & Categories (8 Columns) -->
        <div class="lg:col-span-8 space-y-12">
            
            <!-- Section 1: Berita Terbaru (Latest News) -->
            <div>
                <div class="flex items-center justify-between border-b border-neutral-200 pb-4 mb-6">
                    <h2 class="font-black text-xl tracking-tight text-black uppercase flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-black rounded-sm"></span>
                        Berita Terbaru
                    </h2>
                </div>
                
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                        <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                    <span class="text-black font-bold uppercase">METRO</span>
                                    <span>•</span>
                                    <span>BEBERAPA MENIT YANG LALU</span>
                                </div>
                                <h3 class="text-lg font-bold text-black group-hover:text-neutral-700 transition-colors line-clamp-2">
                                    Penerapan Parkir Non-Tunai Mulai Diberlakukan di Kawasan Bisnis Karawaci
                                </h3>
                                <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                    Dinas Perhubungan Kota Tangerang meluncurkan sistem pembayaran parkir berbasis QRIS untuk meningkatkan transparansi PAD daerah.
                                </p>
                            </div>
                            <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 3 min</span>
                        </div>
                    </article>

                    <!-- Item 2 -->
                    <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                        <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                    <span class="text-black font-bold uppercase">KOMUNITAS</span>
                                    <span>•</span>
                                    <span>1 JAM YANG LALU</span>
                                </div>
                                <h3 class="text-lg font-bold text-black group-hover:text-neutral-700 transition-colors line-clamp-2">
                                    Festival Seni Cisadane Hadirkan Ratusan Pegiat Budaya Akhir Pekan Ini
                                </h3>
                                <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                    Komunitas seni se-Tangerang Raya berkumpul menampilkan berbagai kesenian tradisional di bantaran Sungai Cisadane.
                                </p>
                            </div>
                            <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 4 min</span>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Section 2: Kategori Utama -->
            <div class="border-t border-neutral-200 pt-12 space-y-12">
                <h2 class="font-mono text-xs font-bold tracking-widest text-neutral-500 uppercase flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                    KATEGORI UTAMA
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- 1. Kategori: METRO -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">METRO</h3>
                            <a href="/category/metro" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Normalisasi Sungai Cisadane Masuki Tahap Akhir Sebelum Musim Hujan
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">25 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Pemkot Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Kategori: POLITIK -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">POLITIK</h3>
                            <a href="/category/politik" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    KPU Tangerang Umumkan Jadwal dan Tema Debat Calon Wali Kota
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">24 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Konsolidasi Internal Partai Siapkan Struktur Pemenangan Pilkada
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Kategori: EKONOMI -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">EKONOMI</h3>
                            <a href="/category/ekonomi" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Festival Kuliner Pasar Baru Dukung Pelaku Ekonomi Kreatif Lokal
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">25 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Realisasi Investasi Kota Tangerang Semester I Tembus Rp 8 Triliun
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Kategori: OLAHRAGA -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">OLAHRAGA</h3>
                            <a href="/category/olahraga" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Persita Tangerang Rekrut Striker Asing Baru Asal Brasil
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">23 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    KONI Kota Tangerang Gelar Seleksi Atlit Muda Cabang Atletik
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Kategori: KOMUNITAS -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">KOMUNITAS</h3>
                            <a href="/category/komunitas" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Gerakan Bersih Cisadane Oleh Relawan Lingkungan Hidup
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">22 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Komunitas Fotografi Tangerang Adakan Pameran Karya Visual Jalanan
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Kategori: LIFESTYLE -->
                    <div class="border border-neutral-200 rounded-xl p-5 bg-white">
                        <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                            <h3 class="font-bold text-base text-black uppercase">LIFESTYLE</h3>
                            <a href="/category/lifestyle" class="font-mono text-[10px] text-neutral-400 hover:text-black">Lihat Semua &rarr;</a>
                        </div>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Tren Cafe Minimalis Bernuansa Industrial di Kota Tangerang
                                </h4>
                            </div>
                            <div class="group">
                                <span class="font-mono text-[9px] text-neutral-500">21 JUN 2026</span>
                                <h4 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-0.5">
                                    Rute Sepeda Santai Akhir Pekan Terbaik di Wilayah BSD dan Karawaci
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column: Sidebar Widgets (4 Columns) -->
        <div class="lg:col-span-4 space-y-8">
            
            <!-- Widget 1: Informasi Cuaca -->
            <div class="border border-neutral-200 rounded-xl p-6 bg-neutral-50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-neutral-500 uppercase mb-4 flex items-center justify-between">
                    <span>INFO CUACA</span>
                    <span class="text-neutral-800 font-bold">LIVE</span>
                </h3>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-3xl font-extrabold tracking-tight">31°C</p>
                        <p class="text-xs text-neutral-500 mt-1 font-mono">Tangerang Raya, Banten</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-bold text-neutral-700 block">Hujan Ringan</span>
                        <span class="font-mono text-[10px] text-neutral-500 block">Kec. Kecepatan Angin: 12 km/jam</span>
                    </div>
                </div>
            </div>

            <!-- Widget 2: Jadwal Sholat -->
            <div class="border border-neutral-200 rounded-xl p-6 bg-neutral-50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-neutral-500 uppercase mb-4 flex items-center justify-between">
                    <span>JADWAL SHOLAT TANGERANG</span>
                    <span class="text-neutral-500 font-mono">26 JUN</span>
                </h3>
                <div class="grid grid-cols-5 gap-2 text-center text-xs font-mono">
                    <div class="bg-white border border-neutral-200 p-2 rounded">
                        <span class="text-[9px] text-neutral-500 block">SUBUH</span>
                        <span class="font-bold mt-1 block text-black">04:42</span>
                    </div>
                    <div class="bg-white border border-neutral-200 p-2 rounded">
                        <span class="text-[9px] text-neutral-500 block">DZUHUR</span>
                        <span class="font-bold mt-1 block text-black">11:58</span>
                    </div>
                    <div class="bg-white border border-neutral-200 p-2 rounded">
                        <span class="text-[9px] text-neutral-500 block">ASHAR</span>
                        <span class="font-bold mt-1 block text-black">15:19</span>
                    </div>
                    <div class="bg-white border-2 border-black p-2 rounded">
                        <span class="text-[9px] text-black font-bold block">MAGHRIB</span>
                        <span class="font-bold mt-1 text-black block">17:54</span>
                    </div>
                    <div class="bg-white border border-neutral-200 p-2 rounded">
                        <span class="text-[9px] text-neutral-500 block">ISYA</span>
                        <span class="font-bold mt-1 block text-black">19:08</span>
                    </div>
                </div>
            </div>

            <!-- Widget 3: Polling Pembaca -->
            <div class="border border-neutral-200 rounded-xl p-6 bg-neutral-50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-neutral-500 uppercase mb-4">
                    POLLING MINGGU INI
                </h3>
                <p class="text-xs font-bold text-neutral-700 mb-4 leading-normal">
                    Apakah Anda setuju dengan rencana pembatasan operasional truk besar di jalan protokol Tangerang pada jam sibuk?
                </p>
                <form class="space-y-3 font-mono text-[10px]">
                    <label class="flex items-center gap-3 bg-white hover:bg-neutral-50 p-2.5 rounded cursor-pointer transition border border-neutral-200">
                        <input type="radio" name="poll" class="accent-black">
                        <span class="text-neutral-800">Sangat Setuju (68%)</span>
                    </label>
                    <label class="flex items-center gap-3 bg-white hover:bg-neutral-50 p-2.5 rounded cursor-pointer transition border border-neutral-200">
                        <input type="radio" name="poll" class="accent-black">
                        <span class="text-neutral-800">Kurang Setuju (24%)</span>
                    </label>
                    <label class="flex items-center gap-3 bg-white hover:bg-neutral-50 p-2.5 rounded cursor-pointer transition border border-neutral-200">
                        <input type="radio" name="poll" class="accent-black">
                        <span class="text-neutral-800">Tidak Peduli (8%)</span>
                    </label>
                    <button type="submit" id="btn-vote-submit" class="w-full bg-black text-white text-[11px] font-bold py-2 rounded uppercase tracking-wider hover:bg-neutral-800 transition mt-2">
                        Kirim Suara
                    </button>
                </form>
            </div>

        </div>
    </section>

</div>

<script>
    let currentSlide = 1;
    const totalSlides = 3;

    function setSlide(slideIndex) {
        // Hide all slides
        for (let i = 1; i <= totalSlides; i++) {
            const slide = document.getElementById(`slide-${i}`);
            const dot = document.getElementById(`carousel-dot-${i}`);
            if (slide) {
                if (i === slideIndex) {
                    slide.classList.remove('hidden');
                    // Fade in transition effect
                    setTimeout(() => {
                        slide.classList.remove('opacity-0');
                        slide.classList.add('opacity-100');
                    }, 50);
                } else {
                    slide.classList.add('hidden');
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                }
            }
            if (dot) {
                if (i === slideIndex) {
                    dot.classList.remove('bg-neutral-200');
                    dot.classList.add('bg-black');
                } else {
                    dot.classList.remove('bg-black');
                    dot.classList.add('bg-neutral-200');
                }
            }
        }
        currentSlide = slideIndex;
    }

    function nextSlide() {
        let next = currentSlide + 1;
        if (next > totalSlides) next = 1;
        setSlide(next);
    }

    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 1) prev = totalSlides;
        setSlide(prev);
    }

    // Auto transition every 8 seconds
    setInterval(nextSlide, 8000);
</script>
@endsection
