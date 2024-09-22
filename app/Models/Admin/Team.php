<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
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
        Cache::has('teams') ? Cache::forget('teams') : '';
    }

    // Logs
    protected static $logName = 'team';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    protected $appends = ['image', 'social_medias', 'experience'];

    protected $casts = [
        'data' => 'array',
    ];

    public function getExperienceAttribute()
    {
        return $this->data['experience'] ?? null;
    }

    public function getImageAttribute()
    {
        return ! is_null($this->getFirstMedia('image')) ? $this->getFirstMediaUrl('image') : asset('adminetic/static/team.png');
    }

    public function getSocialMediasAttribute()
    {
        $social_medias = $this->data['social_media'] ?? null;
        if (! is_null($social_medias)) {
            return collect($social_medias)->filter(function ($social_media) {
                return ! is_null($social_media);
            })->toArray();
        }

        return null;
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
