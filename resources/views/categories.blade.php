@extends('layouts.app')

@section('title', 'Semua Kategori Berita - Metro Tangerang')

@section('content')
<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" wire:navigate class="hover:text-sky-750 transition">Beranda</a>
        <span>/</span>
        <span class="text-slate-400">Semua Kategori</span>
    </nav>

    <!-- Header Section -->
    <div class="border-b border-slate-200 pb-8 mb-10 text-center md:text-left">
        <span class="font-mono text-[10px] font-bold text-sky-700 bg-sky-50 border border-sky-200/85 px-3 py-1 rounded-full uppercase tracking-widest block w-fit mx-auto md:mx-0 mb-3">
            NAVIGASI PORTAL
        </span>
        <h1 class="text-3xl md:text-5xl font-black tracking-tight text-black uppercase leading-none">
            SEMUA KATEGORI BERITA
        </h1>
        <p class="mt-4 text-xs md:text-sm text-slate-500 font-mono uppercase tracking-wide">
            Pilih dan jelajahi arsip artikel terlengkap berdasarkan kluster liputan khusus kami
        </p>
    </div>

    <!-- Categories Grid (Premium Editorial Newspaper Grid Style) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- 1. Kategori: METRO -->
        <div class="border-t-4 border-t-sky-600 border border-slate-200 rounded-xl p-6 bg-white hover:border-sky-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-sky-850 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-city text-sky-600 text-sm"></i>
                        METRO
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Menyajikan liputan mendalam seputar dinamika perkotaan, kebijakan pemerintah kota, layanan publik, transportasi, infastruktur, serta aktivitas warga di wilayah Tangerang Raya.
                </p>
            </div>
            <a href="/search?category=METRO" wire:navigate class="w-full py-2.5 bg-sky-50 hover:bg-sky-600 hover:text-white border border-sky-200 text-center text-sky-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 2. Kategori: POLITIK -->
        <div class="border-t-4 border-t-indigo-600 border border-slate-200 rounded-xl p-6 bg-white hover:border-indigo-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-indigo-850 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-scale-balanced text-indigo-600 text-sm"></i>
                        POLITIK
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Berita terkini mengenai dinamika konstelasi politik lokal, pemilu legislatif, Pemilihan Kepala Daerah (Pilkada) Tangerang, kebijakan publik, dan kinerja birokrasi daerah.
                </p>
            </div>
            <a href="/search?category=POLITIK" wire:navigate class="w-full py-2.5 bg-indigo-50 hover:bg-indigo-600 hover:text-white border border-indigo-200 text-center text-indigo-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 3. Kategori: EKONOMI -->
        <div class="border-t-4 border-t-emerald-600 border border-slate-200 rounded-xl p-6 bg-white hover:border-emerald-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-emerald-850 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-coins text-emerald-600 text-sm"></i>
                        EKONOMI
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Menyajikan informasi bisnis, pasar tradisional, rilis UMKM, industri manufaktur, peluang investasi, iklim investasi daerah, serta perkembangan pariwisata ekonomi kreatif.
                </p>
            </div>
            <a href="/search?category=EKONOMI" wire:navigate class="w-full py-2.5 bg-emerald-50 hover:bg-emerald-600 hover:text-white border border-emerald-200 text-center text-emerald-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 4. Kategori: OLAHRAGA -->
        <div class="border-t-4 border-t-amber-500 border border-slate-200 rounded-xl p-6 bg-white hover:border-amber-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-amber-850 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-circle-play text-amber-600 text-sm"></i>
                        OLAHRAGA
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Mengabarkan aktivitas klub olahraga Tangerang (seperti Persita), program pembinaan usia dini KONI Tangerang, laga kompetisi, serta kiprah atlet berprestasi asal Tangerang Raya.
                </p>
            </div>
            <a href="/search?category=OLAHRAGA" wire:navigate class="w-full py-2.5 bg-amber-50 hover:bg-amber-500 hover:text-white border border-amber-200 text-center text-amber-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 5. Kategori: KOMUNITAS -->
        <div class="border-t-4 border-t-purple-600 border border-slate-200 rounded-xl p-6 bg-white hover:border-purple-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-purple-850 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-users-line text-purple-600 text-sm"></i>
                        KOMUNITAS
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Wadah apresiasi untuk gerakan komunitas lokal, aksi relawan sosial dan lingkungan, komunitas hobi, kegiatan kreatif pemuda, serta ragam keunikan budaya lokal di Tangerang.
                </p>
            </div>
            <a href="/search?category=KOMUNITAS" wire:navigate class="w-full py-2.5 bg-purple-50 hover:bg-purple-600 hover:text-white border border-purple-200 text-center text-purple-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 6. Kategori: LIFESTYLE -->
        <div class="border-t-4 border-t-rose-500 border border-slate-200 rounded-xl p-6 bg-white hover:border-rose-500/50 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <h3 class="font-bold text-lg text-rose-800 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-mug-saucer text-rose-500 text-sm"></i>
                        LIFESTYLE
                    </h3>
                </div>
                <p class="text-xs text-slate-500 font-serif leading-relaxed mb-6">
                    Rekomendasi cafe estetik kekinian, rute sepeda santai di Tangerang, review wisata kuliner legendaris (seperti kawasan Pasar Lama), tips kesehatan, serta gaya hidup perkotaan.
                </p>
            </div>
            <a href="/search?category=LIFESTYLE" wire:navigate class="w-full py-2.5 bg-rose-50 hover:bg-rose-600 hover:text-white border border-rose-200 text-center text-rose-800 font-mono text-[10px] font-bold uppercase rounded-lg tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

    </div>

    <!-- Quick Search Tips Banner -->
    <div class="mt-12 bg-slate-50 border border-slate-200 rounded-xl p-6 text-center">
        <h4 class="font-bold text-sm text-slate-800 uppercase mb-2">Ingin Mencari Topik Spesifik?</h4>
        <p class="text-xs text-slate-500 max-w-2xl mx-auto leading-relaxed mb-4">
            Anda dapat menggunakan fitur pencarian bebas untuk memfilter berita dengan kata kunci, kategori, maupun rentang tanggal tertentu secara instan.
        </p>
        <a href="{{ route('news.search') }}" wire:navigate class="inline-flex items-center gap-2 px-6 py-2.5 bg-slate-900 text-white font-mono text-[10px] font-bold uppercase rounded-full tracking-wider hover:bg-slate-850 transition">
            <i class="fa-solid fa-magnifying-glass"></i> Buka Halaman Pencarian
        </a>
    </div>

</div>
@endsection
