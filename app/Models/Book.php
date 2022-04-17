<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'subtitle',
        'description',
        'isbn_10',
        'isbn_13',
        'pages',
        'year_pub',
        'edition',
    ];

    protected $hidden =[];

    protected $casts =[];

}
