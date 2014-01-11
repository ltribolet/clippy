@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h1>Delete {{ $clip->title }} <small>Are you sure?</small></h1>
	</div>
	<form action="{{ action('ClipController@handleDelete') }}" method="post" role="form">
		<input type="hidden" name="clip" value="{{ $clip->id }}" />
		<input type="submit" class="btn btn-danger" value="Yes" />
		<a href="{{ action('ClipController@index') }}" class="btn btn-default">No way!</a>
	</form>
@stop

