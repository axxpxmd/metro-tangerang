<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string|null $subtitle
 * @property string $slug
 * @property string|null $summary
 * @property string $content
 * @property int $category_id
 * @property int $user_id
 * @property int|null $verifikator_id
 * @property bool $is_headline
 * @property bool $is_laporan_utama
 * @property bool $is_breaking
 * @property string|null $image_source
 * @property bool $allow_comments
 * @property int|null $reading_time
 * @property int $views_count
 * @property string $status
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property Carbon|null $published_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class News extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'summary',
        'content',
        'category_id',
        'user_id',
        'verifikator_id',
        'is_headline',
        'is_laporan_utama',
        'is_breaking',
        'image_source',
        'allow_comments',
        'reading_time',
        'views_count',
        'status',
        'meta_title',
        'meta_description',
        'published_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_headline' => 'boolean',
            'is_laporan_utama' => 'boolean',
            'is_breaking' => 'boolean',
            'allow_comments' => 'boolean',
            'published_at' => 'datetime',
            'views_count' => 'integer',
            'reading_time' => 'integer',
        ];
    }

    /**
     * Get all images attached to this news post.
     */
    public function images(): HasMany
    {
        return $this->hasMany(NewsImage::class, 'news_id')->orderBy('order', 'asc');
    }

    /**
     * Get the user who authored this news post.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the coordinator who verified and published this news post.
     */
    public function verifikator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verifikator_id');
    }

    /**
     * Get the category that this news post belongs to.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the tags associated with the news post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tag');
    }
}
