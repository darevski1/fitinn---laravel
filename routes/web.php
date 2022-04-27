<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CategoryController;
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


Route::get('/', function () {
    return view('main_page/index');
});

Auth::routes();
 
Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('/category', 'CategoryController');
Route::resource('/products', 'ProductCOntroller');

// Public Pages
Route::get("/menu", "PublicController@menu")->name('menu');
Route::get("/menu", "PublicController@getCategory")->name('menu');
Route::get("/items/{id}", "PublicController@getByid")->name('items/');