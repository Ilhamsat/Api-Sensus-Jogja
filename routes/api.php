<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//tabel kelahiran
Route::get('jumlahKelahirans','JumlahKelahiranController@index');
Route::get('jumlahKelahiran/{id}','JumlahKelahiranController@show');

Route::get('jumlahKelahirans','JumlahKelahiranController@getData');

Route::get('jumlahKelahiran/{kabupaten}','JumlahKelahiranController@show');
Route::post('jumlahKelahiran','JumlahKelahiranController@store');
Route::put('jumlahKelahiran','JumlahKelahiranController@store');
Route::delete('jumlahKelahiran/{id}','JumlahKelahiranController@destroy');

//tabel pendidikan
Route::get('pendidikans','PendidikanController@index');
Route::get('pendidikans','PendidikanController@getData');
Route::get('pendidikan/{id}','PendidikanController@show');
Route::post('pendidikan','PendidikanController@store');
Route::put('pendidikan','PendidikanController@store');
Route::delete('pendidikan/{id}','PendidikanController@destroy');

//tabel jumlah penduduk
Route::get('jumlahPenduduks','JumlahPendudukController@index');
Route::get('jumlahPenduduks','JumlahPendudukController@getData');
Route::get('jumlahPenduduk/{id}','JumlahPendudukController@show');
Route::post('jumlahPenduduk','JumlahPendudukController@store');
Route::put('jumlahPenduduk','JumlahPendudukController@store');
Route::delete('jumlahPenduduk/{id}','JumlahPendudukController@destroy');

//tabel ketenagakerjaan
Route::get('ketenagakerjaans','KetenagakerjaanController@index');
Route::get('ketenagakerjaans','KetenagakerjaanController@getData');
Route::get('ketenagakerjaan/{id}','KetenagakerjaanController@show');
Route::post('ketenagakerjaan','KetenagakerjaanController@store');
Route::put('ketenagakerjaan','KetenagakerjaanController@store');
Route::delete('ketenagakerjaan/{id}','KetenagakerjaanController@destroy');