<?php

namespace App\Mixins;

use Illuminate\Support\Facades\Route;

class AdminRouteMixin
{
    public function admin()
    {
        return function () {
            Route::group(
                [
                    'prefix' => config('adminetic.prefix', 'admin'),
                    'middleware' => config('adminetic.middleware'),
                    'as' => 'admin.',
                ],
                function () {
                    Route::resource('country', \App\Http\Controllers\Admin\CountryController::class);
                    Route::resource('course', \App\Http\Controllers\Admin\CourseController::class);
                    Route::resource('visa', \App\Http\Controllers\Admin\VisaController::class);
                    Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
                    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
                    Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
                    Route::resource('facility', \App\Http\Controllers\Admin\FacilityController::class);
                    Route::resource('faq', \App\Http\Controllers\Admin\FaqController::class);
                    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
                    Route::resource('popup', \App\Http\Controllers\Admin\PopupController::class);
                    Route::resource('page', \App\Http\Controllers\Admin\PageController::class);
                    Route::resource('testimonial', \App\Http\Controllers\Admin\TestimonialController::class);
                    Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
                    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);
                    Route::resource('partner', \App\Http\Controllers\Admin\PartnerController::class);
                    Route::resource('association', \App\Http\Controllers\Admin\AssociationController::class);
                    Route::resource('counter', \App\Http\Controllers\Admin\CounterController::class);
                    Route::resource('test', \App\Http\Controllers\Admin\TestController::class);
                    Route::resource('candidate', \App\Http\Controllers\Admin\CandidateController::class);
                    Route::resource('university', \App\Http\Controllers\Admin\UniversityController::class);
                    Route::resource('step', \App\Http\Controllers\Admin\StepController::class);
                    // Single Pages
                    Route::view('contact-management', 'admin.widgets.contact_management')->name('widgets.contact_management');
                    Route::view('banner-management', 'admin.widgets.banner_management')->name('widgets.banner_management');
                });
        };
    }
}
