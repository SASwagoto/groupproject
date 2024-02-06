<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer</title>

    <link rel="shortcut icon" href="assets/images/Icon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/plugins/fontawesome6/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/swiper_js/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-brand">
@include('layouts.partials.header')

@yield('content')




<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/plugins/bs/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/swiper_js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>