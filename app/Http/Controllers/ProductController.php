<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = product::get();
        //if you want to get contacts on where condition use below code
        //$contacts = Contact::Where('tenant_id', "1")->get();
        // dd($products);
        return view('Restaurant.RestaurantMenuShow', ['products' => $products]);
    }
}
