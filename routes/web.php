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

Route::get('/paragraf', function () {
    return view('paragraf');
});

Route::get('formulir', 'DasarController@formulir');
Route::get('yuio','LatihanController@depan');

Route::get('judul','LatihanController@heading');

Route::get('php','DasarController@php');

Route::get('variabel','DasarController@variabel');

Route::get('tipedata','DasarController@perkalian');

Route::get('formulir', 'DasarController@formulir');
Route::get('formulir/output', 'DasarController@output');

Route::get('register', 'DasarController@register');
Route::post('register/tampil', 'DasarController@tampil');

Route::get('booking', 'DasarController@booking');
Route::post('tampiltiket', 'DasarController@tampiltiket');


Route::resource('mahasiswa','MahasiswaController');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
