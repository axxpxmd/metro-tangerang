@extends('layouts.console')

@section('title', 'Kelola Pesan - Metro Tangerang Console')
@section('page_title', 'Pesan Kontak')

@section('content')
<div class="space-y-6">
    
    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Daftar Pesan Kontak</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1">Kelola dan tanggapi pesan masuk dari pembaca atau mitra.</p>
        </div>
        
        <!-- Search Form -->
        <form action="{{ route('console.contacts.index') }}" method="GET" class="flex items-center gap-2">
            <div class="relative">
                <input type="text" name="search" value="{{ $search }}" placeholder="Cari pesan..." 
                    class="bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs text-slate-900 placeholder-slate-450 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition w-64">
                @if($search)
                    <a href="{{ route('console.contacts.index') }}" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-700">
                        <i class="fa-solid fa-xmark text-xs"></i>
                    </a>
                @endif
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition active:scale-[0.98]">
                Cari
            </button>
        </form>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="p-4 text-xs font-mono text-emerald-800 bg-emerald-100 border border-emerald-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table Container -->
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-100 dark:bg-console-950 border-b border-slate-200 dark:border-console-800 text-slate-700 dark:text-console-400 font-mono text-[10px] uppercase tracking-wider">
                        <th class="p-4">Nama</th>
                        <th class="p-4">Kontak</th>
                        <th class="p-4">Subjek</th>
                        <th class="p-4">Tanggal Kirim</th>
                        <th class="p-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-console-800">
                    @forelse($contacts as $contact)
                        <tr class="hover:bg-slate-50 dark:hover:bg-console-850 transition">
                            <td class="p-4 font-semibold text-slate-900 dark:text-white">
                                {{ $contact->name }}
                            </td>
                            <td class="p-4">
                                <div class="font-mono text-slate-750 dark:text-console-300">{{ $contact->email }}</div>
                                @if($contact->phone)
                                    <div class="text-[10px] text-slate-500 font-mono mt-0.5">{{ $contact->phone }}</div>
                                @endif
                            </td>
                            <td class="p-4 text-slate-700 dark:text-console-300 font-medium">
                                {{ $contact->subject }}
                            </td>
                            <td class="p-4 font-mono text-slate-500 dark:text-console-400 text-[10px]">
                                {{ $contact->created_at->format('d M Y, H:i') }}
                            </td>
                            <td class="p-4 text-right whitespace-nowrap">
                                <div class="inline-flex gap-2">
                                    <a href="{{ route('console.contacts.show', $contact) }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-[10px] px-3 py-1.5 rounded transition">
                                        Detail
                                    </a>
                                    <form action="{{ route('console.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-700 dark:bg-red-950/80 dark:text-red-400 dark:hover:bg-red-900 font-semibold text-[10px] px-3 py-1.5 rounded transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-8 text-center text-slate-500 font-mono">
                                Belum ada pesan kontak yang ditemukan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($contacts->hasPages())
            <div class="p-4 border-t border-slate-200 dark:border-console-800">
                {{ $contacts->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
