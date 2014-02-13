@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h1>{{ $clip->title }}</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<input type="hidden" id="language" name="language" value="{{ $clip->language }}"/>
			<textarea name="code" id="code" cols="30" rows="10" class="form-control disabled">{{ $clip->code }}</textarea>
			<div id="nice-code" class="nice-code"></div>
		</div>
	</div>
@stop


@section('scripts')
{{ HTML::script('js/ace/ace.js') }}
{{ HTML::script('js/clipeditor.js') }}
@stop
