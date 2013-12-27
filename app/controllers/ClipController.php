<?php

class ClipController extends BaseController
{
	public function index()
	{
		// Show a listing of games.
		$pastes = Pastes::all();
		return View::make('index', compact('pastes'));

	}

	public function create()
	{
		// Show the create paste form.
		return View::make('create');
	}

	public function about()
	{
		return View::make('about');
	}

	public function handleCreate()
	{
		// Handle create form submission.
		$paste = new Pastes;
		$paste->title = Input::get('title');
		$paste->author = Input::get('author');
		$paste->language = Input::get('language');
		$paste->code = Input::get('code');
		$paste->save();

		return Redirect::action('ClipController@index');
	}

	public function get(Pastes $paste)
	{
		// Show the page with paste and the possibility to reply
		return View::make('get', compact('paste'));
	}

	public function edit(Pastes $paste)
	{
		// Show the edit paste form.
		return View::make('edit', compact('paste'));
	}

	public function handleEdit()
	{
		// Handle edit form submission
		$paste = Pastes::findOrFail(Input::get('id'));
		$paste->title = Input::get('title');
		$paste->author = Input::get('author');
		$paste->language = Input::get('language');
		$paste->code = Input::has('code');
		$paste->save();

		return Redirect::action('ClipController@index');

	}


	public function delete(Pastes $paste)
	{
		// Show delete confirmation page.
		return View::make('delete', compact('paste'));
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		$id = Input::get('paste');
		$paste = Pastes::findOrFail($id);
		$paste->delete();

		return Redirect::action('ClipController@index');

	}
}
