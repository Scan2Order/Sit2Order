<?php

namespace App\Http\Controllers;

use App\Filters\filter;
use App\Filters\productFilter;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllProducts(productFilter $filter)
    {
        $products = $this->getProducts($filter);
        return view('Restaurant.RestaurantMenuShow', ['products' => $products]);
    }

    public function store()
    {
        // request()->validate([
        //     'name' => 'required',
        //     'categories' => 'required',
        //     'price' => 'required',

        // ]);

        product::create([
            'name' => request('name'),
            'description' => request('description'),
            'categories' => request('categories'),
            'price' => request('price'),
        ]);

        return redirect('/restaurant/menu');
    }

    public function getProducts(productFilter $filters)
    {
        $products = product::latest()->filter($filters);

        $products = $products->get();
        return $products;
    }
}
