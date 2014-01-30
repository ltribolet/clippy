@extends('layouts.master')
<title>
	@section('title')
	@parent :: Index
	@stop
</title>

@section('content')
<div class="page-header">
	<h1>New User</h1>
</div>
{{ Form::open(array('action' => 'UserController@handleCreate', 'class' => '')) }}
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				{{ Form::label('username', 'Username'); }}
				{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Toto')); }}
			</div>
			<div class="form-group">
				{{ Form::label('email', 'Email'); }}
				{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'toto@totocompany.com')); }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Password'); }}
				{{ Form::password('password', array('class' => 'form-control')); }}
			</div>
			{{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg')); }}
		</div>
	</div>
{{ Form::close() }}
@stop
