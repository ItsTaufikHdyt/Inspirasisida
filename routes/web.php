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
Route::get('panduan', 'HomeController@panduan')->name('home.panduan');
Route::get('downloadDbOpd/{id}', 'HomeController@downloadDbOpd')->name('home.downloadDbOpd');


//------------------------ Database Masyarakat --------------------------
Route::get('dbmasyarakatinovasi', 'HomeController@dbMasyarakatInovasi')->name('home.dbMasyarakatInovasi');
Route::get('dbmasyarakatpenelitian', 'HomeController@dbMasyarakatPenelitian')->name('home.dbMasyarakatPenelitian');
//------------------------ Database OPD --------------------------
Route::get('dbopdinovasi', 'HomeController@dbOpdInovasi')->name('home.dbOpdInovasi');
Route::get('dbopdpenelitian', 'HomeController@dbOpdPenelitian')->name('home.dbOpdPenelitian');
//--------------- Verify -------------------
Route::get('/user-register', 'Auth\RegisterController@ShowRegisterForm')->name('userRegister');
Route::post('/user-register', 'Auth\RegisterController@HandleRegister')->name('prosesRegister');
Route::get('/user-login', 'Auth\LoginController@ShowLoginForm')->name('userLogin');
Route::post('/user-login', 'Auth\LoginController@HandleLogin')->name('prosesLogin');
Route::get('/verify/{token}', 'Auth\VerifyController@VerifyEmail')->name('verify');
//--------------- Captcha-------------------
Route::get('login/refreshcaptcha', 'Auth\LoginController@refreshCaptcha');
Route::get('register/refreshcaptcha', 'Auth\RegisterController@refreshCaptcha');

//--------------- Admin -------------------
Route::group(['middleware' => 'cekstatus',"prefix"=>"admin/"], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
//---------------- Download Data Pendaftaran-------------------
Route::get('downloadKtpPendaftaran/{id}', 'AdminController@downloadKtpPendaftaran')->name('admin.downloadKtpPendaftaran');
Route::get('downloadSuratPernyataanPendaftaran/{id}', 'AdminController@downloadSuratPernyataanPendaftaran')->name('admin.downloadSuratPernyataanPendaftaran');
Route::get('downloadIzinOrtuPendaftaran/{id}', 'AdminController@downloadIzinOrtuPendaftaran')->name('admin.downloadIzinOrtuPendaftaran');
Route::get('downloadIzinSekolahPendaftaran/{id}', 'AdminController@downloadIzinSekolahPendaftaran')->name('admin.downloadIzinSekolahPendaftaran');
Route::get('downloadProposalPendaftaran/{id}', 'AdminController@downloadProposalPendaftaran')->name('admin.downloadProposalPendaftaran');
//--------------- Data SiPeena ---------------------
    Route::get('verifikasi', 'AdminController@verifikasi')->name('admin.verifikasi');
    Route::get('diterima', 'AdminController@diterima')->name('admin.diterima');
    Route::get('ditolak', 'AdminController@ditolak')->name('admin.ditolak');
    Route::get('finalis', 'AdminController@finalis')->name('admin.finalis');
//--------------- Verifikasi -----------------------
    Route::get('verifikasi-pendaftaran/{id}', 'AdminController@verifikasiPendaftaran')->name('admin.verifikasiPendaftaran');
    Route::get('verifikasi-opd/{id}', 'AdminController@verifikasiOpd')->name('admin.verifikasiOpd');
    Route::get('verifikasi-lembaga/{id}', 'AdminController@verifikasiLembaga')->name('admin.verifikasiLembaga');
    
    Route::put('update-verifikasi-pendaftaran/{id}', 'AdminController@updateVerifikasiPendaftaran')->name('admin.updateVerifikasiPendaftaran');
    Route::put('update-verifikasi-opd/{id}', 'AdminController@updateVerifikasiOpd')->name('admin.updateVerifikasiOpd');
    Route::put('update-verifikasi-lembaga/{id}', 'AdminController@updateVerifikasiLembaga')->name('admin.updateVerifikasiLembaga');

//----------------------------- ACC --------------------
    Route::get('acc-pendaftaran/{id}', 'AdminController@accPendaftaran')->name('admin.AccPendaftaran');
    Route::get('acc-opd/{id}', 'AdminController@accOpd')->name('admin.AccOpd');
    Route::get('acc-lembaga/{id}', 'AdminController@accLembaga')->name('admin.AccLembaga');

    Route::put('update-acc-pendaftaran/{id}', 'AdminController@updateAccPendaftaran')->name('admin.updateAccPendaftaran');
    Route::put('update-acc-opd/{id}', 'AdminController@updateAccOpd')->name('admin.updateAccOpd');
    Route::put('update-acc-lembaga/{id}', 'AdminController@updateAccLembaga')->name('admin.updateAccLembaga');
    
    Route::delete('delete-data-sipeena-pendaftaran/{id}', 'AdminController@destroySipeenaPendaftaran')->name('admin.destroySipeenaPendaftaran');
    Route::delete('delete-data-sipeena-lembaga/{id}', 'AdminController@destroySipeenaLembaga')->name('admin.destroySipeenaLembaga');
    Route::delete('delete-data-sipeena-opd/{id}', 'AdminController@destroySipeenaOpd')->name('admin.destroySipeenaOpd');
//----------------------------- Finalis --------------------
    Route::get('final-pendaftaran/{id}', 'AdminController@finalPendaftaran')->name('admin.FinalPendaftaran');
    Route::get('final-opd/{id}', 'AdminController@finalOpd')->name('admin.FinalOpd');
    Route::get('final-lembaga/{id}', 'AdminController@finalLembaga')->name('admin.FinalLembaga');

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
//---------------- Database Inovasi Perangkat Daerah -------------
    Route::post('store-dbopd', 'AdminController@storeDbOpd')->name('admin.storeDbOpd');
    Route::put('update-dbopd/{id}', 'AdminController@updateDbOpd')->name('admin.updateDbOpd');
    Route::delete('delete-dbopd/{id}','AdminController@destroyDbOpd')->name('admin.deleteDbOpd');
    Route::get('download-dbopd/{id}','AdminController@downloadDbOpd')->name('admin.downloadDbOpd');
//---------------- Database Inovasi Perangkat Daerah -------------
    Route::post('store-dbmasyarakat', 'AdminController@storeDbMasyarakat')->name('admin.storeDbMasyarakat');
    Route::put('update-dbmasyarakat/{id}', 'AdminController@updateDbMasyarakat')->name('admin.updateDbMasyarakat');
    Route::delete('delete-dbmasyarakat/{id}','AdminController@destroyDbMasyarakat')->name('admin.deleteDbMasyarakat');
//---------------- Galeri-------------
    Route::get('galeri', 'AdminController@galeri')->name('admin.galeri');
    Route::post('store-galeri', 'AdminController@storeGaleri')->name('admin.storeGaleri');
    Route::delete('delete-galeri/{id}', 'AdminController@destroyGaleri')->name('admin.destroyGaleri');
//---------------- Activation User -------------
    Route::get('activateduser', 'AdminController@user')->name('admin.user');
    Route::put('activated/{id}', 'AdminController@activatedUser')->name('admin.activated');  

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

//------------------ Clear ------------
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });

 //------------------ Storage Link ------------
Route::get('/storagelink', function () {
    Artisan::call('storage:link');

    return "Success Storage Link!";
});
Route::get('/ktplink', function () {
    // $target = storage_path('app\ktp');
    // $link = public_path('ktp');
    // symlink($target, $link);

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/ktp';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/ktp';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';

    return "Success Storage Link!";
});