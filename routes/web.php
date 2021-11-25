<?php

use Illuminate\Support\Facades\Route;

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

include "route_admin.php";
include "router_user.php";
//FRONTEND
Route::group(['namespace' => 'frontend'], function(){
    //Login & Register
    Route::group(['namespace' => 'Auth'], function (){
        Route::get('login','LoginController@getLogin')->name('get.login');
        Route::post('login','LoginController@postLogin');
        Route::get('register','RegisterController@getRegister')->name('get.register');
        Route::post('register','RegisterController@postRegister');
        Route::get('logout','LoginController@getLogout')->name('get.logout');
    });
    //Trangchu
    Route::get('/','HomeController@index')->name('get.home');
    //Danh muc sp
    Route::get('danh-muc/{slug}','CategoryController@index')->name('get.category');
    //Chi tiet sp
    Route::get('san-pham/{slug}','ProductDetailController@index')->name('get.product_detail');
    //Menu bai viet
    Route::get('menu/{slug}','MenuController@index')->name('get.menu');
    //Tag bai viet
    Route::get('tag/{slug}','TagController@index')->name('get.tag');
    //Blog
    Route::get('bai-viet', 'ArticleController@index')->name('get.blog');
    //Chi tiet bai viet
    Route::get('bai-viet/{slug}','ArticleDetailController@index')->name('get.article_detail');
    //Keyword
    Route::get('keyword/{slug}','KeywordController@index')->name('get.keyword');
    //Shopping Cart
    Route::get('don-hang', 'ShoppingCartController@index')->name('get.shopping');




    //Pay Cart
    Route::get('thanh-toan', 'ShoppingCartController@checkout')->name('get.shopping.checkout');
    Route::post('thanh-toan', 'ShoppingCartController@pay');




    //Ajax preview product
    Route::group(['namespace' => 'Ajax','prefix'=>'ajax'], function (){
        Route::get('view-product/{id}','AjaxViewProductController@getPreviewProduct')->name('get_ajax.product_preview');
        //Ajax cart
        Route::get('add/cart/{id}','AjaxShoppingCartController@add')->name('get_ajax.shopping.add');
        Route::get('delete/cart/{id}','AjaxShoppingCartController@delete')->name('get_ajax.shopping.delete');
        Route::get('update/cart/{id}','AjaxShoppingCartController@update')->name('get_ajax.shopping.update');


    });

});
