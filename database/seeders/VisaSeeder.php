<?php

namespace Database\Seeders;

use App\Models\Admin\Visa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visa::whereNotNull('id')->delete();

        $data = [
            [
                'name' => 'Tourist Visa',
                'slug' => Str::slug('Tourist Visa'),
                'excerpt' => 'Visit new places and discover the world with a Tourist Visa! We handle your application with ease, ensuring a smooth and stress-free process to help you explore your dream destinations.',
            ],
            [
                'name' => 'Commercial Visa',
                'slug' => Str::slug('Commercial Visa'),
                'excerpt' => 'Expand your business horizons with a Commercial Visa. Whether for meetings, trade shows, or negotiations, we streamline your visa process so you can focus on your next big deal.',
            ],
            [
                'name' => 'Business Visa',
                'slug' => Str::slug('Business Visa'),
                'excerpt' => 'Take your business global with a Business Visa! From application to approval, we manage every step to get you where opportunities await.',
            ],
            [
                'name' => 'Student Visa',
                'slug' => Str::slug('Student Visa'),
                'excerpt' => "Pursue your academic dreams abroad with a Student Visa! Our expert team simplifies the application process, ensuring you're ready to study in the country of your choice.",
            ],
            [
                'name' => 'Working Visa',
                'slug' => Str::slug('Working Visa'),
                'excerpt' => 'Secure your future with a Working Visa! Whether starting a new job or advancing your career, we help you navigate the requirements and get your work permit fast.',
            ],
            [
                'name' => 'Dependent Visa',
                'slug' => Str::slug('Dependent Visa'),
                'excerpt' => 'Bring your loved ones closer with a Dependent Visa. We handle the details so your family can join you abroad with peace of mind.',
            ],
        ];

        Visa::insert($data);
    }
}
