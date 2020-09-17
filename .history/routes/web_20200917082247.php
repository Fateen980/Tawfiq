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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/addProduct', 'HomeController@addProduct')->name('addProduct');

Auth::routes();
Route::get('/addProduct', 'HomeController@addProduct')->name('addProduct');

Auth::routes();

Route::get('/editProduct', 'HomeController@editProduct')->name('editProduct');

Auth::routes();

Route::get('/deleteProduct', 'HomeController@deleteProduct')->name('deleteProduct');

