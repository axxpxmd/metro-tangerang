<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Main News Table
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->unique();
            $table->text('summary')->nullable();
            $table->mediumText('content');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            
            // Relationships
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('verifikator_id')->nullable()->constrained('users')->onDelete('set null');

            // Flags, Settings & Metrics
            $table->boolean('is_headline')->default(false);
            $table->boolean('is_laporan_utama')->default(false);
            $table->boolean('is_breaking')->default(false);
            
            $table->string('image_source')->nullable();
            $table->boolean('allow_comments')->default(true);
            $table->unsignedInteger('reading_time')->nullable();
            $table->unsignedInteger('views_count')->default(0);
            $table->string('status')->default('draft'); // draft, published
            
            // Meta & SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        // Multiple Images Table
        Schema::create('news_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade');
            $table->string('image_path');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_images');
        Schema::dropIfExists('news');
    }
};
