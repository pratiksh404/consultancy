<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Counter extends Model implements HasMedia
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
        Cache::has('counters') ? Cache::forget('counters') : '';
    }

    // Logs
    protected static $logName = 'counter';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['suffix', 'icon_image'];

    // Accessor
    public function getSuffixAttribute()
    {
        return $this->data['suffix'] ?? null;
    }

    public function getTypeAttribute($attribute)
    {
        return in_array($attribute ?? null, [1, 2]) ?
            [
                1 => 'Number',
                2 => 'Percentage',
            ][$attribute] : null;
    }

    // Accessors
    public function getIconImageAttribute()
    {
        return ! is_null($this->getFirstMedia('icon_image')) ? $this->getFirstMediaUrl('icon_image') : asset('website/assets/img/icon/c_0'.rand(1, 4).'.svg');
    }

    // Scope
    public function scopePosition($qry)
    {
        return $qry->orderBy('position');
    }
}
