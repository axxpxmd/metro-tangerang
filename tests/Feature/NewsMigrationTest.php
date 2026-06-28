<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\NewsImage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the news and news_images tables exist and relations function.
     */
    public function test_news_and_images_relationships_work(): void
    {
        $author = User::factory()->create();
        $verifikator = User::factory()->create(['role' => 'verifikator']);

        $news = News::create([
            'title' => 'Sample News Title',
            'subtitle' => 'Subtext of the news',
            'slug' => 'sample-news-title',
            'summary' => 'This is a summary of the article.',
            'content' => 'Full content text here.',
            'category' => 'metro',
            'user_id' => $author->id,
            'verifikator_id' => $verifikator->id,
            'is_headline' => true,
            'is_laporan_utama' => false,
            'is_breaking' => true,
            'image_source' => 'FOTO: DOKUMEN NEWS',
            'allow_comments' => true,
            'reading_time' => 5,
            'views_count' => 120,
            'status' => 'published',
            'meta_title' => 'SEO Title',
            'meta_description' => 'SEO description text.',
            'published_at' => now(),
        ]);

        $image1 = NewsImage::create([
            'news_id' => $news->id,
            'image_path' => 'uploads/image1.jpg',
            'order' => 1,
        ]);

        $image2 = NewsImage::create([
            'news_id' => $news->id,
            'image_path' => 'uploads/image2.jpg',
            'order' => 2,
        ]);

        $this->assertDatabaseHas('news', ['title' => 'Sample News Title']);
        $this->assertDatabaseHas('news_images', ['image_path' => 'uploads/image1.jpg']);

        // Verify relationships
        $this->assertCount(2, $news->images);
        $this->assertEquals('uploads/image1.jpg', $news->images->first()->image_path);
        $this->assertEquals($author->id, $news->author->id);
        $this->assertEquals($verifikator->id, $news->verifikator->id);
    }
}
