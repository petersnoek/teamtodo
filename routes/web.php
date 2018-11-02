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

Route::get('/user', 'UserController@showProfile');
Route::get('/user/changePassword', 'UserController@showChangePasswordForm');
Route::post('/user/changePassword','UserController@changePassword')->name('user/changePassword');
Route::get('/user/changeEmail', 'UserController@showChangeEmailForm');
Route::post('/user/changeEmail','UserController@changeEmail')->name('user/changeEmail');
Route::get('/users', 'UserController@getAll')->name('allUsers');

//create delete and show todolist
Route::get('/', 'TodoController@index');
Route::get('/create/todo', 'TodoController@create');
Route::post('/store/todo', 'TodoController@store');
Route::post('/store/todoUser', 'TodoController@storeTodoUser');
Route::get('delete/{id}', 'TodoController@destroy');
Route::get('/todo/{todo}', 'TodoController@show');
Route::get('/edit/todo/{todo}', 'TodoController@edit');
//Route::get('/update/todo', 'TodoController@update');


//Store delete and update show tasks
Route::post('/store/todo/task', 'TaskController@store');
Route::get('/task/{task}', 'TaskController@show');
Route::post('/update/task', 'TaskController@update');
Route::get('delete/task/{id}', 'TaskController@destroy');


Route::post('/todo/ajax/{id}', 'TodoController@update');
Route::post('/task/ajax/{id}', 'TaskController@done');
Route::post('/task/edit/ajax/{id}','TaskController@editAjax');

//teams
Route::get('/teams', 'TeamController@index');
Route::get('/create/team', 'TeamController@create');
Route::post('/store/team', 'TeamController@store');
Route::get('teams/{id}', 'TeamController@show');