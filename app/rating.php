<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    public function restaurant()
    {
        return $this->belongsToMany('App/restaurant', 'restaurant_ratings');
    }
    public function user()
    {
        return $this->belongsToMany('App/User', 'user_ratings');
    }
}
