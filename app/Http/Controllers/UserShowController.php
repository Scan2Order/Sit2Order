<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\restaurant;
use Auth;

class UserShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function getAllUsers()
    {
        $users = User::get();
        $restaurants = restaurant::get();
        $userCount = User::count();
        $restCount = restaurant::count();
        return view('Admin.AdminDashboard', ['users' => $users, 'userCount' => $userCount, 'restCount' => $restCount, 'restaurants' => $restaurants]);
    }

    public function destroyUser($id)
    {
        $users = User::findOrFail($id);
        $restaurants = restaurant::findOrFail($id);
        $users->delete();
        $restaurants->delete();
        return redirect('admin/dashboard/user')->with('status', 'Deleted sucessfully');
    }

    public function destroyRest($id)
    {
        $restaurants = restaurant::findOrFail($id);
        $restaurants->delete();
        return redirect('admin/dashboard/restaurant')->with('status', 'Deleted sucessfully');
    }

    public function showUserCount()
    {
        $users = User::get();
        return view('Admin.admin-assets.AddUser', ['users' => $users]);
    }

    public function getAllRestaurant()
    {
        $restaurants = restaurant::get();
        return view('Admin.admin-assets.AddRestaurant', ['restaurants' => $restaurants]);
    }

    //Restaurant Update
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $restaurant = restaurant::findOrFail($id);
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;

        $restaurant->save();

        return redirect('/admin/dashboard/restaurant');
    }

    public function create($id)
    {
        return view('Admin/admin-assets/RestaurantEdit', ['id' => $id]);
    }
}
