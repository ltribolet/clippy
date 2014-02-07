<?php

class ClipController extends BaseController
{
	public function index()
	{
		// Show a listing of games.
		$clipAll = Clip::where('private', '=', 0)->get();
		$clipUser = Clip::where('user_id', '=', Auth::user()->id)->get();
		return View::make('index', compact('clipAll', 'clipUser'));

	}

	public function create()
	{
		// Show the create clip form.
		return View::make('create');
	}

	public function about()
	{
		return View::make('about');
	}

	public function handleCreate()
	{
		// Handle create form submission.
		$clip = new Clip;
		$clip->title = Input::get('title');
		$clip->author = Input::get('author');
		$clip->language = Input::get('language');
		$clip->code = Input::get('code');
		$clip->private = (Input::get('private') === 'yes') ? 1 : 0;
		$clip->user_id = Auth::user()->id;
		$clip->save();

		return Redirect::action('ClipController@index');
	}

	public function get(Clip $clip)
	{
		// Show the page with clip and the possibility to reply
		return View::make('get', compact('clip'));
	}

	public function edit(Clip $clip)
	{
		// Show the edit clip form.
		return View::make('edit', compact('clip'));
	}

	public function handleEdit()
	{
		// Handle edit form submission
		$clip = Clip::findOrFail(Input::get('id'));
		$clip->title = Input::get('title');
		$clip->author = Input::get('author');
		$clip->language = Input::get('language');
		$clip->code = Input::has('code');
		$clip->save();

		return Redirect::action('ClipController@index');

	}


	public function delete(Clip $clip)
	{
		// Show delete confirmation page.
		return View::make('delete', compact('clip'));
	}

	public function handleDelete()
	{
		// Handle the delete confirmation.
		$id = Input::get('clip');
		$clip = Clip::findOrFail($id);
		$clip->delete();

		return Redirect::action('ClipController@index');

	}
}
