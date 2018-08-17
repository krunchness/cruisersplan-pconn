<!DOCTYPE html>
<html>
<head>
	<title>Cruise Planners</title>

	<!-- Vendor Files -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">

	<script type="text/javascript" src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>

	@yield('head-custom')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

	<div class="layout-container">
		<div class="container">
			@yield('content')
		</div>
	</div>
	

	@yield('footer-custom')
</body>
</html>