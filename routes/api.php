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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/api/city', 'Api\CityController@index');
Route::get('/api/city/{id}', 'Api\CityController@show');

Route::get('/api/locality', 'Api\LocalityController@index');
Route::get('/api/locality/{id}', 'Api\LocalityController@show');
