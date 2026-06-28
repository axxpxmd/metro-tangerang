@extends('layouts.console')

@section('title', 'Edit Artikel - Metro Tangerang Console')
@section('page_title', 'Edit Artikel')

@push('head')
    <script src="https://cdn.tiny.cloud/1/kmpjl2vq2hx8zh493a02m8sxahks3nt4inhuoqxbxn3i17bj/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .tag-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 100px;
            transition: all 0.15s ease;
        }
        .tag-pill-exist {
            background-color: #dbeafe;
            color: #1e40af;
        }
        .tag-pill-new {
            background-color: #dcfce7;
            color: #15803d;
        }
        .tag-suggestions-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 50;
            background: white;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            max-height: 200px;
            overflow-y: auto;
        }
        .dark .tag-suggestions-list {
            background: #1f2937;
            border-color: #374151;
        }
    </style>
@endpush

@section('content')
<div class="space-y-6">

    {{-- Header --}}
    <div class="flex items-center justify-between bg-white dark:bg-console-900 p-5 rounded-xl border border-slate-200 dark:border-console-800">
        <div>
            <h2 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Edit Artikel</h2>
            <p class="text-xs text-slate-500 dark:text-console-400 mt-1 max-w-lg truncate">{{ $news->title }}</p>
        </div>
        <a href="{{ route('console.news.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-xs px-4 py-2 rounded-lg transition">
            &larr; Kembali
        </a>
    </div>

    <form action="{{ route('console.news.update', $news) }}" method="POST" enctype="multipart/form-data" id="news-form" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            {{-- ─── MAIN COLUMN ─────────────────────────────── --}}
            <div class="xl:col-span-2 space-y-6">

                {{-- Basic Info --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6 space-y-5">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <span class="w-1.5 h-3 bg-blue-600 rounded-sm"></span>
                        Informasi Artikel
                    </h3>

                    {{-- Title --}}
                    <div>
                        <label for="title" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Judul Artikel *</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}" required
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-sm text-slate-900 dark:text-white font-semibold focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('title') border-rose-500 @enderror"
                            placeholder="Masukkan judul berita...">
                        @error('title')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Subtitle --}}
                    <div>
                        <label for="subtitle" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Sub-judul</label>
                        <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $news->subtitle) }}"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                            placeholder="Sub-judul opsional...">
                    </div>

                    {{-- Slug --}}
                    <div>
                        <label for="slug" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Slug URL</label>
                        <div class="flex items-center gap-0">
                            <span class="bg-slate-100 dark:bg-console-700 border border-r-0 border-slate-200 dark:border-console-600 rounded-l-lg px-3 py-2.5 text-[10px] text-slate-500 dark:text-console-400 font-mono whitespace-nowrap">/berita/</span>
                            <input type="text" name="slug" id="slug" value="{{ old('slug', $news->slug) }}"
                                class="flex-1 bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-r-lg p-2.5 text-xs text-slate-700 dark:text-console-300 font-mono focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('slug') border-rose-500 @enderror">
                        </div>
                        @error('slug')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Summary --}}
                    <div>
                        <label for="summary" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Ringkasan / Excerpt</label>
                        <textarea name="summary" id="summary" rows="4"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                            placeholder="Ringkasan singkat artikel...">{{ old('summary', $news->summary) }}</textarea>
                    </div>
                </div>

                {{-- TinyMCE Content --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2 mb-4">
                        <span class="w-1.5 h-3 bg-emerald-600 rounded-sm"></span>
                        Isi / Konten Artikel *
                    </h3>
                    <textarea name="content" id="content" class="@error('content') border-rose-500 @enderror">{!! old('content', $news->content) !!}</textarea>
                    @error('content')
                        <p class="text-rose-600 text-[10px] mt-2 font-mono uppercase">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Gallery Images --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2 mb-4">
                        <span class="w-1.5 h-3 bg-purple-600 rounded-sm"></span>
                        Galeri Foto
                    </h3>

                    {{-- Existing gallery --}}
                    @if($news->images->count())
                        <p class="font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-3">Foto Saat Ini — Centang untuk hapus:</p>
                        <div class="grid grid-cols-3 sm:grid-cols-4 gap-3 mb-5">
                            @foreach($news->images as $img)
                                <label class="relative group cursor-pointer" title="Centang untuk hapus">
                                    <input type="checkbox" name="delete_images[]" value="{{ $img->id }}"
                                        class="absolute top-2 left-2 z-10 w-4 h-4 accent-red-500">
                                    <img src="{{ Storage::url($img->image_path) }}" alt="gallery"
                                        class="w-full h-24 object-cover rounded-lg border border-slate-200 dark:border-console-700 group-hover:opacity-80 transition">
                                    <div class="absolute bottom-1 right-1 bg-black/60 text-white text-[8px] font-mono px-1.5 py-0.5 rounded">
                                        #{{ $img->order + 1 }}
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    @endif

                    {{-- Add new gallery --}}
                    <div class="border-2 border-dashed border-slate-200 dark:border-console-700 rounded-xl p-6 text-center">
                        <div class="flex flex-col items-center gap-2 text-slate-400 dark:text-console-500 mb-4">
                            <i class="fa-solid fa-plus-circle text-2xl"></i>
                            <p class="text-xs">Tambah foto galeri baru</p>
                        </div>
                        <input type="file" name="gallery[]" id="gallery" multiple accept="image/*"
                            class="hidden" onchange="previewGallery(this)">
                        <label for="gallery" class="cursor-pointer bg-slate-100 hover:bg-slate-200 dark:bg-console-800 dark:hover:bg-console-700 text-slate-700 dark:text-console-300 font-semibold text-xs px-4 py-2 rounded-lg transition">
                            Pilih Foto Baru
                        </label>
                    </div>
                    <div id="gallery-preview" class="grid grid-cols-3 sm:grid-cols-4 gap-3 mt-4 hidden"></div>
                </div>

                {{-- SEO --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-6 space-y-4">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <span class="w-1.5 h-3 bg-amber-500 rounded-sm"></span>
                        Meta SEO
                    </h3>
                    <div>
                        <label for="meta_title" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $news->meta_title) }}"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                            placeholder="Biarkan kosong untuk menggunakan judul artikel">
                    </div>
                    <div>
                        <label for="meta_description" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" rows="2"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">{{ old('meta_description', $news->meta_description) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- ─── SIDEBAR ─────────────────────────────────── --}}
            <div class="space-y-6">

                {{-- Publish settings --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-4">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <span class="w-1.5 h-3 bg-sky-500 rounded-sm"></span>
                        Pengaturan Publikasi
                    </h3>

                    {{-- Status --}}
                    <div>
                        <label for="status" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Status *</label>
                        <select name="status" id="status" required
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                            <option value="draft" @selected(old('status', $news->status) === 'draft')>📝 Draft</option>
                            <option value="published" @selected(old('status', $news->status) === 'published')>🟢 Dipublikasikan</option>
                        </select>
                    </div>

                    {{-- Category --}}
                    <div>
                        <label for="category" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Kategori *</label>
                        <input type="text" name="category" id="category" value="{{ old('category', $news->category) }}" required
                            list="category-suggestions"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('category') border-rose-500 @enderror">
                        <datalist id="category-suggestions">
                            <option value="Politik">
                            <option value="Ekonomi">
                            <option value="Olahraga">
                            <option value="Hiburan">
                            <option value="Pendidikan">
                            <option value="Teknologi">
                            <option value="Kesehatan">
                            <option value="Sosial">
                            <option value="Hukum & Kriminal">
                        </datalist>
                        @error('category')
                            <p class="text-rose-600 text-[10px] mt-1 font-mono uppercase">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Publish date --}}
                    <div>
                        <label for="published_at" class="block font-mono text-[9px] font-bold text-slate-500 uppercase tracking-widest mb-2">Tanggal Terbit</label>
                        <input type="datetime-local" name="published_at" id="published_at"
                            value="{{ old('published_at', $news->published_at?->format('Y-m-d\TH:i')) }}"
                            class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-lg p-2.5 text-xs text-slate-900 dark:text-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">
                    </div>

                    {{-- Info --}}
                    <div class="bg-slate-50 dark:bg-console-950 rounded-lg p-3 space-y-1.5 text-[10px] font-mono text-slate-500 dark:text-console-400">
                        <div class="flex justify-between">
                            <span>Penulis:</span>
                            <span class="text-slate-700 dark:text-console-300 font-semibold">{{ $news->author?->name ?? 'Unknown' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Dibuat:</span>
                            <span>{{ $news->created_at->format('d M Y') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Diedit:</span>
                            <span>{{ $news->updated_at->format('d M Y') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Views:</span>
                            <span>{{ number_format($news->views_count) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Waktu baca:</span>
                            <span>~{{ $news->reading_time }} menit</span>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="pt-2 border-t border-slate-100 dark:border-console-800 flex flex-col gap-2">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs px-4 py-2.5 rounded-lg transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i>
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('console.news.index') }}"
                            class="w-full text-center bg-slate-100 hover:bg-slate-200 text-slate-700 dark:bg-console-800 dark:text-white dark:hover:bg-console-700 font-semibold text-xs px-4 py-2.5 rounded-lg transition">
                            Batalkan
                        </a>
                    </div>
                </div>

                {{-- Custom Interactive Tag Widget --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-lg bg-amber-50 dark:bg-amber-950/40 text-amber-500 flex items-center justify-center text-sm">
                            <i class="fa-solid fa-tag"></i>
                        </span>
                        <h3 class="text-sm font-bold text-slate-900 dark:text-white">Tag Artikel</h3>
                    </div>

                    <div class="relative space-y-3">
                        <label class="block font-mono text-[9px] font-bold text-slate-500 dark:text-console-400 uppercase tracking-widest">Cari atau Tambah Tag</label>
                        
                        <div class="relative">
                            <input type="text" id="tag-input" 
                                class="w-full bg-slate-50 dark:bg-console-800 border border-slate-200 dark:border-console-700 rounded-xl p-3 text-xs text-slate-900 dark:text-white placeholder-slate-400 focus:bg-white focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                                placeholder="Ketik nama tag...">
                            
                            {{-- Autocomplete Dropdown List --}}
                            <div id="tag-suggestions" class="tag-suggestions-list hidden"></div>
                        </div>

                        <p class="text-[10px] text-slate-400 flex items-center gap-1.5">
                            <i class="fa-solid fa-circle-info"></i>
                            Ketik nama tag dan tekan Enter, atau pilih dari daftar
                        </p>

                        {{-- Selected Tags Container --}}
                        <div id="selected-tags-container" class="flex flex-wrap gap-2 pt-1"></div>
                    </div>
                </div>

                {{-- Cover Image --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-3">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <span class="w-1.5 h-3 bg-rose-500 rounded-sm"></span>
                        Foto Cover
                    </h3>

                    {{-- Current cover --}}
                    @if($news->image_source)
                        <div class="relative group">
                            @if(Str::startsWith($news->image_source, 'http'))
                                <img src="{{ $news->image_source }}" alt="Cover saat ini"
                                    class="w-full rounded-xl object-cover" style="max-height:160px">
                            @else
                                <img src="{{ Storage::url($news->image_source) }}" alt="Cover saat ini"
                                    class="w-full rounded-xl object-cover" style="max-height:160px">
                            @endif
                            <div class="absolute bottom-2 left-2 bg-black/60 text-white text-[9px] font-mono px-2 py-0.5 rounded">
                                Cover saat ini
                            </div>
                        </div>
                    @endif

                    <div class="border-2 border-dashed border-slate-200 dark:border-console-700 rounded-xl p-4 text-center cursor-pointer hover:border-sky-400 transition" onclick="document.getElementById('cover_image').click()">
                        <img id="cover-preview" src="" alt="" class="w-full rounded-lg object-cover mb-3 hidden" style="max-height:120px">
                        <div id="cover-placeholder" class="flex flex-col items-center gap-2 text-slate-400 dark:text-console-500">
                            <i class="fa-solid fa-arrow-up-from-bracket text-xl"></i>
                            <p class="text-xs">{{ $news->image_source ? 'Ganti foto cover' : 'Upload foto cover' }}</p>
                        </div>
                    </div>
                    <input type="file" name="cover_image" id="cover_image" accept="image/*" class="hidden" onchange="previewCover(this)">
                    @error('cover_image')
                        <p class="text-rose-600 text-[10px] font-mono uppercase">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Flags --}}
                <div class="bg-white dark:bg-console-900 border border-slate-200 dark:border-console-800 rounded-xl p-5 space-y-3">
                    <h3 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <span class="w-1.5 h-3 bg-orange-500 rounded-sm"></span>
                        Flag Artikel
                    </h3>

                    @php
                        $flags = [
                            ['name' => 'is_headline',      'label' => 'Headline Utama',   'icon' => 'fa-star',       'color' => 'blue',   'value' => $news->is_headline],
                            ['name' => 'is_breaking',      'label' => 'Breaking News',    'icon' => 'fa-bolt',       'color' => 'red',    'value' => $news->is_breaking],
                            ['name' => 'is_laporan_utama', 'label' => 'Laporan Utama',    'icon' => 'fa-file-lines', 'color' => 'purple', 'value' => $news->is_laporan_utama],
                            ['name' => 'allow_comments',   'label' => 'Izinkan Komentar', 'icon' => 'fa-comments',   'color' => 'green',  'value' => $news->allow_comments],
                        ];
                    @endphp

                    @foreach($flags as $flag)
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="hidden" name="{{ $flag['name'] }}" value="0">
                            <input type="checkbox" name="{{ $flag['name'] }}" value="1"
                                @checked(old($flag['name'], $flag['value']))
                                class="w-4 h-4 rounded border-slate-300 text-sky-600 focus:ring-sky-500 focus:outline-none">
                            <div class="flex items-center gap-2">
                                <span class="w-6 h-6 rounded-md bg-{{ $flag['color'] }}-100 dark:bg-{{ $flag['color'] }}-900/40 flex items-center justify-center text-{{ $flag['color'] }}-600 dark:text-{{ $flag['color'] }}-400 text-[10px]">
                                    <i class="fa-solid {{ $flag['icon'] }}"></i>
                                </span>
                                <span class="text-xs text-slate-700 dark:text-console-300 font-medium group-hover:text-slate-900 dark:group-hover:text-white transition">
                                    {{ $flag['label'] }}
                                </span>
                            </div>
                        </label>
                    @endforeach
                </div>

                {{-- Danger zone --}}
                <div class="bg-rose-50 dark:bg-rose-950/30 border border-rose-200 dark:border-rose-900 rounded-xl p-5">
                    <h3 class="text-xs font-bold text-rose-700 dark:text-rose-400 uppercase tracking-wider flex items-center gap-2 mb-3">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Zona Berbahaya
                    </h3>
                    <p class="text-[10px] text-rose-600 dark:text-rose-500 mb-3">Menghapus artikel tidak dapat dibatalkan. Semua foto terkait juga akan ikut dihapus.</p>
                    <form action="{{ route('console.news.destroy', $news) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda YAKIN ingin menghapus artikel ini secara permanen?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-rose-600 hover:bg-rose-500 text-white font-bold text-xs px-4 py-2 rounded-lg transition">
                            <i class="fa-solid fa-trash mr-1.5"></i>
                            Hapus Artikel Ini
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    /* Dynamic Tags autocomplete */
    const tagInput = document.getElementById('tag-input');
    const tagSuggestions = document.getElementById('tag-suggestions');
    const selectedTagsContainer = document.getElementById('selected-tags-container');
    let selectedTags = [];

    // Prepopulate tags from existing news details
    @foreach($news->tags as $t)
        selectedTags.push({ name: '{{ $t->name }}', isNew: false });
    @endforeach
    renderTags();

    // Render tag pills
    function renderTags() {
        selectedTagsContainer.innerHTML = '';
        selectedTags.forEach((tag, idx) => {
            const div = document.createElement('div');
            const badgeClass = tag.isNew ? 'tag-pill-new' : 'tag-pill-exist';
            const icon = tag.isNew ? '<i class="fa-solid fa-circle-plus text-[10px]"></i>' : '';
            
            div.className = `tag-pill ${badgeClass}`;
            div.innerHTML = `<span>${tag.name}</span>
                ${icon}
                <button type="button" class="hover:text-slate-800 dark:hover:text-white focus:outline-none ml-1 text-slate-400" onclick="removeTag(${idx})">
                    <i class="fa-solid fa-xmark text-[10px]"></i>
                </button>
                <input type="hidden" name="tags[]" value="${tag.name}">`;
            selectedTagsContainer.appendChild(div);
        });
    }

    // Add tag to list
    function addTag(tagName, isNew = false) {
        tagName = tagName.trim();
        if (!tagName) return;
        
        if (selectedTags.some(t => t.name.toLowerCase() === tagName.toLowerCase())) {
            tagInput.value = '';
            tagSuggestions.classList.add('hidden');
            return;
        }

        selectedTags.push({ name: tagName, isNew: isNew });
        renderTags();
        tagInput.value = '';
        tagSuggestions.classList.add('hidden');
    }

    // Remove tag
    function removeTag(idx) {
        selectedTags.splice(idx, 1);
        renderTags();
    }

    // Input handlers
    tagInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const val = this.value.trim();
            if (val) {
                addTag(val, true);
            }
        }
    });

    let searchTimeout;
    tagInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const query = this.value.trim();
        if (query.length < 1) {
            tagSuggestions.classList.add('hidden');
            return;
        }

        searchTimeout = setTimeout(() => {
            fetch(`{{ route('console.tags.search') }}?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {
                    tagSuggestions.innerHTML = '';
                    if (data.length > 0) {
                        tagSuggestions.classList.remove('hidden');
                        data.forEach(tag => {
                            const btn = document.createElement('button');
                            btn.type = 'button';
                            btn.className = 'w-full text-left px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-700 text-xs text-slate-800 dark:text-white transition focus:outline-none';
                            btn.textContent = tag.name;
                            btn.onclick = () => addTag(tag.name, false);
                            tagSuggestions.appendChild(btn);
                        });
                    } else {
                        tagSuggestions.classList.remove('hidden');
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'w-full text-left px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-700 text-xs text-emerald-600 font-semibold transition focus:outline-none flex items-center gap-1.5';
                        btn.innerHTML = `<i class="fa-solid fa-circle-plus"></i> Buat tag baru: "${query}"`;
                        btn.onclick = () => addTag(query, true);
                        tagSuggestions.appendChild(btn);
                    }
                });
        }, 150);
    });

    document.addEventListener('click', function(e) {
        if (!tagInput.contains(e.target) && !tagSuggestions.contains(e.target)) {
            tagSuggestions.classList.add('hidden');
        }
    });

    /* TinyMCE */
    tinymce.init({
        selector: '#content',
        height: 480,
        menubar: true,
        skin: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide',
        content_css: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default',
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount', 'emoticons',
            'codesample', 'quickbars',
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | ' +
                 'forecolor backcolor | alignleft aligncenter alignright alignjustify | ' +
                 'bullist numlist outdent indent | link image media table | ' +
                 'codesample emoticons | removeformat | fullscreen preview | help',
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
        image_advtab: true,
        automatic_uploads: false,
        content_style: 'body { font-family: "Plus Jakarta Sans", sans-serif; font-size: 14px; line-height: 1.7; }',
    });

    /* Cover image preview */
    function previewCover(input) {
        const preview = document.getElementById('cover-preview');
        const placeholder = document.getElementById('cover-placeholder');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    /* Gallery preview */
    function previewGallery(input) {
        const container = document.getElementById('gallery-preview');
        container.innerHTML = '';
        if (input.files && input.files.length) {
            container.classList.remove('hidden');
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    const div = document.createElement('div');
                    div.className = 'relative group';
                    div.innerHTML = `<img src="${e.target.result}" class="w-full h-24 object-cover rounded-lg border border-slate-200">`;
                    container.appendChild(div);
                };
                reader.readAsDataURL(file);
            });
        }
    }
</script>
@endpush
