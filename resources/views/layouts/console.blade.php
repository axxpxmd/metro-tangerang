<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-905">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Console - Metro Tangerang')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        console: {
                            950: '#0B0F19',
                            900: '#111827',
                            800: '#1F2937',
                            700: '#374151',
                            600: '#4B5563',
                            500: '#6B7280',
                            400: '#9CA3AF',
                            300: '#D1D5DB',
                            200: '#E5E7EB',
                            100: '#F3F4F6',
                            50: '#F9FAFB',
                            accent: '#3B82F6', // Modern blue accent
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0B0F19; /* Sleek rich dark mode */
            color: #F3F4F6;
        }
        /* Custom scrollbar to match dark theme */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #0B0F19;
        }
        ::-webkit-scrollbar-thumb {
            background: #1F2937;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #374151;
        }
    </style>
    @stack('styles')
</head>
<body class="h-full antialiased flex">

    <!-- Sidebar -->
    <aside class="hidden md:flex md:flex-col md:w-64 bg-console-900 border-r border-console-800 shrink-0">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-console-800">
            <span class="font-mono text-xs font-bold text-console-accent tracking-widest bg-console-accent/10 px-2.5 py-1 rounded">
                METRO TANGERANG
            </span>
            <span class="font-bold text-xs ml-2 text-console-400">CMS</span>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 px-4 py-6 space-y-1">
            <a href="{{ route('console.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all {{ request()->routeIs('console.dashboard') ? 'bg-console-accent text-white' : 'text-console-400 hover:bg-console-800 hover:text-white' }}">
                <i class="fa-solid fa-chart-line w-4 text-center"></i>
                Dashboard
            </a>
            
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg text-console-500 cursor-not-allowed">
                <i class="fa-solid fa-newspaper w-4 text-center"></i>
                Berita <span class="text-[9px] bg-console-800 text-console-400 px-1.5 py-0.5 rounded">N/A</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg text-console-500 cursor-not-allowed">
                <i class="fa-solid fa-envelope w-4 text-center"></i>
                Pesan <span class="text-[9px] bg-console-800 text-console-400 px-1.5 py-0.5 rounded">N/A</span>
            </a>
        </nav>

        <!-- User profile footer -->
        <div class="p-4 border-t border-console-800 bg-console-950/50 flex items-center justify-between">
            <div class="flex items-center gap-3 min-w-0">
                <div class="w-8 h-8 rounded-full bg-console-accent flex items-center justify-center font-bold text-xs text-white shrink-0">
                    {{ Auth::user() ? Auth::user()->initials() : 'MT' }}
                </div>
                <div class="min-w-0">
                    <p class="text-xs font-semibold text-white truncate">{{ Auth::user() ? Auth::user()->name : 'User' }}</p>
                    <p class="text-[10px] text-console-500 truncate">{{ Auth::user() ? Auth::user()->email : 'user@example.com' }}</p>
                </div>
            </div>
            <form action="{{ route('console.logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-console-400 hover:text-rose-400 transition p-1.5 rounded-lg hover:bg-console-850" title="Keluar">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col min-w-0 overflow-y-auto">
        <!-- Header -->
        <header class="h-16 bg-console-900 border-b border-console-800 flex items-center justify-between px-6 shrink-0">
            <!-- Left Header -->
            <div class="flex items-center gap-3">
                <button class="md:hidden text-console-400 hover:text-white" onclick="toggleSidebar()">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <div class="flex items-center gap-2 font-mono text-[10px] text-console-400 uppercase tracking-wider">
                    <span>Console</span>
                    <span>/</span>
                    <span class="text-white">@yield('page_title', 'Dashboard')</span>
                </div>
            </div>

            <!-- Right Header -->
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" target="_blank" class="text-xs text-console-400 hover:text-white transition flex items-center gap-1.5 bg-console-800/50 px-2.5 py-1.5 rounded-lg border border-console-800">
                    <i class="fa-solid fa-globe"></i>
                    Lihat Situs
                </a>
            </div>
        </header>

        <!-- Main Inner Content -->
        <main class="flex-grow p-6">
            @yield('content')
        </main>
    </div>

    <!-- Mobile Navigation Menu Overlay -->
    <div id="mobile-sidebar" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden flex">
        <div class="w-64 bg-console-900 h-full border-r border-console-800 flex flex-col justify-between">
            <div>
                <div class="h-16 flex items-center justify-between px-6 border-b border-console-800">
                    <span class="font-mono text-xs font-bold text-console-accent tracking-widest bg-console-accent/10 px-2.5 py-1 rounded">
                        METRO TANGERANG
                    </span>
                    <button onclick="toggleSidebar()" class="text-console-400 hover:text-white">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>
                <nav class="px-4 py-6 space-y-1">
                    <a href="{{ route('console.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all {{ request()->routeIs('console.dashboard') ? 'bg-console-accent text-white' : 'text-console-400 hover:bg-console-800 hover:text-white' }}">
                        <i class="fa-solid fa-chart-line w-4 text-center"></i>
                        Dashboard
                    </a>
                </nav>
            </div>
            <div class="p-4 border-t border-console-800 bg-console-950/50 flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-full bg-console-accent flex items-center justify-center font-bold text-xs text-white shrink-0">
                        {{ Auth::user() ? Auth::user()->initials() : 'MT' }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-white truncate">{{ Auth::user() ? Auth::user()->name : 'User' }}</p>
                        <p class="text-[10px] text-console-500 truncate">{{ Auth::user() ? Auth::user()->email : 'user@example.com' }}</p>
                    </div>
                </div>
                <form action="{{ route('console.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-console-400 hover:text-rose-400 transition p-1.5 rounded-lg hover:bg-console-850">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="flex-grow" onclick="toggleSidebar()"></div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobile-sidebar');
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
