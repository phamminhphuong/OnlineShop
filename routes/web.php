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
});
