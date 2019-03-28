<?php

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

Route::get('/','IndexController@index');
Route::get('/404','StaticController@notfound');
Route::get('/about_us','StaticController@aboutUs');
Route::get('/terms','StaticController@terms');
Route::get('/categoryBread','ShopController@categoryBread');
Route::get('/categoryDrinks','ShopController@categoryDrinks');
Route::get('/category/{val}','ShopController@single');
Route::get('/shop','ShopController@shop');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
