<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
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
        Cache::has('sliders') ? Cache::forget('sliders') : '';
        Cache::has('home_sliders') ? Cache::forget('home_sliders') : '';
    }

    // Logs
    protected static $logName = 'slider';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // Accessors
    public function getImageAttribute()
    {
        return ! is_null($this->getFirstMedia('image')) ? $this->getFirstMediaUrl('image') : asset('adminetic/static/logo_banner.jpg');
    }

    public function scopeActive($qry)
    {
        return $qry->where('active', 1);
    }

    public function scopePosition($query)
    {
        return $query->orderBy('position');
    }
}
