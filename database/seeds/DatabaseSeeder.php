<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $categories=[
            ['name'=>'Features', 'slug'=>'features'],
            ['name'=>'Food', 'slug'=>'food'],
            ['name'=>'Travel', 'slug'=>'travel'],
            ['name'=>'Recipe', 'slug'=>'recipe'],
            ['name'=>'Bread', 'slug'=>'bread'],
            ['name'=>'Breakfast', 'slug'=>'breakfast'],
            ['name'=>'Meat', 'slug'=>'meat'],
            ['name'=>'Fastfood', 'slug'=>'fastfood'],
            ['name'=>'Salad', 'slug'=>'features'],
            ['name'=>'Soup', 'slug'=>'soup']
        ];

        DB::table('categories')->insert($categories);

    }
}
