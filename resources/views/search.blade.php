@extends('layouts.app')

@section('title', 'Pencarian Berita - Metro Tangerang')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Header Section -->
    <div class="text-center mb-10">
        <h1 class="text-xl md:text-3xl font-black tracking-tight text-black uppercase mb-4">
            Pencarian Berita
        </h1>
        <p class="text-xs text-slate-500 font-mono uppercase">
            Cari artikel, liputan, dan berita terkini di Tangerang Raya
        </p>
    </div>

    <!-- Main Search Box on Page -->
    <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 mb-8">
        <form id="search-page-form" method="GET" action="/search" class="space-y-4">
            <!-- Row 1: Search Input & Button -->
            <div class="flex gap-3">
                <div class="relative flex-grow">
                    <input type="text" id="search-page-input" name="q" placeholder="Ketik kata kunci (contoh: Cisadane, Parkir, Kuliner)..." class="w-full bg-white border border-slate-200 rounded-lg pl-10 pr-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 text-slate-800 placeholder-slate-450">
                    <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-3.5 text-slate-400 text-sm"></i>
                </div>
                <button type="submit" class="bg-sky-900 text-white font-mono text-xs font-bold px-6 py-3 rounded-lg hover:bg-sky-800 transition uppercase tracking-wider">
                    CARI
                </button>
            </div>

            <!-- Row 2: Filters -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-3 border-t border-slate-200/60">
                <!-- Category Filter -->
                <div>
                    <label for="filter-category" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">KATEGORI</label>
                    <select id="filter-category" name="category" class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-sky-500 text-slate-700">
                        <option value="">Semua Kategori</option>
                        <option value="METRO">Metro</option>
                        <option value="POLITIK">Politik</option>
                        <option value="EKONOMI">Ekonomi</option>
                        <option value="OLAHRAGA">Olahraga</option>
                        <option value="LIFESTYLE">Lifestyle</option>
                        <option value="KOMUNITAS">Komunitas</option>
                    </select>
                </div>

                <!-- Date From Filter -->
                <div>
                    <label for="filter-date-from" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">TANGGAL DARI</label>
                    <input type="date" id="filter-date-from" name="date_from" class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-sky-500 text-slate-700">
                </div>

                <!-- Date To Filter -->
                <div>
                    <label for="filter-date-to" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">TANGGAL SAMPAI</label>
                    <input type="date" id="filter-date-to" name="date_to" class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-sky-500 text-slate-700">
                </div>
            </div>
        </form>
    </div>

    <!-- Search Results Header Info -->
    <div class="border-b border-slate-200 pb-4 mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
        <h2 class="text-sm font-mono text-slate-500 uppercase">
            Hasil untuk: "<span id="query-display" class="text-black font-bold font-sans"></span>"
        </h2>
        <span class="text-xs font-mono text-slate-500 uppercase">
            Ditemukan: <span id="results-count" class="text-sky-700 font-extrabold font-sans">0</span> artikel
        </span>
    </div>

    <!-- Results Container -->
    <div id="search-results-list" class="space-y-8">
        <!-- Results will be loaded here dynamically via JS -->
    </div>

    <!-- Empty State -->
    <div id="no-results-state" class="hidden text-center py-16 border border-dashed border-slate-200 rounded-xl bg-slate-50/50 p-6">
        <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center mx-auto mb-4 text-slate-400">
            <i class="fa-solid fa-folder-open text-xl"></i>
        </div>
        <h3 class="text-sm font-bold text-slate-800 uppercase mb-1">Berita Tidak Ditemukan</h3>
        <p class="text-xs text-slate-550 max-w-md mx-auto leading-normal">
            Kami tidak dapat menemukan berita dengan kata kunci tersebut. Coba kata kunci yang lebih umum seperti <span class="text-sky-700 font-bold underline cursor-pointer" onclick="fillAndSearch('Cisadane')">Cisadane</span>, <span class="text-sky-700 font-bold underline cursor-pointer" onclick="fillAndSearch('Pasar Lama')">Pasar Lama</span>, atau <span class="text-sky-700 font-bold underline cursor-pointer" onclick="fillAndSearch('Parkir')">Parkir</span>.
        </p>
    </div>

</div>

@push('scripts')
<script>
    // List of mock articles to search through (with ISO date values)
    const articles = [
        {
            title: "Penerapan Parkir Non-Tunai Mulai Diberlakukan di Kawasan Bisnis Karawaci",
            description: "Dinas Perhubungan Kota Tangerang meluncurkan sistem pembayaran parkir berbasis QRIS untuk meningkatkan transparansi PAD daerah.",
            category: "METRO",
            time: "BEBERAPA MENIT YANG LALU",
            dateStr: "2026-06-27",
            readTime: "3 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Festival Seni Cisadane Hadirkan Ratusan Pegiat Budaya Akhir Pekan Ini",
            description: "Komunitas seni se-Tangerang Raya berkumpul menampilkan berbagai kesenian tradisional di bantaran Sungai Cisadane.",
            category: "KOMUNITAS",
            time: "1 JAM YANG LALU",
            dateStr: "2026-06-27",
            readTime: "4 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Normalisasi Sungai Cisadane Masuki Tahap Akhir Sebelum Musim Hujan",
            description: "Pemerintah Kota Tangerang mempercepat pengerjaan normalisasi sungai dan penguatan tanggul guna mengantisipasi banjir tahunan.",
            category: "METRO",
            time: "25 JUN 2026",
            dateStr: "2026-06-25",
            readTime: "5 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Pemkot Tangerang Tambah 5 Koridor Baru Angkot Si Benteng untuk Konektivitas",
            description: "Layanan angkutan perkotaan Si Benteng diperluas rutenya menjangkau area permukiman padat dan perbatasan stasiun.",
            category: "METRO",
            time: "24 JUN 2026",
            dateStr: "2026-06-24",
            readTime: "3 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Jelang Pilkada Tangerang, Peta Koalisi Partai Mulai Mengerucut",
            description: "Partai-partai politik mulai membangun konsolidasi strategis guna menentukan bakal calon kepala daerah kota Tangerang.",
            category: "POLITIK",
            time: "26 JUN 2026",
            dateStr: "2026-06-26",
            readTime: "4 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "UMKM Kuliner Pasar Lama Alami Lonjakan Omzet 50% Akhir Pekan Ini",
            description: "Kunjungan wisatawan kuliner lokal mendongkrak omzet pedagang makanan khas di sepanjang rute ikonik Pasar Lama Tangerang.",
            category: "EKONOMI",
            time: "25 JUN 2026",
            dateStr: "2026-06-25",
            readTime: "3 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Dinas Lingkungan Hidup Tambah 12 Armada Truk Sampah Baru",
            description: "Penambahan unit truk pengangkut sampah dilakukan untuk menjamin kebersihan lingkungan pemukiman perkotaan di Tangerang.",
            category: "METRO",
            time: "23 JUN 2026",
            dateStr: "2026-06-23",
            readTime: "3 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Persita Tangerang Rekrut Striker Asing Baru Asal Brasil",
            description: "Langkah transfer krusial diambil manajemen Pendekar Cisadane guna memperkuat ketajaman lini serang musim liga kali ini.",
            category: "OLAHRAGA",
            time: "26 JUN 2026",
            dateStr: "2026-06-26",
            readTime: "5 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Wisata Kuliner Malam Tangerang Jadi Destinasi Favorit Akhir Pekan",
            description: "Menelusuri aneka ragam jajanan malam hits Kota Tangerang yang menyita perhatian pemburu kuliner dari luar daerah.",
            category: "LIFESTYLE",
            time: "22 JUN 2026",
            dateStr: "2026-06-22",
            readTime: "4 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Tren Cafe Minimalis Bernuansa Industrial di Kota Tangerang",
            description: "Review beberapa cafe berkonsep industrial minimalis paling estetik di Tangerang yang ramai dikunjungi kalangan muda.",
            category: "LIFESTYLE",
            time: "26 JUN 2026",
            dateStr: "2026-06-26",
            readTime: "3 min read",
            link: "{{ route('news.detail') }}"
        },
        {
            title: "Rute Sepeda Santai Akhir Pekan Terbaik di Wilayah BSD dan Karawaci",
            description: "Rekomendasi jalur bersepeda yang teduh dan aman bagi keluarga untuk mengisi pagi hari akhir pekan di wilayah satelit.",
            category: "LIFESTYLE",
            time: "21 JUN 2026",
            dateStr: "2026-06-21",
            readTime: "4 min read",
            link: "{{ route('news.detail') }}"
        }
    ];

    // Read query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get('q') || '';
    const categoryFilter = urlParams.get('category') || '';
    const dateFromFilter = urlParams.get('date_from') || '';
    const dateToFilter = urlParams.get('date_to') || '';
    
    // Fill query values in input fields
    document.getElementById('search-page-input').value = query;
    document.getElementById('filter-category').value = categoryFilter;
    document.getElementById('filter-date-from').value = dateFromFilter;
    document.getElementById('filter-date-to').value = dateToFilter;
    
    document.getElementById('query-display').innerText = query || 'Semua Berita';

    // Perform filters
    const filteredArticles = articles.filter(art => {
        // Keyword Search
        if (query) {
            const q = query.toLowerCase();
            const matchesKeyword = art.title.toLowerCase().includes(q) || 
                                   art.description.toLowerCase().includes(q) ||
                                   art.category.toLowerCase().includes(q);
            if (!matchesKeyword) return false;
        }

        // Category Filter
        if (categoryFilter && art.category !== categoryFilter) {
            return false;
        }

        // Date Range Filter (compare YYYY-MM-DD strings directly or convert to Date object)
        if (dateFromFilter) {
            if (art.dateStr < dateFromFilter) return false;
        }
        if (dateToFilter) {
            if (art.dateStr > dateToFilter) return false;
        }

        return true;
    });

    // Update count
    document.getElementById('results-count').innerText = filteredArticles.length;

    // Render list
    const resultsContainer = document.getElementById('search-results-list');
    const noResultsContainer = document.getElementById('no-results-state');

    if (filteredArticles.length === 0) {
        resultsContainer.innerHTML = '';
        noResultsContainer.classList.remove('hidden');
    } else {
        noResultsContainer.classList.add('hidden');
        resultsContainer.innerHTML = filteredArticles.map(art => `
            <article class="group flex flex-col md:flex-row gap-6 border-b border-slate-200 pb-6 last:border-0 last:pb-0">
                <!-- Thumbnail -->
                <div class="w-full md:w-1/3 aspect-video md:aspect-auto md:h-32 overflow-hidden rounded-lg border border-slate-200 bg-slate-50 flex-shrink-0">
                    <img src="{{ asset('images/foto-dummy.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500" alt="News Image">
                </div>
                <!-- Content Details -->
                <div class="flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 font-mono text-[9px] text-slate-500 mb-2">
                            <span class="text-sky-700 font-bold uppercase">${art.category}</span>
                            <span>•</span>
                            <span>${art.time}</span>
                        </div>
                        <h3 class="text-base font-bold text-black group-hover:text-sky-850 transition-colors leading-snug">
                            <a href="${art.link}">${highlightText(art.title, query)}</a>
                        </h3>
                        <p class="mt-1.5 text-xs text-slate-650 line-clamp-2 leading-relaxed">
                            ${highlightText(art.description, query)}
                        </p>
                    </div>
                    <span class="font-mono text-[9px] text-slate-400 mt-3 block uppercase">${art.readTime}</span>
                </div>
            </article>
        `).join('');
    }

    // Helper function to fill input and trigger search
    function fillAndSearch(text) {
        document.getElementById('search-page-input').value = text;
        document.getElementById('filter-category').value = '';
        document.getElementById('filter-date-from').value = '';
        document.getElementById('filter-date-to').value = '';
        document.getElementById('search-page-form').submit();
    }

    // Helper function to highlight match query terms
    function highlightText(text, keyword) {
        if (!keyword) return text;
        const escapedKeyword = keyword.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
        const regex = new RegExp(`(${escapedKeyword})`, 'gi');
        return text.replace(regex, `<mark class="bg-yellow-100 text-black px-0.5 rounded">$1</mark>`);
    }
</script>
@endpush
@endsection
