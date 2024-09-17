<?php

namespace Database\Seeders;

use App\Models\Admin\Step;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::whereNotNull('id')->delete();
        $steps = [
            [
                'name' => 'Choose Your Visa Type',
                'excerpt' => 'Determine the Visa type for your travel purpose.',
            ],
            [
                'name' => 'Contact Our Branches',
                'excerpt' => 'Start your process by applying to our branches',
            ],
            [
                'name' => 'Process Counselling',
                'excerpt' => 'Get your visa processed by our counsellors',
            ],
            [
                'name' => 'Get Your Visa',
                'excerpt' => 'Travel with confidence',
            ],
        ];

        Step::insert($steps);
    }
}
