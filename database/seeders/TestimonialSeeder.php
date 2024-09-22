<?php

namespace Database\Seeders;

use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\Testimonial;
use App\Models\Admin\Visa;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::whereNotNull('id')->delete();
        $i = 0;
        $countries = Country::active()->pluck('id')->toArray();
        $courses = Course::active()->pluck('id')->toArray();
        $visas = Visa::active()->pluck('id')->toArray();
        while ($i < 100) {
            Testimonial::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'message' => fake()->sentence(rand(300, 500)),
                'approved' => true,
                'rating' => rand(3, 5),
                'country_id' => $countries[array_rand($countries)],
                'course_id' => $courses[array_rand($courses)],
                'visa_id' => $visas[array_rand($visas)],
            ]);
            $i++;
        }
    }
}
