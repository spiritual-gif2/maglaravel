<?php

use Illuminate\Routing\Route as RoutingRoute;
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

### Main routes
Route::get('/about','App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");

### Products display
Route::get('/product','App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/product/{id}','App\Http\Controllers\ProductController@show')->name('product.show');

### Admin routes
Route::get('/admin','App\Http\Controllers\AdminController@index')->name('admin.index');