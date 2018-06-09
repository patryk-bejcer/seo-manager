<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset("css/admin/styles.css") }}" />

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</head>
<body>
	<div id="app">
		@yield('body')
	</div>
	<script src="{{ asset("js/admin/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset("js/app.js") }}" type="text/javascript"></script>
</body>
</html>