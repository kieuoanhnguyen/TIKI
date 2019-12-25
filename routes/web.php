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

Route::group(['prefix' => '/'],function()
{

   Route::get('/', 'HomeController@index');

   Route::get('/checkout',function()
   {
      return view('home.checkOut');
   })->name('checkout');

   Route::resources([
      'orders' => 'OrderController',
   ]);

   Route::resources([
      'carts'=>'CartController'
   ]);

   Route::get('/search','HomeController@search')->name('search');
});
Route::group(['prefix' => 'admin'],function()
{
   Route::group(['namespace' => 'Admin\Auth','as'=>'admin.'],function()
   {

   Route::get('/login','LoginController@showLoginForm')->name('login');
   
   Route::post('/login','LoginController@login');;

   Route::post('/logout','LoginController@logout')->name('logout');

   });
   Route::resources([
      'accounts'=>'AdminAccountController',
      'categories'=>'AdminCategoryController',
      'users'=>'AdminUserController',
      'sellers'=>'AdminSellerController',
      'employees'=>'AdminEmployeeController',
      'warehouses'=>'AdminWareHouseController',
      'orders'=>'AdminOrderController',
      'shippers'=>'AdminShipperController',
    ]);
   
});

 Route::group(['prefix' => 'admin'],function()
{
   Route::resources([
      'accounts'=>'AdminAccountController',
      'categories'=>'AdminCategoryController',
      'users'=>'AdminUserController',
      'sellers'=>'AdminSellerController',
      'employees'=>'AdminEmployeeController',
      'warehouses'=>'AdminWareHouseController',
      'orders'=>'AdminOrderController',
      'shippers'=>'AdminShipperController',
 ]);

 });

Route::post('files','FileController@store');


Route::group(['prefix' => 'seller'],function()
{
   Route::get('/','SellerProductController@index');
   
   Route::group(['namespace' => 'Seller\Auth','as'=>'seller.'], function(){

   Route::get('/login','LoginController@showLoginForm')->name('login');
   
   Route::post('/login','LoginController@login');

   Route::get('/register','RegisterController@showRegisterForm')->name('register');
   
   Route::post('/register','RegisterController@register');

   Route::post('/logout','LoginController@logout')->name('logout');
   });

   Route::resources([
     'products' => 'SellerProductController',
   ]);
 });

 Route::group(['namespace' => 'Auth','as'=>'user.'],function()
{
   Route::get('/login','LoginController@showLoginForm')->name('login');
   
   Route::post('/login','LoginController@login');

   Route::get('/register','RegisterController@showRegisterForm')->name('register');
   
   Route::post('/register','RegisterController@register');

   Route::post('/logout','LoginController@logout')->name('logout');

});

 Route::group(['prefix' => 'shipper', 'namespace' => 'Shipper\Auth', 'as'=>'shipper.'],function()
 {
    Route::get('/login','LoginController@showLoginForm')->name('login');
    
    Route::post('/login','LoginController@login');
 
    Route::post('/logout','LoginController@logout')->name('logout');
 
 
  });

 //Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/{product}','AdminProductController@getImages');

Route::get('/{category}','CategoryController@viewCategory')->name('viewListProduct');

Route::get('/{category}/{product}','CategoryController@viewProduct')->name('viewProductDetail');