<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'given_name',
        'family_name',
        'company',
    ];

    protected $hidden = [

    ];
    protected $casts = [

    ];
}
