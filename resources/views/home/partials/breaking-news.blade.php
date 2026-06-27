<!-- Breaking News Ticker -->
<div class="bg-slate-50 border-b border-slate-200 py-2.5 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-3">
        <span class="flex-shrink-0 font-mono text-[10px] font-extrabold tracking-widest bg-red-50 text-red-700 border border-red-200/60 px-2 py-0.5 rounded uppercase">
            BREAKING
        </span>
        <div class="relative w-full overflow-hidden h-4 flex items-center">
            <!-- Double container for seamless loop -->
            <div class="absolute whitespace-nowrap animate-marquee flex gap-12 font-mono text-xs text-neutral-700">
                <div class="flex gap-12 flex-shrink-0">
                    <span>• Rencana Pembangunan LRT Koridor Tangerang-Jakarta Resmi Dimulai Kuartal III 2026</span>
                    <span>• Pemkot Tangerang Luncurkan Program Beasiswa Mahasiswa Berprestasi Tingkat Kecamatan</span>
                    <span>• Prakiraan Cuaca: Tangerang Berpotensi Hujan Ringan di Sore Hari</span>
                    <span>• Persita Tangerang Menang Telak 3-0 dalam Laga Uji Coba Kandang</span>
                </div>
                <div class="flex gap-12 flex-shrink-0" aria-hidden="true">
                    <span>• Rencana Pembangunan LRT Koridor Tangerang-Jakarta Resmi Dimulai Kuartal III 2026</span>
                    <span>• Pemkot Tangerang Luncurkan Program Beasiswa Mahasiswa Berprestasi Tingkat Kecamatan</span>
                    <span>• Prakiraan Cuaca: Tangerang Berpotensi Hujan Ringan di Sore Hari</span>
                    <span>• Persita Tangerang Menang Telak 3-0 dalam Laga Uji Coba Kandang</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        animation: marquee 35s linear infinite;
    }
</style>
