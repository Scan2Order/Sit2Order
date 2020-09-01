<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllUsers()
    {
        $users = User::get();
        //if you want to get contacts on where condition use below code
        //$contacts = Contact::Where('tenant_id', "1")->get();
        // dd($products);
        return view('Admin.AdminDashboard', ['users' => $users]);
    }
}
