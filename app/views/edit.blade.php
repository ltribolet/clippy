@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h1>Edit Clip</h1>
	</div>

	{{ Form::model($clip, array('action' => array('ClipController@handleEdit'))) }}
	<div class="row">
		<div class="col-md-3">
			{{ Form::hidden('id', null) }}
			<div class="form-group">
				{{ Form::label('author', 'Author'); }}
				{{ Form::text('author', null, array('class' => 'form-control', 'placeholder' => 'M. Toto')); }}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				{{ Form::label('title', 'Title'); }}
				{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Best code ever')); }}
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				{{ Form::label('language', 'Language'); }}
				{{ Form::select('language', Languages::lists('name','safe_name'), null, array('class' => 'form-control')) }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{{ Form::label('code', 'Paste your code'); }}
				{{ Form::textarea('code',null, array('class' => 'form-control')); }}
				<div id="nice-code"></div>
			</div>
			<div class="form-group">
				<a href="{{ action('ClipController@index') }}" class="btn btn-link">Cancel</a>
				{{ Form::submit('Edit', array('class' => 'btn btn-primary btn-lg')); }}
			</div>
		</div>
	</div>
	{{ Form::close() }}
@stop


@section('scripts')
{{ HTML::script('js/ace/ace.js') }}
{{ HTML::script('js/clipeditor.js') }}
@stop
