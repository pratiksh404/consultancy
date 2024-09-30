<?php

use App\Models\Admin\Association;
use App\Models\Admin\Branch;
use App\Models\Admin\Counter;
use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\Faq;
use App\Models\Admin\Gallery;
use App\Models\Admin\Page;
use App\Models\Admin\Partner;
use App\Models\Admin\Popup;
use App\Models\Admin\Service;
use App\Models\Admin\Step;
use App\Models\Admin\Testimonial;
use App\Models\Admin\University;
use App\Models\Admin\Visa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Pratiksh\Adminetic\Models\Admin\Data;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\OpeningHours\OpeningHours;

if (! function_exists('website')) {
    function website($keyword)
    {
        return setting('website_'.str_replace('.', '_', $keyword), config('consultancy.website.'.$keyword, null));
    }
}

// DB Data
if (! function_exists('pages')) {
    function pages()
    {
        return Cache::has('website_pages')
        ? Cache::get('website_pages')
        : Cache::rememberForever('website_pages', function () {
            return Page::active()->position()->get();
        });
    }
}

if (! function_exists('multimedia')) {
    function multimedia($keyword, $default = null)
    {
        return config('consultancy.multimedia.'.$keyword, $default);
    }
}
if (! function_exists('website_configuration')) {
    function website_configuration($keyword, $default = null)
    {
        return setting('website_configuration_'.str_replace('.', '_', $keyword), config('consultancy.configuration.'.$keyword, $default));
    }
}

// Widgets
if (! function_exists('banner')) {
    function banner()
    {
        $banner = Cache::has('banner') ? Cache::get('banner') : website('banner');
        if (isset($banner['image'])) {
            // Check if image exists
            if (file_exists(public_path('storage/'.$banner['image']))) {
                $banner['image'] = asset('storage/'.$banner['image']);
            }
        } else {
            $banner['image'] = asset('website/assets/img/bg/hero_bg.jpg');
        }

        return json_decode(json_encode($banner), false);
    }
}

if (! function_exists('todays_business_hour')) {
    function todays_business_hour()
    {
        $business_hours = OpeningHours::create(business_hour());
        $todays_business_hours = $business_hours->currentOpenRange(Carbon::now());
    }
}

if (! function_exists('universities')) {
    function universities()
    {
        return Cache::has('website_universities') ? Cache::get('website_universities') : Cache::rememberForever('website_universities', function () {
            return University::active()->position()->get()->filter(function ($university) {
                return $university->logo;
            });
        });
    }
}

if (! function_exists('branches')) {
    function branches()
    {
        return Cache::has('website_branches') ? Cache::get('website_branches') : Cache::rememberForever('website_branches', function () {
            return Branch::active()->position()->get();
        });
    }
}

if (! function_exists('partners')) {

    function partners()
    {
        return Cache::has('website_partners') ? Cache::get('website_partners') : Cache::rememberForever('website_partners', function () {
            return Partner::active()->position()->get();
        });
    }
}
if (! function_exists('associations')) {

    function associations()
    {
        return Cache::has('website_associations') ? Cache::get('website_associations') : Cache::rememberForever('website_associations', function () {
            return Association::active()->position()->get();
        });
    }
}
if (! function_exists('gallery_images')) {

    function gallery_images()
    {
        return Cache::has('gallery_images')
        ? Cache::get('gallery_images')
        : Cache::rememberForever('gallery_images', function () {
            return Media::where('model_type', Gallery::class)->latest()->take(12)->get();
        });
    }
}

if (! function_exists('visas')) {
    function visas()
    {
        return Cache::has('website_visas') ? Cache::get('website_visas') : Cache::rememberForever('website_visas', function () {
            return Visa::active()->position()->get();
        });
    }
}
if (! function_exists('steps')) {
    function steps()
    {
        return Cache::has('steps') ? Cache::get('steps') : Cache::rememberForever('steps', function () {
            return Step::position()->get();
        });
    }
}
if (! function_exists('counters')) {
    function counters()
    {
        return Cache::has('counters') ? Cache::get('counters') : Cache::rememberForever('counters', function () {
            return Counter::position()->get();
        });
    }
}
if (! function_exists('countries')) {
    function countries()
    {
        return Cache::has('website_countries') ? Cache::get('website_countries') : Cache::rememberForever('website_countries', function () {
            return Country::with('universities')->active()->position()->get();
        });
    }
}
if (! function_exists('testimonials')) {
    function testimonials()
    {
        return Cache::has('website_testimonials') ? Cache::get('website_testimonials') : Cache::rememberForever('website_testimonials', function () {
            return Testimonial::approved()->position()->get();
        });
    }
}
if (! function_exists('faqs')) {
    function faqs()
    {
        return Cache::has('faqs') ? Cache::get('faqs') : Cache::rememberForever('faqs', function () {
            return Faq::position()->get();
        });
    }
}
if (! function_exists('services')) {
    function services()
    {
        return Cache::has('website_services') ? Cache::get('website_services') : Cache::rememberForever('website_services', function () {
            return Service::active()->position()->get();
        });
    }
}
if (! function_exists('courses')) {
    function courses()
    {
        return Cache::has('website_courses') ? Cache::get('website_courses') : Cache::rememberForever('website_courses', function () {
            return Course::active()->position()->get();
        });
    }
}
if (! function_exists('popups')) {
    function popups()
    {
        return Cache::has('website_popups') ? Cache::get('website_popups') : Cache::rememberForever('website_popups', function () {
            return Popup::active()->position()->get();
        });
    }
}

if (! function_exists('breadcrumb')) {
    function breadcrumb(array $menu = [])
    {
        $default_menu = collect([
            [
                'name' => 'Home',
                'route' => 'website.home',
            ],
        ])->map(function ($menu) {
            return [
                'name' => $menu['name'],
                'route' => isset($menu['route']) ? route($menu['route']) : null,
            ];
        });

        return array_merge($default_menu->toArray(), $menu);
    }
}
