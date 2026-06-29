<!-- Sidebar -->
<aside class="hidden md:flex md:flex-col md:w-64 bg-[#0561c2] dark:bg-console-900 border-r border-[#0452a5] dark:border-console-800 shrink-0 transition-all duration-300">
    <!-- Logo -->
    <div class="flex flex-col items-center justify-center px-6 py-5 border-b border-white/10 dark:border-console-800 aside-logo-container transition-all duration-300 gap-2">
        <img src="{{ asset('images/logo-metrotangerang-logo.png') }}" alt="Logo" class="h-12 w-auto object-contain shrink-0">
        <div class="text-center sidebar-expanded-only mt-1">
            <span class="block text-xs font-black tracking-widest text-white uppercase">METRO TANGERANG</span>
            <span class="block text-[10px] font-mono font-bold text-blue-200 dark:text-console-400 uppercase tracking-widest">Console CMS</span>
        </div>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 px-4 py-5 overflow-y-auto space-y-5">

        {{-- Group: Utama --}}
        <div>
            <p class="nav-text font-mono text-[9px] font-bold text-white/30 uppercase tracking-[.18em] px-3 mb-1.5 sidebar-expanded-only">Utama</p>
            <div class="space-y-0.5">
                <a href="{{ route('console.dashboard') }}"
                    class="nav-link-item flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all
                        {{ request()->routeIs('console.dashboard') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}"
                    title="Dashboard">
                    <i class="fa-solid fa-chart-line w-4 text-center shrink-0"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-white/10 dark:border-console-800 sidebar-expanded-only"></div>
        <div class="hidden sidebar-minimized:block border-t border-white/10 mx-1"></div>

        {{-- Group: Konten --}}
        <div>
            <p class="nav-text font-mono text-[9px] font-bold text-white/30 uppercase tracking-[.18em] px-3 mb-1.5 sidebar-expanded-only">Konten</p>
            <div class="space-y-0.5">
                <a href="{{ route('console.news.index') }}"
                    class="nav-link-item flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all
                        {{ request()->routeIs('console.news.*') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}"
                    title="Kelola Berita">
                    <i class="fa-solid fa-newspaper w-4 text-center shrink-0"></i>
                    <span class="nav-text">Kelola Berita</span>
                </a>
            </div>
        </div>

        {{-- Divider --}}
        <div class="border-t border-white/10 dark:border-console-800 sidebar-expanded-only"></div>

        {{-- Group: Manajemen --}}
        <div>
            <p class="nav-text font-mono text-[9px] font-bold text-white/30 uppercase tracking-[.18em] px-3 mb-1.5 sidebar-expanded-only">Manajemen</p>
            <div class="space-y-0.5">
                <a href="{{ route('console.contacts.index') }}"
                    class="nav-link-item flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all
                        {{ request()->routeIs('console.contacts.*') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}"
                    title="Pesan Kontak">
                    <i class="fa-solid fa-envelope w-4 text-center shrink-0"></i>
                    <span class="nav-text">Pesan Kontak</span>
                </a>

                <a href="{{ route('console.users.index') }}"
                    class="nav-link-item flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all
                        {{ request()->routeIs('console.users.*') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}"
                    title="Kelola Pengguna">
                    <i class="fa-solid fa-users w-4 text-center shrink-0"></i>
                    <span class="nav-text">Kelola Pengguna</span>
                </a>
            </div>
        </div>

    </nav>

    <!-- User profile footer -->
    <div class="p-4 border-t border-[#0452a5] dark:border-console-800 bg-[#0452a5] dark:bg-console-950 flex items-center justify-between profile-footer-container transition-all duration-300">
        <div class="flex items-center gap-3 min-w-0">
            <div class="w-8 h-8 rounded-full bg-white text-[#0561c2] flex items-center justify-center font-bold text-xs shrink-0">
                {{ Auth::user() ? Auth::user()->initials() : 'MT' }}
            </div>
            <div class="min-w-0 profile-info">
                <p class="text-xs font-semibold text-white truncate">{{ Auth::user() ? Auth::user()->name : 'User' }}</p>
                <p class="text-[10px] text-blue-100 dark:text-console-500 truncate">{{ Auth::user() ? Auth::user()->email : 'user@example.com' }}</p>
            </div>
        </div>
        <form action="{{ route('console.logout') }}" method="POST" class="shrink-0">
            @csrf
            <button type="submit" class="text-blue-100 dark:text-console-400 hover:text-rose-350 transition p-1.5 rounded-lg hover:bg-white/10 dark:hover:bg-console-850" title="Keluar">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </form>
    </div>
</aside>
