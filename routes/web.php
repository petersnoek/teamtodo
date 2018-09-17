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
Route::get('/home', 'TodoController@getTodos');

Route::get('/user', 'UserController@showProfile');
Route::get('/user/changePassword', 'UserController@showChangePasswordForm');
Route::post('/user/changePassword','UserController@changePassword')->name('user/changePassword');
Route::get('/user/changeEmail', 'UserController@showChangeEmailForm');
Route::post('/user/changeEmail','UserController@changeEmail')->name('user/changeEmail');

//create delete and show todolist
Route::get('/', 'TodoController@index');
Route::get('/create/todo', 'TodoController@create');
Route::post('/store/todo', 'TodoController@store');
Route::get('delete/{id}', 'TodoController@destroy');
Route::get('/todo/{todo}', 'TodoController@show');


//Store delete and update show tasks
Route::post('/store/todo/task', 'TaskController@store');
Route::get('/task/{task}', 'TaskController@show');
Route::post('/update/task', 'TaskController@update');
Route::get('delete/task/{id}', 'TaskController@destroy');
