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

Route::auth();

Route::get('/', 'UserController@index')->name('user');
Route::post('/ukm', 'UKMController@index')->name('ukm');
Route::get('/kritikSaran', 'KritikSaranController@index')->name('kritikSaran');
Route::get('/daftar', 'DaftarController@index')->name('daftar')->middleware('mahasiswa');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/login/user', 'UserLoginController@showLoginForm')->name('userLogin');
Route::post('/login/user', 'UserLoginController@login')->name('validasiUser');

Route::group(['prefix' => 'admin', 'middleware' => 'admin.UKM'], function() {
    Route::get('/', 'Admin\BerandaController@index')->name('admin');
    Route::put('/info/update', 'Admin\BerandaController@update');
    Route::get('/anggota', 'Admin\AnggotaController@index');
    Route::post('/anggota/tambah', 'Admin\AnggotaController@tambah');
    Route::put('/anggota/update', 'Admin\AnggotaController@update');
    Route::get('/anggota/hapus/{id}', 'Admin\AnggotaController@hapus');
    Route::get('/anggota/baru', 'Admin\AnggotaBaruController@index');
    Route::put('/anggota/baru/update', 'Admin\AnggotaBaruController@update');
    Route::get('/jadwal', 'Admin\JadwalController@index');
    Route::post('/jadwal/tambah', 'Admin\JadwalController@tambah');
    Route::put('/jadwal/update', 'Admin\JadwalController@update');
    Route::get('/jadwal/hapus/{id}', 'Admin\JadwalController@hapus');
    Route::get('/proker', 'Admin\ProkerController@index');
    Route::post('/proker/tambah', 'Admin\ProkerController@tambah');
    Route::put('/proker/update', 'Admin\ProkerController@update');
    Route::get('/proker/hapus/{id}', 'Admin\ProkerController@hapus');
    Route::get('/laporan', 'Admin\LaporanController@index');
    Route::put('/laporan/update/{id}', 'Admin\LaporanController@update');
    Route::get('/laporan/hapus/{id}', 'Admin\LaporanController@hapus');
});

Route::group(['prefix' => 'bem', 'middleware' => 'admin.BEM'], function() {
    Route::get('/', 'BEM\BerandaController@index')->name('bem');
    Route::get('/anggota', 'BEM\AnggotaController@index');
    Route::get('/jadwal', 'BEM\JadwalController@index');
    Route::get('/proker', 'BEM\ProkerController@index');
    Route::get('/laporan', 'BEM\LaporanController@index');
});

Route::get('/home', 'HomeController@index')->name('home');