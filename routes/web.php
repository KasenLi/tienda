<?php

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

// Carrito

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::group(['middleware' => 'auth'], function(){
	Route::get('order-detail',[
		'as' => 'order-detail',
		'uses' => 'CartController@orderDetail'
	]);
});

Auth::routes();

Route::get('auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'auth.logout'
]);
//Route::get('/home', 'HomeController@index')->name('home');
