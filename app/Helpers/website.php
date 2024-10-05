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
use App\Models\Admin\Post;
use App\Models\Admin\Service;
use App\Models\Admin\Step;
use App\Models\Admin\Test;
use App\Models\Admin\Testimonial;
use App\Models\Admin\University;
use App\Models\Admin\Visa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Pratiksh\Adminetic\Models\Admin\Data;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\OpeningHours\OpeningHours;
use Spatie\SchemaOrg\Schema;

if (! function_exists('website')) {
    function website($keyword)
    {
        return setting('website_'.str_replace('.', '_', $keyword), config('consultancy.website.'.$keyword, null));
    }
}

if (! function_exists('website_schema')) {
    function website_schema()
    {
        $todays_business_hour = todays_business_hour();
        $schema = Schema::localBusiness()
            ->name(website('name') ?? title())
            ->description(website('short_description') ?? description())
            ->url(route('website.home'))
            ->telephone(website('phone'))
            ->email(website('email'))
            ->address(
                Schema::postalAddress()
                    ->streetAddress(website('address'))
                    ->addressLocality('Kathmandu')
                    ->addressRegion('KTM')
                    ->postalCode('44800')
                    ->addressCountry('NP')
            )
            ->sameAs(website('social_media.facebook'))
            ->openingHoursSpecification(
                Schema::openingHoursSpecification()
                    ->dayOfWeek(array_keys(business_hour()))
                    ->opens($todays_business_hour ? $todays_business_hour->start()->format('H:i') : '09:00')
                    ->closes($todays_business_hour ? $todays_business_hour->end()->format('H:i') : '17:00')
            )
            ->contactPoint(
                Schema::contactPoint()
                    ->telephone(website('phone'))
                    ->contactType('Customer Service')
                    ->areaServed('Nepal')
                    ->availableLanguage('Nepali')
            );

        if (services()->count() > 0) {
            foreach (services() as $service) {
                $schema->service(
                    Schema::service()
                        ->name($service->name)
                        ->description($service->excerpt)
                        ->provider(Schema::organization()->name($service->name))
                );
            }
        }

        $posts = Cache::has('website_posts') ? Cache::get('website_posts') : Cache::rememberForever('website_posts', function () {
            return Post::with('author')->published()->position()->get();
        });

        if ($posts->count() > 0) {
            foreach ($posts as $post) {
                $schema->headline($post->name)
                    ->author($post->author->name)
                    ->datePublished($post->created_at->format('Y-m-d'))
                    ->description($post->excerpt)
                    ->url(route('website.post', ['post' => $post->slug]))
                    ->articleBody($post->description)
                    ->image($post->getFirstMediaUrl('image'));
            }
        }

        if (courses()->count() > 0) {
            foreach (courses() as $course) {
                $schema->course(
                    Schema::course()
                        ->name($course->name)
                        ->description($course->excerpt)
                        ->provider(Schema::organization()->name($course->name))
                );
            }
        }

        if (testimonials()->count() > 0) {
            foreach (testimonials() as $testimonial) {
                $schema->review(
                    $testimonial->searchSchema(),
                );
            }
        }

        return $schema;
    }
}

// DB Data
if (! function_exists('tests')) {
    function tests()
    {
        return Cache::has('website_tests')
        ? Cache::get('website_tests')
        : Cache::rememberForever('website_tests', function () {
            return Test::notExpired()->latest()->get();
        });
    }
}
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

        return $business_hours->currentOpenRange(Carbon::now());
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
