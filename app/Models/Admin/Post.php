<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemaOrg\Article;
use Spatie\SchemaOrg\Schema;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia, LogsActivity;

    protected $guarded = [];

    // Forget cache on updating or saving and deleting
    public static function boot()
    {
        parent::boot();

        static::saving(function () {
            self::cacheKey();
        });

        static::deleting(function () {
            self::cacheKey();
        });
    }

    // Cache Keys
    private static function cacheKey()
    {
        Cache::has('posts') ? Cache::forget('posts') : '';
        Cache::has('home_posts') ? Cache::forget('home_posts') : '';

    }

    // Logs
    protected static $logName = 'post';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // Casts
    protected $casts = [
        'videos' => 'array',
    ];

    protected $appends = ['image', 'optimized_title'];

    // Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Accessors
    public function getImageAttribute()
    {
        return ! is_null($this->getFirstMedia('image')) ? $this->getFirstMediaUrl('image') : logoBanner();
    }

    public function getOptimizedTitleAttribute()
    {
        return Str::limit($this->name, 120, '...');
    }

    public function getOptimizedExcerptAttribute()
    {
        return Str::limit($this->excerpt, 255, '...');
    }

    public function getStatusAttribute($attribute)
    {
        return in_array($attribute ?? null, [0, 1, 2, 3])
            ? [
                0 => 'Not Approved',
                1 => 'Published',
                2 => 'Pending',
                3 => 'Draft',
            ][$attribute] : null;
    }

    // Scopes
    public function scopePosition($qry)
    {
        return $qry->where('position', 1);
    }

    // Scopes
    public function scopeActive($qry)
    {
        return $qry->where('active', 1);
    }

    public function scopeNotApproved($qry)
    {
        return $qry->where('status', 0);
    }

    public function scopePublished($qry)
    {
        return $qry->where('status', 1);
    }

    public function scopePending($qry)
    {
        return $qry->where('status', 2);
    }

    public function scopeDraft($qry)
    {
        return $qry->where('status', 3);
    }

    public function scopePriority($qry)
    {
        return $qry->orderBy('position');
    }

    public function scopeFeatured($qry)
    {
        return $qry->where('featured', 1);
    }

    // Helper Functions
    public function getStatusColor()
    {
        return in_array($this->getRawOriginal('status') ?? null, [0, 1, 2, 3]) ?
            [
                0 => 'danger',
                1 => 'success',
                2 => 'info',
                3 => 'warning',
            ][$this->getRawOriginal('status')] : null;
    }

    public function searchSchema()
    {
        $schema = Schema::article()
            ->name($this->meta_name ?? $this->name)
            ->description($this->meta_description ?? $this->excerpt)
            ->if(! is_null($this->getFirstMedia('image')), function (Article $schema) {
                $schema->image($this->getFirstMediaUrl('image'));
            })
            ->keywords($this->meta_keywords);

        return $schema;
    }
}
