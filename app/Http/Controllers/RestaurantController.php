<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
