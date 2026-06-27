<!-- Main Content Grid -->
<section class="py-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    
    <!-- Left Column: Main News Feed & Categories (8 Columns) -->
    <div class="lg:col-span-8 space-y-12">
        
        <!-- Section 1: Kategori Utama -->
        <div class="space-y-12">
            <h2 class="font-mono text-xs font-bold tracking-widest text-neutral-500 uppercase flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-black"></span>
                KATEGORI UTAMA
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- 1. Kategori: METRO -->
                <div class="border-t-4 border-t-sky-600 border border-neutral-200 rounded-xl p-5 bg-white hover:border-sky-500/50 hover:shadow-sm transition-all duration-300">
                    <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                        <h3 class="font-bold text-base text-sky-800 uppercase">METRO</h3>
                        <a href="/category/metro" wire:navigate class="font-mono text-[10px] text-neutral-400 hover:text-sky-700 transition">Lihat Semua &rarr;</a>
                    </div>
                    <div class="space-y-4">
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-sky-700 transition-colors mt-0.5">
                                Normalisasi Sungai Cisadane Masuki Tahap Akhir Sebelum Musim Hujan
                            </h4>
                        </a>
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">25 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-sky-700 transition-colors mt-0.5">
                                Pemkot Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas
                            </h4>
                        </a>
                    </div>
                </div>

                <!-- 2. Kategori: POLITIK -->
                <div class="border-t-4 border-t-indigo-600 border border-neutral-200 rounded-xl p-5 bg-white hover:border-indigo-500/50 hover:shadow-sm transition-all duration-300">
                    <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                        <h3 class="font-bold text-base text-indigo-800 uppercase">POLITIK</h3>
                        <a href="/category/politik" wire:navigate class="font-mono text-[10px] text-neutral-400 hover:text-indigo-700 transition">Lihat Semua &rarr;</a>
                    </div>
                    <div class="space-y-4">
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-indigo-700 transition-colors mt-0.5">
                                KPU Tangerang Umumkan Jadwal dan Tema Debat Calon Wali Kota
                            </h4>
                        </a>
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">24 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-indigo-700 transition-colors mt-0.5">
                                Konsolidasi Internal Partai Siapkan Struktur Pemenangan Pilkada
                            </h4>
                        </a>
                    </div>
                </div>

                <!-- 3. Kategori: EKONOMI -->
                <div class="border-t-4 border-t-emerald-600 border border-neutral-200 rounded-xl p-5 bg-white hover:border-emerald-500/50 hover:shadow-sm transition-all duration-300">
                    <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                        <h3 class="font-bold text-base text-emerald-800 uppercase">EKONOMI</h3>
                        <a href="/category/ekonomi" wire:navigate class="font-mono text-[10px] text-neutral-400 hover:text-emerald-700 transition">Lihat Semua &rarr;</a>
                    </div>
                    <div class="space-y-4">
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-emerald-700 transition-colors mt-0.5">
                                Festival Kuliner Pasar Baru Dukung Pelaku Ekonomi Kreatif Lokal
                            </h4>
                        </a>
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">25 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-emerald-700 transition-colors mt-0.5">
                                Realisasi Investasi Kota Tangerang Semester I Tembus Rp 8 Triliun
                            </h4>
                        </a>
                    </div>
                </div>

                <!-- 4. Kategori: OLAHRAGA -->
                <div class="border-t-4 border-t-amber-500 border border-neutral-200 rounded-xl p-5 bg-white hover:border-amber-550/50 hover:shadow-sm transition-all duration-300">
                    <div class="flex items-center justify-between border-b border-neutral-200 pb-3 mb-4">
                        <h3 class="font-bold text-base text-amber-800 uppercase">OLAHRAGA</h3>
                        <a href="/category/olahraga" wire:navigate class="font-mono text-[10px] text-neutral-400 hover:text-amber-700 transition">Lihat Semua &rarr;</a>
                    </div>
                    <div class="space-y-4">
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">26 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-amber-700 transition-colors mt-0.5">
                                Persita Tangerang Rekrut Striker Asing Baru Asal Brasil
                            </h4>
                        </a>
                        <a href="{{ route('news.detail') }}" wire:navigate class="group block">
                            <span class="font-mono text-[9px] text-neutral-500">23 JUN 2026</span>
                            <h4 class="text-sm font-bold text-black group-hover:text-amber-700 transition-colors mt-0.5">
                                KONI Kota Tangerang Gelar Seleksi Atlit Muda Cabang Atletik
                            </h4>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Button to view all categories -->
            <div class="pt-0">
                <a href="{{ route('news.search') }}" wire:navigate class="flex items-center justify-center gap-2 w-full py-3.5 border border-slate-200 bg-slate-100 hover:bg-slate-200 text-slate-800 hover:text-sky-700 rounded-xl font-mono text-[11px] font-bold uppercase tracking-wider transition shadow-sm hover:shadow-md duration-300">
                    <i class="fa-solid fa-list-ul"></i> Lihat Semua Kategori
                </a>
            </div>
        </div>

        <!-- Section 2: Berita Terbaru (Latest News) -->
        <div class="border-t border-neutral-200 pt-12">
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
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>Penerapan Parkir Non-Tunai Mulai Diberlakukan di Kawasan Bisnis Karawaci</a>
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
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>Festival Seni Cisadane Hadirkan Ratusan Pegiat Budaya Akhir Pekan Ini</a>
                            </h3>
                            <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                Komunitas seni se-Tangerang Raya berkumpul menampilkan berbagai kesenian tradisional di bantaran Sungai Cisadane.
                            </p>
                        </div>
                        <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 4 min</span>
                    </div>
                </article>

                <!-- Item 3 -->
                <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                    <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                        <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">METRO</span>
                                <span>•</span>
                                <span>2 JAM YANG LALU</span>
                            </div>
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>Pemkot Tangerang Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas</a>
                            </h3>
                            <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                Layanan angkutan perkotaan Si Benteng diperluas rutenya menjangkau area permukiman padat dan perbatasan stasiun.
                            </p>
                        </div>
                        <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 3 min</span>
                    </div>
                </article>

                <!-- Item 4 -->
                <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                    <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                        <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">EKONOMI</span>
                                <span>•</span>
                                <span>3 JAM YANG LALU</span>
                            </div>
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>Festival Kuliner Pasar Baru Dukung Pelaku Ekonomi Kreatif Lokal</a>
                            </h3>
                            <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                Kunjungan wisatawan kuliner lokal mendongkrak omzet pedagang makanan khas di sepanjang rute ikonik Pasar Lama Tangerang.
                            </p>
                        </div>
                        <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 4 min</span>
                    </div>
                </article>

                <!-- Item 5 -->
                <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                    <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                        <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">POLITIK</span>
                                <span>•</span>
                                <span>4 JAM YANG LALU</span>
                            </div>
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>KPU Tangerang Umumkan Jadwal dan Tema Debat Calon Wali Kota</a>
                            </h3>
                            <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                Partai-partai politik mulai membangun konsolidasi strategis guna menentukan bakal calon kepala daerah kota Tangerang.
                            </p>
                        </div>
                        <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 3 min</span>
                    </div>
                </article>

                <!-- Item 6 -->
                <article class="group flex flex-col md:flex-row gap-6 border-b border-neutral-200 pb-6 last:border-0 last:pb-0">
                    <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-neutral-200">
                        <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                    </div>
                    <div class="flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 font-mono text-[9px] text-neutral-500 mb-2">
                                <span class="text-black font-bold uppercase">OLAHRAGA</span>
                                <span>•</span>
                                <span>5 JAM YANG LALU</span>
                            </div>
                            <h3 class="text-lg font-bold text-black group-hover:text-sky-855 transition-colors line-clamp-2">
                                <a href="{{ route('news.detail') }}" wire:navigate>Persita Tangerang Rekrut Striker Asing Baru Asal Brasil</a>
                            </h3>
                            <p class="mt-1.5 text-xs text-neutral-600 line-clamp-2">
                                Langkah transfer krusial diambil manajemen Pendekar Cisadane guna memperkuat ketajaman lini serang musim liga kali ini.
                            </p>
                        </div>
                        <span class="font-mono text-[10px] text-neutral-400 mt-2 block">Estimasi Baca: 5 min</span>
                    </div>
                </article>
            </div>
        </div>

    </div>

    <!-- Right Column: Sidebar Widgets (4 Columns) -->
    <div class="lg:col-span-4 lg:sticky lg:top-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-8 self-start">
        
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

        <!-- Widget 3: Polling Pembaca -->
        <div class="border border-sky-100 rounded-xl p-6 bg-sky-50/50">
            <h3 class="font-mono text-[10px] font-bold tracking-widest text-sky-800 uppercase mb-4">
                POLLING MINGGU INI
            </h3>
            <p class="text-xs font-bold text-slate-700 mb-4 leading-normal">
                Apakah Anda setuju dengan rencana pembatasan operasional truk besar di jalan protokol Tangerang pada jam sibuk?
            </p>
            <form class="space-y-3 font-mono text-[10px]">
                <label class="flex items-center gap-3 bg-white hover:bg-sky-50/55 p-2.5 rounded cursor-pointer transition border border-slate-200">
                    <input type="radio" name="poll" class="accent-sky-700">
                    <span class="text-slate-800">Sangat Setuju (68%)</span>
                </label>
                <label class="flex items-center gap-3 bg-white hover:bg-sky-50/55 p-2.5 rounded cursor-pointer transition border border-slate-200">
                    <input type="radio" name="poll" class="accent-sky-700">
                    <span class="text-slate-800">Kurang Setuju (24%)</span>
                </label>
                <label class="flex items-center gap-3 bg-white hover:bg-sky-50/55 p-2.5 rounded cursor-pointer transition border border-slate-200">
                    <input type="radio" name="poll" class="accent-sky-700">
                    <span class="text-slate-800">Tidak Peduli (8%)</span>
                </label>
                <button type="submit" id="btn-vote-submit" class="w-full bg-sky-900 text-white text-[11px] font-bold py-2 rounded uppercase tracking-wider hover:bg-sky-855 transition mt-2">
                    Kirim Suara
                </button>
            </form>
        </div>

        <!-- Widget 4: Ruang Iklan Sidebar (Sticky Banner) -->
        <a href="/iklan" wire:navigate class="relative block w-full overflow-hidden rounded-xl border border-slate-200 hover:border-sky-500 transition duration-300">
            <!-- AD Label Overlay -->
            <div class="absolute top-0 left-0 bg-neutral-200/90 backdrop-blur-sm text-neutral-600 font-mono text-[8px] font-bold px-2 py-0.5 rounded-br border-r border-b border-neutral-300/20 uppercase tracking-widest select-none z-10">
                AD
            </div>
            <img src="{{ asset('images/iklan2.webp') }}" class="w-full h-auto block" alt="Iklan Sidebar">
        </a>
    </div>
</section>
