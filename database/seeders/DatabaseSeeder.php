<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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


        User::create([
            'name' => 'Yafie Yulianto',
            'username' => 'yafito',
            'email' => 'yafie@yafie.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Aldi Rudianto',
        //     'email' => 'aldirud@yafie.com',
        //     'password' => bcrypt('1234')
        // ]);
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
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'excerpt judul pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque placeat quaerat, modi atque labore corrupti, eaque saepe temporibus porro doloremque provident harum vel, natus a? Quae veniam, in porro minima numquam possimus doloremque molestias qui ipsa, libero necessitatibus eligendi, velit repellat neque expedita laudantium a odio est iure nisi quia. Ut, in.</p><p>Aperiam rerum illo quaerat, totam repellat, debitis reiciendis suscipit sunt similique iusto officiis impedit placeat ipsa accusantium possimus ad quos expedita cupiditate inventore vitae? Molestiae velit</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'excerpt judul kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque placeat quaerat, modi atque labore corrupti, eaque saepe temporibus porro doloremque provident harum vel, natus a? Quae veniam, in porro minima numquam possimus doloremque molestias qui ipsa, libero necessitatibus eligendi, velit repellat neque expedita laudantium a odio est iure nisi quia. Ut, in.</p><p>Aperiam rerum illo quaerat, totam repellat, debitis reiciendis suscipit sunt similique iusto officiis impedit placeat ipsa accusantium possimus ad quos expedita cupiditate inventore vitae? Molestiae velit</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'excerpt judul ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque placeat quaerat, modi atque labore corrupti, eaque saepe temporibus porro doloremque provident harum vel, natus a? Quae veniam, in porro minima numquam possimus doloremque molestias qui ipsa, libero necessitatibus eligendi, velit repellat neque expedita laudantium a odio est iure nisi quia. Ut, in.</p><p>Aperiam rerum illo quaerat, totam repellat, debitis reiciendis suscipit sunt similique iusto officiis impedit placeat ipsa accusantium possimus ad quos expedita cupiditate inventore vitae? Molestiae velit</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'excerpt judul empat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque placeat quaerat, modi atque labore corrupti, eaque saepe temporibus porro doloremque provident harum vel, natus a? Quae veniam, in porro minima numquam possimus doloremque molestias qui ipsa, libero necessitatibus eligendi, velit repellat neque expedita laudantium a odio est iure nisi quia. Ut, in.</p><p>Aperiam rerum illo quaerat, totam repellat, debitis reiciendis suscipit sunt similique iusto officiis impedit placeat ipsa accusantium possimus ad quos expedita cupiditate inventore vitae? Molestiae velit</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
