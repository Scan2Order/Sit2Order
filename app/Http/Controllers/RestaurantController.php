<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\restaurant;
use App\User;
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
}
