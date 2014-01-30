@extends('layouts.master')
<title>
	@section('title')
	@parent :: Index
	@stop
</title>

@section('content')
<div class="page-header">
	<h1>Login</h1>
</div>
	<form action="{{ url('login') }}" method="post">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember" id="remember" class=""/> <label for="remember">Remember me.</label>
				</div>
				<input type="submit" value="Login" class="btn btn-primary btn-lg">
				<a href="{{ action('UserController@index') }}" class="btn btn-link">New user ?</a>
			</div>
		</div>
	</form>
@stop
