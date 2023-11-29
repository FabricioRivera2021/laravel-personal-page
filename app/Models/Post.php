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

    public function scopeFilter(Builder|QueryBuilder $query, array $filters): Builder|QueryBuilder
    {
        return $query->when($filters['search'] ?? null, function($query, $search) {
            $query->where(function ($query) use ($search){
                $query->where('title','LIKE','%'. $search .'%') //con el orWhere busca en uno o en el otro
                ->orWhere('subtitle', 'LIKE', '%'. $search . '%')
                ->orWhere('body', 'LIKE', '%'. $search . '%');
            });
        });
    }


}

