<?php

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
Route::resource('book','BookController')->middleware('auth');
Route::resource('publisher','PublisherController')->middleware('auth');
Route::get('/login','LoginController@login')->name('login');
Route::post('/login','LoginController@postlogin');
Route::get('/logout','LoginController@logout');






// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
