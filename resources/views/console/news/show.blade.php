@extends('layouts.console')

@section('title', $news->title . ' - Metro Tangerang Console')
@section('page_title', 'Detail Artikel')

@section('content')
<div class="space-y-6">

    {{-- Header Action Bar --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div class="min-w-0">
            <div class="flex items-center gap-2 mb-1">
                <a href="{{ route('console.news.index') }}" class="text-xs text-blue-600 dark:text-sky-400 hover:underline">Kelola Berita</a>
                <span class="text-slate-300 dark:text-console-700 text-xs">&gt;</span>
                <span class="text-xs text-slate-500 dark:text-console-400 truncate">Detail Artikel</span>
            </div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider truncate">Pratinjau Artikel</h2>
        </div>

        <div class="flex flex-wrap items-center gap-2">
            <a href="{{ route('console.news.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-xs px-4 py-2 rounded-lg transition flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('console.news.edit', $news) }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition flex items-center gap-1.5">
                <i class="fa-solid fa-pen-to-square"></i> Edit Artikel
            </a>
        </div>
    </div>

    {{-- Main Grid --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        {{-- Left Column (Content) --}}
        <div class="xl:col-span-2 space-y-6">
            
            {{-- Article Content Card --}}
            <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6 space-y-6">
                
                {{-- Category and Date --}}
                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-100 dark:border-console-800 pb-4">
                    <span class="bg-indigo-100 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 font-mono text-[10px] px-2.5 py-1 rounded uppercase tracking-wide">
                        {{ $news->category?->name }}
                    </span>
                    <div class="text-xs text-slate-500 dark:text-console-400 font-mono">
                        <i class="fa-regular fa-clock mr-1"></i>
                        {{ $news->published_at ? $news->published_at->format('d M Y H:i') : $news->created_at->format('d M Y H:i') }}
                    </div>
                </div>

                {{-- Title & Subtitle --}}
                <div class="space-y-3">
                    <h1 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white leading-tight">
                        {{ $news->title }}
                    </h1>
                    @if($news->subtitle)
                        <p class="text-sm sm:text-base text-slate-500 dark:text-console-400 font-medium italic">
                            {{ $news->subtitle }}
                        </p>
                    @endif
                </div>

                {{-- Cover Image --}}
                @if($news->image_source)
                    <div class="relative rounded-xl overflow-hidden border border-slate-200 dark:border-console-700 bg-slate-50 dark:bg-console-950">
                        @if(Str::startsWith($news->image_source, 'http'))
                            <img src="{{ $news->image_source }}" alt="{{ $news->title }}" class="w-full h-auto max-h-[400px] object-cover mx-auto">
                        @else
                            <img src="{{ Storage::disk('public')->url($news->image_source) }}" alt="{{ $news->title }}" class="w-full h-auto max-h-[400px] object-cover mx-auto">
                        @endif
                    </div>
                @endif

                {{-- Summary --}}
                @if($news->summary)
                    <div class="p-4 bg-slate-50 dark:bg-console-950 border-l-4 border-sky-500 rounded-r-lg">
                        <h4 class="font-mono text-[9px] font-bold text-slate-400 uppercase tracking-wider mb-1">Ringkasan</h4>
                        <p class="text-xs text-slate-600 dark:text-console-300 leading-relaxed font-medium">
                            {{ $news->summary }}
                        </p>
                    </div>
                @endif

                {{-- Content Body --}}
                <div class="prose prose-sm dark:prose-invert max-w-none text-slate-800 dark:text-console-200 leading-relaxed space-y-4">
                    {!! $news->content !!}
                </div>
            </div>

            {{-- Gallery Card --}}
            @if($news->images && $news->images->count() > 0)
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-lg bg-purple-50 dark:bg-purple-950/40 text-purple-500 flex items-center justify-center text-sm">
                            <i class="fa-solid fa-images"></i>
                        </span>
                        <h3 class="text-sm font-bold text-slate-900 dark:text-white">Galeri Foto</h3>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                        @foreach($news->images as $img)
                            <div class="relative group rounded-lg overflow-hidden border border-slate-200 dark:border-console-700 bg-slate-50 dark:bg-console-955 aspect-[4/3]">
                                <a href="{{ Storage::disk('public')->url($img->image_path) }}" target="_blank">
                                    <img src="{{ Storage::disk('public')->url($img->image_path) }}" alt="gallery" 
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

        {{-- Right Column (Metadata Sidebar) --}}
        <div class="space-y-6">

            {{-- Information Card --}}
            <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-4">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-sky-50 dark:bg-sky-950/40 text-sky-500 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-info-circle"></i>
                    </span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Informasi Publikasi</h3>
                </div>

                <div class="divide-y divide-slate-100 dark:divide-console-800 text-xs">
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Status</span>
                        @if($news->status === 'published')
                            <span class="inline-flex items-center gap-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 font-semibold font-mono text-[9px] px-2 py-0.5 rounded uppercase">
                                <i class="fa-solid fa-circle text-[5px]"></i> Published
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 font-semibold font-mono text-[9px] px-2 py-0.5 rounded uppercase">
                                <i class="fa-solid fa-circle text-[5px]"></i> Draft
                            </span>
                        @endif
                    </div>
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Penulis</span>
                        <span class="font-semibold text-slate-800 dark:text-white">{{ $news->author?->name ?? '-' }}</span>
                    </div>
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Jumlah Dilihat</span>
                        <span class="font-semibold text-slate-800 dark:text-white font-mono">{{ number_format($news->views_count) }}x</span>
                    </div>
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Estimasi Waktu Baca</span>
                        <span class="font-semibold text-slate-800 dark:text-white font-mono">~{{ $news->reading_time }} Menit</span>
                    </div>
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Dibuat</span>
                        <span class="text-slate-700 dark:text-console-300 font-mono">{{ $news->created_at->format('d M Y H:i') }}</span>
                    </div>
                    <div class="py-3 flex justify-between gap-4">
                        <span class="text-slate-500 dark:text-console-400">Terakhir Update</span>
                        <span class="text-slate-700 dark:text-console-300 font-mono">{{ $news->updated_at->format('d M Y H:i') }}</span>
                    </div>
                </div>
            </div>

            {{-- Flags Card --}}
            <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-4">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-orange-50 dark:bg-orange-950/40 text-orange-500 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-flag"></i>
                    </span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Flag & Pengaturan</h3>
                </div>

                <div class="space-y-2 text-xs">
                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 dark:bg-console-950">
                        <span class="text-slate-600 dark:text-console-300">Headline</span>
                        <span class="font-semibold font-mono text-[10px] {{ $news->is_headline ? 'text-blue-600 dark:text-sky-400' : 'text-slate-400' }}">
                            {{ $news->is_headline ? 'AKTIF' : 'NONAKTIF' }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 dark:bg-console-950">
                        <span class="text-slate-600 dark:text-console-300">Breaking News</span>
                        <span class="font-semibold font-mono text-[10px] {{ $news->is_breaking ? 'text-red-600 dark:text-red-400' : 'text-slate-400' }}">
                            {{ $news->is_breaking ? 'AKTIF' : 'NONAKTIF' }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 dark:bg-console-950">
                        <span class="text-slate-600 dark:text-console-300">Laporan Utama</span>
                        <span class="font-semibold font-mono text-[10px] {{ $news->is_laporan_utama ? 'text-purple-600 dark:text-purple-400' : 'text-slate-400' }}">
                            {{ $news->is_laporan_utama ? 'AKTIF' : 'NONAKTIF' }}
                        </span>
                    </div>
                    <div class="flex items-center justify-between p-2.5 rounded-lg bg-slate-50 dark:bg-console-950">
                        <span class="text-slate-600 dark:text-console-300">Izinkan Komentar</span>
                        <span class="font-semibold font-mono text-[10px] {{ $news->allow_comments ? 'text-emerald-600 dark:text-emerald-400' : 'text-slate-400' }}">
                            {{ $news->allow_comments ? 'YA' : 'TIDAK' }}
                        </span>
                    </div>
                </div>
            </div>

            {{-- Tags Card --}}
            <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-3">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-amber-50 dark:bg-amber-950/40 text-amber-500 flex items-center justify-center text-sm">
                        <i class="fa-solid fa-tags"></i>
                    </span>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Tag Artikel</h3>
                </div>
                
                @if($news->tags && $news->tags->count() > 0)
                    <div class="flex flex-wrap gap-2">
                        @foreach($news->tags as $tag)
                            <span class="inline-flex items-center bg-slate-100 dark:bg-console-800 text-slate-700 dark:text-console-300 font-mono text-[10px] px-2.5 py-1 rounded">
                                #{{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                @else
                    <p class="text-xs text-slate-400 dark:text-console-500 italic">Tidak ada tag.</p>
                @endif
            </div>

            {{-- Danger Zone --}}
            <div class="bg-rose-50 dark:bg-rose-950/20 border border-rose-100 dark:border-rose-950 rounded-xl p-5">
                <h3 class="text-xs font-bold text-rose-700 dark:text-rose-400 uppercase tracking-wider flex items-center gap-2 mb-3">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Zona Berbahaya
                </h3>
                <p class="text-[10px] text-rose-600 dark:text-rose-500 mb-3">Tindakan menghapus artikel ini permanen dan tidak dapat dibatalkan.</p>
                <form action="{{ route('console.news.destroy', $news) }}" method="POST"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini secara permanen?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-500 text-white font-bold text-xs px-4 py-2 rounded-lg transition">
                        <i class="fa-solid fa-trash mr-1.5"></i>
                        Hapus Artikel
                    </button>
                </form>
            </div>

        </div>

    </div>

</div>
@endsection
