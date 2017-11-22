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

// Route::prefix('v1')->group(function () {
//     Route::middleware('auth:api')->get('/user', function (Request $request) {
//         return $request->user();
//     });

//     Route::post('/login', 'Auth\AuthController@authenticate');
//     Route::post('/register', 'Auth\AuthController@register');
// });



Route::prefix('v1')->group(function () {
    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });

    // Route::get('/test/user/{id}', 'Test\TestController@user');
    // Route::get('/test/country/{id}', 'Test\TestController@country');
    // Route::get('/test/cooperative/{id}', 'Test\TestController@cooperative');
    // Route::get('/test/payout/{id}', 'Test\TestController@payout');
    // Route::get('/test/sponsorfollower/{id}', 'Test\TestController@sponsorfollower');


    //Route Users

    Route::post('/user/register/', 'User\UserController@store');

    Route::post('/user/register/{token}', 'User\UserController@storeParam');

    Route::get('/user', 'User\UserController@index');

    Route::get('/user/{id}', 'User\UserController@show');

    Route::put('/user/{id}', 'User\UserController@update');

    Route::delete('/user/{id}', 'User\UserController@destroy');

    Route::get('/user/search-sponsor/{id}', 'User\UserController@searchSponsor');

    Route::get('/user/payment-confirm/{user}/{param}', 'User\UserController@paymentConfirme');


});

