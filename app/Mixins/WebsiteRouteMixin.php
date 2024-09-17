<?php

namespace App\Mixins;

use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

class WebsiteRouteMixin
{
    public function website()
    {
        return function () {
            Route::group(
                [
                    'as' => 'website.',
                ],
                function () {
                    Route::get('/', [WebsiteController::class, 'home'])->name('home');
                });
        };
    }
}
