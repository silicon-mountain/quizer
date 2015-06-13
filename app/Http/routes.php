<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('moderator', 'ModeratorController@index');
Route::get('moderator/answering/{id}', 'ModeratorController@answering');
Route::get('stream', 'WelcomeController@stream');
// preceeding line to be commented out later
Route::get('questions', 'WelcomeController@getQuestion');
Route::get('archives', 'WelcomeController@archives');
Route::get('upvote/{id}', 'WelcomeController@getUpvote');

Route::get('home', 'HomeController@index');

Route::post('question', 'WelcomeController@postQuestion');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
