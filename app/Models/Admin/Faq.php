<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\SchemaOrg\Schema;

class Faq extends Model
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
        Cache::has('faqs') ? Cache::forget('faqs') : '';
        Cache::has('home_faqs') ? Cache::forget('home_faqs') : '';
    }

    // Logs
    protected static $logName = 'faq';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function searchSchema()
    {
        $schema = Schema::question()
            ->name($this->question)
            ->acceptedAnswer(
                Schema::answer()
                    ->text($this->answer)
            );

        return $schema;
    }
}
