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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de cooperativas
Route::get('/cooperativa/index', 'CooperativaController@index')->name('cooperativa.index');
Route::get('/cooperativa/new', 'CooperativaController@new')->name('cooperativa.new');
Route::post('/cooperativa/create', 'CooperativaController@create')->name('cooperativa.create');
Route::get('/cooperativa/edit/{id}', 'CooperativaController@edit')->name('cooperativa.edit');
Route::post('/cooperativa/update/{id}', 'CooperativaController@update')->name('cooperativa.update');
Route::get('/cooperativa/delete/{id}', 'CooperativaController@delete')->name('cooperativa.delete');
