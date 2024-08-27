<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artisan::call('adminetic:dummy');

        Artisan::call('make:permission Association --all --onlyFlags');
        Artisan::call('make:permission category --all --onlyFlags');
        Artisan::call('make:permission Counter --all --onlyFlags');
        Artisan::call('make:permission Country --all --onlyFlags');
        Artisan::call('make:permission Course --all --onlyFlags');
        Artisan::call('make:permission Facility --all --onlyFlags');
        Artisan::call('make:permission Faq --all --onlyFlags');
        Artisan::call('make:permission Gallery --all --onlyFlags');
        Artisan::call('make:permission Page --all --onlyFlags');
        Artisan::call('make:permission Partner --all --onlyFlags');
        Artisan::call('make:permission Popup --all --onlyFlags');
        Artisan::call('make:permission Post --all --onlyFlags');
        Artisan::call('make:permission Service --all --onlyFlags');
        Artisan::call('make:permission Slider --all --onlyFlags');
        Artisan::call('make:permission Testimonial --all --onlyFlags');
        Artisan::call('make:permission Visa --all --onlyFlags');
    }
}
