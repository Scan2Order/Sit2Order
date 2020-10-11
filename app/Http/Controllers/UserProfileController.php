<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\order;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        $user = auth()->user();
        $orders = $user->orders;
        $ordersTrans = $orders->transform(function ($order, $key) {
            $order->cart = json_decode($order->cart);
            // dd($order);
            return $order;
        });
        return view('User/home', ['user' => $user, 'orders' => $orders]);
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

        return redirect('/user');
    }

    public function create()
    {
        $user = auth()->user();
        return view('User/user-assets/profileEdit', ['user' => $user]);
    }

    public function rate(Request $request, $id)
    {
        $order = order::findOrFail($id);
        $order->rating = $request->rating;
        $order->comment = $request->comment;
        $order->save();

        return redirect('/user');
    }

    public function createRate($id)
    {
        $user = auth()->user();
        $order = order::findOrFail($id);
        return view('User/user-assets/rate', ['user' => $user, 'order' => $order]);
    }

}
