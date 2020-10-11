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
        $orderCount = order::get();
        $orderCount = order::count();
        $productCount = product::get();
        $productCount = product::count();
        $orders = order::get();
        // dd($user);
        return view('Restaurant/RestaurantDashboard', ['user' => $user, 'orderCount' => $orderCount, 'productCount' => $productCount, 'orders' => $orders]);
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
        $user->address = $request->address;

        $user->save();

        return redirect('/restaurant');
    }

    public function create()
    {
        $user = auth()->user();
        return view('Restaurant/restaurant-assets/profileEdit', ['user' => $user]);
    }

    public function getOrder(order $id)
    {
        $user = auth()->user();
        $orders = order::where('status', 'pending')->get();
        $ordersTrans = $orders->transform(function ($order, $key) {
            $order->cart = json_decode($order->cart);

            return $order;
        });

        $dones = order::where('status', 'done')->get();
        $ordersTransform = $dones->transform(function ($done, $key) {
            $done->cart = json_decode($done->cart);

            return $done;
        });
        return view('Restaurant.RestaurantOrder', ['user' => $user, 'orders' => $orders, 'dones' => $dones]);
    }

    public function status($id)
    {
        $order = order::findOrFail($id);
        $order->status = 'done';
        // dd($order);
        $order->save();

        return redirect('/restaurant/orders');
    }
}
