<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home', 'HomeController@showHome');
Route::get('events', 'HomeController@showEvents');
Route::get('manage_events', 'HomeController@showManageEvents');
Route::get('profile', 'HomeController@showProfile');
Route::get('contacts', 'HomeController@showContacts');

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('users/manage-profile', 'UsersController@getManageProfiles');

// Route::get('users/' . Auth::id() . '/edit', 'UsersController@getManageProfiles');

Route::get('events/manage', 'EventsController@getManage');


Route::resource('events', 'EventsController');

Route::resource('users', 'UsersController');



Route::get('profile', 'UsersController@store');

