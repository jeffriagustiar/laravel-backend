<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')->name('home');

Route::get('/products','ProductController@index')->name('products-index');
Route::get('/products/create','ProductController@create')->name('products-create');
Route::post('/products/store','ProductController@store')->name('products-store');
Route::get('/products/{id}','ProductController@edit')->name('products-edit');
Route::post('/products/update/{id}','ProductController@update')->name('products-update');
Route::delete('/products/delete/{id}','ProductController@destroy')->name('products-delete');


Route::get('/product-galleries','ProductGalleryController@index')->name('product-galleries-index');
Route::get('/product-galleries/create','ProductGalleryController@create')->name('product-galleries-create');
Route::post('/product-galleries/store','ProductGalleryController@store')->name('product-galleries-store');
Route::post('/product-galleries/delete/{id}','ProductGalleryController@destroy')->name('product-galleries-delete');
// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes(['register' => false]);
Auth::routes(['register' => false]);
