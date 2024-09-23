<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Visa extends Model implements HasMedia
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
        Cache::has('visas') ? Cache::forget('visas') : '';
    }

    // Logs
    protected static $logName = 'visa';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['thumbnail', 'icon', 'counters', 'downloads'];

    public function getCountersAttribute()
    {
        return $this->data['counters'] ?? null;
    }

    public function getThumbnailAttribute()
    {
        return ! is_null($this->getFirstMedia('thumbnail')) ? $this->getFirstMediaUrl('thumbnail') : null;
    }

    public function getDownloadsAttribute()
    {
        return $this->getMedia('downloads');
    }

    public function getIconAttribute()
    {
        return ! is_null($this->getFirstMedia('icon')) ? $this->getFirstMediaUrl('icon') : asset('website/assets/img/icon/sv_0'.rand(1, 5).'.svg');
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
