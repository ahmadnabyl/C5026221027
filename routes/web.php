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
