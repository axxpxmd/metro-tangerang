<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white text-black">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Metro Tangerang - Portal Berita Terkini & Terpercaya')</title>
    <meta name="description" content="@yield('meta_description', 'Portal berita Metro Tangerang menyajikan berita terbaru, terpopuler, dan terpercaya seputar Tangerang Raya, politik, ekonomi, olahraga, dan gaya hidup.')">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Metro Tangerang - Portal Berita Terkini & Terpercaya')">
    <meta property="og:description" content="@yield('meta_description', 'Portal berita Metro Tangerang menyajikan berita terbaru, terpopuler, dan terpercaya seputar Tangerang Raya.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Metro Tangerang - Portal Berita Terkini & Terpercaya')">
    <meta property="twitter:description" content="@yield('meta_description', 'Portal berita Metro Tangerang menyajikan berita terbaru, terpopuler, dan terpercaya seputar Tangerang Raya.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            white: '#ffffff',
                            light: '#f5f5f5',
                            border: '#e5e5e5',
                            accent: '#000000',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Style for fine-tuning -->
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #000000;
        }
        /* Custom scrollbar to match light aesthetic */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #ffffff;
        }
        ::-webkit-scrollbar-thumb {
            background: #e5e5e5;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d4d4d4;
        }
    </style>

    @stack('styles')
</head>
<body class="h-full antialiased selection:bg-neutral-200 selection:text-black flex flex-col">
    <!-- Navigation Header -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" id="header-logo-link" class="text-xl font-black tracking-tighter text-black flex items-center gap-2">
                METRO<span class="text-sky-700">TANGERANG</span>
            </a>
            
            <!-- Navigation Menu -->
            <nav id="header-nav-menu" class="hidden md:flex space-x-8 font-mono text-xs tracking-wider uppercase text-neutral-600">
                <a href="/category/metro" id="nav-item-metro" class="hover:text-sky-700 transition-colors duration-200">Metro</a>
                <a href="/category/politik" id="nav-item-politik" class="hover:text-sky-700 transition-colors duration-200">Politik</a>
                <a href="/category/ekonomi" id="nav-item-ekonomi" class="hover:text-sky-700 transition-colors duration-200">Ekonomi</a>
                <a href="/category/olahraga" id="nav-item-olahraga" class="hover:text-sky-700 transition-colors duration-200">Olahraga</a>
                <a href="/category/lifestyle" id="nav-item-lifestyle" class="hover:text-sky-700 transition-colors duration-200">Lifestyle</a>
            </nav>
            
            <!-- Live Action Button & Search -->
            <div class="flex items-center space-x-4">
                <!-- Search Form -->
                <form action="{{ route('news.search') }}" method="GET" class="hidden sm:flex items-center relative">
                    <input type="text" name="q" placeholder="Cari berita..." class="w-36 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5 text-[11px] focus:outline-none focus:ring-1 focus:ring-sky-500 focus:w-48 focus:bg-white transition-all placeholder-slate-400 text-slate-805">
                    <button type="submit" class="absolute right-3.5 text-slate-400 hover:text-sky-700 text-[10px]">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <a href="/live" id="header-btn-live" class="font-mono text-[11px] font-bold bg-sky-900 text-white px-4 py-2 rounded-full hover:bg-sky-800 transition duration-200">
                    LIVE TV
                </a>
            </div>
        </div>
    </header>
 
    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>
 
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
                    <ul class="space-y-2 text-xs text-slate-450 font-medium">
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
                    <ul class="space-y-2 text-xs text-slate-450 font-medium">
                        <li><a href="{{ route('about') }}" class="hover:text-sky-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('redaksi') }}" class="hover:text-sky-400 transition">Info Redaksi</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-sky-400 transition">Kontak Kami</a></li>
                        <li><a href="/pedoman" class="hover:text-sky-400 transition">Pedoman Siber</a></li>
                        <li><a href="{{ route('news.search') }}" class="hover:text-sky-400 transition">Cari Berita</a></li>
                    </ul>
                </div>

                <!-- Column 4: Kontak & Social Media -->
                <div>
                    <h3 class="font-mono text-[10px] font-bold tracking-widest text-slate-300 uppercase mb-4">HUBUNGI & IKUTI KAMI</h3>
                    <div class="space-y-3 mb-4">
                        <p class="text-xs text-slate-500 leading-none">
                            <span class="font-mono text-[9px] text-slate-550 block mb-0.5">EMAIL REDAKSI</span>
                            <a href="mailto:info@metrotangerang.com" class="font-bold text-slate-200 hover:text-sky-400 transition text-[11px]">info@metrotangerang.com</a>
                        </p>
                        <p class="text-xs text-slate-550 leading-none">
                            <span class="font-mono text-[9px] text-slate-550 block mb-0.5">LAYANAN WHATSAPP</span>
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

    @stack('scripts')
</body>
</html>
