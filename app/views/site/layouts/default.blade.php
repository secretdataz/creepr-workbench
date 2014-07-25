<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Creepr Network</title>

    <link rel="icon" type="image/x-icon" href="http://i.imgur.com/WS5ZCTp.png" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Latest compiled and minified CSS -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/octicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="http://i.imgur.com/WS5ZCTp.png" class="mainLogo" alt="Creepr"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Creepr Network</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="octicon octicon-home"></span>&nbsp; About <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/cast"><span class="octicon octicon-organization"></span>&nbsp; Cast</a></li>
                        <li><a href="/server"><span class="octicon octicon-database"></span>&nbsp; Server</a></li>
                        <li><a href="/jobs"><span class="octicon octicon-gist-secret"></span>&nbsp; Jobs</a></li>
                        <li class="divider"></li>
                        <li><a href="/contribute" class="contribute-link"><span class="octicon octicon-heart"></span>&nbsp; Contribute</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="/content" class="dropdown-toggle" data-toggle="dropdown"><span class="octicon octicon-device-camera-video"></span>&nbsp; Content <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="octicon octicon-device-desktop"></span>&nbsp; Videos</a></li>
                        <li><a href="#"><span class="octicon octicon-broadcast"></span>&nbsp; Podcasts</a></li>
                        <li><a href="#"><span class="octicon octicon-gift"></span>&nbsp; Merchandise</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="octicon octicon-megaphone"></span>&nbsp; Community <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="octicon octicon-comment-discussion"></span>&nbsp; Forums</a></li>
                        <li><a href="#"><span class="socicon">r</span>&nbsp; YouTube</a></li>
                        <li><a href="#"><span class="socicon">a</span>&nbsp; Twitter</a></li>
                      </ul>
                    </li>
										@if (Auth::check())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo 'https://minotar.net/helm/' . Auth::user()->username . '/16.png'; ?>">&nbsp; {{{ Auth::user()->username }}} <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{{ URL::to('user') }}}"><span class="octicon octicon-gear"></span>&nbsp; Settings</a></li>
                        <li><a href="{{{ URL::to('user/logout') }}}"><span class="octicon octicon-sign-out"></span>&nbsp; Sign Out</a></li>
                        @if (Auth::user()->hasRole('admin'))
                        <li class="divider"></li>
                        <li><a href="{{{ URL::to('admin') }}}"><span class="octicon octicon-tools"></span>&nbsp; Backend</a></li>
                        @endif
                      </ul>
                    </li>
										@else
										<li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}"><span class="octicon octicon-key"></span>&nbsp; Sign In</a></li>
										<li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}"><span class="octicon octicon-sign-in"></span>&nbsp; Register</a></li>
										@endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

	    @yield('content')
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
