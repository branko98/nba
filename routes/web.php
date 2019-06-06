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



Route::get('/registration', 'RegistrationController@create');

Route::post('/registration', 'RegistrationController@store')->name('registration');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/', 'TeamsController@index');

Route::post('/{teamsId}/comments', 'CommentsController@store')->name('comments-team');

Route::get('/{id}', 'TeamsController@show');

Route::get('player/{id}', 'PlayersController@show');

