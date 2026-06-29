<!-- Navigation Header -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" wire:navigate id="header-logo-link" class="flex items-center gap-2">
            <img src="{{ asset('images/logo-metrotangerang-logo.png') }}" alt="Metro Tangerang Logo" class="h-10 w-auto object-contain">
            <span class="text-lg font-black tracking-tighter mt-2 text-black">METRO<span class="text-[#0886B1]">TANGERANG</span></span>
        </a>
        
        <!-- Navigation Menu -->
        <nav id="header-nav-menu" class="hidden md:flex space-x-8 font-mono text-xs tracking-wider uppercase text-neutral-600">
            <a href="/category/metro" wire:navigate id="nav-item-metro" class="hover:text-sky-700 transition-colors duration-200">Metro</a>
            <a href="/category/politik" wire:navigate id="nav-item-politik" class="hover:text-sky-700 transition-colors duration-200">Politik</a>
            <a href="/category/ekonomi" wire:navigate id="nav-item-ekonomi" class="hover:text-sky-700 transition-colors duration-200">Ekonomi</a>
            <a href="/category/olahraga" wire:navigate id="nav-item-olahraga" class="hover:text-sky-700 transition-colors duration-200">Olahraga</a>
            <a href="/category/lifestyle" wire:navigate id="nav-item-lifestyle" class="hover:text-sky-700 transition-colors duration-200">Lifestyle</a>
        </nav>
        
        <!-- Live Action Button & Search -->
        <div class="flex items-center space-x-3">
            <!-- Search Form -->
            <form action="{{ route('news.search') }}" method="GET" class="hidden sm:flex items-center relative">
                <input type="text" name="q" placeholder="Cari berita..." class="w-36 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5 text-[11px] focus:outline-none focus:ring-1 focus:ring-sky-500 focus:w-48 focus:bg-white transition-all placeholder-slate-400 text-slate-805">
                <button type="submit" class="absolute right-3.5 text-slate-400 hover:text-sky-700 text-[10px]">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

            <a href="/login" wire:navigate id="header-btn-live" class="font-mono text-[11px] font-bold bg-sky-900 text-white px-4 py-2 rounded-full hover:bg-sky-800 transition duration-200 flex items-center gap-1.5">
                <i class="fa-solid fa-user text-[9px]"></i> Login
            </a>

            <!-- Mobile Hamburger Menu Button -->
            <button id="mobile-menu-toggle" class="md:hidden text-slate-700 hover:text-black focus:outline-none flex items-center justify-center p-1" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-bars text-lg animate-fade-in" id="menu-icon-bars"></i>
                <i class="fa-solid fa-xmark text-lg hidden animate-fade-in" id="menu-icon-close"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Drawer (Slide down) -->
    <div id="mobile-menu-drawer" class="hidden md:hidden bg-white/95 backdrop-blur-md border-b border-neutral-200 absolute top-16 left-0 w-full z-40 shadow-md transition-all duration-300">
        <div class="px-4 pt-3 pb-6 space-y-4">
            <!-- Search bar inside mobile drawer (Only for < sm screen, hidden if search form in header is visible) -->
            <form action="{{ route('news.search') }}" method="GET" class="relative block sm:hidden">
                <input type="text" name="q" placeholder="Cari berita..." class="w-full bg-slate-50 border border-slate-200 rounded-full px-4 py-2 text-[11px] focus:outline-none focus:ring-1 focus:ring-sky-500 focus:bg-white transition-all placeholder-slate-400 text-slate-805">
                <button type="submit" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-sky-700 text-[10px]">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

            <!-- Navigation links -->
            <div class="flex flex-col space-y-2 font-mono text-[11px] font-bold tracking-wider uppercase text-neutral-600">
                <a href="/category/metro" wire:navigate class="py-2 border-b border-slate-100 hover:text-sky-700 transition">Metro</a>
                <a href="/category/politik" wire:navigate class="py-2 border-b border-slate-100 hover:text-sky-700 transition">Politik</a>
                <a href="/category/ekonomi" wire:navigate class="py-2 border-b border-slate-100 hover:text-sky-700 transition">Ekonomi</a>
                <a href="/category/olahraga" wire:navigate class="py-2 border-b border-slate-100 hover:text-sky-700 transition">Olahraga</a>
                <a href="/category/lifestyle" wire:navigate class="py-2 hover:text-sky-700 transition">Lifestyle</a>
            </div>
        </div>
    </div>
</header>
