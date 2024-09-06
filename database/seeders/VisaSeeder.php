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

        $data = ['Tourist Visa', 'Commercial Visa', 'Business Visa', 'Student Visa', 'Working Visa', 'Dependent Visa'];

        foreach ($data as $item) {
            Visa::create([
                'name' => $item,
                'slug' => Str::slug($item),
            ]);
        }
    }
}
