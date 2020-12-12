<!DOCTYPE html>
<html>
<head>
	<title>Country Reports</title>

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}"/>
	@yield('css')
	<!-- CSS -->
</head>
<body>
	@yield('content')

	<!-- js -->
	<script src="{{asset('plugins/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/validation/jquery.validate.min.js')}}"></script>
	<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
	@yield('js')
	<!-- js -->
</body>
</html>