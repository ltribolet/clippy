<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
            @section('title')
            Application
            @show
    </title>
    <!-- CSS -->
    {{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/clip.css') }}

    @section('link')
    @show

    <style>
    @section('styles')
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
    @show
    </style>

</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{ HTML::linkAction('ClipController@index', 'Clippy', array(), array('class' => 'navbar-brand'))}}
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					{{ HTML::nav_link(action('ClipController@create'), 'New Clip') }}
					{{ HTML::nav_link(action('ClipController@about'), 'About') }}
				</ul>
				@if (Auth::check())
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{{{ Auth::user()->username }}}
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{ action('UserController@get', Auth::user()->id) }}">My Profile</a></li>
							<li>{{ HTML::linkAction('UserController@logout', 'Logout') }}</li>
						</ul>
					</li>
				</ul>
				@endif
			</div><!--/.nav-collapse -->
		</div>
	</div>
    <!-- Container -->
    <div class="container clipainer">
            <!-- content -->
            @yield('content')
    </div>

    <div class="kitty"></div>

    <!-- Scripts -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

    @section('scripts')
    @show
</body>
</html>
