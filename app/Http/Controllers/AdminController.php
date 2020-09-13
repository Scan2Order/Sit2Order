<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Admin/admin-assets/AdminProfile');
    }
}
