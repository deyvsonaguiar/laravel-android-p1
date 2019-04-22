<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'Api\AuthController@login')->name('api.login');
Route::post('refresh', 'Api\AuthController@refresh')->name('api.refresh');

Route::group(['middleware' => ['auth:api', 'jwt.refresh']], function() {
    Route::get('users', function () {
        return \App\User::all();
    });
    Route::post('logout', 'Api\AuthController@logout')->name('api.logout');
});
