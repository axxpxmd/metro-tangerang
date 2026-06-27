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
    @livewireStyles
</head>
<body class="h-full antialiased selection:bg-neutral-200 selection:text-black flex flex-col">
    <!-- Navigation Header -->
    @include('layouts.partials.header')
 
    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>
 
    <!-- Footer Area -->
    @include('layouts.partials.footer')

    @stack('scripts')
    @livewireScripts

    <script>
        function toggleMobileMenu() {
            const drawer = document.getElementById('mobile-menu-drawer');
            const barsIcon = document.getElementById('menu-icon-bars');
            const closeIcon = document.getElementById('menu-icon-close');
            if (drawer) {
                if (drawer.classList.contains('hidden')) {
                    drawer.classList.remove('hidden');
                    barsIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    drawer.classList.add('hidden');
                    barsIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        }

        // Intercept search form submissions for SPA page transitions
        document.addEventListener('submit', function (e) {
            const form = e.target;
            const action = form.getAttribute('action') || '';
            if (form.method.toLowerCase() === 'get' && (form.action.includes('/search') || action.includes('/search') || action === 'search')) {
                e.preventDefault();
                const formData = new FormData(form);
                const params = new URLSearchParams();
                for (const [key, val] of formData.entries()) {
                    if (val !== '') {
                        params.append(key, val);
                    }
                }
                const targetUrl = form.action.split('?')[0] + '?' + params.toString();
                if (window.Livewire) {
                    Livewire.navigate(targetUrl);
                } else {
                    window.location.href = targetUrl;
                }
            }
        });
    </script>
</body>
</html>
