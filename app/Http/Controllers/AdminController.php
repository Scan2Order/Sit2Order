<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view('Admin/AdminDashboard');
    }

    public function AdminProfileShow()
    {
        $user = auth()->user();
        return view('Admin/admin-assets/AdminProfile', ['user' => $user]);
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

        return redirect('/admin/dashboard/profile');
    }

    public function create()
    {
        $user = auth()->user();
        return view('Admin/admin-assets/profileEditAdmin', ['user' => $user]);
    }

    // public function editUser(Request $request, $id)
    // {
    //     $roles = Role::all();
    //     $user = User::findOrFail($id);
    //     $user->syncRoles(explode(',', $request->roles));
    //     return redirect('/admin/dashboard/user', ['id' => $id]);
    // }

    // public function createUser($id)
    // {
    //     $roles = Role::all();
    //     $user = User::findOrFail($id);
    //     return view('Admin/admin-assets/editUser', ['id' => $id, 'user' => $user, 'roles' => $roles]);
    // }

    // public function editRestaurant(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->syncRoles(explode(',', $request->roles));
    //     return redirect('/admin/dashboard/restaurant');
    // }

    // public function createRestaurant($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('Admin/admin-assets/editRestaurant', ['id' => $id, 'user' => $user]);
    // }
}
