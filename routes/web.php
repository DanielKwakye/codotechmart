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
    Route::get('order/detail','Front\WebpageController@orderDetail');

    Route::auth();
});






Route::group(['prefix'=>'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::get('/', 'Admin\AdminController@index')->middleware('admin');
  Route::post('/addCategory', 'Admin\AdminController@addCategory');
  Route::post('/shop/deactivate', 'Admin\AdminController@deactivate');
  Route::post('/shop/activate', 'Admin\AdminController@activate');
  Route::get('/active-shops', 'Admin\AdminController@activeShops');
  Route::get('/deactivated-shops', 'Admin\AdminController@deactivatedShops')->middleware('admin');
  Route::post('/addMonthlyPlan', 'Admin\AdminController@addMonthlyPlan');

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
