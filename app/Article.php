<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'body', 'user_id', 'featured_image', 'thumbnail', 
        'is_featured', 'logo', 'logo_title', 'is_toggled', 'company_name', 'email', 'url', 'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(ArticleCategory::class, 'article_category', 'article_id', 'article_category_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
