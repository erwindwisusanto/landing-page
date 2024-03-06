<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ozone Theraphy</title>

		{{-- icons --}}
		<link rel="stylesheet"
					href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
					integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
					crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet"
					href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
					integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
					crossorigin="anonymous" referrerpolicy="no-referrer" />

		{{-- favicon --}}
		<link rel="icon" type="image/x-icon" href="{{ asset('assets/ozone/img/favicon.svg') }}">

		{{-- fontello --}}
		<link rel="stylesheet" href="{{ asset('assets/global/fontello/css/csehat.css') }}">

		{{-- bootstrap --}}
		<link href="{{ asset('assets/global/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		{{-- custom --}}
		<link rel="stylesheet" href="{{ asset('assets/ozone/css/style.css') }}">

		{{-- ozone style --}}
		<link href="{{ asset('assets/ozone/css/ozone.css') }}" rel="stylesheet">
  </head>
  <body class="bg-f7">

    {{ $slot }}

		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/global/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  </body>
</html>
