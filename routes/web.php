<?php

use App\Mail\Test\ParticipationMail;
use App\Models\Admin\Test;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::admineticAuth();

Route::admin();
Route::website();

Route::get('/participation-mail', function () {
    $test = Test::has('candidates')->first();
    $candidate = $test->candidates()->inRandomOrder()->first();

    return new ParticipationMail($test, $candidate);
});
