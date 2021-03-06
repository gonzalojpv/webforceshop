<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\RegisterController@login');

Route::resource('products', 'Api\ProductController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('cart', 'Api\CartDetailConroller')->only([
    'index', 'show', 'store', 'update', 'destroy'
]);

Route::middleware('auth:api')->group( function () {
    Route::resource('products', 'Api\ProductController')->only([
        'create', 'store', 'update',
    ]);
});
