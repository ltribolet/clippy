@extends('layouts.master')

@section('link')
	{{ HTML::style('css/clip.css') }}
@stop

@section('content')
	<div class="page-header">
		<h1>Clip</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{ Form::model($paste, array('action' => array('ClipController@handleEdit'))) }}
			{{ Form::hidden('id', null) }}
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
				{{ Form::textarea('code',null, array('class' => 'form-control disabled')); }}
				<div id="nice-code"></div>
			</div>
			<div class="form-group">
				<a href="{{ action('ClipController@index') }}" class="btn btn-link">Cancel</a>
				{{ Form::submit('Edit', array('class' => 'btn btn-primary btn-lg')); }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
@stop


@section('scripts')
{{ HTML::script('js/ace/ace.js') }}
{{ HTML::script('js/clipeditor.js') }}
@stop
