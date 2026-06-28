<!-- Sidebar -->
<aside class="hidden md:flex md:flex-col md:w-64 bg-[#0561c2] dark:bg-console-900 border-r border-[#0452a5] dark:border-console-800 shrink-0 transition-colors">
    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b border-[#0452a5] dark:border-console-800">
        <span class="font-mono text-xs font-bold text-white tracking-widest bg-white/20 px-2.5 py-1 rounded">
            METRO TANGERANG
        </span>
        <span class="font-bold text-xs ml-2 text-blue-100 dark:text-console-400">CMS</span>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 px-4 py-6 space-y-1">
        <a href="{{ route('console.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all {{ request()->routeIs('console.dashboard') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}">
            <i class="fa-solid fa-chart-line w-4 text-center"></i>
            Dashboard
        </a>
        
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg text-blue-200 dark:text-console-500 cursor-not-allowed">
            <i class="fa-solid fa-newspaper w-4 text-center"></i>
            Berita <span class="text-[9px] bg-white/10 dark:bg-console-800 text-blue-200 dark:text-console-400 px-1.5 py-0.5 rounded">N/A</span>
        </a>

        <a href="{{ route('console.contacts.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all {{ request()->routeIs('console.contacts.*') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}">
            <i class="fa-solid fa-envelope w-4 text-center"></i>
            Pesan Kontak
        </a>

        <a href="{{ route('console.users.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-xs font-medium rounded-lg transition-all {{ request()->routeIs('console.users.*') ? 'bg-white/15 text-white shadow-sm' : 'text-blue-100 dark:text-console-400 hover:bg-white/10 hover:text-white dark:hover:bg-console-800 dark:hover:text-white' }}">
            <i class="fa-solid fa-users w-4 text-center"></i>
            Kelola Pengguna
        </a>
    </nav>

    <!-- User profile footer -->
    <div class="p-4 border-t border-[#0452a5] dark:border-console-800 bg-[#0452a5] dark:bg-console-950 flex items-center justify-between">
        <div class="flex items-center gap-3 min-w-0">
            <div class="w-8 h-8 rounded-full bg-white text-[#0561c2] flex items-center justify-center font-bold text-xs shrink-0">
                {{ Auth::user() ? Auth::user()->initials() : 'MT' }}
            </div>
            <div class="min-w-0">
                <p class="text-xs font-semibold text-white truncate">{{ Auth::user() ? Auth::user()->name : 'User' }}</p>
                <p class="text-[10px] text-blue-100 dark:text-console-500 truncate">{{ Auth::user() ? Auth::user()->email : 'user@example.com' }}</p>
            </div>
        </div>
        <form action="{{ route('console.logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-blue-100 dark:text-console-400 hover:text-rose-350 transition p-1.5 rounded-lg hover:bg-white/10 dark:hover:bg-console-850" title="Keluar">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </form>
    </div>
</aside>
