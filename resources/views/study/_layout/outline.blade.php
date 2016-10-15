<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @yield('meta')
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('build/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-social/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
    <link href="{{asset('build/style/css/footer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/style/css/order-ui.css')}}">

    <link rel="stylesheet" href="{{asset('user/outline.css')}}">
    <link rel="stylesheet" href="{{asset('user/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('user/checkbox.css')}}">
    <link rel="stylesheet" href="{{asset('user/alert.css')}}">
    <link rel="stylesheet" href="{{asset('user/button.css')}}">
    <link rel="stylesheet" href="{{asset('user/section.css')}}">

    <link rel="stylesheet" href="{{asset('user/panel.css')}}">
    <link rel="stylesheet" href="{{asset('user/waiting.css')}}">
    <link rel="stylesheet" href="{{asset('user/quiz.css')}}">
    <link rel="stylesheet" href="{{asset('user/radio.css')}}">
    <link rel="stylesheet" href="{{asset('user/multi_choice.css')}}">
    <link rel="stylesheet" href="{{asset('user/list_left.css')}}">
    <link rel="stylesheet" href="{{asset('user/list_column.css')}}">
    @yield('head')
</head>
<body>
@include('study._modules.nav')
<div class="container">
    @include('_basic.includes.alert.index')
    @yield('content')
</div>
<script type="text/javascript" src="{{ asset('') }}build/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}build/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}build/bootstrap-select/js/bootstrap-select.js"></script>
<script type="text/javascript" src="{{ asset('') }}build/mustache.js/js/mustache.js"></script>
<script src="{{asset('user/quiz.js')}}"></script>
<script src="{{asset('user/carousel.js')}}"></script>
@yield('bot')
</body>
</html>
