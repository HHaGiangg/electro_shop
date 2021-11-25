<?php
//BACKEND
Route::group(['namespace' => 'user','prefix'=>'user'], function(){
    //Trangchu
    Route::get('/','UserController@index')->name('get_user.home');





});









