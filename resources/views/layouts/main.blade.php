<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
	<title>@yield('title')</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="{{url('/')}}">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item @yield('home-nav')">
						<a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item @yield('about-nav')">
						<a class="nav-link" href="{{url('/about')}}">About</a>
					</li>
				</ul>
			</div>
		</nav>

		@yield('content')
	</div>
	<script src="{{url('/assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
</body>
</html>