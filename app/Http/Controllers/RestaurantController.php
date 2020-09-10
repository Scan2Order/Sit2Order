<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\restaurant;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:restaurant');
    }

    public function index()
    {
        return view('Restaurant/RestaurantDashboard');
    }

    public function getAllProducts()
    {
        $products = product::get();
        return view('Restaurant.RestaurantDashMenu', ['products' => $products]);
    }
}
