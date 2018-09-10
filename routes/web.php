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
Route::get('/todos', 'TaskController@index');
Route::get('/', 'TodoController@index');

//create todolist
Route::get('/create/todo', 'TodoController@create');
Route::post('/store/todo', 'TodoController@store');
Route::get('delete/{id}', 'TodoController@destroy');

Route::get('/todo/{todo}', 'TodoController@show');

Route::post('/store/todo/task', 'TaskController@store');
