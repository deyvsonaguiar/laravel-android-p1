<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Api'], function() {

    Route::post('users', 'UserController@store');

    Route::post('login', 'AuthController@login')->name('api.login');
    Route::post('refresh_token', 'AuthController@refreshToken')->name('api.refresh_token');

    Route::group(['middleware' => ['auth:api']], function() {
        Route::get('users', function () {
            return App\Models\User::all();
        });
        Route::post('logout', 'AuthController@logout')->name('api.logout');
        Route::get('categories/{category}/bill_pays', 'CategoryBillPayController@index');
        Route::resource('categories', 'CategoryController', ['except' => ['create', 'edit']]);
        Route::resource('bill_pays', 'BillPaysController', ['except' => ['create', 'edit']]);
    });

});

