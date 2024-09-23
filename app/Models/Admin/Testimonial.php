<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemaOrg\Schema;

class Testimonial extends Model implements HasMedia
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
        Cache::has('testimonials') ? Cache::forget('testimonials') : '';
        Cache::has('website_testimonials') ? Cache::forget('website_testimonials') : '';
    }

    // Logs
    protected static $logName = 'testimonial';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    // Relationships
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

    // Scope
    public function scopeApproved($qry)
    {
        return $qry->where('approved', 1);
    }

    public function scopePosition($qry)
    {
        return $qry->orderBy('position');
    }

    // Accessors
    public function getImageAttribute()
    {
        return ! is_null($this->getFirstMedia('image')) ? $this->getFirstMediaUrl('image') : logoBanner();
    }

    // Relationship

    public function searchSchema()
    {
        $schema = Schema::review()
            ->author(
                Schema::person()->name($this->name)
            )
            ->reviewBody($this->message)
            ->reviewRating(
                Schema::rating()
                    ->ratingValue($this->rating)
                    ->bestRating(5)
            );

        return $schema;
    }

    // Helper
    public function info()
    {
        $country = $this->country->name ?? null;
        $course = $this->course->name ?? null;
        $visa = $this->visa->name ?? null;

        return implode(' - ', [$country, $course, $visa]);
    }
}
