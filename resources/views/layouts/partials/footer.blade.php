<!-- Footer Area -->
<footer id="main-footer" class="bg-neutral-950 border-t border-neutral-900 py-12 mt-auto text-slate-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <!-- Column 1: Info Brand -->
            <div class="space-y-4">
                <span class="text-lg font-black tracking-tighter text-white">
                    METRO<span class="text-sky-400">TANGERANG</span>
                </span>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Metro Tangerang menyajikan liputan berita lokal, nasional, politik, ekonomi, dan gaya hidup secara berimbang, mendalam, serta tepercaya bagi masyarakat Tangerang Raya.
                </p>
                <p class="text-[10px] font-mono text-slate-500 uppercase leading-normal">
                    Redaksi: Jl. Daan Mogot No. 120,<br>Sukasari, Kota Tangerang, Banten
                </p>
            </div>

            <!-- Column 2: Navigasi Kategori -->
            <div>
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase mb-4">KATEGORI</h3>
                <ul class="space-y-2 text-xs text-slate-400 font-medium">
                    <li><a href="/category/metro" class="hover:text-sky-400 transition">Metro Tangerang</a></li>
                    <li><a href="/category/politik" class="hover:text-sky-400 transition">Politik & Pilkada</a></li>
                    <li><a href="/category/ekonomi" class="hover:text-sky-400 transition">Ekonomi & Bisnis</a></li>
                    <li><a href="/category/olahraga" class="hover:text-sky-400 transition">Olahraga</a></li>
                    <li><a href="/category/lifestyle" class="hover:text-sky-400 transition">Lifestyle & Kuliner</a></li>
                </ul>
            </div>

            <!-- Column 3: Redaksi & Layanan -->
            <div>
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase mb-4">REDAKSI & HUKUM</h3>
                <ul class="space-y-2 text-xs text-slate-400 font-medium">
                    <li><a href="{{ route('about') }}" class="hover:text-sky-400 transition">Tentang Kami</a></li>
                    <li><a href="{{ route('redaksi') }}" class="hover:text-sky-400 transition">Info Redaksi</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-sky-400 transition">Kontak Kami</a></li>
                    <li><a href="{{ route('pedoman') }}" class="hover:text-sky-400 transition">Pedoman Siber</a></li>
                    <li><a href="{{ route('news.search') }}" class="hover:text-sky-400 transition">Cari Berita</a></li>
                </ul>
            </div>

            <!-- Column 4: Kontak & Social Media -->
            <div>
                <h3 class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase mb-4">HUBUNGI & IKUTI KAMI</h3>
                <div class="space-y-3 mb-4">
                    <p class="text-xs text-slate-450 leading-none">
                        <span class="font-mono text-[9px] text-slate-500 block mb-0.5">EMAIL REDAKSI</span>
                        <a href="mailto:info@metrotangerang.com" class="font-bold text-slate-200 hover:text-sky-400 transition text-[11px]">info@metrotangerang.com</a>
                    </p>
                    <p class="text-xs text-slate-450 leading-none">
                        <span class="font-mono text-[9px] text-slate-500 block mb-0.5">LAYANAN WHATSAPP</span>
                        <a href="https://wa.me/6281234567890" class="font-bold text-slate-200 hover:text-sky-400 transition text-[11px]">+62 812-3456-7890</a>
                    </p>
                </div>
                <!-- Social Media Links -->
                <div class="flex items-center gap-2 pt-1">
                    <a href="#" class="w-8 h-8 rounded-full border border-neutral-800 flex items-center justify-center text-slate-400 hover:bg-neutral-900 hover:text-blue-400 hover:border-blue-500 transition" title="Facebook">
                        <i class="fa-brands fa-facebook-f text-xs"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200/10 flex items-center justify-center text-slate-400 hover:bg-neutral-900 hover:text-pink-400 hover:border-pink-500 transition" title="Instagram">
                        <i class="fa-brands fa-instagram text-xs"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200/10 flex items-center justify-center text-slate-400 hover:bg-neutral-900 hover:text-white hover:border-neutral-600 transition" title="Twitter / X">
                        <i class="fa-brands fa-x-twitter text-xs"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-200/10 flex items-center justify-center text-slate-400 hover:bg-neutral-900 hover:text-red-500 hover:border-red-500 transition" title="YouTube">
                        <i class="fa-brands fa-youtube text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider & Copyright -->
        <div class="pt-8 border-t border-neutral-900 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
            <p class="text-[10px] text-slate-500 font-mono uppercase">&copy; {{ date('Y') }} Metro Tangerang. Seluruh hak cipta dilindungi.</p>
            <p class="text-[10px] text-slate-500 font-mono uppercase">Portal Berita Terpercaya Tangerang Raya</p>
        </div>
    </div>
</footer>
