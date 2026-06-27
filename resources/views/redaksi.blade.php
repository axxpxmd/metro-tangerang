@extends('layouts.app')

@section('title', 'Susunan Redaksi - Metro Tangerang')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Breadcrumbs -->
    <nav class="font-mono text-[10px] text-slate-500 uppercase tracking-wider mb-6 flex items-center gap-2">
        <a href="{{ route('home') }}" wire:navigate class="hover:text-sky-755 transition">Beranda</a>
        <span>/</span>
        <span class="text-slate-400">Info Redaksi</span>
    </nav>

    <!-- Header Section -->
    <div class="border-b border-slate-200 pb-8 mb-10">
        <span class="font-mono text-[10px] font-bold text-sky-700 bg-sky-50 border border-sky-200/85 px-3 py-1 rounded-full uppercase tracking-widest block w-fit mb-3">
            STRUKTUR ORGANISASI
        </span>
        <h1 class="text-3xl md:text-5xl font-black tracking-tight text-black uppercase leading-none">
            SUSUNAN REDAKSI
        </h1>
        <p class="mt-4 text-xs md:text-sm text-slate-500 font-mono uppercase tracking-wide">
            Metro Tangerang • Berlaku efektif sejak Juni 2026
        </p>
    </div>

    <!-- Editorial Crew Grid (Newspaper Editorial Page Style) -->
    <div class="space-y-12">
        
        <p class="font-serif text-slate-800 text-sm md:text-base leading-relaxed">
            Seluruh jajaran redaksi, editor, jurnalis, dan staf multimedia <strong>Metro Tangerang</strong> berkomitmen menyajikan karya jurnalistik lokal yang tepercaya, mendalam, independen, dan berorientasi pada kepentingan publik di wilayah Tangerang Raya. Berikut susunan pengelola redaksi kami:
        </p>

        <!-- Category: Dewan Redaksi & Manajemen -->
        <section class="space-y-6">
            <h2 class="text-sm font-mono font-bold tracking-widest text-slate-400 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                DEWAN REDAKSI & MANAJEMEN UTAMA
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Pemimpin Umum -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-xl p-5 flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">PEMIMPIN UMUM / PEMIMPIN REDAKSI</span>
                        <h3 class="font-bold text-base text-black uppercase">Budi Santoso</h3>
                    </div>
                    <p class="text-slate-500 text-xs mt-2 font-serif"> bertanggung jawab penuh atas kebijakan editorial, isi seluruh berita, serta kepatuhan hukum media.</p>
                </div>
                <!-- Wakil Pemred -->
                <div class="bg-slate-50/50 border border-slate-200 rounded-xl p-5 flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">WAKIL PEMIMPIN REDAKSI</span>
                        <h3 class="font-bold text-base text-black uppercase">Arief Rahman</h3>
                    </div>
                    <p class="text-slate-500 text-xs mt-2 font-serif">Membantu perumusan rencana redaksional harian dan mengoordinasikan jurnalis lapangan.</p>
                </div>
            </div>
        </section>

        <!-- Category: Redaktur & Editor -->
        <section class="space-y-6">
            <h2 class="text-sm font-mono font-bold tracking-widest text-slate-400 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                REDAKTUR PELAKSANA & EDITOR
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Redpel -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">REDAKTUR PELAKSANA</span>
                    <h4 class="font-bold text-sm text-black uppercase">Arief Rahman</h4>
                    <span class="font-mono text-[9px] text-sky-700 font-bold block mt-1">REDPEL</span>
                </div>
                <!-- Editor Metro -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">EDITOR METRO & KOTA</span>
                    <h4 class="font-bold text-sm text-black uppercase">Rina Amalia</h4>
                    <span class="font-mono text-[9px] text-sky-700 font-bold block mt-1">KORIDOR UTAMA</span>
                </div>
                <!-- Editor Politik -->
                <div class="border border-slate-200 rounded-xl p-5 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">EDITOR POLITIK & EKONOMI</span>
                    <h4 class="font-bold text-sm text-black uppercase">Hendra Wijaya</h4>
                    <span class="font-mono text-[9px] text-sky-700 font-bold block mt-1">KEBIJAKAN & BISNIS</span>
                </div>
            </div>
        </section>

        <!-- Category: Jurnalis Lapangan -->
        <section class="space-y-6">
            <h2 class="text-sm font-mono font-bold tracking-widest text-slate-400 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                REPORTER / JURNALIS LAPANGAN
            </h2>
            <div class="bg-slate-50/30 border border-slate-200 rounded-xl p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-mono text-[9px] font-bold text-sky-800 uppercase tracking-widest mb-2">Liputan Kota & Fasilitas Publik</h4>
                        <ul class="text-xs text-slate-800 font-bold space-y-1">
                            <li>• Siti Lestari <span class="font-normal font-mono text-[9px] text-slate-500">(Kec. Tangerang, Cipondoh, Karawaci)</span></li>
                            <li>• Fadel Ahmad <span class="font-normal font-mono text-[9px] text-slate-500">(Kec. BSD, Serpong, Tangsel)</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-mono text-[9px] font-bold text-sky-800 uppercase tracking-widest mb-2">Liputan Olahraga, Komunitas & Lifestyle</h4>
                        <ul class="text-xs text-slate-800 font-bold space-y-1">
                            <li>• Denny Pratama <span class="font-normal font-mono text-[9px] text-slate-500">(Persita & Olahraga Lokal)</span></li>
                            <li>• Mega Utami <span class="font-normal font-mono text-[9px] text-slate-500">(Kuliner, Tren & Lifestyle)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category: Tim Visual & IT -->
        <section class="space-y-6">
            <h2 class="text-sm font-mono font-bold tracking-widest text-slate-400 uppercase flex items-center gap-2 border-b border-slate-200 pb-2">
                FOTOGRAFI & DESAIN MULTIMEDIA
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="border border-slate-200 rounded-xl p-4 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">FOTOGRAFER</span>
                    <span class="font-bold text-xs text-slate-800 uppercase">Denny Pratama</span>
                </div>
                <div class="border border-slate-200 rounded-xl p-4 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">DESAINER INFOGRAFIS</span>
                    <span class="font-bold text-xs text-slate-800 uppercase">Mega Utami</span>
                </div>
                <div class="border border-slate-200 rounded-xl p-4 bg-white">
                    <span class="font-mono text-[8px] font-bold text-slate-400 block uppercase tracking-wider mb-1">IT SUPPORT & WEB DEVELOPER</span>
                    <span class="font-bold text-xs text-slate-800 uppercase">Redaksi Tech Team</span>
                </div>
            </div>
        </section>

        <!-- Notice Box: Kode Etik Jurnalistik (Ethical notice) -->
        <section class="pt-6 border-t border-slate-200">
            <div class="bg-red-50/50 border border-red-200/60 rounded-xl p-6 text-slate-700 space-y-3">
                <div class="flex items-center gap-2 text-red-700 font-bold text-sm uppercase">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>PENTING UNTUK DIKETAHUI PEMBACA</span>
                </div>
                <div class="text-xs leading-relaxed font-serif space-y-2">
                    <p>
                        Setiap jurnalis dan fotografer **Metro Tangerang** yang bertugas di lapangan selalu dibekali dengan **Kartu Pers (Id Card) resmi** dan Surat Tugas yang sah serta ditandatangani oleh Pemimpin Redaksi. Nama mereka tercantum dalam box redaksi di atas.
                    </p>
                    <p>
                        Staf redaksi Metro Tangerang **dilarang keras** meminta, menyetujui, atau menerima sumbangan/uang/gratisan dalam bentuk apa pun dari narasumber terkait dengan pembuatan atau pemuatan berita di portal kami.
                    </p>
                    <p>
                        Apabila ada pihak luar yang mengatasnamakan jurnalis Metro Tangerang dan melakukan tindakan pemerasan, penipuan, atau pelanggaran etika jurnalistik lainnya, mohon segera melaporkannya ke Redaksi pusat melalui email <a href="mailto:info@metrotangerang.com" class="text-red-700 underline font-sans font-bold">info@metrotangerang.com</a> atau telepon/WhatsApp resmi di <span class="font-sans font-bold text-red-700">+62 812-3456-7890</span>.
                    </p>
                </div>
            </div>
        </section>

    </div>

</div>
@endsection
