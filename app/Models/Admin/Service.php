<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\SchemaOrg\Schema;

class Service extends Model implements HasMedia
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
        Cache::has('services') ? Cache::forget('services') : '';
        Cache::has('home_services') ? Cache::forget('home_services') : '';
    }

    // Logs
    protected static $logName = 'service';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $casts = [
        'data' => 'array',
    ];

    protected $appends = ['image', 'icon_image', 'downloads'];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getDownloadsAttribute()
    {
        return $this->getMedia('downloads');
    }

    public function getImageAttribute()
    {
        return ! is_null($this->getFirstMedia('image')) ? $this->getFirstMediaUrl('image') : logoBanner();
    }

    public function getIconImageAttribute()
    {
        return ! is_null($this->getFirstMedia('icon_image')) ? $this->getFirstMediaUrl('icon_image') : ($this->data['icon_image'] ?? asset('website/assets/img/icon/s_icon01.svg'));
    }

    // Scopes
    public function scopePosition($qry)
    {
        return $qry->orderBy('position');
    }

    public function scopeActive($qry)
    {
        return $qry->where('active', 1);
    }

    public function scopeFeatured($qry)
    {
        return $qry->where('featured', 1);
    }

    public function searchSchema()
    {
        $schema = Schema::service()
            ->name($this->meta_name ?? $this->name)
            ->description($this->meta_description ?? $this->excerpt)
            ->url(route('website.service', ['service' => $this->slug]))
            ->keywords($this->meta_keywords);

        return $schema->toScript();
    }
}
