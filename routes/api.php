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

Route::post('login', 'Api\UserController@login')->name('login');
Route::post('register', 'Api\UserController@register')->name('register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'Api\UserController@details');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('dogs')->group(function () {
    Route::get('/', 'DogController@index');
    Route::get('search', 'DogController@search');
});
