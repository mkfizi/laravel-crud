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

Route::get('/', 'crudController@view')->name('crud.view');
Route::get('/add', 'crudController@add')->name('crud.add');
Route::post('/add/submit', 'crudController@addSubmit')->name('crud.add.submit');
Route::get('/edit', 'crudController@edit')->name('crud.edit');
Route::post('/edit/submit', 'crudController@editSubmit')->name('crud.edit.submit');
Route::post('/delete', 'crudController@delete')->name('crud.delete');
Route::get('/search', 'crudController@search')->name('crud.search');
Route::post('/search/submit', 'crudController@searchSubmit')->name('crud.search.submit');