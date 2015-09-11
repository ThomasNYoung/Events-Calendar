<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHome()
	{
		return View::make('home');
	}

	public function showEvents()
	{
		return View::make('events');
	}

	public function showManageEvents()
	{
		return View::make('manage_events');
	}

	public function showProfile()
	{
		return View::make('profile');
	}

	public function showContacts()
	{
		return View::make('contacts');
	}

}
