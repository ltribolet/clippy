@extends('layouts.master')
<title>
	@section('title')
		@parent :: Clip It
	@stop
</title>

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Create a new paste</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		{{ Form::open(array('action' => 'ClipController@handleCreate', 'class' => '')) }}
		<div class="form-group">
			{{ Form::label('author', 'Author'); }}
			{{ Form::text('author', null, array('class' => 'form-control', 'placeholder' => 'M. Toto')); }}
		</div>
		<div class="form-group">
			{{ Form::label('title', 'Title'); }}
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Best code ever')); }}
		</div>
		<div class="form-group">
			{{ Form::label('language', 'Language'); }}
			{{ Form::select('language', Languages::lists('name','safe_name'), null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('code', 'Paste your code'); }}
			{{ Form::textarea('code', null, array('class' => 'form-control')); }}
		</div>
		<div class="form-group">
			<a href="{{ action('ClipController@index') }}" class="btn btn-link">Cancel</a>
			{{ Form::submit('Create', array('class' => 'btn btn-primary btn-lg')); }}
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop
