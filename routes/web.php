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


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('/home', 'HomeController@index')->name('admin.home');
    Route::get('/kelola', 'MenuController@kelola')->name('admin.kelola');

     
    //Penyakit
    Route::group(['prefix' => '/penyakit'], function() {
        Route::get('/', 'PenyakitController@index')->name('admin.penyakit');
        Route::get('/create', 'PenyakitController@create')->name('admin.penyakit.create');
        Route::post('/store', 'PenyakitController@store')->name('admin.penyakit.store');
        Route::get('/edit/{id}', 'PenyakitController@edit')->name('admin.penyakit.edit');
        Route::post('/update/{id}', 'PenyakitController@update')->name('admin.penyakit.update');
        Route::get('/destroy/{id}', 'PenyakitController@destroy')->name('admin.penyakit.destroy');
    
    });

      
    //Gejala
    Route::group(['prefix' => '/gejala'], function() {
        Route::get('/', 'GejalaController@index')->name('admin.gejala');
        Route::get('/create', 'GejalaController@create')->name('admin.gejala.create');
        Route::post('/store', 'GejalaController@store')->name('admin.gejala.store');
        Route::get('/edit/{id}', 'GejalaController@edit')->name('admin.gejala.edit');
        Route::post('/update/{id}', 'GejalaController@update')->name('admin.gejala.update');
        Route::get('/destroy/{id}', 'GejalaController@destroy')->name('admin.gejala.destroy');
    
    });
});
