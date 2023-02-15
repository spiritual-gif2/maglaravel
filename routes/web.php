<?php

use App\Http\Controllers\AdminProductController;
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

### Products
# products list 
Route::get('/admin/product/list','\App\Http\Controllers\AdminProductController@list')->name('admin.product.list');
# add product
Route::get('/admin/product/add','\App\Http\Controllers\AdminProductController@add')->name('admin.product.add');
Route::post('/admin/product/store','\App\Http\Controllers\AdminProductController@store')->name('admin.product.store');
# delete product
Route::delete('/admin/product/{id}/delete',[AdminProductController::class, 'delete'])->name('admin.product.delete');

# edit product
Route::get('/admin/product/{id}/edit',[AdminProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/product/{id}/update',[AdminProductController::class, 'update'])->name('admin.product.update');


Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
