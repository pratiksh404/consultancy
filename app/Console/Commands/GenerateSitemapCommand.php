<?php

namespace App\Console\Commands;

use App\Models\Admin\Activity;
use App\Models\Admin\Gallery;
use App\Models\Admin\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapCommand extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap.xml file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add static URLs
        $staticUrls = [
            '/',
            '/activities',
            '/posts',
            '/galleries',
            '/menu',
            '/about-us',
            '/contact-us',
            '/cookie-policy',
        ];

        foreach ($staticUrls as $url) {
            $sitemap->add(Url::create($url));
        }

        // Add dynamic URLs for activities
        $activities = Cache::has('home_activities')
        ? Cache::get('home_activities')
        : Cache::rememberForever('home_activities', function () {
            return Activity::active()->position()->get();
        });
        foreach ($activities as $activity) {
            $sitemap->add(Url::create("/activity/{$activity->slug}")
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }

        // Add dynamic URLs for posts
        $posts = Cache::has('home_posts')
        ? Cache::get('home_posts')
        : Cache::rememberForever('home_posts', function () {
            return Post::active()->published()->latest()->take(3)->get();
        });
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/post/{$post->slug}")
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }

        // Add dynamic URLs for galleries
        $galleries = Gallery::all();
        foreach ($galleries as $gallery) {
            $sitemap->add(Url::create("/gallery/{$gallery->slug}")
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }

        // Add dynamic URLs for pages
        $pages = pages();
        foreach ($pages as $page) {
            $sitemap->add(Url::create("/page/{$page->slug}")
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('sitemap.xml generated successfully.');

    }
}
