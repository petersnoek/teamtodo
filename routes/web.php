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

Route::get('/', 'TodoController@getTodos');
Route::get('/home', 'TodoController@getTodos');

Route::get('/user', 'UserController@showProfile');
Route::get('/user/changePassword', 'UserController@showChangePasswordForm');
Route::post('/user/changePassword','UserController@changePassword')->name('user/changePassword');
Route::get('/user/changeEmail', 'UserController@showChangeEmailForm');
Route::post('/user/changeEmail','UserController@changeEmail')->name('user/changeEmail');

Route::resource('todos','TodoController');