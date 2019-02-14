<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::get('api/article', 'App\Http\Controllers\Api\ArticleController@index');
Route::get('api/article-search', 'App\Http\Controllers\Api\ArticleController@search');
Route::get('api/article/{id}', 'App\Http\Controllers\Api\ArticleController@show');


/* * **********************************************
 * City and State API Routes
 * ********************************************** */
Route::group([
    'prefix' => 'api',
    //'middleware' => ['web'],
    'namespace' => 'App\Http\Controllers\Api',
        ], function () {
    Route::get('/city', 'CityController@index');
    Route::get('/city-search', 'CityController@search');
    Route::get('city/{id}', 'CityController@show');


    Route::get('/state', 'StateController@index');
    Route::get('/state-search', 'StateController@search');
    Route::get('state/{id}', 'StateController@show');
    
    Route::get('/locality', 'LocalityController@index');
    Route::get('/locality-search', 'LocalityController@search');
    Route::get('locality/{id}', 'LocalityController@show');
    
    Route::get('/restaurant', 'RestaurantController@index');
    Route::get('/restaurant-search', 'RestaurantController@search');
    Route::get('restaurant/{id}', 'RestaurantController@show');
    Route::get('restaurants/{view}', 'RestaurantController@showList');
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace' => 'App\Http\Controllers\Admin',
        ], function () { // custom admin routes
    // CRUD resources and other admin routes
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('icon', 'IconCrudController');
    CRUD::resource('product', 'ProductCrudController');
    CRUD::resource('cuisine', 'CuisineCrudController');
    CRUD::resource('amenity', 'AmenityCrudController');
    CRUD::resource('locality', 'LocalityCrudController');
    CRUD::resource('measureunit', 'MeasureunitCrudController');
    CRUD::resource('menuitem', 'MenuItemCrudController');
    CRUD::resource('order', 'OrderCrudController');
    CRUD::resource('item', 'ItemCrudController');
    CRUD::resource('subitem', 'SubItemCrudController');
    CRUD::resource('menu', 'MenuCrudController');
    CRUD::resource('orderitem', 'OrderItemCrudController');
    CRUD::resource('restaurant', 'RestaurantCrudController');
    CRUD::resource('restaurantusermap', 'RestaurantUserMapCrudController');
    CRUD::resource('city', 'CityCrudController');
    CRUD::resource('state', 'StateCrudController');
}); // this should be the absolute last line of this file