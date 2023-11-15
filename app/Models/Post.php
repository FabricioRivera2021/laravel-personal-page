<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'subTitle', 'author', 'body', 'img', 'lang'
    ];

    public static array $lang = [
        'es',
        'en'
    ];
}
