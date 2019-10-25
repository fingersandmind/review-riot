<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['name', 'slug', 'logo'];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_category', 'article_category_id', 'article_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
