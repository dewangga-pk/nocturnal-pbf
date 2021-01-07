<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img/logo/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom/main.css')}}">
    @toastr_css
    @stack('style')
</head>

<body>
<div id="app">
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.bottom_bar')

@if((app()->view->getSections()['title'])!='Home')
@include('components.banner')
@endif

@yield('content')

@include('layouts.footer')
</div>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="/js/app.js"></script>
@if((app()->view->getSections()['title'])=='Home' || (app()->view->getSections()['title'])=='Product Details')
    <script src="{{asset('js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('js/custom/slick.js')}}"></script>
@elseif((app()->view->getSections()['title'])!='Cart List' || (app()->view->getSections()['title'])!='Checkout')
    <script src="{{asset('js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('js/custom/price-range.js')}}"></script>
@endif
<script src="{{asset('js/custom/main.js')}}"></script>

@jquery
@toastr_js
@toastr_render
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif
@stack('scripts')
</body>


</html>
