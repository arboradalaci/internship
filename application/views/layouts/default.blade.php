<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	{{ HTML::style('/css/main.css') }}
	{{ HTML::script('/js/application.js') }}
</head>

<body>
	<div id="container">

		<div id="header">
			{{ HTML::link('/', 'Introductory Task - Internship in SE') }}
            {{ HTML::link('/', '@Skanatek') }}
		</div>
        
        <!-- end header -->

		<div id="nav">
			<ul>
				<li>{{ HTML::link_to_route('home', 'Home') }}</li>
				@if(!Auth::check())
					<li>{{ HTML::link_to_route('register', 'Register') }}</li>
					<li>{{ HTML::link_to_route('login', 'Login') }}</li>
				@else 
					<li>{{ HTML::link_to_route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
				@endif
			</ul>
		</div><!-- end nav -->

		<div id="content">
			@if(Session::has('message'))
				<p id="message">{{ Session::get('message') }}</p>
			@endif

			@yield('content')
		</div><!-- end content -->

		<div id="footer">
			&copy; Introductory Task {{ date('Y') }}
		</div><!-- end footer -->

	</div><!-- end container -->
</body>
</html>