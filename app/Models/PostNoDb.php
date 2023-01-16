<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aprils",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore eum deserunt, reprehenderit sapiente in assumenda aspernatur quod repudiandae! Quis et molestiae ipsum culpa rem neque! Assumenda veniam voluptates possimus."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Anto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore eum deserunt, reprehenderit sapiente in assumenda aspernatur quod repudiandae! Quis et molestiae ipsum culpa rem neque! Assumenda veniam voluptates possimus."
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
        //collect adalah array helper yang ada di laravel
        //colection adalah pembungkus arrya yang lebih sakti
        //bisa melakukan banyak hal seperti filter, sorting, dll
        //kenapa self? karena kita ingin mengakses property static
        //kalau properti biasa kita bisa menggunakan $this->blog_posts

        //sebelum menggunaan collect
        // return self::$blog_posts;
    }


    public static function find($slug)
    {
        // $posts = self::$blog_posts; sebelum menggunakan collect

        //sesudah
        $posts = static::all(); //artinya kita memanggil method static all() yang ada di model Post


        //sebelum menggunakan collect

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        //sesudah menggunakan collect

        return $posts = $posts->firstWhere('slug', $slug);
        //artinya kita akan mengembalikan nilai dari $posts yang pertama kali memenuhi kondisi slug == $slug
        //slug = key, $slug = value
    }
}
