<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
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
        Cache::has('pages') ? Cache::forget('pages') : '';
        Cache::has('website_pages') ? Cache::forget('website_pages') : '';
    }

    // Logs
    protected static $logName = 'page';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['thumbnail', 'downloads', 'parent_page'];

    // Accessors
    public function getParentPageAttribute()
    {
        $id = $this->data['parent_page'] ?? null;

        return Page::find($id);
    }

    public function getDownloadsAttribute()
    {
        return $this->getMedia('downloads');
    }

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Scopes
    public function scopePosition($qry)
    {
        return $qry->orderBy('position');
    }

    public function scopeActive($qry)
    {
        return $qry->where('active', 1);
    }

    public function scopeFeatured($qry)
    {
        return $qry->where('featured', 1);
    }

    public function getThumbnailAttribute()
    {
        return ! is_null($this->getFirstMedia('thumbnail')) ? $this->getFirstMediaUrl('thumbnail') : null;
    }

    // Helper Function
    public function subPages()
    {
        return Page::active()->position()->where('data->parent_page', $this->id)->get();
    }
}
