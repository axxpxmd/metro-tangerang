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
        <div class="border border-slate-200 bg-slate-50/40 hover:bg-sky-50/20 hover:border-sky-300 rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-sky-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-city text-sky-600 text-xs"></i>
                        METRO
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Menyajikan liputan mendalam seputar dinamika perkotaan, kebijakan pemerintah kota, layanan publik, transportasi, infrastruktur, serta aktivitas warga di wilayah Tangerang Raya.
                </p>
            </div>
            <a href="/search?category=METRO" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-sky-600 group-hover/card:text-white border border-slate-200 group-hover/card:border-sky-600 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 2. Kategori: POLITIK -->
        <div class="border border-slate-200 bg-slate-50/40 hover:bg-indigo-50/20 hover:border-indigo-300 rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-indigo-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-scale-balanced text-indigo-600 text-xs"></i>
                        POLITIK
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Berita terkini mengenai dinamika konstelasi politik lokal, pemilu legislatif, Pemilihan Kepala Daerah (Pilkada) Tangerang, kebijakan publik, dan kinerja birokrasi daerah.
                </p>
            </div>
            <a href="/search?category=POLITIK" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-indigo-600 group-hover/card:text-white border border-slate-200 group-hover/card:border-indigo-600 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 3. Kategori: EKONOMI -->
        <div class="border border-slate-200 bg-slate-50/40 hover:bg-emerald-50/20 hover:border-emerald-300 rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-emerald-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-coins text-emerald-600 text-xs"></i>
                        EKONOMI
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Menyajikan informasi bisnis, pasar tradisional, rilis UMKM, industri manufaktur, peluang investasi, iklim investasi daerah, serta perkembangan pariwisata ekonomi kreatif.
                </p>
            </div>
            <a href="/search?category=EKONOMI" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-emerald-600 group-hover/card:text-white border border-slate-200 group-hover/card:border-emerald-600 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 4. Kategori: OLAHRAGA -->
        <div class="border border-slate-200 bg-slate-50/40 hover:bg-amber-50/20 hover:border-amber-300 rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-amber-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-circle-play text-amber-500 text-xs"></i>
                        OLAHRAGA
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Mengabarkan aktivitas klub olahraga Tangerang (seperti Persita), program pembinaan usia dini KONI Tangerang, laga kompetisi, serta kiprah atlet berprestasi asal Tangerang Raya.
                </p>
            </div>
            <a href="/search?category=OLAHRAGA" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-amber-550 group-hover/card:text-white border border-slate-200 group-hover/card:border-amber-550 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 5. Kategori: KOMUNITAS -->
        <div class="border-slate-200/80 bg-slate-50/30 hover:bg-purple-50/20 hover:border-purple-300 border rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-purple-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-users-line text-purple-600 text-xs"></i>
                        KOMUNITAS
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Wadah apresiasi untuk gerakan komunitas lokal, aksi relawan sosial dan lingkungan, komunitas hobi, kegiatan kreatif pemuda, serta ragam keunikan budaya lokal di Tangerang.
                </p>
            </div>
            <a href="/search?category=KOMUNITAS" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-purple-600 group-hover/card:text-white border border-slate-200 group-hover/card:border-purple-600 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
                Jelajahi Berita &rarr;
            </a>
        </div>

        <!-- 6. Kategori: LIFESTYLE -->
        <div class="border-slate-200/80 bg-slate-50/30 hover:bg-rose-50/20 hover:border-rose-300 border rounded-2xl p-6 transition-all duration-300 flex flex-col justify-between group/card">
            <div>
                <div class="flex items-center justify-between border-b border-slate-200/60 pb-3 mb-4">
                    <h3 class="font-bold text-base text-rose-900 uppercase flex items-center gap-2">
                        <i class="fa-solid fa-mug-saucer text-rose-500 text-xs"></i>
                        LIFESTYLE
                    </h3>
                </div>
                <p class="text-xs text-slate-550 font-serif leading-relaxed mb-6">
                    Rekomendasi cafe estetik kekinian, rute sepeda santai di Tangerang, review wisata kuliner legendaris (seperti kawasan Pasar Lama), tips kesehatan, serta gaya hidup perkotaan.
                </p>
            </div>
            <a href="/search?category=LIFESTYLE" wire:navigate class="w-full py-2.5 bg-white group-hover/card:bg-rose-600 group-hover/card:text-white border border-slate-200 group-hover/card:border-rose-600 text-center text-slate-700 font-mono text-[10px] font-bold uppercase rounded-xl tracking-wider transition duration-300">
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
