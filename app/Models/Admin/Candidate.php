<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Candidate extends Model
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
        Cache::has('candidates') ? Cache::forget('candidates') : '';
    }

    // Logs
    protected static $logName = 'candidate';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $appends = ['name'];

    // Relationships
    public function candidateable()
    {
        return $this->morphTo();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    // Accessors
    public function getNameAttribute()
    {
        $first_name = $this->first_name;
        $middle_name = $this->middle_name;
        $last_name = $this->last_name;

        return $first_name.(! is_null($middle_name) ? ' '.$middle_name : '').(! is_null($last_name) ? ' '.$last_name : '');
    }
}
