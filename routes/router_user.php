<?php

Route::group(['namespace' => 'user','prefix'=>'user','middleware'=>'checkLoginUser'], function(){
    //Trangchu
    Route::get('/','UserController@index')->name('get_user.home');
    //thông tin
    Route::get('profile/{id}','UserProfileController@index')->name('get_user.profile');
    Route::post('profile/{id}','UserProfileController@update')->name('get_user.profile.store');
    //Đơn Hàng
    Route::prefix('transaction')->group(function(){
        Route::get('','UserTransactionController@index')->name('get_user.transaction.index');
        Route::get('view/{id}','UserTransactionController@view')->name('get_user.transaction.view');
        Route::get('success/{id}','UserTransactionController@success')->name('get_user.transaction.success');
        Route::get('cancel/{id}','UserTransactionController@cancel')->name('get_user.transaction.cancel');
        Route::get('delete/{id}','UserTransactionController@delete')->name('get_user.transaction.delete');

    });
    //Đơn Hàng
    Route::prefix('order')->group(function(){
        Route::get('delete/{id}','UserOderController@delete')->name('get_user.order.delete');

    });



});









