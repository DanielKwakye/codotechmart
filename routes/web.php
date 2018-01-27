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


Route::prefix('/')->group(function(){
    
    Route::get('/','Front\WebpageController@shops');
    Route::get('/shop/detail','Front\WebpageController@shopDetail');
    Route::get('/cart','Front\WebpageController@cart');
    Route::get('add/compare','Front\WebpageController@addCompare');
    Route::get('add/wishlist','Front\WebpageController@addWishlist');
    Route::get('/checkout','Front\WebpageController@checkout');
    Route::get('/login/register','Front\WebpageController@loginOrRegister');
    Route::get('profile','Front\WebpageController@profile');
    Route::get('products','Front\WebpageController@products');

    Route::get('test',function (){

    });
    
});