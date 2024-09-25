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

    protected $appends = ['thumbnail', 'sections', 'downloads'];

    public function getThumbnailAttribute()
    {
        $image = ! is_null($this->getFirstMedia('thumbnail')) ? $this->getFirstMediaUrl('thumbnail') : null;
        if (is_null($image)) {
            // If File Exists
            $file = 'adminetic/static/courses/'.strtolower(str_replace(' ', '-', $this->name)).'.jpg';
            if (file_exists(public_path($file))) {
                return asset($file);
            }
        }

        return $image;
    }

    public function getSectionsAttribute()
    {
        return $this->data['sections'] ?? null;
    }

    public function getDownloadsAttribute()
    {
        return $this->getMedia('downloads');
    }

    // Relationships
    public function tests()
    {
        return $this->hasMany(Test::class);
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

    // Helper
    public function report_card_path()
    {
        $path = 'components.admin.test.result.'.strtolower(str_replace(' ', '-', $this->name));

        return view()->exists($path) ? $path : null;
    }
}
