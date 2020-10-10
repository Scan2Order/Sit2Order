<?php

namespace App\Http\Controllers;

use App\Filters\filter;
use App\Filters\productFilter;
use App\order;
use Illuminate\Http\Request;
use App\product;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllProducts(productFilter $filter)
    {
        $products = $this->getProducts($filter);
        $orders = order::get();
        return view('Restaurant.RestaurantMenuShow', ['products' => $products , 'orders' => $orders]);
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

    public function destroyProd($id)
    {
        $products = product::findOrFail($id);
        $products->delete();
        return redirect('restaurant/menu')->with('status', 'Deleted sucessfully');
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'categories' => 'required',
            'price' => 'required'
        ]);

        $product = product::findOrFail($id);
        $product->name = $request->name;
        $product->categories = $request->categories;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return redirect('/restaurant/menu');
    }

    public function create($id)
    {
        $product = product::findOrFail($id);
        return view('Restaurant/restaurant-assets/EditMenu', ['id' => $id, 'product' => $product]);
    }
}
