@extends('layouts.master')
<title>
	@section('title')
		@parent :: Index
	@stop
</title>

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>ClipClip com' here</h1>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<a href="{{ action('ClipController@create') }}" class="btn btn-primary">Create clip</a>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		@if ($clipAll->isEmpty())
		<p>There are no public clips! :(</p>
		<p>Go create them !</p>
		@else
		<h2>All Public Clips</h2>
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Private</th>
				<th>Created</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			@foreach($clipAll as $clippy)
			<tr>
				<td><a href="{{ action('ClipController@get', $clippy->id) }}">{{ $clippy->title }}</a></td>
				<td>{{ $clippy->author }}</td>
				<td>{{ $clippy->private ? 'Yes' : 'No' }}</td>
				<td>{{ $clippy->created_at }}</td>
				<td>
					<a href="{{ action('ClipController@edit', $clippy->id) }}" class="btn btn-default">Edit</a>
					<a href="{{ action('ClipController@delete', $clippy->id) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		@endif
	</div>
	<div class="col-md-6">
		@if ($clipUser->isEmpty())
		<p>You have no clips! :(</p>
		<p>Go create them !</p>
		@else
		<h2>Your Clips</h2>
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Private</th>
				<th>Created</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			@foreach($clipUser as $clippy)
			<tr>
				<td><a href="{{ action('ClipController@get', $clippy->id) }}">{{ $clippy->title }}</a></td>
				<td>{{ $clippy->author }}</td>
				<td>{{ $clippy->private ? 'Yes' : 'No' }}</td>
				<td>{{ $clippy->created_at }}</td>
				<td>
					<a href="{{ action('ClipController@edit', $clippy->id) }}" class="btn btn-default">Edit</a>
					<a href="{{ action('ClipController@delete', $clippy->id) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>

@stop
