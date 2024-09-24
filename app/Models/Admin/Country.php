<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model implements HasMedia
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
        Cache::has('countries') ? Cache::forget('countries') : '';
        Cache::has('website_countries') ? Cache::forget('website_countries') : '';
    }

    // Logs
    protected static $logName = 'country';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $appends = ['flag', 'description', 'counters', 'downloads'];

    protected $casts = [
        'data' => 'array',
    ];

    // Accessors
    public function getDownloadsAttribute()
    {
        return $this->getMedia('downloads');
    }

    public function getCountersAttribute()
    {
        return $this->data['counters'] ?? null;
    }

    public function getFlagAttribute()
    {
        return $this->getMedia('image')->count() > 0 ? $this->getFirstMediaUrl('image') : asset('adminetic/static/countries.png');
    }

    public function getDescriptionAttribute()
    {
        return $this->data['description'] ?? null;
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

    // Relationships
    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
