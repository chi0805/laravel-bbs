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

Route::get('/', 'HomeControllder@index')->name('home');
Route::get('/records/create', 'RecordController@getCreate')->name('records.create');
Route::post('/records/create', 'RecordController@postCreate');
Route::get('/records/search', 'RecordController@getSearch')->name('records.search');
Route::get('/records/index', 'RecordController@getIndex')->name('records.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
