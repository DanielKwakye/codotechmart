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
    \Illuminate\Support\Facades\Hash::make('password');
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
  Route::get('/login', 'CourierAuth\LoginController@showLoginForm');
  Route::post('/login', 'CourierAuth\LoginController@login');
  Route::get('/logout', 'CourierAuth\LoginController@logout');

  Route::get('/register', 'CourierAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'CourierAuth\RegisterController@register');

  Route::post('/password/email', 'CourierAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'CourierAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'CourierAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'CourierAuth\ResetPasswordController@showResetForm');
  Route::get('/','Courier\CourierController@index')->middleware('courier');
  Route::get('profile','Courier\CourierController@myprofile')->middleware('courier');
  Route::get('delivery-history','Courier\CourierController@deliveryHistory')->middleware('courier');
  Route::get('pending-orders','Courier\CourierController@pendingOrders')->middleware('courier');
  Route::get('requestedshops','Courier\CourierController@requestedshops')->middleware('courier');
  Route::get('myshops','Courier\CourierController@myshops');
  Route::get('all-shops','Courier\CourierController@allShops')->middleware('courier');
  Route::post('changepassword','Courier\CourierController@changepassword');
  Route::get('neworders/{id}','Courier\CourierController@neworders')->middleware('courier');
  Route::get('canceldelivery/{id}','Courier\CourierController@canceldelivery')->middleware('courier');
  Route::post('imageupload','Courier\CourierController@imageUpload');
  Route::post('registeration','Courier\CourierController@register');
  Route::post('delivery_days','Courier\CourierController@deliveryDays');
  Route::post('request','Courier\CourierController@request');
  Route::get('update','Courier\CourierController@update')->middleware('courier');
  Route::get('options','Courier\CourierController@options')->middleware('courier');
  Route::get('charts','Courier\CourierController@charts')->middleware('courier');
  Route::post('cancelRequest','Courier\CourierController@cancelRequest');
  Route::post('profileinfo','Courier\CourierController@profileinfo');
  Route::post('changeoptions','Courier\CourierController@changeoptions');
  Route::get('notify','Courier\CourierController@notify');
  Route::get('markasread/{id}','Courier\CourierController@markasread');
  // Route::get('notification/get','Courier\CourierController@notificationtest');
  // Route::get('homes',function(){
  //   return view('courier.home');
  // });
});

Route::group(['prefix' => 'shopadmin'], function () {
  Route::get('/login', 'ShopadminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ShopadminAuth\LoginController@login');
  Route::post('/logout', 'ShopadminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'ShopadminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ShopadminAuth\RegisterController@register');

  Route::post('/password/email', 'ShopadminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ShopadminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ShopadminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ShopadminAuth\ResetPasswordController@showResetForm');
});
