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


use App\Front\Plugins\Cart;

Route::prefix('/')->group(function(){
    
    Route::get('/','Front\WebpageController@shops');
    Route::get('/shop/{id}/detail','Front\WebpageController@shopDetail');
    Route::get('/cart','Front\WebpageController@cart');
    Route::get('add/cart','Front\WebpageController@addCart');
    Route::get('remove/cart/{id}','Front\WebpageController@removeCart');
    Route::get('add/compare/{id}','Front\WebpageController@addCompare');
    Route::get('add/wishlist/{id}','Front\WebpageController@addWishlist');
    Route::get('remove/compare/{id}','Front\WebpageController@removeCompare');
    Route::get('remove/wishlist/{id}','Front\WebpageController@removeWishlist');
    Route::get('/login/register/{token?}','Front\WebpageController@loginOrRegister');
    Route::get('profile','Front\WebpageController@profile');
    Route::get('shop/{id}/products','Front\WebpageController@products');
    Route::get('/wishlist','Front\WebpageController@favorite');
    Route::get('attempt/save/wishlist','Front\WebpageController@saveWishlist');
    Route::get('/compare','Front\WebpageController@compare');
    Route::get('/faq','Front\WebpageController@faq');
    Route::get('/about','Front\WebpageController@about');
    Route::get('order/detail','Front\WebpageController@orderDetail');
    Route::get('hang/cart','Front\WebpageController@hangCart');
    Route::get('main/cart','Front\WebpageController@mainCart');
    Route::get('compare/section','Front\WebpageController@compareSection');
    Route::get('favorite/section','Front\WebpageController@favoriteSection');
    Route::get('product/detail/{id}','Front\WebpageController@productDetail');
    Route::post('update/cart','Front\WebpageController@updateCart');
    Route::get('cart/summary', 'Front\WebpageController@cartSummary');


    Route::auth();

//    =================== methods called when user is logged In ===================================
    Route::get('save/wishlist','Front\UsersController@saveWishlist');
    Route::get('/checkout','Front\UsersController@checkout');
    Route::get('order/received','Front\UsersController@orderReceived');
    Route::post('checkout', 'Front\UsersController@submitCheckout');
});



Route::group(['prefix'=>'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::get('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');
  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');



  Route::get('/', 'Admin\AdminController@dashboard')->middleware('admin');

  Route::get('/shops', 'Admin\AdminController@index')->middleware('admin');
  Route::get('/couriers', 'Admin\AdminController@couriers')->middleware('admin');
  Route::post('/addCategory', 'Admin\AdminController@addCategory');
  Route::post('/shop/deactivate', 'Admin\AdminController@deactivate');
  Route::post('/shop/activate', 'Admin\AdminController@activate');
  Route::post('/courier/deactivate', 'Admin\AdminController@deactivateCourier');
  Route::post('/courier/activate', 'Admin\AdminController@activateCourier');
  Route::get('/active-shops', 'Admin\AdminController@activeShops')->middleware('admin');;
  Route::get('/active-couriers', 'Admin\AdminController@activeCouriers')->middleware('admin');;
  Route::get('/deactivated-shops', 'Admin\AdminController@deactivatedShops')->middleware('admin');
  Route::get('/deactivated-couriers', 'Admin\AdminController@deactivatedCouriers')->middleware('admin');
  Route::get('/courierPlans', 'Admin\AdminController@courierPlans')->middleware('admin');;
  Route::get('/shopPlans', 'Admin\AdminController@shopPlans')->middleware('admin');;
  Route::post('/courier/update', 'Admin\AdminController@update');
  Route::post('/shop/update', 'Admin\AdminController@ShopMonthupdate');
  Route::post('changeoptions','Admin\AdminController@changeoptions');
  Route::post('editCategory','Admin\AdminController@editCategory');


  Route::post('category/delete','Admin\AdminController@deleteCategory');
  Route::post('complaint/custom-date','Admin\AdminController@customDate');
  Route::get('complaints','Admin\AdminController@complaints')->middleware('admin');
  Route::get('complaint/custom-date','Admin\AdminController@complaints')->middleware('admin');

    Route::get('referrals','Admin\AdminController@referral');


  Route::get('options','Admin\AdminController@options')->middleware('admin');
  Route::get('shopcategories','Admin\AdminController@category')->middleware('admin');
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

  Route::get('subscription','Courier\CourierController@subscribe');

  Route::get('notify','Courier\CourierController@notify');
  Route::get('listen','Courier\CourierController@listen');
  Route::get('markasread/{id}','Courier\CourierController@markasread');
  Route::get('notification/get','Courier\CourierController@notificationtest');


});




/*********************  This is route for the admin side plese do not touch **************/
Route::group(['prefix'=>'welcome'],function(){
Route::get('/signup','AdministrationControllers\SignupController@index');
Route::post('/sendemail','AdministrationControllers\SignupController@sendMail');
Route::post('/addnewshop','AdministrationControllers\SignupController@addNewShop');
Route::get('/validatetoken','AdministrationControllers\SignupController@validateToken');
});




Route::group(['prefix' => 'administration'], function () {
Route::get('/login', 'ShopadminAuth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'ShopadminAuth\LoginController@login');
Route::get('/logout', 'ShopadminAuth\LoginController@logout')->name('logout');

Route::get('/register', 'ShopadminAuth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'ShopadminAuth\RegisterController@register');

Route::post('/password/email', 'ShopadminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'ShopadminAuth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'ShopadminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/password/reset/{token}', 'ShopadminAuth\ResetPasswordController@showResetForm');


Route::get('/dashboard','AdministrationControllers\DashboardController@index');

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
Route::post('/savepaymentmethod','AdministrationControllers\PaymentMethodController@savePaymentMethod');

Route::get('/attributes','AdministrationControllers\AttributeFeaturesController@index');
Route::post('/addnewattribute','AdministrationControllers\AttributeFeaturesController@addNewAttribute');
Route::get('/deleteattribute/{id}','AdministrationControllers\AttributeFeaturesController@deleteAttribute');
Route::get('deletevalue/{id}','AdministrationControllers\AttributeFeaturesController@deleteValueOfAttributeOrFeature');
Route::post('/addvaluetoattribute','AdministrationControllers\AttributeFeaturesController@addValueToAttribute');
Route::get('/attributefeaturedetails/{id}','AdministrationControllers\AttributeFeaturesController@attributeDetails');
Route::post('/editattributefeature','AdministrationControllers\AttributeFeaturesController@editAttributeFeatureValue');


Route::get('/brand','AdministrationControllers\ProductBrandController@index');
Route::post('/addbrand','AdministrationControllers\ProductBrandController@addBrand');
Route::get('/deletebrand','AdministrationControllers\ProductBrandController@deleteBrand');
Route::post('/editbrand','AdministrationControllers\ProductBrandController@editBrand');

Route::get('/addproduct','AdministrationControllers\ProductsController@index');
Route::get('/productlist','AdministrationControllers\ProductsController@productList');
Route::get('/deleteproduct','AdministrationControllers\ProductsController@deleteproduct');
Route::post('/addnewproduct','AdministrationControllers\ProductsController@addNewProduct');

Route::get('/emailsettings','AdministrationControllers\EmailSettingsController@index');
Route::post('/saveemailsettings','AdministrationControllers\EmailSettingsController@saveEmailSettings');
Route::post('/savetemplatesettings','AdministrationControllers\EmailSettingsController@saveTemplateSettings');

Route::get('/smssettings','AdministrationControllers\EmailSettingsController@smsSettings');
Route::post('/savesmssettings','AdministrationControllers\EmailSettingsController@saveSmsSettings');

Route::get('/generalsettings','AdministrationControllers\GeneralSettingsController@index');
Route::post('/savegeneralsettings','AdministrationControllers\GeneralSettingsController@saveGeneralSettings');






Route::get('slydepay','AdministrationControllers\SignupController@slydepay');
});



/************************** End of Admin Route.Please do not touch ******************************************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test',function (){
//    $res = \App\Front\Plugins\Compare::getInstance()->all();
//    foreach ($res as $r){
//        print_r($r['item']->name) . " <br>";
//    }
    //print_r($res);
    return Cart::getInstance()->getFirstItem()->item->shop->id;
//    return "helo";
//    $res = \Illuminate\Support\Facades\DB::table('mysql.user')->where('user','root')->where('host','localhost')->get(['max_user_connections']);
//    print_r($res);
//    $res = \Illuminate\Support\Facades\DB::raw("GRANT ALL ON *.* TO 'root'@'localhost';GRANT SELECT, INSERT ON *.* TO 'root'@'localhot';");
//    print_r($res);

});
