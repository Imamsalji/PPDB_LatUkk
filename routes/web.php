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

Route::get('login', function () {
    return view('user.login');
})->name('login');

Route::get('pendaftaran', 'DashboardController@daftar')->name('daftar');
Route::post('daftar', 'DashboardController@pendaftaran')->name('pendaftaran');


Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('pendaftar', 'HomeController@data')->name('data');
    Route::get('terima', 'HomeController@terima')->name('terima');
    Route::get('proses', 'HomeController@proses')->name('proses');
    Route::get('tolak', 'HomeController@tolak')->name('tolak');
    Route::get('diterima/{id}', 'HomeController@diterima')->name('diterima');
    Route::get('ditolak/{id}', 'HomeController@ditolak')->name('ditolak');
    Route::get('show/{id}', 'HomeController@show')->name('show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
