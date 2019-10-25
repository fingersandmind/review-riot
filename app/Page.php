<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'is_published', 'order_no', 'meta_title',
        'meta_desc', 'og_title', 'og_desc', 'og_image', 'og_url',
        'twitter_title', 'twitter_desc', 'twitter_image', 'twitter_card'
    ];
    

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
