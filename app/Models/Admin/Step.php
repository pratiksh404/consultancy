<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Step extends Model
{
    use LogsActivity;

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
        Cache::has('steps') ? Cache::forget('steps') : '';
    }

    // Logs
    protected static $logName = 'step';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // Scope
    public function scopePosition($query)
    {
        return $query->orderBy('position');
    }
}
