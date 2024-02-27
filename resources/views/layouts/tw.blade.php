<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teeth Whitening</title>

    <!-- icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
        integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/teeth-whitening/img/favicon.svg') }}">

    <!-- fontello -->
    <link rel="stylesheet" href="{{ asset('assets/teeth-whitening/fontello/css/csehat.css') }}">

    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('assets/teeth-whitening/css/swiper-bundle.min.css') }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/teeth-whitening/bootstrap/css/bootstrap.min.css') }}">

    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('assets/teeth-whitening/css/style.css') }}">
  </head>
  <body class="mx-auto" style="max-width: 640px; background-color: #E7F4F3;">
		<x-teeth-whitening.navbar/>

    {{ $slot }}

		<x-teeth-whitening.footer/>

		<script src="{{ asset('assets/teeth-whitening/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/teeth-whitening/js/swiper-bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  </body>
</html>