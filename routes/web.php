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

Route::get('/', 'Home\HomeController@index');
Route::get('/category/{id}', 'Home\CategoryController@index');
Route::get('/post/{id}', 'Home\PostController@index');
Route::get('/product/{id}', 'Home\ProductController@index');

// phan route admin
Route::group(['prefix' => 'admin'],function(){
     // dashboard
     Route::group(['prefix' => 'dashboard'],function(){
        Route::get('list','DashboardController@getDashbord');
    });
    // vendor
    Route::group(['prefix' => 'vendor'],function(){
        Route::get('list','VendorController@getListVendor');
        Route::get('add','VendorController@getAddVendor');
        Route::post('add','VendorController@postAddVendor');
        Route::get('edit/{id}','VendorController@getEditVendor');
        Route::post('edit/{id}','VendorController@postEditVendor');
        Route::get('delete/{id}','VendorController@postDeleteVendor');
    });
    //  menu
    Route::group(['prefix' => 'menu'],function(){
        Route::get('list','MenuController@getListMenu');
        Route::get('add','MenuController@getAddMenu');
        Route::post('add','MenuController@postAddMenu');
        Route::get('edit/{id}','MenuController@getEditMenu');
        Route::post('edit/{id}','MenuController@postEditMenu');
        Route::get('delete/{id}','MenuController@postDeleteMenu');
    });
    //  post
    Route::group(['prefix' => 'post'],function(){
        Route::get('list','PostController@getListPost');
        Route::get('add','PostController@getAddPost');
        Route::post('add','PostController@postAddPost');
        Route::get('edit/{id}','PostController@getEditPost');
        Route::post('edit/{id}','PostController@postEditPost');
        Route::get('delete/{id}','PostController@postDeletePost');
    });
    //  category
    Route::group(['prefix' => 'category'],function(){
        Route::get('list','CategoryController@getListCategory');
        Route::get('add','CategoryController@getAddCategory');
        Route::post('add','CategoryController@postAddCategory');
        Route::get('edit/{id}','CategoryController@getEditCategory');
        Route::post('edit/{id}','CategoryController@postEditCategory');
        Route::get('delete/{id}','CategoryController@postDeleteCategory');
    });
    //  product
    Route::group(['prefix' => 'product'],function(){
        Route::get('list','ProductController@getListProduct');
        Route::get('add','ProductController@getAddProduct');
        Route::post('add','ProductController@postAddProduct');
        Route::get('edit/{id}','ProductController@getEditProduct');
        Route::post('edit/{id}','ProductController@postEditProduct');
        Route::get('delete/{id}','ProductController@postDeleteProduct');
    });
    //  user
    Route::group(['prefix' => 'users'],function(){
        Route::get('list','UserController@getListUser');
        Route::get('add','UserController@getAddUser');
        Route::post('add','UserController@postAddUser');
        Route::get('edit/{id}','UserController@getEditUser');
        Route::post('edit/{id}','UserController@postEditUser');
        Route::get('delete/{id}','UserController@postDeleteUser');
    });
    //  slide
    Route::group(['prefix' => 'slide'],function(){
        Route::get('list','SlideController@getListSlide');
        Route::get('add','SlideController@getAddSlide');
        Route::post('add','SlideController@postAddSlide');
        Route::get('edit/{id}','SlideController@getEditSlide');
        Route::post('edit/{id}','SlideController@postEditSlide');
        Route::get('delete/{id}','SlideController@postDeleteSlide');
    });
    //  instruction
    Route::group(['prefix' => 'instruction'],function(){
        Route::get('list','InstructionController@getListIntruction');
        Route::get('add','InstructionController@getAddIntruction');
        Route::post('add','InstructionController@postAddIntruction');
        Route::get('edit/{id}','InstructionController@getEditIntruction');
        Route::post('edit/{id}','InstructionController@postEditIntruction');
        Route::get('delete/{id}','InstructionController@postDeleteIntruction');
    });
    //  config
    Route::group(['prefix' => 'config'],function(){
        Route::get('list','ConfigController@getListConfig');
        Route::get('add','ConfigController@getAddConfig');
        Route::post('add','ConfigController@postAddConfig');
        Route::get('edit/{id}','ConfigController@getEditConfig');
        Route::post('edit/{id}','ConfigController@postEditConfig');
        Route::get('delete/{id}','ConfigController@postDeleteConfig');
    });
    //  privacy
    Route::group(['prefix' => 'privacy'],function(){
        Route::get('list','PrivacyController@getListPrivacy');
        Route::get('add','PrivacyController@getAddPrivacy');
        Route::post('add','PrivacyController@postAddPrivacy');
        Route::get('edit/{id}','PrivacyController@getEditPrivacy');
        Route::post('edit/{id}','PrivacyController@postEditPrivacy');
        Route::get('delete/{id}','PrivacyController@postDeletePrivacy');
    });
});
