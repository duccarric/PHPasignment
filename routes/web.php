<?php

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
\Illuminate\Support\Facades\Route::resource('/product', 'productController');
\Illuminate\Support\Facades\Route::post('/product/create1','productController@store');
\Illuminate\Support\Facades\Route::get('/product/create','productController@create');
