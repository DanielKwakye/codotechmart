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
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'courier'], function () {
  Route::get('/login', 'CourierAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CourierAuth\LoginController@login');
  Route::post('/logout', 'CourierAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CourierAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CourierAuth\RegisterController@register');

  Route::post('/password/email', 'CourierAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CourierAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CourierAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CourierAuth\ResetPasswordController@showResetForm');
});
