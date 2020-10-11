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

//default route
Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return redirect('/register');
});

Route::post('/user/rate/{id}', 'UserProfileController@rate');
Route::get('/user/rate/{id}', 'UserProfileController@createRate');

// Route::get('Rating', function () {
//     return view('/User.UserRating');
// });

//about us page
Route::get('/aboutus', function () {
    return view('aboutUs');
});

Route::get('/reviews', 'UserProfileController@showUserReview');

//after user successfully order redirect to this page
Route::get('/success', function () {
    return view('Restaurant/restaurant-assets/orderSuccess');
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

//delete route for Admin management
Route::delete('/admin/dashboard/user/{id}', 'UserShowController@destroyUser');
Route::delete('/admin/dashboard/restaurant/{id}', 'UserShowController@destroyRest');

//edit route for admin (Restaurant)
// Route::post('/admin/dashboard/restaurant/{id}', 'UserShowController@update');
// Route::get('/admin/dashboard/restaurant/{id}', 'UserShowController@create');

//view route for admin (Restaurant)
Route::get('/admin/dashboard/restaurant/view/{id}', 'UserShowController@viewRest');
Route::get('/admin/dashboard/user/view/{id}', 'UserShowController@viewUser');

//edit route for admin profile
Route::post('/admin/dashboard/profile/{id}', 'AdminController@update');
Route::get('/admin/dashboard/profile/{id}', 'AdminController@create');

//edit route for admin manage
Route::get('/admin/dashboard/user/edit/{id}', 'AdminController@createUser');
Route::post('/admin/dashboard/user/edit/{id}', 'AdminController@editUser');
Route::get('/admin/dashboard/restaurant/edit/{id}', 'AdminController@createRestaurant');
Route::post('/admin/dashboard/restaurant/edit/{id}', 'AdminController@editRestaurant');


Route::post('/restaurant/orders/{id}', 'RestaurantController@status');











//Restaurant Routes
Route::get('/restaurant', 'RestaurantController@index')->name('RestaurantDashboard');
Route::get('/restaurant/addmenu', function () {
    return view('Restaurant/RestaurantMenuAdd');
})->name('RestaurantMenuAdd');
Route::post('/restaurant/addmenu', 'ProductController@store');
Route::get('/restaurant/menu', 'RestaurantController@getAllProducts')->name('RestaurantDashMenu');
Route::get('/restaurant/orders', 'RestaurantController@getOrder')->name('RestaurantOrder');

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

//reduce item button route for shopping cart
Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'Restaurant.reduceByOne'
]);
Route::get('/increase/{id}', [
    'uses' => 'CartController@getIncreaseByOne',
    'as' => 'Restaurant.increaseByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'Restaurant.remove'
]);

//checkout route for shopping cart restaurant
Route::get('/menu/checkout', [
    'uses' => 'CartController@getCheckout',
    'as' => 'Restaurant.RestaurantCheckout'
]);

Route::post('/menu/checkout', [
    'uses' => 'CartController@PostCheckout',
    'as' => 'Restaurant.RestaurantCheckout'
]);

// Route::post('/menu/checkout/{id}', [
//     'uses' => 'CartController@PostCheckout',
//     'as' => 'Restaurant.RestaurantCheckout'
// ]);



//Auth Route in group
Route::group(['middleware' => 'auth'], function () {
    Route::get('/menu', 'ProductController@getAllProducts');
    Route::get('/restaurant', 'RestaurantController@index')->name('home');
    Route::get('/superadministrator', 'UserShowController@getAllUsers')->name('superadministrator');
});
