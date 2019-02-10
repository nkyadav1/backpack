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
});

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