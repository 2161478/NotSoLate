<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Webtech 2018') }}</title>

	<link rel="manifest" href="/manifest.json">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<h1><img src="{{asset('storage/img/logo.PNG')}}" alt="logo" style="height: 50px">{{ config('app.name', 'Webtech 2018') }}
					</h1>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
						<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ '/profile' }}">{{ __('Profile') }}</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest
						<li><a class="nav-link" href="{{ route('quizzes.index') }}">Quiz</a></li>
						<li><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container" style="margin-top: 80px">
			@yield('content')
		</div>
		<footer class="footer navbar-light navbar-laravel">
			<div class="text-center">9325A 1-2 TF Group 1<br> &copy; May 2018</div>
		</footer>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
