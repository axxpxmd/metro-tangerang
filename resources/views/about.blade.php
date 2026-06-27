@extends('layouts.app')

@section('title', 'Tentang Kami - Metro Tangerang')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" wire:navigate class="hover:text-sky-755 transition">Beranda</a>
        <span>/</span>
        <span class="text-slate-400">Tentang Kami</span>
    </nav>

    <!-- Header Section -->
    <div class="border-b border-slate-200 pb-8 mb-10">
        <span class="font-mono text-[10px] font-bold text-sky-700 bg-sky-50 border border-sky-200/85 px-3 py-1 rounded-full uppercase tracking-widest block w-fit mb-3">
            PROFIL PERUSAHAAN
        </span>
        <h1 class="text-3xl md:text-5xl font-black tracking-tight text-black uppercase leading-none">
            TENTANG KAMI
        </h1>
        <p class="mt-4 text-sm md:text-base text-slate-600 leading-relaxed font-serif italic">
            "Menyajikan jurnalisme lokal yang kredibel, mendalam, dan independen untuk mengawal dinamika pembangunan di Kota Tangerang Raya."
        </p>
    </div>

    <!-- Article Content -->
    <div class="space-y-12">
        
        <!-- Section 1: Sejarah -->
        <section class="space-y-4">
            <h2 class="text-lg font-bold text-black uppercase flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-sky-750 rounded-sm"></span>
                Sejarah Singkat
            </h2>
            <div class="font-serif text-slate-850 leading-relaxed space-y-4">
                <p>
                    <span class="float-left text-4xl font-sans font-black text-sky-800 mr-2 mt-1 leading-none">M</span>etro Tangerang didirikan sebagai respon atas pesatnya perkembangan wilayah penyangga ibu kota, khususnya Tangerang Raya yang meliputi Kota Tangerang, Kabupaten Tangerang, dan Kota Tangerang Selatan. Kami hadir sebagai media digital independen yang berdedikasi mengabarkan berbagai informasi lokal secara mendalam, akurat, dan tepercaya.
                </p>
                <p>
                    Berawal dari komunitas jurnalis independen lokal pada awal tahun 2024, Metro Tangerang secara konsisten mengawal dinamika perkotaan, kebijakan pemerintah daerah, pertumbuhan ekonomi kreatif, hingga aktivitas komunitas warga lokal. Kini, kami telah tumbuh menjadi salah satu portal berita rujukan utama bagi masyarakat Tangerang yang menginginkan informasi yang jernih dan berimbang.
                </p>
            </div>
        </section>

        <!-- Section 2: Visi & Misi -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Visi -->
            <div class="border border-slate-200 rounded-xl p-6 bg-slate-50/50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-sky-800 uppercase mb-3">VISI KAMI</h3>
                <p class="font-serif text-slate-800 text-sm leading-relaxed">
                    Menjadi portal media informasi lokal terbesar, terpercaya, dan paling berpengaruh di Tangerang Raya, yang mampu mencerdaskan serta mendorong partisipasi aktif masyarakat dalam pembangunan daerah.
                </p>
            </div>
            
            <!-- Misi -->
            <div class="border border-slate-200 rounded-xl p-6 bg-slate-50/50">
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-sky-800 uppercase mb-3">MISI KAMI</h3>
                <ul class="font-serif text-slate-850 text-sm leading-relaxed list-disc list-inside space-y-2">
                    <li>Menyajikan berita lokal yang aktual, tajam, berimbang, dan berlandaskan Kode Etik Jurnalistik siber.</li>
                    <li>Menjadi jembatan aspirasi yang efektif antara warga Tangerang Raya dengan pemerintah daerah.</li>
                    <li>Mendukung kemajuan UMKM dan sektor pariwisata ekonomi kreatif di wilayah Tangerang.</li>
                </ul>
            </div>
        </section>

        <!-- Section 3: Nilai-Nilai Redaksi -->
        <section class="space-y-6">
            <h2 class="text-lg font-bold text-black uppercase flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-sky-750 rounded-sm"></span>
                Nilai Utama Kami
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Nilai 1 -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white text-center">
                    <div class="w-10 h-10 rounded-full bg-sky-50 text-sky-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-scale-balanced text-sm"></i>
                    </div>
                    <h4 class="font-sans text-xs font-bold text-black uppercase mb-1">Integritas</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Kami menjunjung tinggi kebenaran informasi dan kemandirian editorial tanpa intervensi pihak luar.
                    </p>
                </div>
                <!-- Nilai 2 -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white text-center">
                    <div class="w-10 h-10 rounded-full bg-sky-50 text-sky-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-square-check text-sm"></i>
                    </div>
                    <h4 class="font-sans text-xs font-bold text-black uppercase mb-1">Kredibilitas</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Setiap fakta yang kami publikasikan melewati proses verifikasi ketat (cek & ricek) sebelum disajikan.
                    </p>
                </div>
                <!-- Nilai 3 -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white text-center">
                    <div class="w-10 h-10 rounded-full bg-sky-50 text-sky-700 flex items-center justify-center mx-auto mb-3">
                        <i class="fa-solid fa-location-dot text-sm"></i>
                    </div>
                    <h4 class="font-sans text-xs font-bold text-black uppercase mb-1">Lokalitas</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">
                        Kami menempatkan kepentingan dan suara warga lokal Tangerang Raya sebagai prioritas liputan utama.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 4: Tim Redaksi -->
        <section class="space-y-4">
            <h2 class="text-lg font-bold text-black uppercase flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-sky-750 rounded-sm"></span>
                Struktur Redaksi
            </h2>
            <div class="border border-slate-200 rounded-xl p-6 bg-slate-50/20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                    <div class="space-y-4">
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">PEMIMPIN REDAKSI / PENANGGUNG JAWAB</span>
                            <span class="font-bold text-slate-800">Budi Santoso</span>
                        </div>
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">REDAKTUR PELAKSANA</span>
                            <span class="font-bold text-slate-800">Arief Rahman</span>
                        </div>
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">REDAKTUR METRO & POLITIK</span>
                            <span class="font-bold text-slate-800">Rina Amalia</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">STAF REDAKSI / JURNALIS</span>
                            <span class="font-bold text-slate-800">Hendra Wijaya, Siti Lestari, Fadel Ahmad</span>
                        </div>
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">FOTOGRAFER</span>
                            <span class="font-bold text-slate-800">Denny Pratama</span>
                        </div>
                        <div>
                            <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider">DESAIN GRAFIS & INFOGRAFIS</span>
                            <span class="font-bold text-slate-800">Mega Utami</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Info Kantor -->
        <section class="space-y-4 pt-4 border-t border-slate-200">
            <h2 class="text-lg font-bold text-black uppercase flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-sky-700 rounded-sm"></span>
                Alamat & Kontak Resmi
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Info details -->
                <div class="space-y-4 text-xs font-mono">
                    <div>
                        <span class="text-slate-400 block uppercase">KANTOR UTAMA</span>
                        <p class="text-slate-800 font-bold font-sans text-sm mt-1">
                            Gedung Pers Metro Tangerang, Lantai 2<br>
                            Jl. Daan Mogot No. 120, Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15111
                        </p>
                    </div>
                    <div>
                        <span class="text-slate-400 block uppercase">EMAIL LAYANAN</span>
                        <a href="mailto:info@metrotangerang.com" class="text-sky-700 font-bold font-sans text-sm block mt-1">info@metrotangerang.com</a>
                    </div>
                    <div>
                        <span class="text-slate-400 block uppercase">WHATSAPP / TELEPON</span>
                        <a href="https://wa.me/6281234567890" class="text-sky-700 font-bold font-sans text-sm block mt-1">+62 812-3456-7890</a>
                    </div>
                </div>
                
                <!-- Mock Map Box -->
                <div class="bg-slate-100 border border-slate-200 rounded-xl aspect-[16/10] flex flex-col justify-center items-center text-center p-4">
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-sky-700 shadow-sm mb-2 border border-slate-200">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <span class="font-bold text-slate-800 text-xs">PETA LOKASI REDAKSI</span>
                    <span class="text-[9px] font-mono text-slate-400 mt-1 uppercase">Kawasan Pusat Pemerintahan Kota Tangerang</span>
                </div>
            </div>
        </section>

    </div>

</div>
@endsection
