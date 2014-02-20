<?php

class UserController extends BaseController
{
	public function index()
	{
		// Show a listing of users.
		$userAll = User::where('private', '=', 0)->get();
		return View::make('user_index', compact('userAll'));

	}

	public function create()
	{
		// Show a listing of games.
		return View::make('create_user_form');

	}

	public function handleCreate()
	{
		// Handle create form submission.
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();

		Auth::login($user);

		return Redirect::action('ClipController@index');
	}

	public function get(User $user)
	{
		// Show the page with clip and the possibility to reply
		return View::make('get_user', compact('user'));
	}

	public function login()
	{
		return View::make('login_form');
	}

	public function handleLogin()
	{
		$credentials = Input::only('username', 'password');
		$remember = Input::has('remember');

		if (Auth::attempt($credentials, $remember)) {
			return Redirect::intended('/');
		}
		return Redirect::to('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}
