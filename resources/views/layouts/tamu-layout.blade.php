<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Landing Skeleton</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

	{{ $slot }}

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
	<script src="{{ asset('assets/bni/bni.js') }}"></script>
</body>
</html>
