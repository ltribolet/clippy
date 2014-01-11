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


@if ($clip->isEmpty())
	<p>There are no clips! :(</p>
@else
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
		@foreach($clip as $clippy)
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
@stop
