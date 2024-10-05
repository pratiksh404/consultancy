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

                    // Post
                    Route::get('/posts', [WebsiteController::class, 'posts'])->name('posts');
                    Route::get('/post/{post:slug}', [WebsiteController::class, 'post'])->name('post');

                    // Visa
                    Route::get('/visas', [WebsiteController::class, 'visas'])->name('visas');
                    Route::get('/visa/{visa:slug}', [WebsiteController::class, 'visa'])->name('visa');

                    // Country
                    Route::get('/countries', [WebsiteController::class, 'countries'])->name('countries');
                    Route::get('/country/{country:slug}', [WebsiteController::class, 'country'])->name('country');

                    // Team
                    Route::get('/teams', [WebsiteController::class, 'teams'])->name('teams');
                    Route::get('/team/{team:slug}', [WebsiteController::class, 'team'])->name('team');

                    // Testimonial
                    Route::view('/testimonials', 'website.pages.others.testimonials')->name('testimonials');
                    Route::get('/testimonial/{testimonial}', [WebsiteController::class, 'testimonial'])->name('testimonial');

                    // Course
                    Route::view('/courses', 'website.pages.others.courses')->name('courses');
                    Route::get('/course/{course:slug}', [WebsiteController::class, 'course'])->name('course');

                    // Service
                    Route::view('/services', 'website.pages.service.index')->name('services');
                    Route::get('/services/{service:slug}', [WebsiteController::class, 'service'])->name('service');

                    // Single Pages
                    Route::get('/test/{test:code}', [WebsiteController::class, 'test'])->name('test');
                    Route::get('/about-us', [WebsiteController::class, 'about_us'])->name('about_us');
                    Route::view('/contact-us', 'website.pages.others.contact')->name('contact_us');
                    Route::get('/page/{page:slug}', [WebsiteController::class, 'page'])->name('page');

                    Route::get('/mock-test-result/{test:code}/{candidate:code}', [WebsiteController::class, 'result'])->name('test.result');

                    // Verification
                    Route::get('/mock-test-verify/{test:code}/{candidate:code}', [WebsiteController::class, 'verify'])->name('test.verify');
                });
        };
    }
}
