<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Landing Skeleton</title>

</head>
<body>

	{{ $slot }}

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="{{ asset('assets/bni/bni.js') }}"></script>
</body>
</html>
