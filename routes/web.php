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





Auth::routes();

//User Routes
Route::get('/user', 'UserProfileController@index')->name('user');


//Admin Routes
Route::get('/admin/dashboard', 'UserShowController@getAllUsers')->name('AdminDashboard');
Route::get('/admin/user', 'UserShowController@getAllUsers');
Route::get('/admin/dashboard/user', 'UserShowController@showUserCount')->name('AddUser');
Route::get('/admin/dashboard/restaurant', 'UserShowController@getAllRestaurant')->name('AddRestaurant');

//delete route for Admin
Route::delete('/admin/dashboard/user/{id}', 'UserShowController@destroyUser');
Route::delete('/admin/dashboard/restaurant/{id}', 'UserShowController@destroyRest');

//edit route for admin
Route::get('/admin/dashboard/user/edit', function () {
    return view('Admin/admin-assets/UserEdit');
})->name('UserEdit');

// Route::get('/admin/restaurant', function () {
//     return view('Admin/admin-assets/AddRestaurant');
// })->name('AddRestaurant');

//Restaurant Routes
Route::get('/restaurant/dashboard', 'RestaurantController@index')->name('RestaurantDashboard');

Route::get('/restaurant/addmenu', function () {
    return view('Restaurant/RestaurantMenuAdd');
})->name('RestaurantMenuAdd');

Route::post('/restaurant/addmenu', 'ProductController@store');

Route::get('/restaurant/menu', 'RestaurantController@getAllProducts')->name('RestaurantDashMenu');


//Auth Route in group
Route::group(['middleware' => 'auth'], function () {
    Route::get('/menu', 'ProductController@getAllProducts');
    Route::get('/restaurant', 'RestaurantController@index')->name('home');
    Route::get('/superadministrator', 'UserShowController@getAllUsers')->name('superadministrator');
});
