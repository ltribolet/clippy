<?php

class UserController extends BaseController
{
	public function index()
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


		return Response::make('User created! Hurray!');
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
