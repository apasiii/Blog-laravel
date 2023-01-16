<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //
    //$guarded adalah properti yang ada di model eloquent untuk mengizinkan field yang tidak boleh diisi
    //jadi selain dari id maka boleh di isi
    protected $guarded = ['id'];

    //membuat relasi antara category dengan post
    //satu category bisa memiliki banyak post
    //untuk membuat relasi antara categori dan post.kita buat method posts
    //sedangkan untuk membuat relasi antara post dan category kita buat method category
    public function posts()
    {
        return $this->hasMany(post::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }


}


//untuk membuat model menggunakan perintah php artisan make:model Category -m
//untuk membuat model category dan juga membuat migration
//untuk membuat model category tanpa membuat migration menggunakan perintah php artisan make:model Category
//untuk membuat model category tanpa membuat migration dan juga membuat controller menggunakan perintah php artisan make:model Category -mc
//untuk membuat model category tanpa membuat migration dan juga membuat controller dan juga membuat factory menggunakan perintah php artisan make:model Category -mcf
//untuk membuat model category tanpa membuat migration dan juga membuat controller dan juga membuat factory dan juga membuat seeder menggunakan perintah php artisan make:model Category -mcf -s
//untuk membuat model category tanpa membuat migration dan juga membuat controller dan juga membuat factory dan juga membuat seeder dan juga membuat resource controller menggunakan perintah php artisan make:model Category -mcf -s -r
//untuk membuat model category tanpa membuat migration dan juga membuat controller dan juga membuat factory dan juga membuat seeder dan juga membuat resource controller dan juga membuat test menggunakan perintah php artisan make:model Category -mcf -s -r -t
//untuk membuat model category tanpa membuat migration dan juga membuat controller dan juga membuat factory dan juga membuat seeder dan juga membuat resource controller dan juga membuat test dan juga membuat policy menggunakan perintah php artisan make:model Category -mcf -s -r -t -p
