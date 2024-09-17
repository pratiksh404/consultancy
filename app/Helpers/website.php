<?php

use App\Models\Admin\Page;
use App\Models\Admin\Step;
use App\Models\Admin\University;
use App\Models\Admin\Visa;
use Illuminate\Support\Facades\Cache;
use Pratiksh\Adminetic\Models\Admin\Data;

if (! function_exists('website')) {
    function website($keyword)
    {
        return setting('website_'.str_replace('.', '_', $keyword), config('consultancy.website.'.$keyword, null));
    }
}

// Breadcrumbs

if (! function_exists('breadcrumb')) {
    function breadcrumb($name, array $menu = [])
    {
        $default_menu = collect(config('consultancy.breadcrumb.'.trim($name).'.default', [
            [
                'name' => 'Home',
                'route' => 'website.home',
            ],
        ]))->map(function ($menu) {
            return [
                'name' => $menu['name'],
                'route' => route($menu['route']),
            ];
        });

        return array_merge($default_menu->toArray(), $menu);
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
        if (! is_null($banner['image'])) {
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
