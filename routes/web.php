<?php

// use App\Http\Controllers\CrudController;
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

Route::get('/','App\Http\Controllers\CrudController@index')->name('index');
Route::post('/store','App\Http\Controllers\CrudController@store')->name('store');
Route::get('/delete{id}','App\Http\Controllers\CrudController@delete')->name('delete');
Route::get('/update{id}','App\Http\Controllers\CrudController@update')->name('update');
Route::post('/updatedata','App\Http\Controllers\CrudController@updatedata')->name('updatedata');
