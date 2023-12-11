<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {
    //bisa diiisi apa sahaja
    return "Halo apa kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>" ;
});

Route::get('blog1', function () {
	return view('blog');
});

Route::get('/tugas1', function () {
	return view('tugas1');
});

Route::get('/tugas2', function () {
	return view('tugas2');
});

Route::get('/tugas3', function () {
	return view('tugas3');
});

Route::get('/latihan1', function () {
	return view('latihan1');
});

Route::get('/latihan2', function () {
	return view('latihan2');
});

Route::get('/latihan3', function () {
	return view('latihan3');
});

Route::get('/latihan4', function () {
	return view('latihan4');
});

Route::get('/latihan5', function () {
	return view('latihan5');
});

Route::get('/latihan6', function () {
	return view('latihan6');
});

Route::get('/latihan7', function () {
	return view('latihan7');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/kaos','App\Http\Controllers\KaosController@index');
Route::get('/kaos/tambah','App\Http\Controllers\KaosController@tambah');
Route::post('/kaos/store','App\Http\Controllers\KaosController@store');
Route::get('/kaos/edit/{id}','App\Http\Controllers\KaosController@edit');
Route::post('/kaos/update','App\Http\Controllers\KaosController@update');
Route::get('/kaos/hapus/{id}','App\Http\Controllers\KaosController@hapus');
Route::get('/kaos/cari','App\Http\Controllers\KaosController@cari');
Route::get('/kaos/view/{id}','App\Http\Controllers\KaosController@view');


Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
