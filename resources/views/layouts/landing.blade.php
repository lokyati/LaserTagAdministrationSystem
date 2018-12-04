<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>LaserTag</title>

	<!-- Scripts--> 
	<!-- defer: A script that will not run until after the page has loaded. -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <!--dns-prefetch: It is a way to speed up web pages by pre-resolving DNS. -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
	<div class="header">
		<a>Szeretnél többet megtudni? Kattints ide!</a>
	</div>
	<div class="page">
		<div class="container">
			<div class="user">
				<h1>
					Visszatérő játékos
				</h1>
				<a class="user_button" href="{{ route('login') }}">Belépés</a>
			</div>
			<div class="guest">
				<h1>
					Új játékos
				</h1>
				<a class="registration_button" href="{{ route('register') }}">Regisztráció</a>
			</div>
		</div>
	    <footer>
	    	Footer - 
	    	@if (Auth::guard('user')->check())
                <a class="admin_button" href="{{ route('admin.login') }}" style="display: none;"></a>
            @else 
                <a class="admin_button" href="{{ route('admin.login') }}">
                    {{ __('Admin belépés') }}
                </a>
            @endif
	    </footer>
	</div>
</body>
</html>