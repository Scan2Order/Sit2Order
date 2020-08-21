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

Route::get('/menu', function () {
    return view('Restaurant/RestaurantMenuShow');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
