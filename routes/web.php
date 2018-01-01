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
Route::get('dangxuat', 'AdminController@getDangXuat')->name('logout');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){

	Route::get('/', 'AdminController@getWelcome')->name('welcome');

    Route::group(['prefix'=>'food'],function(){
    	
    	Route::get('danhsach', 'FoodController@getDanhSach')->name('danhsachmonan');

    	Route::get('them', 'FoodController@getThem')->name('themmonan');
    	Route::post('them', 'FoodController@postThem');

    	Route::get('xoa/{id}', 'FoodController@getXoa');

    	Route::get('sua/{id}', 'FoodController@getSua');
    	Route::post('sua/{id}', 'FoodController@postSua');
    });

    Route::get('binhluan', 'CommentController@getComment');
    Route::get('binhluan/xoa/{id}', 'CommentController@xoaComment');

    Route::group(['prefix'=>'food-type'],function(){
    	
    	Route::get('danhsach', 'FoodTypeController@getDanhSach')->name('danhsachloaimonan');

    	Route::get('them', 'FoodTypeController@getThem')->name('themloaimonan');
    	Route::post('them', 'FoodTypeController@postThem');

    	Route::get('xoa/{id}', 'FoodTypeController@getXoa');

    	Route::get('sua/{id}', 'FoodTypeController@getSua');
    	Route::post('sua/{id}', 'FoodTypeController@postSua');
    });

    Route::group(['prefix'=>'food-pics'],function(){
    	
    	Route::get('danhsach', 'PicFoodController@getDanhSach')->name('danhsachhinh');

    	Route::get('them', 'PicFoodController@getThem')->name('themhinh');
    	Route::post('them', 'PicFoodController@postThem');

    	Route::get('xoa/{id}', 'PicFoodController@getXoa');

    	Route::get('sua/{id}', 'PicFoodController@getSua');
    	Route::post('sua/{id}', 'PicFoodController@postSua');
    });

    Route::group(['prefix'=>'quantri'],function(){
    	
    	Route::get('danhsach', 'UserController@getDanhSach')->name('danhsachnguoiquantri');

    	Route::get('them', 'UserController@getThem')->name('themnguoiquantri');
    	Route::post('them', 'UserController@postThem');

    	Route::get('xoa/{id}', 'UserController@getXoa');

    	Route::get('sua/{id}', 'UserController@getSua');
    	Route::post('sua/{id}', 'UserController@postSua');
    });
});
