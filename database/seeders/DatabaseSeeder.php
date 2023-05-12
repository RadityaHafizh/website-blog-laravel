<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raditya Hafizh',
            'username' => 'radityahafizh',
            'email' => 'radityahafizh12@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Gany Fauzan',
        //     'email' => 'ganyfauzt@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

       
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt. Repudiandae perferendis et consequuntur commodi vitae. Optio, odit id recusandae fugit ad voluptatem reprehenderit officia! Atque amet, ullam optio sint nulla aliquid nam quam.</p> <p>Soluta necessitatibus accusamus eligendi quasi tenetur accusantium ullam sequi ab. Tempore eveniet perferendis alias maiores, natus illum doloremque ullam voluptate. Quaerat, est. Hic eaque ullam aspernatur.</p> <p>Quod, corporis eum voluptate dolores est sit. Iure voluptatem quibusdam dolor culpa tempora laboriosam maxime magnam consequuntur impedit blanditiis, officiis quam distinctio saepe dignissimos earum? Minus repudiandae, praesentium suscipit, magni laboriosam sed, voluptatum doloribus beatae officia eaque ad eum? Voluptatem magni, nemo voluptatum quae enim minus inventore placeat eligendi a itaque et veniam aut aliquid!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt. Repudiandae perferendis et consequuntur commodi vitae. Optio, odit id recusandae fugit ad voluptatem reprehenderit officia! Atque amet, ullam optio sint nulla aliquid nam quam.</p> <p>Soluta necessitatibus accusamus eligendi quasi tenetur accusantium ullam sequi ab. Tempore eveniet perferendis alias maiores, natus illum doloremque ullam voluptate. Quaerat, est. Hic eaque ullam aspernatur.</p> <p>Quod, corporis eum voluptate dolores est sit. Iure voluptatem quibusdam dolor culpa tempora laboriosam maxime magnam consequuntur impedit blanditiis, officiis quam distinctio saepe dignissimos earum? Minus repudiandae, praesentium suscipit, magni laboriosam sed, voluptatum doloribus beatae officia eaque ad eum? Voluptatem magni, nemo voluptatum quae enim minus inventore placeat eligendi a itaque et veniam aut aliquid!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt. Repudiandae perferendis et consequuntur commodi vitae. Optio, odit id recusandae fugit ad voluptatem reprehenderit officia! Atque amet, ullam optio sint nulla aliquid nam quam.</p> <p>Soluta necessitatibus accusamus eligendi quasi tenetur accusantium ullam sequi ab. Tempore eveniet perferendis alias maiores, natus illum doloremque ullam voluptate. Quaerat, est. Hic eaque ullam aspernatur.</p> <p>Quod, corporis eum voluptate dolores est sit. Iure voluptatem quibusdam dolor culpa tempora laboriosam maxime magnam consequuntur impedit blanditiis, officiis quam distinctio saepe dignissimos earum? Minus repudiandae, praesentium suscipit, magni laboriosam sed, voluptatum doloribus beatae officia eaque ad eum? Voluptatem magni, nemo voluptatum quae enim minus inventore placeat eligendi a itaque et veniam aut aliquid!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora a, sequi aliquid maiores incidunt. Repudiandae perferendis et consequuntur commodi vitae. Optio, odit id recusandae fugit ad voluptatem reprehenderit officia! Atque amet, ullam optio sint nulla aliquid nam quam.</p> <p>Soluta necessitatibus accusamus eligendi quasi tenetur accusantium ullam sequi ab. Tempore eveniet perferendis alias maiores, natus illum doloremque ullam voluptate. Quaerat, est. Hic eaque ullam aspernatur.</p> <p>Quod, corporis eum voluptate dolores est sit. Iure voluptatem quibusdam dolor culpa tempora laboriosam maxime magnam consequuntur impedit blanditiis, officiis quam distinctio saepe dignissimos earum? Minus repudiandae, praesentium suscipit, magni laboriosam sed, voluptatum doloribus beatae officia eaque ad eum? Voluptatem magni, nemo voluptatum quae enim minus inventore placeat eligendi a itaque et veniam aut aliquid!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
