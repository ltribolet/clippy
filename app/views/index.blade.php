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
		<a href="{{ action('ClipController@create') }}" class="btn btn-primary">Create Paste</a>
	</div>
</div>


@if ($pastes->isEmpty())
	<p>There are no pastes! :(</p>
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
		@foreach($pastes as $paste)
			<tr>
				<td><a href="#">{{ $paste->title }}</a></td>
				<td>{{ $paste->author }}</td>
				<td>{{ $paste->private ? 'Yes' : 'No' }}</td>
				<td>{{ $paste->created_at }}</td>
				<td>
					<a href="{{ action('ClipController@edit', $paste->id) }}" class="btn btn-default">Edit</a>
					<a href="{{ action('ClipController@delete', $paste->id) }}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endif
@stop
