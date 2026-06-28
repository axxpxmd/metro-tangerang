@extends('layouts.console')

@section('title', 'Dashboard - Metro Tangerang Console')
@section('page_title', 'Dashboard')

@section('content')
<div class="space-y-6">
    
    <!-- Welcome Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-gradient-to-r from-white to-slate-100 dark:from-console-900 dark:to-console-850 p-6 rounded-xl border border-slate-200 dark:border-console-800 transition-colors">
        <div>
            <h2 class="text-xl font-bold text-slate-900 dark:text-white">Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p class="text-xs text-slate-650 dark:text-console-400 mt-1">Berikut adalah ikhtisar performa dan statistik portal berita Metro Tangerang hari ini.</p>
        </div>
        <div class="flex items-center gap-2 bg-slate-200 dark:bg-console-950 px-3.5 py-2 rounded-lg border border-slate-300 dark:border-console-800 w-fit transition-colors">
            <span class="w-2.5 h-2.5 bg-emerald-600 rounded-full animate-pulse"></span>
            <span class="font-mono text-[10px] font-bold text-slate-700 dark:text-console-300 uppercase tracking-wider">System Online</span>
        </div>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Card 1: Views -->
        <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 hover:border-slate-350 dark:hover:border-console-700 transition group">
            <div class="flex justify-between items-start">
                <span class="text-[10px] font-mono text-slate-550 dark:text-console-400 uppercase tracking-wider">Total Kunjungan</span>
                <span class="p-2 bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-100 rounded-lg group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-eye text-sm"></i>
                </span>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ number_format($viewsCount) }}</h3>
                <p class="text-[10px] text-emerald-600 dark:text-emerald-400 font-bold mt-1 flex items-center gap-1">
                    <i class="fa-solid fa-arrow-up"></i>
                    <span>+12% Minggu ini</span>
                </p>
            </div>
        </div>

        <!-- Card 2: Posts -->
        <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 hover:border-slate-350 dark:hover:border-console-700 transition group">
            <div class="flex justify-between items-start">
                <span class="text-[10px] font-mono text-slate-550 dark:text-console-400 uppercase tracking-wider">Total Artikel</span>
                <span class="p-2 bg-indigo-100 text-indigo-750 dark:bg-indigo-900 dark:text-indigo-100 rounded-lg group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-newspaper text-sm"></i>
                </span>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ number_format($postsCount) }}</h3>
                <p class="text-[10px] text-emerald-600 dark:text-emerald-400 font-bold mt-1 flex items-center gap-1">
                    <i class="fa-solid fa-arrow-up"></i>
                    <span>+4 Baru hari ini</span>
                </p>
            </div>
        </div>

        <!-- Card 3: Inquiries -->
        <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 hover:border-slate-350 dark:hover:border-console-700 transition group">
            <div class="flex justify-between items-start">
                <span class="text-[10px] font-mono text-slate-555 dark:text-console-400 uppercase tracking-wider">Pesan Masuk</span>
                <span class="p-2 bg-emerald-100 text-emerald-750 dark:bg-emerald-900 dark:text-emerald-100 rounded-lg group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-envelope text-sm"></i>
                </span>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ number_format($inquiriesCount) }}</h3>
                <p class="text-[10px] text-slate-600 dark:text-console-400 font-medium mt-1 flex items-center gap-1">
                    <i class="fa-solid fa-envelope-open"></i>
                    <span>Dari halaman Kontak</span>
                </p>
            </div>
        </div>

        <!-- Card 4: Active Users -->
        <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 hover:border-slate-350 dark:hover:border-console-700 transition group">
            <div class="flex justify-between items-start">
                <span class="text-[10px] font-mono text-slate-555 dark:text-console-400 uppercase tracking-wider">Admin Aktif</span>
                <span class="p-2 bg-amber-100 text-amber-750 dark:bg-amber-900 dark:text-amber-100 rounded-lg group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-users text-sm"></i>
                </span>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ number_format($usersCount) }}</h3>
                <p class="text-[10px] text-slate-600 dark:text-console-400 font-medium mt-1 flex items-center gap-1">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Hak akses Console</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Recent Activity Table -->
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl overflow-hidden transition-colors">
        <div class="p-5 border-b border-slate-200 dark:border-console-800 flex items-center justify-between transition-colors">
            <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                <span class="w-2.5 h-2.5 bg-console-accent rounded-sm"></span>
                Pesan Kontak Masuk Terbaru
            </h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-100 dark:bg-console-950 border-b border-slate-200 dark:border-console-800 text-slate-700 dark:text-console-400 font-mono text-[10px] uppercase tracking-wider transition-colors">
                        <th class="p-4">Nama</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Pesan</th>
                        <th class="p-4">Tanggal Kirim</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-console-800 transition-colors">
                    @forelse($recentInquiries as $inquiry)
                        <tr class="hover:bg-slate-50 dark:hover:bg-console-850 transition">
                            <td class="p-4 font-semibold text-slate-900 dark:text-white">{{ $inquiry->name }}</td>
                            <td class="p-4 font-mono text-slate-700 dark:text-console-300">{{ $inquiry->email }}</td>
                            <td class="p-4 text-slate-700 dark:text-console-400 max-w-xs truncate">{{ $inquiry->message }}</td>
                            <td class="p-4 font-mono text-slate-600 dark:text-console-400 text-[10px]">{{ $inquiry->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-8 text-center text-slate-500 dark:text-console-500 font-mono">
                                Belum ada pesan masuk.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
