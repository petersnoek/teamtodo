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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//todo and task
Route::get('/todo', 'TaskController@index');
Route::get('/', 'TodoController@getTodos');

Route::resource('todos','TodoController');
