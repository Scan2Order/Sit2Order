<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Filters\ProductFilters;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    // public function getAllProducts()
    // {
    //     $products = product::get();
       
        
    //     return view('Restaurant.RestaurantMenuShow', ['products' => $products]);
     
    // }

    function index( ProductFilters $filters)
    {
        $products = $this->getThreads($filters);

        if (request()->wantsJson())
            return $products;

        return view('Restaurant.RestaurantMenuShow', ['products' => $products]);
    }



    public function getThreads(ProductFilters $filters)
    {
        $products = product::latest()->filter($filters);

        $products = $products->get();
        return $products;
    }
 
}

