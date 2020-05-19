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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', 'UmumController@home')->name('home-utama');
Route::get('/penyakit', 'UmumController@infoPenyakit')->name('info-penyakit');
Route::get('/konsultasi', 'UmumController@konsultasi')->name('konsultasi');
Route::get('/info-petunjuk', 'UmumController@infoPetunjuk')->name('info-petunjuk');
Route::get('/kontak', 'UmumController@kontak')->name('kontak');
Route::get('/login-admin', 'UmumController@loginAdmin')->name('login-admin');
