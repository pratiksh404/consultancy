<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SetupSeeder::class,
            CourseSeeder::class,
            VisaSeeder::class,
            StepSeeder::class,
            FaqSeeder::class,
            CountriesTableSeeder::class,
            ServicesTableSeeder::class,
            PagesTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);

    }
}
