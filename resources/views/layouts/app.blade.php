<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template" content="vegana">
    <meta name="created" content="09-November-2020">
    <meta name="title" content="vegana - vegan food ecommerce html template">
    <meta name="keywords"
          content="vegana, vegan, food, ecommerce, store, html, template, bootstrap, vegetarian, organic, vegetables, greengrocery, fruit, healthy, shop">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img/logo/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/home-1.css')}}">
</head>

<body>

@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bottom_bar')

@yield('content')

@include('layouts.footer')

<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/slick.min.js')}}"></script>
<script src="{{asset('js/custom/slick.js')}}"></script>
<script src="{{asset('js/custom/main.js')}}"></script>
</body>


</html>
