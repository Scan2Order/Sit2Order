<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function restaurant()
    {
        return $this->belongsTo('App/restaurant');
    }

    public function orderdetails()
    {
        return $this->belongsToMany('App/orderdetails', 'product_orderdetails');
    }
}
