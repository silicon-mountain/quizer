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


Route::get('moderator', 'ModeratorController@index');
Route::get('moderator/answering/{id}', 'ModeratorController@answering');
Route::get('moderator/set/pending/{id}', 'ModeratorController@setPending');
Route::get('moderator/set/answered/{id}', 'ModeratorController@setAnswered');
Route::get('moderator/set/notanswered/{id}', 'ModeratorController@setNotanswered');

// User section routings
Route::get('/', 'WelcomeController@index');
Route::get('questions', 'WelcomeController@getQuestion');
Route::get('archives', 'WelcomeController@archives');
Route::get('upvote/{id}', 'WelcomeController@getUpvote');
Route::post('question', 'WelcomeController@postQuestion');

// auth controlers for admin
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
