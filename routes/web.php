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

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('user', 'UserController')->middleware('admin');
    Route::resource('userprofil', 'UserProfilController');
    Route::resource('useradmin', 'UserAdminController');
    //Route::get('user', 'UserController');
    Route::resource('ruangstudio', 'RuangStudioController');
    Route::resource('sewa', 'SewaController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('sewapelanggan', 'SewaPelangganController');    
    Route::resource('bayar', 'BayarController');    
    Route::get('/cetak-laporan-booking-form', 'SewaController@cetakForm')->name('cetak-laporan-booking-form');
    Route::get('/cetak-laporan-booking-pertanggal/{tglawal}/{tglakhir}', 'SewaController@cetakLaporanPertanggal')->name('cetak-laporan-booking-pertanggal');
    
});
// Route::get('/ruangstudio/search', [RuangStudioController::class, 'search']);
//tesubah


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
