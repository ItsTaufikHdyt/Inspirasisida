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
Auth::routes();

Route::get('/', function () {
    return view('index');
});

//--------------- Verify -------------------
Route::get('/user-register', 'Auth\RegisterController@ShowRegisterForm')->name('userRegister');
Route::post('/user-register', 'Auth\RegisterController@HandleRegister')->name('prosesRegister');
Route::get('/user-login', 'Auth\LoginController@ShowLoginForm')->name('userLogin');
Route::post('/user-login', 'Auth\LoginController@HandleLogin')->name('prosesLogin');
Route::get('/verify/{token}', 'Auth\VerifyController@VerifyEmail')->name('verify');

//--------------- Admin -------------------
Route::group(["prefix"=>"admin/"], function(){
    Route::get('dashboard', 'AdminController@index')->name('adminDashboard');
});
    
     //--------------- Sipena -------------------
Route::group(["prefix"=>"sipeena/"], function(){
    Route::get('/', 'SipeenaController@index')->name('sipeena');
    //--------------- Invovasi -------------------
    Route::get('/inovasi', 'SipeenaController@inovasi')->name('inovasi');;
    Route::get('/inovasi/form-ind-inovasi', 'SipeenaController@formIndInovasi')->name('formIndInovasi');
    Route::post('store-form-ind-inovasi', 'SipeenaController@storeFormIndInovasi')->name('storeFormIndInovasi');
    Route::get('/inovasi/form-klp-inovasi', 'SipeenaController@formKlpInovasi')->name('formKlpInovasi');
    Route::post('store-form-klp-inovasi', 'SipeenaController@storeFormKlpInovasi')->name('storeFormKlpInovasi');
    Route::get('/inovasi/form-lmb-inovasi', 'SipeenaController@formLmbInovasi')->name('formLmbInovasi');
    //--------------- Invovasi -------------------
    
    //--------------- Penelitian -------------------
    Route::get('/penelitian', 'SipeenaController@penelitian')->name('penelitian');
    Route::get('/penelitian/form-ind-research', 'SipeenaController@formIndPenelitian')->name('formIndPenelitian');
    Route::get('/penelitian/form-klp-research', 'SipeenaController@formKlpPenelitian')->name('formKlpPenelitian');
    Route::get('/penelitian/form-lmb-research', 'SipeenaController@formLmbPenelitian')->name('formLmbPenelitian');
    //--------------- Penelitian -------------------
    
    //--------------- SKPD -------------------
    Route::get('/skpd', 'SipeenaController@skpd')->name('skpd');
    //--------------- SKPD -------------------
    
    //--------------- Riwayat -------------------
    Route::get('/riwayat', 'SipeenaController@riwayat')->name('riwayat');
    //--------------- Riwayat -------------------
    
    //--------------- Profil -------------------
    Route::get('/profil', 'SipeenaController@profil')->name('profil');
    //--------------- Profil -------------------
});
    
Route::get('/home', 'HomeController@index')->name('home');