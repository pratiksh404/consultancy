<?php

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
Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /login/\n";
    $content .= "Disallow: /register/\n";
    $content .= 'Sitemap: '.url('/sitemap.xml')."\n";

    return response($content, 200, [
        'Content-Type' => 'text/plain',
    ]);
});
