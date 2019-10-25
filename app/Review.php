<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['content', 'listing_id', 'status'];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
