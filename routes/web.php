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

Route::get('/bihero', 'BiheroController@index');
Route::get('/bihero/review/{id}', 'BiheroController@review');
Route::get('/bihero/create', 'BiheroController@create')->name('create');
Route::get('/bihero/table', 'BiheroController@table')->name('table');
Route::post('/bihero/save', 'BiheroController@save');
Route::get('/bihero/edit/{id}', 'BiheroController@edit')->name('edit');
Route::post('/bihero/update', 'BiheroController@update');
Route::post('/bihero/delete/action', 'BiheroController@delete')->name('delete');
Route::get('/bihero/pdf', 'BiheroController@readpdf')->name('readpdf');