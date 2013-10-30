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
                <a class="navbar-brand" href="#">ClipClip</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ action('ClipController@index') }}">Home</a></li>
                    <li><a href="{{ action('ClipController@create') }}">New Clip</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- Container -->
    <div class="container">
            <!-- content -->
            @yield('content')
    </div>

    <!-- Scripts -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
