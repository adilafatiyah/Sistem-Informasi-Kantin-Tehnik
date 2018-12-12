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
    return view('/user/home');
});

Auth::routes();

Route::get('/home', 'AdminController@index')->middleware('isAdmin');
Route::post('save_transaksi', 'AdminController@save_transaksi');
Route::get('/menu', 'AdminController@menu');
Route::get('/tambah_menu', 'AdminController@tambah_menu');
Route::post('save_menu', 'AdminController@save_menu');
Route::get('/hapus_menu/{id}', 'AdminController@hapus_menu');
Route::get('/edit/{id} ', 'AdminController@update_menu');
Route::post('/save_update/{id} ', 'AdminController@save_update');

Route::get('/tambah_kedai', 'AdminController@tambah_kedai');
Route::post('save_kedai', 'AdminController@save_kedai');
Route::get('/edit_kedai/{id} ', 'AdminController@update_kedai');
Route::post('/kedai_update/{id} ', 'AdminController@kedai_update');


Route::get('/pengguna', 'AdminController@pengguna');
Route::get('/tambah_pengguna', 'AdminController@tambah_pengguna');
Route::post('save_pengguna', 'AdminController@save_pengguna');
Route::get('/hapus_pengguna/{id}', 'AdminController@hapus_pengguna');

Route::get('/minuman', 'AdminController@minuman');
Route::get('/penjualan', 'AdminController@penjualan');
Route::get('/transaksi', 'AdminController@transaksi');


//USER
Route::get('/p_home', 'UserController@index');
Route::get('/p_menu', 'UserController@menu');
Route::get('/p_tambah_menu', 'UserController@tambah_menu');
Route::post('P_save_menu', 'UserController@save_menu');
Route::get('/p_hapus_menu/{id}', 'UserController@hapus_menu');
Route::get('/p_edit/{id} ', 'UserController@update_menu');
Route::post('/p_save_update/{id} ', 'UserController@save_update');


Route::get('/p_transaksi', 'UserController@transaksi');


Route::get('/p_edit_kedai/{id} ', 'UserController@update_kedai');
Route::post('/p_kedai_update/{id} ', 'UserController@kedai_update');

Route::group(['prefix' => 'social-media', 'namespace' => 'Auth'], function(){
    Route::get('register/{provider}', 'SocialiteController@register');
    Route::get('registered/{provider}', 'SocialiteController@registered');
});
