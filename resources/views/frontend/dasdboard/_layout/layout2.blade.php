<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('')}}dashboard/css/vendor/bootstrap.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/vendor/font-awesome.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/customs/style.css" rel="stylesheet" />

    <link href="{{asset('')}}dashboard/customs/style_theme.css" rel="stylesheet" />

    <link href="{{asset('')}}dashboard/customs/style_kienpnt.css" rel="stylesheet" />
    <link href="{{asset('')}}dashboard/customs/quang.css" rel="stylesheet" />
@yield('head')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<div class="conten_waper">
    @yield('content')
</div>
<!-- Footer -->
@include('frontend.dasdboard._modules.footer')
<!-- // Footer -->

<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
</script>

<script src="{{asset('dashboard/js/vendor/core/jquery.js')}}"></script>
<script src="{{asset('dashboard/js/vendor/core/bootstrap.js')}}"></script>

<script src="{{asset('')}}dashboard/js/vendor/media/slick.js"></script>

@yield('footer')
@yield('bot')
</body>
</html>