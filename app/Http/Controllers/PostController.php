<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Post; //untuk menggunakan model post
//ada cara lain untuk menggunakan model post
//dengan cara klik kanan pada nama model kemudian klik expand class
//maka hasilnya akan seperti ini \App\Models\Post::all()


class PostController extends Controller
{
    public function index()
    {
        // $posts = post::latest(); //untuk mengambil data dari model post yang terbaru
        // if (request('search')) {
        //     $posts->where('tittel', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        //sebenarnya cara diatas sudah benar/tetapi ini sebenarnya tugas dari model untuk melakukan query
        //maka dari itu kita pindahkan ke model dari post


        //search = nama dari inputan di form
        //artinya kita akan mengambil data dari model post kemudian kita panggil method where untuk mencari data yang sesuai dengan parameter yang kita berikan
        //jika request(user menginputkan llau mengirimkan dengan url) denagn nama search maka kita akan mengambil data dari model post kemudian kita panggil method where untuk mencari data yang sesuai dengan parameter yang kita berikan
        //parameter yang kita berikan adalah title dan kita berikan operator like dan kita berikan parameter lagi yaitu %request('search')% artinya kita akan mencari data yang sesuai dengan title yang mengandung kata yang diinputkan user

        return view('blog', [
            "title" => "All",
            "posts" => post::latest()->filter(request(['search', 'category']))->get(),
            // "posts" => $posts->get() //untuk menampilkan data post yang sudah diurutkan berdasarkan tanggal terbaru
            //menggunakan with untuk mengambil relasi dari model post
            //mengambil relasi authors dan category
            //kemudian mengambil semua data post
            //ini artinya query yang dijalankan adalah select * from posts join authors on posts.author_id = authors.id join categories on posts.category_id = categories.id 
            //kegunaan with ini adalah untuk mengurangi query yang dijalankan
            //karena dengan menggunakan with maka query yang dijalankan hanya satu query
            //jika tidak menggunakan with maka query yang dijalankan adalah select * from posts kemudian select * from authors where authors.id = posts.author_id kemudian select * from categories where categories.id = posts.category_id

            //post::all adalah method yang ada di model eloquent untuk mengambil semua data dari tabel posts
            //Post::all() adalah method static yang ada di model Post
            //artinya kita memanggil method static all() yang ada di model Post
        ]);
    }
    //method show untuk menampilkan detail post
    //route binding adalah cara untuk mengambil data dari database berdasarkan parameter yang dikirimkan
    //route binding untuk menampilkan detail post sesuai dengan slug yang di klik

    public function show(post $post) //ini adalah route binding yang akan mengambil data dari database berdasarkan parameter yang dikirimkan
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    // public function authors(User $user)
    // {
    //     return view('blog', [
    //         "title" => "User Post",
    //         "posts" => $user->posts
    //     ]);
    // }

    // public function showCategory(Category $category)
    // {
    //     return view('category', [
    //         "title" => "Post By Category : $category->name",
    //         "posts" => $category->posts->load('category', 'author'),
    //         "category" => $category
    //     ]);
    // }



    //method untuk menampilkan halaman dengan query builder
    //public function show($slug)
    //{
    //  return view('post', [
    //    $post = Post::find($slug);
    //        "title" => "Single Post",
    //        "post" => $post::find($slug)
}
