<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bosskur', function () {
    return view('welcome');
});


Route::get('/', function () {
    return redirect('/register');
});

Route::get('/mamak', function () {
    return redirect('/restaurant-menu');
})->middleware('auth');

Route::get('/menu', 'ProductController@getAllProducts');

Route::get('/addmenu', function () {
    return view('Restaurant/RestaurantMenuAdd');
});

Route::get('/admin', function () {
    return view('Admin/admin-assets/AddUser');
});


Auth::routes();

Route::get('/user', 'UserProfileController@index')->name('home');
Route::get('/restaurant', 'RestaurantController@index')->name('Restaurantdashboard');
Route::get('/admin', 'AdminController@index')->name('AdminDashboard');

Route::get('/admin/user', function () {
    return view('Admin/admin-assets/AddUser');
})->name('AddUser');

Route::get('/admin/restaurant', function () {
    return view('Admin/admin-assets/AddRestaurant');
})->name('AddRestaurant');

Route::get('/admin/dashboard', function () {
    return view('Admin/AdminDashboard');
})->name('AdminDashboard');
