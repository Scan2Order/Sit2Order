<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    public function product()
    {
        return $this->hasMany('App/product');
    }
    public function rating()
    {
        return $this->belongsToMany('App/rating', 'restaurant_rating');
    }
}
