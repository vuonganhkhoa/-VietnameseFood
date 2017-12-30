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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dangnhap', 'AdminController@getDangNhap')->name('login');
Route::post('dangnhap', 'AdminController@postDangNhap');

Route::group(['prefix'=>'admin'],function(){

	Route::get('/', 'AdminController@getWelcome')->name('welcome');

    Route::group(['prefix'=>'food'],function(){
    	
    	Route::get('danhsach', 'FoodController@getDanhSach')->name('danhsachmonan');

    	Route::get('them', 'FoodController@getThem')->name('themmonan');
    	Route::post('them', 'FoodController@postThem');

    	Route::get('xoa/{id}', 'FoodController@getXoa');

    	Route::get('sua/{id}', 'FoodController@getSua');
    	Route::post('sua/{id}', 'FoodController@postSua');
    });
});
