<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemaOrg\Schema;

class Gallery extends Model implements HasMedia
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
        Cache::has('galleries') ? Cache::forget('galleries') : '';
        Cache::has('home_gallery_images') ? Cache::forget('home_gallery_images') : '';
    }

    // Logs
    protected static $logName = 'gallery';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'videos' => 'array',
    ];

    protected $appends = ['images', 'thumbnail'];

    // Accessors
    public function getImagesAttribute()
    {
        return ! is_null($this->getMedia('images')) ? $this->getMedia('images') : null;
    }

    public function getThumbnailAttribute()
    {
        return ! is_null($this->getMedia('images')) ? $this->getMedia('images')->first()->getUrl() : logoBanner();
    }

    // Relationships
    public function searchSchema()
    {
        $gallerySchema = Schema::imageGallery()
            ->name($this->name)
            ->description($this->description);

        foreach ($this->images as $image) {
            $gallerySchema->hasPart(
                Schema::imageObject()
                    ->contentUrl($image->getUrl())
            );
        }

        return $gallerySchema;
    }
}
