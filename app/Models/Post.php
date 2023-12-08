<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder;

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

    public function scopeTitle(Builder $query, string $title): Builder //Illuminate\Database\Eloquent\Builder;
    {
        return $query->where('title', 'LIKE', '%'. $title .'%');
    }
}

