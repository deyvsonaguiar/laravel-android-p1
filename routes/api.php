<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::post('login', 'Api\AuthController@login')->name('api.login');
Route::post('refresh_token', 'Api\AuthController@refreshToken')->name('api.refresh_token');

Route::group(['middleware' => ['auth:api']], function() {
    Route::get('users', function () {
        return \App\User::all();
    });
    Route::post('logout', 'Api\AuthController@logout')->name('api.logout');
});
