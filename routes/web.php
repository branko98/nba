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


Route::get('/registration', 'Auth\RegisterController@create');

Route::post('/registration', 'Auth\RegisterController@store')->name('registration');

Route::get('/login', 'Auth\LoginController@create')->name('login');

Route::post('/login', 'Auth\LoginController@store');

Route::get('/logout', 'Auth\LoginController@destroy');

Route::get('/', 'TeamsController@index');

Route::post('/{teamsId}/comments', 'CommentsController@store')->name('comments-team');

Route::get('/forbbiden-comment', 'CommentsController@forbbiden')->name('forbbiden');

Route::get('/{id}', 'TeamsController@show');

Route::get('player/{id}', 'PlayersController@show');

Auth::routes(['verify' => true]);
