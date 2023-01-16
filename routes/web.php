<?php

use App\Models\Post; //tambahkan/ import model post yang akan digunakan
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home', [
        "title" => "Home" //tambahkan title untuk menampilkan title di halaman home
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aprils",
        "nrp" => 20102172,
        "email" => "20102172@ittelkom-pwt.ac.id",
        "image" => "gambar1.jpeg"
    ]);
});





Route::get('/blog', [PostController::class, 'index']); //artinya kita akan memanggil method index yang ada di controller PostController


//untuk menampilkan detail post sesuai dengan sulg yang di klik







//halaman post

//jadi ketika klik parameter post->slug maka akan menjalankan controller PostController dan method show
//dan akan menampilkan halaman post sesuai dengan slug yang di klik
Route::get('post/{post:slug}', [PostController::class, 'show']); //artinya kita akan memanggil method show yang ada di controller PostController
//parameter post adalah slug dari post yang akan ditampilkan

//halaman category
Route::get('categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => $category->name,
        'posts' => $category->posts->load('category', 'user'),
        'category' => $category->name

    ]);
});


Route::get('/categories', function () {
    return view('blog', [
        'title' => 'page Categories',
        'categories' => Category::with(['user', 'category'])->all()
    ]);
});

Route::get('authors/{user:username}', function (User $user) {
    return view('blog', [
        'title' => "user Post",
        'posts' => $user->posts->load('category', 'user'),
        //load adalah method yang ada di model eloquent untuk mengambil relasi dari model category dan user
        //agar query yang dijalankan lebih sedikit


    ]);
});

// Route::get('/blog', [PostController::class, 'index']); 

// Route::get('/authors/{{user}}', [PostController::class, 'authros']);




//artinya jika ada route yang mengarah ke  / maka akan menampilkan view welcome.blade.php


//jika ada user mengakses route menggunakan metode get(get adalah megakse melalui url) / maka akan mengembalikan view  welcome.blade.php



Route::get('/test', function () {
    return view('test');
});
