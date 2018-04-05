<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
//************DOKTERS*************/
Route::get('/dokter', 'DokterController@index')->name('dokter.index');
Route::get('/dokter/create', 'DokterController@create')->name('dokter.create');
Route::post('/dokter/create','DokterController@store');
Route::get('/dokter/{dokter}/edit', 'DokterController@edit')->name('dokter.edit');
Route::patch('/dokter/{dokter}/edit', 'DokterController@update')->name('dokter.update');
Route::delete('/dokter/{dokter}/delete', 'DokterController@destroy')->name('dokter.destroy');
//************PASIENS*************/
Route::get('/pasien', 'PasienController@index')->name('pasien.index');
Route::get('/pasien/create', 'PasienController@create')->name('pasien.create');
Route::post('/pasien/create','PasienController@store');
Route::get('/pasien/{pasien}/edit', 'PasienController@edit')->name('pasien.edit');
Route::patch('/pasien/{pasien}/edit', 'PasienController@update')->name('pasien.update');
Route::delete('/pasien/{pasien}/delete', 'PasienController@destroy')->name('pasien.destroy');
//************PEMERIKSAAN*************/
Route::get('/pemeriksaan', 'PemeriksaanController@index')->name('pemeriksaan.index');
Route::get('/pemeriksaan/create', 'PemeriksaanController@create')->name('pemeriksaan.create');
Route::post('/pemeriksaan/create','PemeriksaanController@store');
Route::get('/pasien/{pasien}/edit', 'PasienController@edit')->name('pasien.edit');
Route::patch('/pasien/{pasien}/edit', 'PasienController@update')->name('pasien.update');
Route::delete('/pasien/{pasien}/delete', 'PasienController@destroy')->name('pasien.destroy');