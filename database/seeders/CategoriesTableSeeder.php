<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'news',
                'name' => 'News',
                'excerpt' => NULL,
                'parent_id' => NULL,
                'root_parent_id' => NULL,
                'model' => 'Post',
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'meta_name' => 'News',
                'meta_description' => 'Adminetic News',
                'meta_keywords' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'event',
                'name' => 'Event',
                'excerpt' => NULL,
                'parent_id' => NULL,
                'root_parent_id' => NULL,
                'model' => 'Post',
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'meta_name' => 'Event',
                'meta_description' => 'Adminetic Event',
                'meta_keywords' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'restaurant',
                'name' => 'Restaurant',
                'excerpt' => NULL,
                'parent_id' => NULL,
                'root_parent_id' => NULL,
                'model' => 'Post',
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'meta_name' => 'Restaurant',
                'meta_description' => 'Adminetic Restaurant',
                'meta_keywords' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'resource',
                'name' => 'Resource',
                'excerpt' => NULL,
                'parent_id' => NULL,
                'root_parent_id' => NULL,
                'model' => 'Page',
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'meta_name' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-08 17:01:04',
                'updated_at' => '2024-10-08 17:01:04',
            ),
        ));
        
        
    }
}