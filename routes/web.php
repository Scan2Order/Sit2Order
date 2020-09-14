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

Route::get('Shopping cart', function (){
    return view('/Restaurant.ShoppingCart');
});



Auth::routes();

//User Routes
Route::get('/user', 'UserProfileController@index')->name('user');

//edit route for user
Route::post('/user/{id}', 'UserProfileController@update');
Route::get('/user/{id}', 'UserProfileController@create');



//Admin Routes
Route::get('/admin/dashboard', 'UserShowController@getAllUsers')->name('AdminDashboard');
Route::get('/admin/user', 'UserShowController@getAllUsers');
Route::get('/admin/dashboard/user', 'UserShowController@showUserCount')->name('AddUser');
Route::get('/admin/dashboard/restaurant', 'UserShowController@getAllRestaurant')->name('AddRestaurant');

Route::get('/admin/dashboard/profile', 'AdminController@AdminProfileShow')->name('AdminProfile');

//delete route for Admin
Route::delete('/admin/dashboard/user/{id}', 'UserShowController@destroyUser');
Route::delete('/admin/dashboard/restaurant/{id}', 'UserShowController@destroyRest');


//edit route for admin (Restaurant)
Route::post('/admin/dashboard/restaurant/{id}', 'UserShowController@update');
Route::get('/admin/dashboard/restaurant/{id}', 'UserShowController@create');

//edit route for admin profile
Route::post('/admin/dashboard/profile/{id}', 'AdminController@update');
Route::get('/admin/dashboard/profile/{id}', 'AdminController@create');




//Restaurant Routes
Route::get('/restaurant/dashboard', 'RestaurantController@index')->name('RestaurantDashboard');

Route::get('/restaurant/addmenu', function () {
    return view('Restaurant/RestaurantMenuAdd');
})->name('RestaurantMenuAdd');

Route::post('/restaurant/addmenu', 'ProductController@store');

Route::get('/restaurant/menu', 'RestaurantController@getAllProducts')->name('RestaurantDashMenu');

//delete route for restaurant
Route::delete('/restaurant/menu/{id}', 'ProductController@destroyProd');

//edit route for restaurant
Route::post('/restaurant/menu/{id}', 'ProductController@update');
Route::get('/restaurant/menu/{id}', 'ProductController@create');

//edit route for restaurant profile
Route::post('/restaurant/{id}', 'RestaurantController@update');
Route::get('/restaurant/{id}', 'RestaurantController@create');

//shopping cart route for restaurant 
Route::get('/menu/add-to-cart/{id}', [
    'uses' => 'CartController@getAddToCart',
    'as' => 'Restaurant.addToCart'
]);

Route::get('/menu/shopping-cart', [
    'uses' => 'CartController@getCart',
    'as' => 'Restaurant.shoppingCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'Restaurant.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'Restaurant.remove'
]);





//Auth Route in group
Route::group(['middleware' => 'auth'], function () {
    Route::get('/menu', 'ProductController@getAllProducts');
    Route::get('/restaurant', 'RestaurantController@index')->name('home');
    Route::get('/superadministrator', 'UserShowController@getAllUsers')->name('superadministrator');
});
