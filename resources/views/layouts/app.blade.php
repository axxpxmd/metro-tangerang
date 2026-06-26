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
            <a href="/" id="header-logo-link" class="text-xl font-black tracking-tighter text-black flex items-center gap-2">
                METRO<span class="text-neutral-500">TANGERANG</span>
            </a>
            
            <!-- Navigation Menu -->
            <nav id="header-nav-menu" class="hidden md:flex space-x-8 font-mono text-xs tracking-wider uppercase text-neutral-600">
                <a href="/category/metro" id="nav-item-metro" class="hover:text-black transition-colors duration-200">Metro</a>
                <a href="/category/politik" id="nav-item-politik" class="hover:text-black transition-colors duration-200">Politik</a>
                <a href="/category/ekonomi" id="nav-item-ekonomi" class="hover:text-black transition-colors duration-200">Ekonomi</a>
                <a href="/category/olahraga" id="nav-item-olahraga" class="hover:text-black transition-colors duration-200">Olahraga</a>
                <a href="/category/lifestyle" id="nav-item-lifestyle" class="hover:text-black transition-colors duration-200">Lifestyle</a>
            </nav>
            
            <!-- Live Action Button -->
            <div class="flex items-center space-x-4">
                <a href="/live" id="header-btn-live" class="font-mono text-[11px] font-bold bg-black text-white px-4 py-2 rounded-full hover:bg-neutral-800 transition duration-200">
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
    <footer id="main-footer" class="bg-neutral-50 border-t border-neutral-200 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-center md:text-left">
                <span class="text-sm font-black tracking-tighter text-black">
                    METRO<span class="text-neutral-500">TANGERANG</span>
                </span>
                <p class="text-xs text-neutral-500 mt-1">&copy; {{ date('Y') }} Metro Tangerang. Seluruh hak cipta dilindungi.</p>
            </div>
            <div class="flex space-x-6 font-mono text-[10px] text-neutral-500 uppercase">
                <a href="/tentang" id="footer-link-about" class="hover:text-black transition">Tentang Kami</a>
                <a href="/redaksi" id="footer-link-redaksi" class="hover:text-black transition">Redaksi</a>
                <a href="/kontak" id="footer-link-contact" class="hover:text-black transition">Kontak</a>
                <a href="/pedoman" id="footer-link-pedoman" class="hover:text-black transition">Pedoman Media Siber</a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
