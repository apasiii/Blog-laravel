<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    //membuat properti filable untuk mengizinkan field yang boleh diisi
    // protected $fillable = ['tittel', 'excerpt', 'body'];
    //fillable adalah properti yang ada di model eloquent untuk mengizinkan field yang boleh diisi
    //
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('tittel', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        //cara lain untuk menuliskan if else dan isset yaitu dengan menggunakan null coalescing operator
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('tittel', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });


        // $query->when($filters['category'] ?? false, fn ($query, $category) =>
        //     $query->whereHas('category', fn ($query) =>
        //         $query->where('slug', $category)
        //     )
        // );

        // $query->when($filters['author'] ?? false, fn ($query, $author) =>
        //     $query->whereHas('author', fn ($query) =>
        //         $query->where('username', $author)
        //     )
        // );
    }



    //$guarded adalah properti yang ada di model eloquent untuk mengizinkan field yang tidak boleh diisi
    //protected $guarded = ['id'];
    //guarded adalah kebalikan dari fillable
    //jika kita menggunakan guarded maka field yang tidak boleh diisi adalah field yang ada di dalam array guarded


    //membuat relasi antara post dengan category
    //nama function/methondya harus sama dengan nama tabel yang dihubungkan
    //jadi di model post kita akan menghubungkan ke tabel categories
    //jadi nama functionnya adalah categories
    public function Category()
    {
        return $this->belongsTo(Category::class);
        //atinya kita akan mengembalikan nilai dari method belongsTo
        //mengembalikan relasi dari model post terhadap model category dengan menggunakan method belongsTo
        //belongsTo adalah method yang ada di model eloquent
        //belongsTo adalah method yang digunakan untuk mendefinisikan relasi 1 post memiliki 1 category
    }

    //membuat relasi antara post dengan user
    //satu post hanya bisa dimiliki oleh satu user
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
