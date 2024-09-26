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

    protected $appends = ['name', 'marks', 'description', 'publish_type'];

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
    public function getNameAttribute()
    {
        return $this->course->name.' Mock Test - '
       .sprintf('%04d', $this->id);
    }

    public function getDescriptionAttribute()
    {
        return $this->data['description'] ?? null;
    }

    public function getPublishTypeAttribute()
    {
        return $this->data['publish_type'] ?? null;
    }

    public function getMarksAttribute()
    {
        $marks = $this->data['marks'] ?? null;

        return ! is_null($marks)
        ? (collect($marks)->map(function ($mark, $candidate_id) {
            $mark['candidate'] = \App\Models\Admin\Candidate::find($candidate_id)->toArray();

            return $mark;
        })->sortByDesc(fn ($mark) => $mark['overall'] ?? 0)->toArray())
        : null;
    }

    // Helpers
    public function attendancePercentage()
    {
        $percentage = $this->candidates()->count() > 0 ? number_format(($this->candidates()->where('attended', true)->count() / $this->candidates()->count()) * 100, 2) : 0;

        return $percentage <= 100 ? $percentage : 100;
    }
}
