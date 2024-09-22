<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {

        parent::boot();

        static::created(function ($model) {
            generalNotify([
                'title' => 'New Inquiry Alert',
                'subject' => $model->name.' has issued an inquiry on '.$model->created_at->toDateString(),
                'message' => $model->message,
            ]);
        });
    }
}
