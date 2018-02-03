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
    Route::get('/favorites','Front\WebpageController@favorite');
    Route::get('/compare','Front\WebpageController@compare');
    Route::get('/faq','Front\WebpageController@faq');
    Route::get('/about','Front\WebpageController@about');

    Route::auth();
});






Route::group(['prefix'=>'admin'], function () {
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




/*********************  This is route for the admin side plese do not touch **************/
Route::group(['prefix'=>'welcome'],function(){
Route::get('/signup','AdministrationControllers\SignupController@index');
Route::post('/sendemail','AdministrationControllers\SignupController@sendMail');
Route::post('/addnewshop','AdministrationControllers\SignupController@addNewShop');
});

Route::group(['prefix' => 'administration'], function () {
Route::get('/login', 'ShopadminAuth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'ShopadminAuth\LoginController@login');
Route::post('/logout', 'ShopadminAuth\LoginController@logout')->name('logout');

Route::get('/register', 'ShopadminAuth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'ShopadminAuth\RegisterController@register');

Route::post('/password/email', 'ShopadminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'ShopadminAuth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'ShopadminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/password/reset/{token}', 'ShopadminAuth\ResetPasswordController@showResetForm');

Route::get('/tags','AdministrationControllers\TagsController@index');
Route::get('/deletetag','AdministrationControllers\TagsController@deleteTag');
Route::post('/addtag','AdministrationControllers\TagsController@addNewTag');
Route::post('/edittag','AdministrationControllers\TagsController@editTag');

Route::get('/category','AdministrationControllers\CategoryController@index');
Route::get('/deletecategory','AdministrationControllers\CategoryController@deleteCategory');
Route::post('/addcategory','AdministrationControllers\CategoryController@addCategory');

Route::get('/branches','AdministrationControllers\BranchController@index');
Route::get('/branchdetails/{id}','AdministrationControllers\BranchController@branchDetails');
Route::get('/addnewbranch','AdministrationControllers\BranchController@addNewBranch');
Route::post('/addnewbranch','AdministrationControllers\BranchController@saveBranch');

Route::get('/paymentmethod','AdministrationControllers\PaymentMethodController@index');

Route::get('/attributes','AdministrationControllers\AttributeFeaturesController@index');
Route::post('/addnewattribute','AdministrationControllers\AttributeFeaturesController@addNewAttribute');
Route::get('/deleteattribute/{id}','AdministrationControllers\AttributeFeaturesController@deleteAttribute');
Route::get('deletevalue/{id}','AdministrationControllers\AttributeFeaturesController@deleteValueOfAttributeOrFeature');
Route::post('/addvaluetoattribute','AdministrationControllers\AttributeFeaturesController@addValueToAttribute');
Route::get('/attributefeaturedetails/{id}','AdministrationControllers\AttributeFeaturesController@attributeDetails');
Route::post('/editattributefeature','AdministrationControllers\AttributeFeaturesController@editAttributeFeatureValue');
});

/************************** End of Admin Route.Please do not touch ******************************************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
