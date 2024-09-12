<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Test extends Model
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
        Cache::has('tests') ? Cache::forget('tests') : '';
        Cache::has('website_tests') ? Cache::forget('website_tests') : '';
    }

    // Logs
    protected static $logName = 'test';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $appends = ['marks'];

    protected $casts = [
        'data' => 'array',
    ];

    // Relationships
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function candidates()
    {
        return $this->morphMany(Candidate::class, 'candidateable');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeNotExpired($query)
    {
        return $query->where('test_date', '>', now());
    }

    // Accessors
    public function getMarksAttribute()
    {
        return $this->data['marks'] ?? null;
    }
}
