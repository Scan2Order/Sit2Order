<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetails extends Model
{
    public function product()
    {
        return $this->belongsToMany('App/product', 'product_orderdetails');
    }
}
