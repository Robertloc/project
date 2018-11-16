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

Route::get('/', 'HomeController@index')->name('home');
Route::view('/about', 'about');
//Route::view('/register', 'register');
Route::get('/note/show', 'NoteController@show');
Route::get('/note/{id}/destroy', 'NoteController@destroy');
Route::get('/note/{id}/edit', 'NoteController@edit');
Route::get('/note/{id}/history', 'NoteController@history');
Route::post('/note/{id}/update', 'NoteController@update');

Route::get('/project/create', 'ProjectController@create');
Route::post('/project/create', 'ProjectController@store');
Route::get('/', 'ProjectController@index');
Route::get('/project/{id}', 'ProjectController@show');
Route::get('/project/{id}/destroy', 'ProjectController@destroy');
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::post('/project/{id}/update', 'ProjectController@update');
Route::get('/project/{id}/note/create', 'NoteController@create');
Route::post('/project/{id}/note/store', 'NoteController@store');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

<<<<<<< HEAD
Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');

Route::get('accept/{token}', 'InviteController@accept')->name('accept');
=======
//My Password reset
Route::get('/mypassword', 'MyPasswordController@reset');

//Password Reset
Route::get('passwords/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
Route::post('passwords/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('passwords/reset', 'Auth\ResetPasswordController@reset');
>>>>>>> resetfunction
