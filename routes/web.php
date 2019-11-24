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

Route::get('/', function () {
    return view('viewProduct');
});

//Route::get('/{category}','CategoryController@viewCategory')->name('viewListProduct');

//Route::get('{category}/{product}','CategoryController@viewProduct')->name('viewProductDetail');

Route::group(['prefix' => 'admin'],function(){
    Route::resources([
         'categories'=>'AdminCategoryController',
         'users'=>'AdminUserController',
         'sellers'=>'AdminSellerController',
         'employees'=>'AdminEmployeeController',
         'warehouses'=>'AdminWareHouseController',
         'orders'=>'AdminOrderController',
    ]);
 });