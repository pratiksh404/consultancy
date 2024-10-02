<?php

namespace App\Models\Admin;

use App\Mail\Test\ConfirmationMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Candidate extends Model
{
    use LogsActivity;

    // Candidate Types
    const TEST = 1;

    const COURSE = 2;

    const EVENT = 3;

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

    public function verify()
    {
        $this->update([
            'verified' => true,
        ]);
        $receiver =
        (object) [
            'email' => $this->email,
            'name' => $this->name,
        ];
        if ($this->candidateable_type == 'App\Models\Admin\Test') {
            // System Notification
            generalNotify([
                'title' => $this->candidateable->name.' Confirmation Alert',
                'subject' => 'Candidate confirmation verified for '.$this->candidateable->name,
                'message' => 'Candidate '.$this->name.'('.$this->code.') confirmation verified for '.$this->candidateable->name,
            ]);

            // Mail To Candidate
            if ($candidate->candidateable->confirmation_email_status ?? true) {
                Mail::to($receiver)->send(new ConfirmationMail($this->candidateable, $this));
            }
        }
    }
}
