<?php

/*
|--------------------------------------------------------------------------
| Dealer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'dealer'], function () {

    Route::get('login', 'Dealer\Auth\AuthController@showLoginForm');
    Route::post('login', 'Dealer\Auth\AuthController@login');
    // For Vendor Register
    Route::get('register', 'Dealer\Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Dealer\Auth\AuthController@register');

    Route::group(['middleware' => 'dealer'], function () {
        Route::get('home', 'VendorController@index');
        Route::get('myposts', 'VendorController@myPosts');
        Route::get('buyerposts', 'VendorController@buyerPosts');
        Route::get('newitem', 'VendorController@newItem');
        Route::get('creditmemo', 'VendorController@creditMemo');
        Route::get('invoice', 'VendorController@invoice');
        Route::post('newitem', 'VendorController@saveItem');
        Route::get('myaccount', 'VendorController@myAccount');
        Route::post('myaccount', 'VendorController@updateAccount');
        Route::get('logout', 'Dealer\Auth\AuthController@logout');
    });

    });


