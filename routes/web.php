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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('signup', 'UserController@create')->name('signup');

Route::get('user', 'UserController@index')->name('user');
Route::post('user/store', 'UserController@store')->name('user.store');

Route::get('surat', 'SuratController@index')->name('surat');
Route::get('surat/create', 'SuratController@create')->name('surat.create');
Route::post('surat/anu', 'SuratController@store')->name('surat.store');