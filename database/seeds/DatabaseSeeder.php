<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


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

        $faker=\Faker\Factory::create();

        $categories=[
            ['name'=>'Features', 'slug'=>'features'],
            ['name'=>'Food', 'slug'=>'food'],
            ['name'=>'Travel', 'slug'=>'travel'],
            ['name'=>'Recipe', 'slug'=>'recipe'],
            ['name'=>'Bread', 'slug'=>'bread'],
            ['name'=>'Breakfast', 'slug'=>'breakfast'],
            ['name'=>'Meat', 'slug'=>'meat'],
            ['name'=>'Fastfood', 'slug'=>'fastfood'],
            ['name'=>'Salad', 'slug'=>'salad'],
            ['name'=>'Soup', 'slug'=>'soup']
        ];

        DB::table('categories')->insert($categories);

        $users=[
            ['name' => 'Sara Jancks',
            'email' => 'sarach.jons@rolty.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            //'remember_token' => Str::random(10),
            ]
        ];

        DB::table('users')->insert($users);

        $user=\App\User::where('email','=','sarach.jons@rolty.com')->first();


        factory(\App\Post::class, 15)->create();


        // $posts=[
        //                 ['user_id'=>$user->id,
        //     'category_id'=>rand(1,10),
        //     'title'=>$faker->sentence(),
        //     'preview_text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //     'views'=>0,
        //     'body'=>'<p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>',
        //     'preview_image'=>'lp'.rand(1,5).'.jpg',
        //     'preview_cover'=>rand(1,20).'.jpg',
        //     'created_at'=>date('Y-m-d')],
        //                 ['user_id'=>$user->id,
        //     'category_id'=>rand(1,10),
        //     'title'=>$faker->sentence(),
        //     'preview_text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //     'views'=>0,
        //     'body'=>'<p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>',
        //     'preview_image'=>'lp'.rand(1,5).'.jpg',
        //     'preview_cover'=>rand(1,20).'.jpg',
        //     'created_at'=>date('Y-m-d')],
        //                 ['user_id'=>$user->id,
        //     'category_id'=>rand(1,10),
        //     'title'=>$faker->sentence(),//'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //     'preview_text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //     'views'=>0,
        //     'body'=>'<p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>',
        //     'preview_image'=>'lp'.rand(1,5).'.jpg',
        //     'preview_cover'=>rand(1,20).'.jpg',
        //     'created_at'=>date('Y-m-d')],
        //                     ['user_id'=>$user->id,
        //     'category_id'=>rand(1,10),
        //     'title'=>$faker->sentence(),//'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //     'preview_text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //     'views'=>0,
        //     'body'=>'<p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>',
        //     'preview_image'=>'lp'.rand(1,5).'.jpg',
        //     'preview_cover'=>rand(1,20).'.jpg',
        //     'created_at'=>date('Y-m-d')],
        //                     ['user_id'=>$user->id,
        //     'category_id'=>rand(1,10),
        //     'title'=>$faker->sentence(),//'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //     'preview_text'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //     'views'=>0,
        //     'body'=>'<p>Ten years ago, laborers hammering away at Prague’s cobblestone streets would probably break for lunch with bag of fluffy rohliky bread rolls and some sliced ham, if they couldn’t make it to a pub for goulash and dumplings. Flash-forward to 2018 and the same stonemasons — as well as local shopkeepers, students and chief executives — are likely to prefer bun bo nam bo or pho soup for lunch at one of the city’s fast and cheap Vietnamese noodle restaurants, which have appeared by the dozens in the Czech capital over the past decade.</p>',
        //     'preview_image'=>'lp'.rand(1,5).'.jpg',
        //     'preview_cover'=>rand(1,20).'.jpg',
        //     'created_at'=>date('Y-m-d')],
        // ];

        // DB::table('posts')->insert($posts);

    }
}
