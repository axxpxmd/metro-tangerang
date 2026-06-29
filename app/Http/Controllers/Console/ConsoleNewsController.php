<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsImage;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ConsoleNewsController extends Controller
{
    /**
     * Display a listing of the news articles.
     */
    public function index(Request $request)
    {
        $search   = $request->input('search');
        $category = $request->input('category');
        $status   = $request->input('status');

        $news = News::with(['author', 'category'])
            ->when($search, fn ($q) => $q->where('title', 'like', "%{$search}%")
                ->orWhere('slug', 'like', "%{$search}%"))
            ->when($category, fn ($q) => $q->where('category_id', $category))
            ->when($status, fn ($q) => $q->where('status', $status))
            ->latest()
            ->paginate(15)
            ->withQueryString();

        $categories = Category::orderBy('name')->get();

        return view('console.news.index', compact('news', 'search', 'category', 'status', 'categories'));
    }

    /**
     * Display the specified news article.
     */
    public function show(News $news)
    {
        $news->load(['author', 'tags', 'images', 'category']);
        return view('console.news.show', compact('news'));
    }

    /**
     * Show the form for creating a new news article.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('console.news.create', compact('categories'));
    }

    /**
     * Store a newly created news article in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'subtitle'         => ['nullable', 'string', 'max:255'],
            'slug'             => ['nullable', 'string', 'max:255', 'unique:news,slug'],
            'summary'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'category_id'      => ['required', 'exists:categories,id'],
            'tags'             => ['nullable', 'array'],
            'tags.*'           => ['string'],
            'status'           => ['required', Rule::in(['draft', 'published'])],
            'is_headline'      => ['nullable', 'boolean'],
            'is_laporan_utama' => ['nullable', 'boolean'],
            'is_breaking'      => ['nullable', 'boolean'],
            'allow_comments'   => ['nullable', 'boolean'],
            'image_source'     => ['nullable', 'string', 'max:255'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'published_at'     => ['nullable', 'date'],
            'cover_image'      => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:5120'],
            'gallery.*'        => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:5120'],
        ]);

        // Auto-generate slug if not provided
        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        // Ensure uniqueness
        $originalSlug = $slug;
        $i = 1;
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i++;
        }

        // Handle cover image upload
        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('news/covers', 'public');
        }

        // Set published_at automatically when publishing
        $publishedAt = $validated['published_at'] ?? null;
        if ($validated['status'] === 'published' && ! $publishedAt) {
            $publishedAt = now();
        }

        // Calculate reading time (avg 200 wpm)
        $wordCount   = str_word_count(strip_tags($validated['content']));
        $readingTime = max(1, (int) ceil($wordCount / 200));

        $news = News::create([
            'title'            => $validated['title'],
            'subtitle'         => $validated['subtitle'] ?? null,
            'slug'             => $slug,
            'summary'          => $validated['summary'] ?? null,
            'content'          => $validated['content'],
            'category_id'      => $validated['category_id'],
            'user_id'          => Auth::id(),
            'is_headline'      => (bool) ($request->input('is_headline', false)),
            'is_laporan_utama' => (bool) ($request->input('is_laporan_utama', false)),
            'is_breaking'      => (bool) ($request->input('is_breaking', false)),
            'allow_comments'   => (bool) ($request->input('allow_comments', true)),
            'image_source'     => $coverImagePath ?? $validated['image_source'] ?? null,
            'reading_time'     => $readingTime,
            'status'           => $validated['status'],
            'meta_title'       => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'published_at'     => $publishedAt,
        ]);

        // Handle tags
        if (!empty($validated['tags'])) {
            $tagIds = [];
            foreach ($validated['tags'] as $tagName) {
                $tag = Tag::firstOrCreate([
                    'name' => trim($tagName),
                ], [
                    'slug' => Str::slug($tagName),
                ]);
                $tagIds[] = $tag->id;
            }
            $news->tags()->sync($tagIds);
        }

        // Handle gallery images
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $index => $file) {
                $path = $file->store('news/gallery', 'public');
                NewsImage::create([
                    'news_id'    => $news->id,
                    'image_path' => $path,
                    'order'      => $index,
                ]);
            }
        }

        return redirect()->route('console.news.index')
            ->with('success', 'Artikel berita berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified news article.
     */
    public function edit(News $news)
    {
        $news->load(['images', 'tags']);
        $categories = Category::orderBy('name')->get();
        return view('console.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified news article in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'subtitle'         => ['nullable', 'string', 'max:255'],
            'slug'             => ['nullable', 'string', 'max:255', Rule::unique('news', 'slug')->ignore($news->id)],
            'summary'          => ['nullable', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'category_id'      => ['required', 'exists:categories,id'],
            'tags'             => ['nullable', 'array'],
            'tags.*'           => ['string'],
            'status'           => ['required', Rule::in(['draft', 'published'])],
            'is_headline'      => ['nullable', 'boolean'],
            'is_laporan_utama' => ['nullable', 'boolean'],
            'is_breaking'      => ['nullable', 'boolean'],
            'allow_comments'   => ['nullable', 'boolean'],
            'image_source'     => ['nullable', 'string', 'max:255'],
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'published_at'     => ['nullable', 'date'],
            'cover_image'      => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:5120'],
            'gallery.*'        => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,gif', 'max:5120'],
            'delete_images'    => ['nullable', 'array'],
            'delete_images.*'  => ['integer', 'exists:news_images,id'],
        ]);

        // Handle slug
        $slug = $validated['slug'] ?? Str::slug($validated['title']);
        if ($slug !== $news->slug) {
            $originalSlug = $slug;
            $i = 1;
            while (News::where('slug', $slug)->where('id', '!=', $news->id)->exists()) {
                $slug = $originalSlug . '-' . $i++;
            }
        }

        // Handle cover image
        $coverImagePath = $news->image_source;
        if ($request->hasFile('cover_image')) {
            // Delete old cover if it's a stored file
            if ($news->image_source && Storage::disk('public')->exists($news->image_source)) {
                Storage::disk('public')->delete($news->image_source);
            }
            $coverImagePath = $request->file('cover_image')->store('news/covers', 'public');
        }

        // Set published_at
        $publishedAt = $validated['published_at'] ?? $news->published_at;
        if ($validated['status'] === 'published' && ! $publishedAt) {
            $publishedAt = now();
        }

        // Calculate reading time
        $wordCount   = str_word_count(strip_tags($validated['content']));
        $readingTime = max(1, (int) ceil($wordCount / 200));

        $news->update([
            'title'            => $validated['title'],
            'subtitle'         => $validated['subtitle'] ?? null,
            'slug'             => $slug,
            'summary'          => $validated['summary'] ?? null,
            'content'          => $validated['content'],
            'category_id'      => $validated['category_id'],
            'is_headline'      => (bool) ($request->input('is_headline', false)),
            'is_laporan_utama' => (bool) ($request->input('is_laporan_utama', false)),
            'is_breaking'      => (bool) ($request->input('is_breaking', false)),
            'allow_comments'   => (bool) ($request->input('allow_comments', true)),
            'image_source'     => $coverImagePath,
            'reading_time'     => $readingTime,
            'status'           => $validated['status'],
            'meta_title'       => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'published_at'     => $publishedAt,
        ]);

        // Handle tags
        $tagIds = [];
        if (!empty($validated['tags'])) {
            foreach ($validated['tags'] as $tagName) {
                $tag = Tag::firstOrCreate([
                    'name' => trim($tagName),
                ], [
                    'slug' => Str::slug($tagName),
                ]);
                $tagIds[] = $tag->id;
            }
        }
        $news->tags()->sync($tagIds);

        // Delete selected gallery images
        if (! empty($validated['delete_images'])) {
            $toDelete = NewsImage::whereIn('id', $validated['delete_images'])
                ->where('news_id', $news->id)
                ->get();
            foreach ($toDelete as $img) {
                if (Storage::disk('public')->exists($img->image_path)) {
                    Storage::disk('public')->delete($img->image_path);
                }
                $img->delete();
            }
        }

        // Add new gallery images
        if ($request->hasFile('gallery')) {
            $nextOrder = $news->images()->max('order') + 1;
            foreach ($request->file('gallery') as $index => $file) {
                $path = $file->store('news/gallery', 'public');
                NewsImage::create([
                    'news_id'    => $news->id,
                    'image_path' => $path,
                    'order'      => $nextOrder + $index,
                ]);
            }
        }

        return redirect()->route('console.news.index')
            ->with('success', 'Artikel berita berhasil diperbarui.');
    }

    /**
     * Remove the specified news article from storage.
     */
    public function destroy(News $news)
    {
        // Delete cover image
        if ($news->image_source && Storage::disk('public')->exists($news->image_source)) {
            Storage::disk('public')->delete($news->image_source);
        }

        // Delete gallery images
        foreach ($news->images as $img) {
            if (Storage::disk('public')->exists($img->image_path)) {
                Storage::disk('public')->delete($img->image_path);
            }
        }

        $news->delete();

        return redirect()->route('console.news.index')
            ->with('success', 'Artikel berita berhasil dihapus.');
    }

    /**
     * Search tags dynamically via JSON endpoint.
     */
    public function searchTags(Request $request)
    {
        $q = $request->input('q');
        if (empty($q)) {
            return response()->json([]);
        }

        $tags = Tag::where('name', 'like', "%{$q}%")
            ->limit(10)
            ->get(['id', 'name']);

        return response()->json($tags);
    }
}
