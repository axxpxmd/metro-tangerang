@extends('layouts.console')

@section('title', 'Kelola Pengguna - Metro Tangerang Console')
@section('page_title', 'Kelola Pengguna')

@section('content')
<div class="space-y-6">
    
    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Daftar Pengguna CMS</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1">Kelola hak akses dan profil personil admin, verifikator, dan editor.</p>
        </div>
        
        <div class="flex flex-wrap items-center gap-3">
            <!-- Search Form -->
            <form action="{{ route('console.users.index') }}" method="GET" class="flex items-center gap-2">
                <div class="relative">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Cari nama, username..." 
                        class="bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs text-slate-900 placeholder-slate-450 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition w-60">
                    @if($search)
                        <a href="{{ route('console.users.index') }}" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-700">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </a>
                    @endif
                </div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition">
                    Cari
                </button>
            </form>

            <a href="{{ route('console.users.create') }}" class="bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition flex items-center gap-1.5">
                <i class="fa-solid fa-plus text-[10px]"></i>
                Tambah Pengguna
            </a>
        </div>
    </div>

    <!-- Alerts -->
    @if(session('success'))
        <div class="p-4 text-xs font-mono text-emerald-800 bg-emerald-100 border border-emerald-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="p-4 text-xs font-mono text-rose-800 bg-rose-100 border border-rose-300 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <!-- Table Container -->
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-100 dark:bg-console-950 border-b border-slate-200 dark:border-console-800 text-slate-700 dark:text-console-400 font-mono text-[10px] uppercase tracking-wider">
                        <th class="p-4">Nama / Username</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Role</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Terakhir Login</th>
                        <th class="p-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-console-800">
                    @forelse($users as $u)
                        <tr class="hover:bg-slate-50 dark:hover:bg-console-850 transition">
                            <td class="p-4">
                                <div class="font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                    {{ $u->name }}
                                    @if($u->id === Auth::id())
                                        <span class="bg-blue-100 text-blue-750 text-[9px] px-1.5 py-0.5 rounded font-mono font-bold uppercase">Saya</span>
                                    @endif
                                </div>
                                <div class="text-[10px] text-slate-500 font-mono mt-0.5">{{ $u->username }}</div>
                            </td>
                            <td class="p-4 font-mono text-slate-700 dark:text-console-300">
                                {{ $u->email }}
                            </td>
                            <td class="p-4">
                                @if($u->role === 'admin')
                                    <span class="bg-blue-100 text-blue-750 font-semibold font-mono text-[9px] px-2 py-1 rounded uppercase">Admin</span>
                                @elseif($u->role === 'verifikator')
                                    <span class="bg-emerald-100 text-emerald-800 font-semibold font-mono text-[9px] px-2 py-1 rounded uppercase">Verifikator</span>
                                @else
                                    <span class="bg-slate-150 text-slate-700 font-semibold font-mono text-[9px] px-2 py-1 rounded uppercase">Editor</span>
                                @endif
                            </td>
                            <td class="p-4">
                                @if($u->status === 'active')
                                    <span class="inline-flex items-center gap-1 text-emerald-600 font-semibold">
                                        <i class="fa-solid fa-circle-check"></i> Aktif
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 text-slate-400 font-semibold">
                                        <i class="fa-solid fa-circle-xmark"></i> Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 font-mono text-slate-500 dark:text-console-400 text-[10px]">
                                {{ $u->last_login_at ? $u->last_login_at->format('d M Y, H:i') : '-' }}
                            </td>
                            <td class="p-4 text-right whitespace-nowrap">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('console.users.edit', $u) }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-[10px] px-3 py-1.5 rounded transition">
                                        Edit
                                    </a>
                                    @if($u->id !== Auth::id())
                                        <form action="{{ route('console.users.destroy', $u) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-700 dark:bg-red-950/80 dark:text-red-400 dark:hover:bg-red-900 font-semibold text-[10px] px-3 py-1.5 rounded transition">
                                                Hapus
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-500 font-mono">
                                Pengguna tidak ditemukan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($users->hasPages())
            <div class="p-4 border-t border-slate-200 dark:border-console-800">
                {{ $users->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
