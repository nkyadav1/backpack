<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/restaurants/list', function () {
    return view('restaurant-result-list');
});

Route::get('/restaurants/grid', function () {
    return view('restaurant-result-grid');
});

Route::get('/how-it-works', function () {
    return view('how-it-work');
});

Route::get('/about-us', function () {
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/join-us', function () {
    return view('restaurant-submit');
});

Route::get('user/register', function () {
    return view('ajax-login-modal-register');
});

Route::post('user/register/save','Auth\RegisterController@initRegister');
Route::post('user/login','Auth\LoginController@authenticate');
Route::get('user/logout','Auth\LoginController@logout');

Route::get('user/login', function () {
    return view('ajax-login-modal-login');
});

Route::get('user/forgot-password', function () {
    return view('ajax-login-modal-forgot-password');
});

Route::group([
    'prefix' => '/',
    //'middleware' => ['web'],
    'namespace' => 'Api',
        ], function () {
    Route::get('restaurant/{id}', 'RestaurantController@detailView'); 
    Route::post('restaurant/basic/save', 'RestaurantController@addBasicDetails');
    Route::post('restaurant/timings/save', 'RestaurantController@addRestaurantTiming');
    Route::post('restaurant/features/save', 'RestaurantController@addRestaurantFeatures');
    Route::post('upload', 'RestaurantController@uploadFeatureImage');
});
//Route::get('/', 'HomeController@index')->name('home');
