<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yafie Yulianto",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae repellat hic, ipsam at omnis facilis sunt cupiditate enim repudiandae eligendi veniam in beatae maiores necessitatibus? Dolores illum quis nisi vel rem, libero, doloribus molestias praesentium reiciendis culpa eum a, dolorum non aut sequi inventore excepturi? Laudantium, repellendus cum similique quo impedit atque. Laboriosam quam laudantium ipsam deleniti soluta, quaerat cumque in perferendis assumenda magni totam, sint, sapiente ea dignissimos est maxime ullam maiores. Doloremque dolorum accusamus necessitatibus explicabo rem fugiat!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody Purmono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ipsam, doloremque unde dolorum, accusantium temporibus ab id magni natus possimus officiis ad animi, voluptates suscipit excepturi. Ex voluptates laborum fugiat? Ea placeat eligendi earum recusandae rerum architecto quaerat, id nemo neque cum expedita perferendis impedit quos dolorem amet maiores, facilis veniam sapiente tempora dolorum! Tempore quae incidunt harum exercitationem odio repellat rem quis error reiciendis reprehenderit omnis explicabo, facere repudiandae dolorem dolores velit. Earum quidem, dolorum illum non, molestiae eveniet culpa repellendus temporibus eaque libero exercitationem, fugit hic expedita vitae. Deleniti corrupti non quidem magnam vitae delectus eos perspiciatis ipsam."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
