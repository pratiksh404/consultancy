<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use InteractsWithMedia,LogsActivity;

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
        Cache::has('courses') ? Cache::forget('courses') : '';
        Cache::has('website_courses') ? Cache::forget('website_courses') : '';
    }

    // Logs
    protected static $logName = 'course';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['thumbnail', 'sections'];

    public function getThumbnailAttribute()
    {
        return ! is_null($this->getFirstMedia('thumbnail')) ? $this->getFirstMediaUrl('thumbnail') : null;
    }

    public function getSectionsAttribute()
    {
        return $this->data['sections'] ?? null;
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopePosition($query)
    {
        return $query->orderBy('position');
    }
}
