<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class University extends Model implements HasMedia
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
        Cache::has('universities') ? Cache::forget('universities') : '';
        Cache::has('website_universities') ? Cache::forget('website_universities') : '';
    }

    // Logs
    protected static $logName = 'university';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['logo'];

    // Accessors
    public function getLogoAttribute()
    {
        return $this->getMedia('logo')->count() > 0 ? $this->getFirstMediaUrl('logo') : null;
    }

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Scopes
    public function scopeActive($qry)
    {
        return $qry->where('active', 1);
    }

    public function scopePosition($qry)
    {
        return $qry->orderBy('position');
    }
}
