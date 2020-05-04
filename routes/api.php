<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* User */
Route::get('users', 'UserController@getAll');
Route::get('user/{id}', 'UserController@getById');
Route::post('user', 'UserController@create');
Route::put('user/{id}', 'UserController@update');
Route::delete('user/{id}', 'UserController@delete');

/* Address */
Route::get('addresses', 'AddressController@getAll');
Route::get('address/{id}', 'AddressController@getById');
Route::post('address', 'AddressController@create');
Route::put('address/{id}', 'AddressController@update');
Route::delete('address/{id}', 'AddressController@delete');

/* Ingredient */
Route::get('ingredients', 'IngredientController@getAll');
Route::get('ingredient/{id}', 'IngredientController@getById');
Route::post('ingredient', 'IngredientController@create');
Route::put('ingredient/{id}', 'IngredientController@update');
Route::delete('ingredient/{id}', 'IngredientController@delete');

/* Product */
Route::get('products', 'ProductController@getAll');
Route::get('product/{id}', 'ProductController@getById');
Route::post('product', 'ProductController@create');
Route::put('product/{id}', 'ProductController@update');
Route::delete('product/{id}', 'ProductController@delete');

/* Order */
Route::get('orders', 'OrderController@getAll');
Route::get('order/{id}', 'OrderController@getById');
Route::post('order', 'OrderController@create');
Route::put('order/{id}', 'OrderController@update');
Route::delete('order/{id}', 'OrderController@delete');

/* Order Product */
Route::get('order-product/{id}', 'OrderProductController@getById');
Route::post('order-product', 'OrderProductController@create');
Route::put('order-product/{id}', 'OrderProductController@update');
Route::delete('order-product/{id}', 'OrderProductController@delete');
