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

Route::get('/', 'ProductsController@list');
Route::get('products/details/{id}', 'ProductsController@details')->where('id', '[0-9]+');
Route::get('products/new', 'ProductsController@new');
Route::get('products/json', 'ProductsController@json');

Route::post('products/added', 'ProductsController@add');
