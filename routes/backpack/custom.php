<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::get('api/article', 'App\Http\Controllers\Api\ArticleController@index');
Route::get('api/article-search', 'App\Http\Controllers\Api\ArticleController@search');
Route::get('api/article/{id}', 'App\Http\Controllers\Api\ArticleController@show');

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // CRUD resources and other admin routes
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('icon', 'IconCrudController');
    CRUD::resource('product', 'ProductCrudController');
    CRUD::resource('cuisine','CuisineCrudController');
    CRUD::resource('amenity','AmenityCrudController');
    CRUD::resource('locality', 'LocalityCrudController');
    CRUD::resource('measureunit', 'MeasureunitCrudController');
    CRUD::resource('menuitem', 'MenuItemCrudController');
    CRUD::resource('orders', 'OrderCrudController');
    CRUD::resource('item', 'ItemCrudController');
    CRUD::resource('subitem', 'SubItemCrudController');
    CRUD::resource('menu', 'MenuCrudController');
    CRUD::resource('orderitem', 'OrderItemCrudController');
    CRUD::resource('restaurant', 'RestaurantCrudController');
    CRUD::resource('restaurantusermap', 'RestaurantUserMapCrudController');
}); // this should be the absolute last line of this file
