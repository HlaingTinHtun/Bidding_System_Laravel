<?php

Route::group(['prefix' => 'user'], function () {
    
    Route::get('loginform', 'Customer\CustomerController@loginForm');



    Route::group(['middleware' => 'auth'], function () {
        Route::get('wishlist', 'Customer\CustomerController@wishList');
        Route::get('addtowishlist/{id}', 'Customer\CustomerController@addToWishList');
        Route::get('orderform/{id}', 'Customer\CustomerController@orderForm');
        Route::post('postorder/{id}', 'Customer\CustomerController@postOrder');
        Route::get('myaccount', 'Customer\CustomerController@account');
    });
});