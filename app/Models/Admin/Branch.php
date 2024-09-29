<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Branch extends Model
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
        Cache::has('branches') ? Cache::forget('branches') : '';
    }

    // Logs
    protected static $logName = 'branch';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['emails', 'phones', 'map'];

    public function getPhonesAttribute()
    {
        return $this->data['phones'] ?? [];
    }

    public function getEmailsAttribute()
    {
        return $this->data['emails'] ?? [];
    }

    public function getMapAttribute()
    {
        return $this->data['map'] ?? null;
    }
}
