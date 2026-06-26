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
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 border-b border-neutral-200 pb-12">
        
        <!-- Big Headline Article (8 Columns) -->
        <article class="lg:col-span-8 group flex flex-col justify-between">
            <a href="#" class="block overflow-hidden rounded-xl border border-neutral-200 hover:border-neutral-300 bg-white p-4 transition duration-300 relative">
                <div class="absolute top-6 left-6 z-10 font-mono text-xs font-bold bg-black text-white border border-neutral-800 px-3 py-1 rounded-full uppercase tracking-wider">
                    METRO UTAMA
                </div>
                <div class="aspect-video w-full overflow-hidden rounded-lg">
                    <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-[1.01] transition-all duration-700" alt="Headline Image">
                </div>
                <div class="mt-6">
                    <div class="flex items-center gap-3 font-mono text-[10px] text-neutral-500 mb-3">
                        <span>OLEH REDAKSI</span>
                        <span>•</span>
                        <span>26 JUNI 2026</span>
                        <span>•</span>
                        <span>5 MIN READ</span>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-black tracking-tighter text-black leading-tight group-hover:text-neutral-700 transition-colors">
                        Revolusi Transportasi Tangerang: Rute Baru LRT Terkoneksi Jabodebek Resmi Disepakati
                    </h1>
                    <p class="mt-4 text-neutral-600 leading-relaxed">
                        Pemerintah Kota Tangerang dan Kementerian Perhubungan resmi menandatangani nota kesepahaman (MoU) pembangunan jalur LRT terintegrasi. Proyek strategis nasional ini diharapkan dapat mengurai kepadatan lalu lintas harian lintas batas hingga 40%.
                    </p>
                </div>
            </a>
        </article>

        <!-- Trending Sidebar (4 Columns) -->
        <aside class="lg:col-span-4 flex flex-col">
            <div class="border border-neutral-200 rounded-xl p-6 bg-neutral-50 flex-grow">
                <h2 class="font-mono text-xs font-bold tracking-widest text-neutral-500 uppercase mb-6 flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                    TERPOPULER SEPANJANG HARI
                </h2>
                
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <a href="#" class="group flex gap-4 items-start pb-6 border-b border-neutral-200 last:border-0 last:pb-0">
                        <span class="font-mono text-xl font-bold text-black leading-none">01</span>
                        <div>
                            <span class="font-mono text-[9px] text-neutral-800 uppercase tracking-widest font-bold">Politik</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1 line-clamp-2">
                                Jelang Pilkada Tangerang, Peta Koalisi Partai Mulai Mengerucut
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-2 block">1.2k views</span>
                        </div>
                    </a>
                    
                    <!-- Item 2 -->
                    <a href="#" class="group flex gap-4 items-start pb-6 border-b border-neutral-200 last:border-0 last:pb-0">
                        <span class="font-mono text-xl font-bold text-neutral-400 leading-none">02</span>
                        <div>
                            <span class="font-mono text-[9px] text-neutral-800 uppercase tracking-widest font-bold">Ekonomi</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1 line-clamp-2">
                                UMKM Kuliner Pasar Lama Alami Lonjakan Omzet 50% Akhir Pekan Ini
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-2 block">940 views</span>
                        </div>
                    </a>

                    <!-- Item 3 -->
                    <a href="#" class="group flex gap-4 items-start pb-6 border-b border-neutral-200 last:border-0 last:pb-0">
                        <span class="font-mono text-xl font-bold text-neutral-400 leading-none">03</span>
                        <div>
                            <span class="font-mono text-[9px] text-neutral-800 uppercase tracking-widest font-bold">Metro</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1 line-clamp-2">
                                Dinas Lingkungan Hidup Tambah 12 Armada Truk Sampah Baru
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-2 block">810 views</span>
                        </div>
                    </a>

                    <!-- Item 4 -->
                    <a href="#" class="group flex gap-4 items-start pb-6 border-b border-neutral-200 last:border-0 last:pb-0">
                        <span class="font-mono text-xl font-bold text-neutral-400 leading-none">04</span>
                        <div>
                            <span class="font-mono text-[9px] text-neutral-800 uppercase tracking-widest font-bold">Olahraga</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1 line-clamp-2">
                                Persita Tangerang Rekrut Striker Asing Asal Brasil
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-2 block">720 views</span>
                        </div>
                    </a>
                </div>
            </div>
        </aside>
    </section>

    <!-- News Categories Sections -->
    <section class="py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Section: Main News Feed (8 Columns) -->
        <div class="lg:col-span-8 space-y-12">
            
            <!-- Section: Metro Terbaru -->
            <div>
                <div class="flex items-center justify-between border-b border-neutral-200 pb-4 mb-6">
                    <h2 class="font-black text-xl tracking-tight text-black uppercase flex items-center gap-2">
                        <span class="w-2.5 h-2.5 bg-black rounded-sm"></span>
                        Metro Terkini
                    </h2>
                    <a href="/category/metro" class="font-mono text-xs text-neutral-500 hover:text-black transition">Lihat Semua &rarr;</a>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <article class="group relative flex flex-col bg-white rounded-xl overflow-hidden border border-neutral-200 hover:border-neutral-400 transition-all duration-300">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="News Image">
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">METRO</span>
                                <span>•</span>
                                <span>26 JUN 2026</span>
                            </div>
                            <h3 class="text-base font-bold text-black group-hover:text-neutral-700 transition-colors line-clamp-2">
                                Normalisasi Sungai Cisadane Masuki Tahap Akhir Sebelum Musim Hujan
                            </h3>
                            <p class="mt-2 text-xs text-neutral-600 line-clamp-2">
                                Balai Besar Wilayah Sungai Cisadane mempercepat pengerukan lumpur di titik rawan luapan.
                            </p>
                            <div class="mt-4 pt-4 border-t border-neutral-200 flex justify-between items-center text-[10px] text-neutral-500 font-mono">
                                <span class="group-hover:text-black transition">Baca Selengkapnya</span>
                                <span>4 MIN BACA</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Card 2 -->
                    <article class="group relative flex flex-col bg-white rounded-xl overflow-hidden border border-neutral-200 hover:border-neutral-400 transition-all duration-300">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="News Image">
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">METRO</span>
                                <span>•</span>
                                <span>25 JUN 2026</span>
                            </div>
                            <h3 class="text-base font-bold text-black group-hover:text-neutral-700 transition-colors line-clamp-2">
                                Pemkot Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas
                            </h3>
                            <p class="mt-2 text-xs text-neutral-600 line-clamp-2">
                                Penambahan koridor baru ini bertujuan mempermudah masyarakat mengakses simpul transportasi umum.
                            </p>
                            <div class="mt-4 pt-4 border-t border-neutral-200 flex justify-between items-center text-[10px] text-neutral-500 font-mono">
                                <span class="group-hover:text-black transition">Baca Selengkapnya</span>
                                <span>3 MIN BACA</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Section: Politik & Ekonomi -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Politik -->
                <div>
                    <div class="border-b border-neutral-200 pb-4 mb-6">
                        <h2 class="font-black text-lg tracking-tight text-black uppercase flex items-center gap-2">
                            <span class="w-2 h-2 bg-black rounded-sm"></span>
                            Politik
                        </h2>
                    </div>
                    <div class="space-y-4">
                        <a href="#" class="group block pb-4 border-b border-neutral-200 last:border-0 last:pb-0">
                            <span class="font-mono text-[9px] text-neutral-800 uppercase font-bold">Debat Pilkada</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1">
                                KPU Tangerang Umumkan Jadwal dan Tema Debat Calon Wali Kota
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-1.5 block">25 Juni 2026</span>
                        </a>
                        <a href="#" class="group block pb-4 border-b border-neutral-200 last:border-0 last:pb-0">
                            <span class="font-mono text-[9px] text-neutral-800 uppercase font-bold">Partai Politik</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1">
                                Konsolidasi Internal, PDI Perjuangan Siapkan Struktur Pemenangan Tingkat RT
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-1.5 block">24 Juni 2026</span>
                        </a>
                    </div>
                </div>

                <!-- Ekonomi -->
                <div>
                    <div class="border-b border-neutral-200 pb-4 mb-6">
                        <h2 class="font-black text-lg tracking-tight text-black uppercase flex items-center gap-2">
                            <span class="w-2 h-2 bg-black rounded-sm"></span>
                            Ekonomi
                        </h2>
                    </div>
                    <div class="space-y-4">
                        <a href="#" class="group block pb-4 border-b border-neutral-200 last:border-0 last:pb-0">
                            <span class="font-mono text-[9px] text-neutral-800 uppercase font-bold">UMKM</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1">
                                Festival Kuliner Pasar Baru Dukung Ratusan Pelaku Ekonomi Kreatif Lokal
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-1.5 block">26 Juni 2026</span>
                        </a>
                        <a href="#" class="group block pb-4 border-b border-neutral-200 last:border-0 last:pb-0">
                            <span class="font-mono text-[9px] text-neutral-800 uppercase font-bold">Investasi</span>
                            <h3 class="text-sm font-bold text-black group-hover:text-neutral-700 transition-colors mt-1">
                                Realisasi Investasi Kota Tangerang Semester I Tembus Rp 8 Triliun
                            </h3>
                            <span class="font-mono text-[9px] text-neutral-500 uppercase mt-1.5 block">24 Juni 2026</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Section: Sidebar Widgets (4 Columns) -->
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
@endsection
