<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Category::where('model', 'Post')->delete();
        Post::whereNotNull('id')->delete();

        $post_categories = [
            [
                'name' => 'News',
                'slug' => 'news',
                'excerpt' => null,
                'model' => 'Post',
                'meta_name' => 'News',
                'meta_description' => title().' News',
            ],
            [
                'name' => 'Event',
                'slug' => 'event',
                'excerpt' => null,
                'model' => 'Post',
                'meta_name' => 'Event',
                'meta_description' => title().' Event',
            ],
            [
                'name' => 'Restaurant',
                'slug' => 'restaurant',
                'excerpt' => null,
                'model' => 'Post',
                'meta_name' => 'Restaurant',
                'meta_description' => title().' Restaurant',
            ],
        ];
        DB::table('categories')->insert(
            $post_categories
        );

        $categories = Category::where('model', 'Post')->get();
        foreach ($categories as $category) {
            $i = 0;
            while ($i < 5) {
                $name = $faker->name;
                Post::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'excerpt' => $faker->sentence(),
                    'user_id' => User::first()->id,
                    'approved_by' => User::first()->id,
                    'category_id' => $category->id,
                    'description' => $faker->paragraph(),
                    'meta_name' => $name,
                ]);
                $i++;
            }
        }
    }
}
