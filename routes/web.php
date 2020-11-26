<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index');

/** Stores */
// Display all Stores
Route::get('/stores', 'StoresController@index');
// Display Create Store form
Route::get('/stores/create', 'StoresController@create');
// Display Store
Route::get('/stores/{store}', 'StoresController@show');
// Display Update Store form
Route::get('/stores/{store}/edit', 'StoresController@edit');
// Store a record of store
Route::post('/stores', 'StoresController@store');
// Update a store record
Route::put('/stores/{store}', 'StoresController@update');
// Display deletion screen
Route::get('/stores/{store}/delete', 'StoresController@delete');
// Delete a store record
Route::delete('/stores/{store}', 'StoresController@destroy');

/** Products */
Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::post('/products', 'ProductsController@store');
Route::put('/products/{product}', 'ProductsController@update');
Route::get('/products/{product}/delete', 'ProductsController@delete');
Route::delete('/products/{product}', 'ProductsController@destroy');


/** Transactions */
Route::get('/transactions', 'TransactionsController@index');
Route::get('/transactions/create', 'TransactionsController@create');
Route::get('/transactions/{transaction}', 'TransactionsController@show');
Route::get('/transactions/{transaction}/edit', 'TransactionsController@edit');
Route::post('/transactions', 'TransactionsController@store');
Route::put('/transactions/{transaction}', 'TransactionsController@update');
Route::get('/transactions/{transaction}/delete', 'TransactionsController@delete');
Route::delete('/transactions/{transaction}', 'TransactionsController@destroy');