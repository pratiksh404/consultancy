<?php

use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\Test;
use App\Models\Admin\Visa;
use Illuminate\Support\Facades\Cache;

if (! function_exists('courses')) {
    function courses()
    {
        return Cache::has('website_courses')
        ? Cache::get('website_courses')
        : Cache::rememberForever('website_courses', function () {
            return Course::active()->position()->get();
        });
    }
}

if (! function_exists('countries')) {
    function countries()
    {
        return Cache::has('website_countries')
        ? Cache::get('website_countries')
        : Cache::rememberForever('website_countries', function () {
            return Country::active()->position()->get();
        });
    }
}

if (! function_exists('visas')) {
    function visas()
    {
        return Cache::has('website_visas')
        ? Cache::get('website_visas')
        : Cache::rememberForever('website_visas', function () {
            return Visa::active()->position()->get();
        });
    }
}

if (! function_exists('tests')) {
    function tests()
    {
        return Cache::has('website_tests')
        ? Cache::get('website_tests')
        : Cache::rememberForever('website_tests', function () {
            return Test::published()->notExpired()->get();
        });
    }
}

if (! function_exists('getCEFRLevel')) {
    function getCEFRLevel($bandScore)
    {
        if ($bandScore >= 8.5) {
            return 'C2';
        } elseif ($bandScore >= 7.0) {
            return 'C1';
        } elseif ($bandScore >= 5.5) {
            return 'B2';
        } elseif ($bandScore >= 4.0) {
            return 'B1';
        } elseif ($bandScore >= 2.5) {
            return 'A2';
        } elseif ($bandScore >= 1.0) {
            return 'A1';
        }
    }
}
