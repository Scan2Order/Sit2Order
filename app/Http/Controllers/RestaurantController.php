<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\restaurant;
use App\User;
use App\order;
use Auth;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:restaurant');
    }

    public function index()
    {
        $user = auth()->user();
        // dd($user);
        return view('Restaurant/RestaurantDashboard', ['user' => $user]);
    }

    public function getAllProducts()
    {
        $products = product::get();
        return view('Restaurant.RestaurantDashMenu', ['products' => $products]);
    }

    public function update(Request $request)
    {

        $user = Auth::User();

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user = User::findOrFail(auth()->id());
        $user->name = $request->name;
        $user->phone = $request->phone;

        $user->save();

        return redirect('/restaurant');
    }

    public function create()
    {
        $user = auth()->user();
        return view('Restaurant/restaurant-assets/profileEdit', ['user' => $user]);
    }

    public function getOrder()
    {
        $user = auth()->user();
        $orders = order::where('restaurant_id', $user->restaurant_id)->get();
        $ordersTrans = $orders->transform(function ($order, $key) {
            $order->cart = json_decode($order->cart);

            return $order;
        });
        return view('Restaurant.RestaurantOrder', ['user' => $user, 'orders' => $orders]);
    }
}
