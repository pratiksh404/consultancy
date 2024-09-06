<?php

namespace Database\Seeders;

use App\Models\Admin\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::whereNotNull('id')->delete();

        $data = ['USA', 'UK', 'Australia', 'Canada', 'New Zealand'];

        foreach ($data as $item) {
            Country::create([
                'name' => $item,
                'slug' => Str::slug($item),
            ]);
        }

    }
}
