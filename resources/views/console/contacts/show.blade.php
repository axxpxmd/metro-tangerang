@extends('layouts.console')

@section('title', 'Detail Pesan - Metro Tangerang Console')
@section('page_title', 'Detail Pesan')

@section('content')
<div class="space-y-6 max-w-4xl">
    
    <!-- Top Action Bar -->
    <div class="flex items-center justify-between bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Detail Pesan Masuk</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1">Dikirim oleh pembaca pada {{ $contact->created_at->format('d F Y, H:i') }} WIB.</p>
        </div>
        <a href="{{ route('console.contacts.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-xs px-4 py-2 rounded-lg transition">
            Kembali
        </a>
    </div>

    <!-- Message Information Box -->
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl overflow-hidden p-6 space-y-6">
        <!-- Grid details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pb-6 border-b border-slate-200 dark:border-console-800">
            <div>
                <span class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">Nama Pengirim</span>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">{{ $contact->name }}</div>
            </div>
            
            <div>
                <span class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">Alamat Email</span>
                <div class="text-sm font-semibold text-slate-900 dark:text-white font-mono">{{ $contact->email }}</div>
            </div>

            <div>
                <span class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">Nomor Telepon</span>
                <div class="text-sm font-semibold text-slate-900 dark:text-white font-mono">
                    {{ $contact->phone ?? '-' }}
                </div>
            </div>

            <div>
                <span class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-1.5">Subjek / Topik</span>
                <div class="text-sm font-semibold text-slate-900 dark:text-white">{{ $contact->subject }}</div>
            </div>
        </div>

        <!-- Message body -->
        <div>
            <span class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-3">Isi Pesan</span>
            <div class="bg-slate-50 dark:bg-console-950 p-5 rounded-xl border border-slate-200 dark:border-console-850 text-slate-800 dark:text-slate-200 text-xs leading-relaxed font-sans whitespace-pre-line">
                {{ $contact->message }}
            </div>
        </div>

        <!-- Action tools -->
        <div class="pt-4 flex items-center justify-between gap-4">
            <a href="mailto:{{ $contact->email }}?subject=Balasan: {{ urlencode($contact->subject) }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-5 py-2.5 rounded-lg transition flex items-center gap-2">
                <i class="fa-solid fa-reply"></i>
                Balas via Email
            </a>
            
            <form action="{{ route('console.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-700 dark:bg-red-950/80 dark:text-red-400 dark:hover:bg-red-900 font-semibold text-xs px-5 py-2.5 rounded-lg transition flex items-center gap-2">
                    <i class="fa-solid fa-trash"></i>
                    Hapus Pesan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
