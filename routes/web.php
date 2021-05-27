<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('application.frontend.beranda');
// });

Route::prefix('/')->namespace('Application\Frontend')->group(function () {
    Route::get('/', 'BerandaController@beranda')->name('beranda');
    Route::get('/sambutan-kepala-sekolah', 'BerandaController@sambutanKepsek')->name('sambutan-kepala-sekolah');
    Route::get('/visi-misi', 'BerandaController@visiMisi')->name('visi-misi');
    Route::get('/profile-sekolah', 'BerandaController@profileSekolah')->name('profile-sekolah');
    Route::get('/guru-pengajar', 'BerandaController@guruPengajar')->name('guru-pengajar');

    Route::get('/kegiatan', 'BerandaController@kegiatan')->name('kegiatan');

    // displaying data guru
});



Auth::routes();
Route::prefix('application')->namespace('Application\Web')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Route Guru
    Route::get('/guru', 'GuruController@index')->name('guru.index');
    Route::get('/guru/create', 'GuruController@create')->name('guru.create');
    Route::post('/guru/store', 'GuruController@store')->name('guru.store');
    Route::get('/guru/edit/{id}', 'GuruController@edit')->name('guru.edit');
    Route::put('/guru/update/{id}', 'GuruController@update')->name('guru.update');
    Route::delete('/guru/delete/{id}', 'GuruController@destroy')->name('guru.destroy');

    // Route Announcemnt
    Route::get('/pemberitahuan', 'PemberitahuanController@index')->name('pemberitahuan.index');
    Route::get('/pemberitahuan/create', 'PemberitahuanController@create')->name('pemberitahuan.create');
    Route::post('/pemberitahuan/store', 'PemberitahuanController@store')->name('pemberitahuan.store');
    Route::put('/pemberitahuan/{id}', 'PemberitahuanController@approveStatus')->name('pemberitahuan.approveStatus');
    Route::get('/pemberitahuan/edit/{id}', 'PemberitahuanController@edit')->name('pemberitahuan.edit');
    Route::put('/pemberitahuan/update/{id}', 'PemberitahuanController@update')->name('pemberitahuan.update');
    Route::delete('/pemberitahuan/delete/{id}', 'PemberitahuanController@destroy')->name('pemberitahuan.destroy');
});
