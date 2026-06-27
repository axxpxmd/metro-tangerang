@extends('layouts.app')

@section('title', 'Revolusi Transportasi Tangerang: Rute Baru LRT Terkoneksi Jabodebek Resmi Disepakati - Metro Tangerang')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-sky-755 transition">Beranda</a>
        <span>/</span>
        <a href="/category/metro" class="hover:text-sky-755 transition text-sky-700 font-bold">Metro</a>
        <span>/</span>
        <span class="text-slate-400">Detail Berita</span>
    </nav>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Column: Article (8 Columns) -->
        <article class="lg:col-span-8 bg-white border border-slate-200 rounded-xl p-6 md:p-8">
            
            <!-- Category Badge -->
            <div class="mb-4">
                <a href="/category/metro" class="font-mono text-[10px] font-bold text-sky-800 bg-sky-50 border border-sky-200/80 px-3 py-1 rounded-full uppercase tracking-wider">
                    METRO TANGERANG
                </a>
            </div>

            <!-- Title -->
            <h1 class="text-2xl md:text-4xl font-black tracking-tight text-black leading-tight mb-6">
                Revolusi Transportasi Tangerang: Rute Baru LRT Terkoneksi Jabodebek Resmi Disepakati
            </h1>

            <!-- Author & Metadata Meta -->
            <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-100 mb-6">
                <div class="flex items-center gap-3">
                    <!-- Author Avatar -->
                    <div class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 overflow-hidden flex-shrink-0">
                        <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale" alt="Redaksi">
                    </div>
                    <div>
                        <p class="text-xs font-bold text-black uppercase">OLEH REDAKSI METRO</p>
                        <p class="font-mono text-[9px] text-slate-500 uppercase mt-0.5">Diterbitkan: 26 Juni 2026 • Waktu Baca: 5 Menit</p>
                    </div>
                </div>

                <!-- Share Buttons (Top) -->
                <div class="flex items-center gap-2">
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:text-sky-600 hover:border-sky-500 transition" title="Bagikan ke WhatsApp">
                        <span class="font-mono text-[10px] font-bold">WA</span>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:text-blue-650 hover:border-blue-500 transition" title="Bagikan ke Facebook">
                        <span class="font-mono text-[10px] font-bold">FB</span>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:text-black hover:border-black transition" title="Bagikan ke X">
                        <span class="font-mono text-[10px] font-bold">X</span>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:text-sky-750 hover:border-sky-600 transition" title="Bagikan ke Telegram">
                        <span class="font-mono text-[10px] font-bold">TG</span>
                    </a>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="relative overflow-hidden rounded-xl border border-slate-200 bg-slate-50 aspect-video mb-6">
                <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" alt="Rute LRT Tangerang">
                <div class="absolute bottom-3 left-3 bg-black/70 text-white font-mono text-[8px] tracking-wide px-2.5 py-1 rounded">
                    FOTO: DOKUMEN HUMAS PEMKOT TANGERANG
                </div>
            </div>

            <!-- Image Caption -->
            <p class="text-xs text-slate-500 italic leading-normal mb-8 pb-4 border-b border-slate-100">
                Pertemuan kesepakatan rute pembangunan LRT koridor barat yang menghubungkan wilayah perbatasan Tangerang hingga stasiun integrasi Jakarta.
            </p>

            <!-- Article Body -->
            <div class="font-serif text-md md:text-lg leading-relaxed text-slate-800 space-y-6">
                <p>
                    <span class="float-left text-5xl md:text-6xl font-black font-sans text-sky-800 mr-3 mt-1 leading-none drop-shadow-none">P</span>emerintah Kota Tangerang bersama Kementerian Perhubungan telah resmi menandatangani Nota Kesepahaman (MoU) terkait percepatan pembangunan jalur transportasi masal Light Rail Transit (LRT). Proyek strategis nasional ini direncanakan akan mulai dikerjakan pada kuartal ketiga tahun 2026.
                </p>

                <p>
                    Langkah kolaboratif ini diambil guna mengatasi tantangan kemacetan harian lintas kota yang terus meningkat signifikan dalam lima tahun terakhir. Berdasarkan data Dinas Perhubungan, pergerakan masyarakat dari Tangerang menuju DKI Jakarta menggunakan kendaraan pribadi tercatat menyentuh angka 1,2 juta pergerakan per hari.
                </p>

                <!-- In-Article Recommendation (Baca Juga) -->
                <div class="bg-sky-50/50 border-l-4 border-sky-600 p-4 rounded-r-lg font-sans my-8">
                    <span class="block font-mono text-[9px] font-bold text-sky-850 tracking-widest uppercase mb-1">BACA JUGA</span>
                    <a href="#" class="text-sm font-bold text-black hover:text-sky-800 transition leading-snug block">
                        Pemkot Tangerang Luncurkan Program Beasiswa Mahasiswa Berprestasi Tingkat Kecamatan
                    </a>
                </div>

                <p>
                    Wali Kota Tangerang menegaskan bahwa rute yang disepakati akan terkoneksi langsung dengan sistem Jabodebek LRT melalui rute ekstensi dari wilayah barat. Integrasi ini diharapkan dapat mengurai kepadatan jalur utama jalan protokol Daan Mogot dan Tol Jakarta-Tangerang hingga mencapai 40 persen.
                </p>

                <!-- Blockquote Section -->
                <blockquote class="border-l-4 border-slate-800 pl-6 py-2 italic font-serif text-xl text-black my-8 bg-slate-50/40 rounded-r-lg pr-4">
                    "Ini bukan sekadar penyediaan sarana transportasi masal baru, melainkan sebuah lompatan besar menuju integrasi tata ruang kota Tangerang yang ramah lingkungan dan modern."
                </blockquote>

                <p>
                    Tahap awal pembangunan fisik akan difokuskan pada Koridor I yang membentang dari kawasan bisnis Karawaci, melewati pusat pemerintahan Kota Tangerang, hingga titik transit integrasi di stasiun perbatasan Jakarta Barat. Sebanyak 8 stasiun modern dengan konsep TOD (Transit Oriented Development) siap dibangun di sepanjang rute koridor tersebut.
                </p>

                <p>
                    Kementerian Perhubungan memastikan pendanaan proyek ini akan didukung oleh konsorsium gabungan Badan Usaha Milik Negara (BUMN) dan investasi kemitraan swasta-publik (KPBU), guna memastikan keberlanjutan pengerjaan proyek tanpa membebani APBD kota secara berlebih.
                </p>
            </div>

            <!-- Tags Section -->
            <div class="mt-8 pt-6 border-t border-slate-100 flex flex-wrap gap-2">
                <span class="font-mono text-[9px] font-bold text-slate-500 uppercase py-1">TAGS:</span>
                <a href="#" class="font-mono text-[9px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-3 py-1 rounded">#LRT TANGERANG</a>
                <a href="#" class="font-mono text-[9px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-3 py-1 rounded">#KEMENHUB</a>
                <a href="#" class="font-mono text-[9px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-3 py-1 rounded">#TRANSPORTASI PUBLIK</a>
                <a href="#" class="font-mono text-[9px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-3 py-1 rounded">#PEMKOT TANGERANG</a>
            </div>

            <!-- Share Buttons (Bottom) -->
            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                <span class="text-xs font-bold text-black uppercase">BAGIKAN ARTIKEL INI:</span>
                <div class="flex items-center gap-2">
                    <a href="#" class="font-mono text-[10px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-4 py-1.5 rounded flex items-center gap-1.5 transition">
                        WhatsApp
                    </a>
                    <a href="#" class="font-mono text-[10px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-4 py-1.5 rounded flex items-center gap-1.5 transition">
                        Facebook
                    </a>
                    <a href="#" class="font-mono text-[10px] font-bold text-sky-800 bg-sky-50 hover:bg-sky-100 border border-sky-100 px-4 py-1.5 rounded flex items-center gap-1.5 transition">
                        X / Twitter
                    </a>
                </div>
            </div>

            <!-- Comment Section -->
            <section class="mt-12 pt-8 border-t border-slate-200">
                <h3 class="text-lg font-bold text-black uppercase mb-6 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
                    Komentar Pembaca (2)
                </h3>

                <!-- Add Comment Form -->
                <form class="space-y-4 mb-8">
                    <div>
                        <label for="comment-text" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Tulis Komentar Anda</label>
                        <textarea id="comment-text" rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:ring-1 focus:ring-sky-500 focus:border-sky-500 focus:outline-none placeholder-slate-400 text-slate-800" placeholder="Jaga kesopanan dalam berkomentar..."></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:outline-none focus:ring-1 focus:ring-sky-500 placeholder-slate-400 text-slate-800" placeholder="Nama Anda">
                        </div>
                        <div>
                            <input type="email" class="w-full bg-slate-50 border border-slate-200 rounded-lg p-3 text-xs focus:outline-none focus:ring-1 focus:ring-sky-500 placeholder-slate-400 text-slate-800" placeholder="Email Anda (tidak dipublikasikan)">
                        </div>
                    </div>
                    <button type="button" id="btn-submit-comment" class="bg-sky-900 text-white font-mono text-[11px] font-bold px-6 py-2.5 rounded-full hover:bg-sky-800 transition uppercase tracking-wider">
                        Kirim Komentar
                    </button>
                </form>

                <!-- Comments List -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="flex gap-4 items-start p-4 bg-slate-50/50 border border-slate-100 rounded-xl">
                        <div class="w-9 h-9 rounded-full bg-sky-100 flex-shrink-0 flex items-center justify-center font-mono font-bold text-sky-800 text-xs">
                            AW
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-xs font-bold text-black">Agus Wijaya</span>
                                <span class="font-mono text-[8px] text-slate-400">26 JUN 2026, 14:22 WIB</span>
                            </div>
                            <p class="text-xs text-slate-650 leading-relaxed">
                                Akhirnya terealisasi juga! Semoga proses pembangunannya lancar dan tidak mangkrak. Tangerang-Jakarta memang butuh integrasi transportasi masal seperti ini biar mengurangi stres kemacetan harian.
                            </p>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="flex gap-4 items-start p-4 bg-slate-50/50 border border-slate-100 rounded-xl">
                        <div class="w-9 h-9 rounded-full bg-sky-100 flex-shrink-0 flex items-center justify-center font-mono font-bold text-sky-800 text-xs">
                            RT
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-xs font-bold text-black">Rina Tangerang</span>
                                <span class="font-mono text-[8px] text-slate-400">26 JUN 2026, 15:05 WIB</span>
                            </div>
                            <p class="text-xs text-slate-650 leading-relaxed">
                                Sangat setuju, asalkan integrasi stasiun MRT/LRT ke transportasi lokal seperti Si Benteng juga dipikirkan supaya masyarakat tidak kesulitan menjangkau stasiun.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </article>

        <!-- Right Column: Sidebar (4 Columns) -->
        <aside class="lg:col-span-4 lg:sticky lg:top-20 space-y-8 self-start">
            
            <!-- Widget 1: Informasi Cuaca -->
            <div class="border border-sky-100 rounded-xl p-6 bg-sky-50/50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-sky-800 uppercase mb-4 flex items-center justify-between">
                    <span>INFO CUACA</span>
                    <span class="text-sky-700 font-extrabold">LIVE</span>
                </h3>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-3xl font-extrabold tracking-tight text-slate-800">31°C</p>
                        <p class="text-xs text-slate-500 mt-1 font-mono">Tangerang Raya, Banten</p>
                    </div>
                    <div class="text-right">
                        <span class="text-xs font-bold text-sky-800 block">Hujan Ringan</span>
                        <span class="font-mono text-[10px] text-slate-555 block">Kec. Kecepatan Angin: 12 km/jam</span>
                    </div>
                </div>
            </div>

            <!-- Widget 2: Jadwal Sholat -->
            <div class="border border-sky-100 rounded-xl p-6 bg-sky-50/50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-sky-800 uppercase mb-4 flex items-center justify-between">
                    <span>JADWAL SHOLAT TANGERANG</span>
                    <span class="text-sky-700 font-mono font-bold">26 JUN</span>
                </h3>
                <div class="grid grid-cols-5 gap-2 text-center text-xs font-mono">
                    <div class="bg-white border border-slate-200 p-2 rounded">
                        <span class="text-[9px] text-slate-500 block">SUBUH</span>
                        <span class="font-bold mt-1 block text-slate-800">04:42</span>
                    </div>
                    <div class="bg-white border border-slate-200 p-2 rounded">
                        <span class="text-[9px] text-slate-500 block">DZUHUR</span>
                        <span class="font-bold mt-1 block text-slate-800">11:58</span>
                    </div>
                    <div class="bg-white border border-slate-200 p-2 rounded">
                        <span class="text-[9px] text-slate-500 block">ASHAR</span>
                        <span class="font-bold mt-1 block text-slate-800">15:19</span>
                    </div>
                    <div class="bg-white border-2 border-sky-600 p-2 rounded">
                        <span class="text-[9px] text-sky-700 font-bold block">MAGHRIB</span>
                        <span class="font-bold mt-1 text-sky-700 block">17:54</span>
                    </div>
                    <div class="bg-white border border-slate-200 p-2 rounded">
                        <span class="text-[9px] text-slate-500 block">ISYA</span>
                        <span class="font-bold mt-1 block text-slate-800">19:08</span>
                    </div>
                </div>
            </div>

            <!-- Widget 3: Ruang Iklan Sidebar (Sticky Banner) -->
            <a href="/iklan" class="group w-full bg-slate-50 border border-slate-200 rounded-xl aspect-[300/250] flex flex-col items-center justify-center p-6 text-center hover:border-sky-500 hover:bg-sky-50/10 transition duration-300">
                <span class="font-mono text-[9px] font-bold text-sky-700 tracking-widest uppercase mb-2">PASANG IKLAN ANDA</span>
                <h4 class="text-xs font-bold text-slate-800 leading-snug mb-3">
                    Jangkau Ribuan Pembaca Aktif Tangerang Raya Setiap Hari
                </h4>
                <p class="font-mono text-[9px] text-slate-500 leading-normal">
                    Dimensi: 300 x 250 px<br>
                    Email: ads@metrotangerang.com<br>
                    WhatsApp: 0812-3456-7890
                </p>
            </a>

        </aside>
    </div>

    <!-- Related Articles Section (Bottom Grid) -->
    <section class="mt-16 pt-12 border-t border-slate-200">
        <h3 class="text-xl font-black tracking-tight text-black uppercase mb-8 flex items-center gap-2">
            <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
            Berita Terkait
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <a href="#" class="group block bg-white border border-slate-200 hover:border-slate-400 rounded-xl p-4 transition duration-300">
                <div class="relative overflow-hidden aspect-video rounded-lg bg-slate-100 border border-slate-200 mb-4">
                    <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-102 transition duration-500" alt="News">
                </div>
                <span class="font-mono text-[8px] font-bold text-sky-600 uppercase tracking-widest block mb-2">METRO</span>
                <h4 class="text-sm font-bold text-black group-hover:text-sky-850 transition line-clamp-2 leading-snug">
                    Normalisasi Sungai Cisadane Masuki Tahap Akhir Sebelum Musim Hujan
                </h4>
                <span class="font-mono text-[8px] text-slate-400 mt-2 block">25 JUN 2026</span>
            </a>

            <!-- Article 2 -->
            <a href="#" class="group block bg-white border border-slate-200 hover:border-slate-400 rounded-xl p-4 transition duration-300">
                <div class="relative overflow-hidden aspect-video rounded-lg bg-slate-100 border border-slate-200 mb-4">
                    <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-102 transition duration-500" alt="News">
                </div>
                <span class="font-mono text-[8px] font-bold text-sky-600 uppercase tracking-widest block mb-2">METRO</span>
                <h4 class="text-sm font-bold text-black group-hover:text-sky-850 transition line-clamp-2 leading-snug">
                    Pemkot Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas
                </h4>
                <span class="font-mono text-[8px] text-slate-400 mt-2 block">24 JUN 2026</span>
            </a>

            <!-- Article 3 -->
            <a href="#" class="group block bg-white border border-slate-200 hover:border-slate-400 rounded-xl p-4 transition duration-300">
                <div class="relative overflow-hidden aspect-video rounded-lg bg-slate-100 border border-slate-200 mb-4">
                    <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-102 transition duration-500" alt="News">
                </div>
                <span class="font-mono text-[8px] font-bold text-sky-600 uppercase tracking-widest block mb-2">METRO</span>
                <h4 class="text-sm font-bold text-black group-hover:text-sky-850 transition line-clamp-2 leading-snug">
                    Penerapan Parkir Non-Tunai Mulai Diberlakukan di Kawasan Bisnis Karawaci
                </h4>
                <span class="font-mono text-[8px] text-slate-400 mt-2 block">23 JUN 2026</span>
            </a>
        </div>
    </section>

</div>
@endsection
