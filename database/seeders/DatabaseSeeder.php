<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Ahmad Susanto',
        //     'email' => 'ahsan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Rizki Lestari',
        //     'email' => 'kikielbe@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Susanto',
            'username' => 'susanto',
            'email' => 'susanto@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design Grafis',
            'slug' => 'design-grafis'
        ]);
        
        Category::create([
            'name' => 'Data Mining',
            'slug' => 'data-mining'
        ]);
        
        Post::factory(10)->create();
        /*
        Post::create([
            'title' => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore, sint voluptates quis dolorem nesciunt, neque ipsa amet quos vero quo. Necessitatibus dolor animi sequi porro similique? Corporis perferendis repellat aliquam veniam culpa aut, possimus ad excepturi nulla. Blanditiis nostrum vero quo eum atque quam doloribus aut excepturi facere, nam reiciendis natus expedita temporibus laudantium laboriosam quos ex quidem inventore enim? Neque rerum corporis quaerat quidem? Eius repellendus minima assumenda accusantium ipsam harum magni soluta voluptate molestias atque fugit voluptatum repudiandae esse iusto, veniam doloremque temporibus optio et dignissimos dolorem beatae praesentium provident dolor. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste. Aperiam omnis, culpa numquam nostrum veritatis non est eum aspernatur dolorem exercitationem. Architecto aut, aspernatur possimus minus quibusdam atque incidunt? Qui at sed voluptates quam voluptate quas atque illum ipsum dolor iure vel quasi adipisci exercitationem iste assumenda aliquam repudiandae, autem ducimus fuga ipsa.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore, sint voluptates quis dolorem nesciunt, neque ipsa amet quos vero quo. Necessitatibus dolor animi sequi porro similique? Corporis perferendis repellat aliquam veniam culpa aut, possimus ad excepturi nulla. Blanditiis nostrum vero quo eum atque quam doloribus aut excepturi facere, nam reiciendis natus expedita temporibus laudantium laboriosam quos ex quidem inventore enim? Neque rerum corporis quaerat quidem? Eius repellendus minima assumenda accusantium ipsam harum magni soluta voluptate molestias atque fugit voluptatum repudiandae esse iusto, veniam doloremque temporibus optio et dignissimos dolorem beatae praesentium provident dolor. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore, sint voluptates quis dolorem nesciunt, neque ipsa amet quos vero quo. Necessitatibus dolor animi sequi porro similique? Corporis perferendis repellat aliquam veniam culpa aut, possimus ad excepturi nulla. Blanditiis nostrum vero quo eum atque quam doloribus aut excepturi facere, nam reiciendis natus expedita temporibus laudantium laboriosam quos ex quidem inventore enim? Neque rerum corporis quaerat quidem? Eius repellendus minima assumenda accusantium ipsam harum magni soluta voluptate molestias atque fugit voluptatum repudiandae esse iusto, veniam doloremque temporibus optio et dignissimos dolorem beatae praesentium provident dolor. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        
        Post::create([
            'title' => 'Artikel Keempat',
            'slug' => 'artikel-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, libero dolore, sint voluptates quis dolorem nesciunt, neque ipsa amet quos vero quo. Necessitatibus dolor animi sequi porro similique? Corporis perferendis repellat aliquam veniam culpa aut, possimus ad excepturi nulla. Blanditiis nostrum vero quo eum atque quam doloribus aut excepturi facere, nam reiciendis natus expedita temporibus laudantium laboriosam quos ex quidem inventore enim? Neque rerum corporis quaerat quidem? Eius repellendus minima assumenda accusantium ipsam harum magni soluta voluptate molestias atque fugit voluptatum repudiandae esse iusto, veniam doloremque temporibus optio et dignissimos dolorem beatae praesentium provident dolor. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste. Soluta quibusdam cum tenetur quod voluptatum harum perspiciatis quis tempore non impedit! Voluptas, ad veritatis nostrum doloribus rerum ipsa fuga ducimus. Repellat, asperiores sit? Voluptas, quos optio excepturi aut sit in ad eligendi repellat ex vitae, autem dignissimos atque temporibus eos ipsa tempore repellendus incidunt. Voluptatibus praesentium impedit a at quos! Dignissimos, error aperiam ducimus eligendi tempore voluptatem animi alias iste.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        */

    }
}
