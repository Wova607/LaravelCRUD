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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ArticlesController@index')->name('article.index');
Route::get('/articles/create','ArticlesController@create')->name('article.create');
Route::post('/articles/store','ArticlesController@store')->name('article.store');
Route::get('/articles/{id}/edit','ArticlesController@edit')->name('article.edit');
Route::put('/articles/{id}/update','ArticlesController@update')->name('article.update');
Route::delete('/articles/{id}/destroy','ArticlesController@destroy')->name('article.destroy');
