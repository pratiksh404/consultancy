<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
            '/visas',
            '/posts',
            '/countries',
            '/teams',
            '/testimonials',
            'courses',
            'services',
            '/about-us',
            '/contact-us',
        ];

        foreach ($staticUrls as $url) {
            $sitemap->add(Url::create($url));
        }

        // Add dynamic URLs for activities

        if (pages()->count() > 0) {
            foreach (pages() as $page) {
                $sitemap->add(Url::create("/page/{$page->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
            }
        }

        if (visas()->count() > 0) {
            foreach (visas() as $visa) {
                $sitemap->add(Url::create("/visa/{$visa->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
            }
        }

        if (countries()->count() > 0) {
            foreach (countries() as $country) {
                $sitemap->add(Url::create("/country/{$country->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
            }
        }

        if (services()->count() > 0) {
            foreach (services() as $service) {
                $sitemap->add(Url::create("/service/{$service->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
            }
        }

        if (courses()->count() > 0) {
            foreach (courses() as $course) {
                $sitemap->add(Url::create("/course/{$course->slug}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('sitemap.xml generated successfully.');

    }
}
