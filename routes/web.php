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

Route::get('/', 'HomeController@index')->name('index');
Route::get('prosedur/more/{id}', 'HomeController@showMore')->name('home.showMore');
Route::get('prosedur/download/{id}', 'HomeController@downloadProsedur')->name('home.downloadProsedur');

//--------------- Verify -------------------
Route::get('/user-register', 'Auth\RegisterController@ShowRegisterForm')->name('userRegister');
Route::post('/user-register', 'Auth\RegisterController@HandleRegister')->name('prosesRegister');
Route::get('/user-login', 'Auth\LoginController@ShowLoginForm')->name('userLogin');
Route::post('/user-login', 'Auth\LoginController@HandleLogin')->name('prosesLogin');
Route::get('/verify/{token}', 'Auth\VerifyController@VerifyEmail')->name('verify');

//--------------- Admin -------------------
Route::group(["prefix"=>"admin/"], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
//--------------- Data SiPeena ---------------------
    Route::get('verifikasi', 'AdminController@verifikasi')->name('admin.verifikasi');
    Route::delete('delete-data-sipeena-pendaftaran/{id}', 'AdminController@destroySipeenaPendaftaran')->name('admin.destroySipeenaPendaftaran');
    Route::delete('delete-data-sipeena-lembaga/{id}', 'AdminController@destroySipeenaLembaga')->name('admin.destroySipeenaLembaga');
    Route::delete('delete-data-sipeena-opd/{id}', 'AdminController@destroySipeenaOpd')->name('admin.destroySipeenaOpd');
//--------------- Prosedur ---------------------
    Route::get('prosedur', 'AdminController@prosedur')->name('admin.prosedur');
    Route::post('storeProsedur', 'AdminController@storeProsedur')->name('admin.storeProsedur');
    Route::put('update-prosedur/{id}', 'AdminController@updateProsedur')->name('admin.updateProsedur');
    Route::delete('delete-prosedur/{id}', 'AdminController@destroyProsedur')->name('admin.destroyProsedurS');

//--------------- OPD ---------------------
    Route::get('data-opd', 'AdminController@opd')->name('admin.opd');
    Route::post('store-data-opd', 'AdminController@storeOpd')->name('admin.storeOpd');
    Route::put('update-data-opd/{id}', 'AdminController@updateOpd')->name('admin.updateOpd');
    Route::delete('delete-data-opd/{id}', 'AdminController@destroyOpd')->name('admin.destroyOpd');
//--------------- Database ---------------------
Route::get('database', 'AdminController@database')->name('admin.database');
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
    Route::post('store-form-lmb-inovasi', 'SipeenaController@storeFormLmbInovasi')->name('storeFormLmbInovasi');
    //--------------- Invovasi -------------------
    
    //--------------- Penelitian -------------------
    Route::get('/penelitian', 'SipeenaController@penelitian')->name('penelitian');
    Route::get('/penelitian/form-ind-research', 'SipeenaController@formIndPenelitian')->name('formIndPenelitian');
    Route::post('store-form-ind-research', 'SipeenaController@storeFormIndPenelitian')->name('storeFormIndPenelitian');
    Route::get('/penelitian/form-klp-research', 'SipeenaController@formKlpPenelitian')->name('formKlpPenelitian');
    Route::post('store-form-klp-research', 'SipeenaController@storeFormKlpPenelitian')->name('storeFormKlpPenelitian');
    Route::get('/penelitian/form-lmb-research', 'SipeenaController@formLmbPenelitian')->name('formLmbPenelitian');
    Route::post('store-form-lmb-research', 'SipeenaController@storeFormLmbPenelitian')->name('storeFormLmbPenelitian');
    //--------------- Penelitian -------------------
    
    //--------------- OPD-------------------
    Route::get('/opd', 'SipeenaController@opd')->name('opd');
    Route::post('store-opd', 'SipeenaController@storeOpd')->name('storeOpd');

    //--------------- OPD -------------------

    //--------------- Captcha-------------------
    Route::get('/refreshcaptcha', 'SipeenaController@refreshCaptcha');
    //--------------- Captcha -------------------
    
    //--------------- Riwayat -------------------
    Route::get('/riwayat', 'SipeenaController@riwayat')->name('riwayat');
    //--------------- Riwayat -------------------
    
    //--------------- Profil -------------------
    Route::get('/profil', 'SipeenaController@profil')->name('profil');
    //--------------- Profil -------------------
});
    
Route::get('/home', 'HomeController@index')->name('home');