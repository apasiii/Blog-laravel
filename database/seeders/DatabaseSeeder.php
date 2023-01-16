<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User; //menginport model user 
use App\Models\Category; //menginport model category
use App\Models\Post; //menginport model post

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //membuat data dummy untuk tabel users

        //database seeder adalah class yang berfungsi untuk mengisi data dummy ke database
        //untuk membuat database seeder kita bisa menggunakan perintah php artisan make:seeder NamaDatabaseSeeder
        //untuk menjalankan database seeder kita bisa menggunakan perintah php artisan db:seed
        //untuk menjalankan database seeder tertentu kita bisa menggunakan perintah php artisan db:seed --class=NamaDatabaseSeeder


        //ini adalah cara pertama untuk membuat data dummy
        // User::create([
        //     'name' => 'Aprils',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password'),

        // ]);

        // User::create([
        //     'name' => 'Anto',
        //     'email' => 'anto@example.com',
        //     'password' => bcrypt('password'),

        // ]);


        //cara membuat seeder dengan menggunakan factory
        User::factory(3)->create();
        //artinya class dari model user kita panggil method factory dan kita isi dengan 5 untuk membuat 5 data dummy
        //dan kita panggil method create untuk membuat data dummy 


        //membuat data dummy untuk tabel categories menggunakan cara manual
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // post::create([
        //     'tittel' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, in modi? Soluta enim dignissimos odit repudiandae impedit culpa modi corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis recusandae cumque temporibus quod natus, numquam accusantium nulla ipsum quae nostrum, veniam consectetur. Ullam, provident ratione. Sint libero labore dolores et impedit repellendus cum fuga molestias assumenda maxime nam aperiam magni suscipit quasi, vitae debitis cupiditate voluptas iure dignissimos. Adipisci ipsum a accusantium non unde reprehenderit minima sed quasi laboriosam odit sequi porro, dolor officiis quas iusto hic perferendis quo magni? Explicabo expedita eos harum magni numquam unde impedit dicta, hic ipsa atque natus amet ad, quia error nemo ea. Velit ducimus aperiam obcaecati saepe nemo placeat maxime tempora doloribus excepturi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'tittel' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, in modi? Soluta enim dignissimos odit repudiandae impedit culpa modi corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis recusandae cumque temporibus quod natus, numquam accusantium nulla ipsum quae nostrum, veniam consectetur. Ullam, provident ratione. Sint libero labore dolores et impedit repellendus cum fuga molestias assumenda maxime nam aperiam magni suscipit quasi, vitae debitis cupiditate voluptas iure dignissimos. Adipisci ipsum a accusantium non unde reprehenderit minima sed quasi laboriosam odit sequi porro, dolor officiis quas iusto hic perferendis quo magni? Explicabo expedita eos harum magni numquam unde impedit dicta, hic ipsa atque natus amet ad, quia error nemo ea. Velit ducimus aperiam obcaecati saepe nemo placeat maxime tempora doloribus excepturi?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);



        //setelah membuat factory,kita pakai factory dengan cara memanggil class post dan panggil method factory dan isi dengan 20 untuk membuat 20 data dummy
        //membuat data dummy untuk tabel posts dengan menggunakan factory
        post::factory(10)->create();
    }
}
