<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::post('login', 'Api\AuthController@login')->name('api.login');
Route::post('refresh', 'Api\AuthController@refresh')->name('api.refresh');

Route::group(['middleware' => ['auth:api', 'jwt.refresh']], function() {
    Route::get('users', function () {
        return \App\User::all();
    });
    Route::post('logout', 'Api\AuthController@logout')->name('api.logout');
});
