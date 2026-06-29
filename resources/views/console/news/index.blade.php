@extends('layouts.console')

@section('title', 'Kelola Berita - Metro Tangerang Console')
@section('page_title', 'Kelola Berita')

@section('content')
<div class="space-y-6">

    {{-- Top Action Bar --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Daftar Artikel Berita</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1">Kelola seluruh artikel berita portal Metro Tangerang.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            {{-- Search --}}
            <form action="{{ route('console.news.index') }}" method="GET" class="flex flex-wrap items-center gap-2">
                <div class="relative">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Cari judul, slug..."
                        class="bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg pl-3.5 pr-8 py-2 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 transition w-52">
                    @if($search)
                        <a href="{{ route('console.news.index', array_filter(['category' => $category, 'status' => $status])) }}" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-700">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </a>
                    @endif
                </div>

                {{-- Category filter --}}
                <select name="category" class="bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg px-2.5 py-2 text-xs text-slate-700 dark:text-white focus:outline-none focus:border-sky-500 transition">
                    <option value="">Semua Kategori</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" @selected((string)$category === (string)$cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>

                {{-- Status filter --}}
                <select name="status" class="bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg px-2.5 py-2 text-xs text-slate-700 dark:text-white focus:outline-none focus:border-sky-500 transition">
                    <option value="">Semua Status</option>
                    <option value="published" @selected($status === 'published')>Dipublikasikan</option>
                    <option value="draft" @selected($status === 'draft')>Draft</option>
                </select>

                <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition">
                    Filter
                </button>
            </form>

            <a href="{{ route('console.news.create') }}" class="bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs px-4 py-2 rounded-lg transition flex items-center gap-1.5 whitespace-nowrap">
                <i class="fa-solid fa-plus text-[10px]"></i>
                Tulis Artikel
            </a>
        </div>
    </div>

    {{-- Alerts --}}
    @if(session('success'))
        <div class="p-4 text-xs font-semibold text-emerald-800 bg-emerald-100 border border-emerald-300 rounded-lg flex items-center gap-2">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="p-4 text-xs font-semibold text-rose-800 bg-rose-100 border border-rose-300 rounded-lg flex items-center gap-2">
            <i class="fa-solid fa-triangle-exclamation"></i>
            {{ session('error') }}
        </div>
    @endif

    {{-- Table --}}
    <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-100 dark:bg-console-950 border-b border-slate-200 dark:border-console-800 text-slate-700 dark:text-console-400 font-mono text-[10px] uppercase tracking-wider">
                        <th class="p-4 w-28">Cover</th>
                        <th class="p-4 w-full">Judul / Kategori</th>
                        <th class="p-4">Penulis</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Flags</th>
                        <th class="p-4">Dibuat</th>
                        <th class="p-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-console-800">
                    @forelse($news as $article)
                        <tr class="hover:bg-slate-50 dark:hover:bg-console-850 transition">
                            {{-- Cover --}}
                            <td class="p-4">
                                @if($article->image_source && !str_starts_with($article->image_source, 'http'))
                                    <img src="{{ Storage::disk('public')->url($article->image_source) }}" alt="cover"
                                        class="w-20 h-20 object-cover rounded-lg border border-slate-200 dark:border-console-700 min-w-[80px] flex-shrink-0">
                                @elseif($article->image_source)
                                    <img src="{{ $article->image_source }}" alt="cover"
                                        class="w-20 h-20 object-cover rounded-lg border border-slate-200 dark:border-console-700 min-w-[80px] flex-shrink-0">
                                @else
                                    <div class="w-20 h-20 bg-slate-100 dark:bg-console-800 rounded-lg flex items-center justify-center text-slate-400 min-w-[80px] flex-shrink-0">
                                        <i class="fa-solid fa-image text-sm"></i>
                                    </div>
                                @endif
                            </td>

                            {{-- Title --}}
                            <td class="p-4">
                                <div class="font-semibold text-slate-900 dark:text-white leading-snug line-clamp-2">
                                    {{ $article->title }}
                                </div>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="font-mono text-[9px] text-slate-500 dark:text-console-400">{{ $article->slug }}</span>
                                </div>
                                <span class="inline-block mt-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 font-mono text-[9px] px-1.5 py-0.5 rounded uppercase tracking-wide">
                                    {{ $article->category?->name }}
                                </span>
                            </td>

                            {{-- Author --}}
                            <td class="p-4 text-slate-600 dark:text-console-300">
                                {{ $article->author?->name ?? '-' }}
                            </td>

                            {{-- Status --}}
                            <td class="p-4">
                                @if($article->status === 'published')
                                    <span class="inline-flex items-center gap-1 bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-400 font-semibold font-mono text-[9px] px-2 py-1 rounded uppercase">
                                        <i class="fa-solid fa-circle text-[5px]"></i> Publish
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 bg-amber-100 dark:bg-amber-900/40 text-amber-700 dark:text-amber-400 font-semibold font-mono text-[9px] px-2 py-1 rounded uppercase">
                                        <i class="fa-solid fa-circle text-[5px]"></i> Draft
                                    </span>
                                @endif
                            </td>

                            {{-- Flags --}}
                            <td class="p-4">
                                <div class="flex flex-wrap gap-1">
                                    @if($article->is_headline)
                                        <span class="bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 font-mono text-[8px] px-1.5 py-0.5 rounded uppercase">HL</span>
                                    @endif
                                    @if($article->is_breaking)
                                        <span class="bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-300 font-mono text-[8px] px-1.5 py-0.5 rounded uppercase">BR</span>
                                    @endif
                                    @if($article->is_laporan_utama)
                                        <span class="bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 font-mono text-[8px] px-1.5 py-0.5 rounded uppercase">LU</span>
                                    @endif
                                </div>
                            </td>

                            {{-- Created At --}}
                            <td class="p-4 text-slate-500 dark:text-console-400 font-mono text-[10px]">
                                {{ $article->created_at->format('d M Y') }}
                                <div class="text-[9px] text-slate-400">{{ $article->created_at->format('H:i') }}</div>
                            </td>

                            {{-- Actions --}}
                            <td class="p-4 text-right">
                                <div class="flex items-center justify-end gap-2 font-medium">
                                    <a href="{{ route('console.news.show', $article) }}"
                                        class="bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-blue-950/40 dark:text-blue-400 dark:hover:bg-blue-950/60 font-semibold px-2.5 py-1.5 rounded transition text-[10px]">
                                        Lihat
                                    </a>
                                    <a href="{{ route('console.news.edit', $article) }}"
                                        class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold px-2.5 py-1.5 rounded transition text-[10px]">
                                        Edit
                                    </a>
                                    <form action="{{ route('console.news.destroy', $article) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-rose-50 hover:bg-rose-100 text-rose-600 dark:bg-rose-950/20 dark:text-rose-400 dark:hover:bg-rose-950/40 font-semibold px-2.5 py-1.5 rounded transition text-[10px]">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-slate-400 dark:text-console-500 font-medium">
                                <i class="fa-regular fa-folder-open text-2xl block mb-2"></i>
                                Belum ada artikel berita.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if($news->hasPages())
            <div class="bg-slate-50 dark:bg-console-950 p-4 border-t border-slate-200 dark:border-console-800">
                {{ $news->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
