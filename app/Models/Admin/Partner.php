<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
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
        Cache::has('partners') ? Cache::forget('partners') : '';
        Cache::has('website_partners') ? Cache::forget('website_partners') : '';
    }

    // Logs
    protected static $logName = 'partner';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // Casts
    protected $casts = [
        'data' => 'array',
    ];

    // Appends
    protected $appends = ['logo'];

    // Accessors
    public function getLogoAttribute()
    {
        return ! is_null($this->getFirstMedia('logo')) ? $this->getFirstMediaUrl('logo') : asset('adminetic/static/logo_banner.jpg');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopePosition($query)
    {
        return $query->orderBy('position');
    }
}
