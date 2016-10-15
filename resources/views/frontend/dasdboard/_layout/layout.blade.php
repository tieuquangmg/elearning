<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')

    <link href="{{asset('')}}dashboard/css/vendor/bootstrap.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/vendor/font-awesome.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/customs/style.css" rel="stylesheet" />

    <link href="{{asset('')}}dashboard/customs/style_theme.css" rel="stylesheet" />

    <link href="{{asset('')}}dashboard/customs/style_kienpnt.css" rel="stylesheet" />
    <link href="{{asset('')}}dashboard/customs/quang.css" rel="stylesheet" />
@yield('head')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
  WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header id="zingheader">
    <div class="wrapper">
        <hgroup>
            <div class="logo"><a href="/" title="E-learning">E-learning</a></div>
        </hgroup>
        <form name="search" id="searchbox" class="znewsSearch">
            <input type="text" value="Nhập nội dung cần tìm" onblur="if(this.value=='') this.value='Nhập nội dung cần tìm'" onfocus="if(this.value=='Nhập nội dung cần tìm') this.value=''" id="search_keyword" placeholder="Nhập nội dung cần tìm...">
            <button type="submit" id="search_button">Tìm kiếm</button>
        </form>
        <ul class="apps">
            <li class="menu1"><a href="#" title="E-learning" target="_blank">Liên hệ</a></li>
            <li class="menu2"><a href="#" title=E-learning target="_blank"> </a></li>
            <li class="menu3"><a href="#" title="E-learning" target="_blank">trợ giúp</a></li>
        </ul>
        <div id="bookmark">
            <a href="" title="Thêm Elearning vào danh sách ghi nhớ">Đặt làm trang chủ</a>
        </div>
    </div>
</header>
@include('frontend.dasdboard._modules.site_header')
<!-- Fixed navbar -->
@include('frontend.dasdboard._modules.nav')
@yield('page-header')

<div class="conten_waper">
    @yield('content')
</div>
<!-- Footer -->
@include('frontend.dasdboard._modules.footer')
<!-- // Footer -->

<!-- Inline Script for colors and config objects; used by various external scripts; -->
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
<!-- Vendor Scripts Bundle
  Includes all of the 3rd party JavaScript libraries above.
  The bundle was generated using modern frontend development tools that are provided with the package
  To learn more about the development process, please refer to the documentation.
  Do not use it simultaneously with the separate bundles above. -->
{{--<script src="{{asset('')}}dashboard/js/vendor/all.js"></script>--}}

<!-- Vendor Scripts Standalone Libraries -->
{{--<script src="{{asset('dashboard/js/vendor/core/all.js')}}"></script>--}}
<script src="{{asset('dashboard/js/vendor/core/jquery.js')}}"></script>
<script src="{{asset('dashboard/js/vendor/core/bootstrap.js')}}"></script>
{{--<script src="{{asset('')}}dashboard/js/vendor/core/breakpoints.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.nicescroll.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/isotope.pkgd.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/packery-mode.pkgd.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.grid-a-licious.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.cookie.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery-ui.custom.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.hotkeys.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/handlebars.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.hotkeys.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/load_image.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/jquery.debouncedresize.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/modernizr.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/core/velocity.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/tables/all.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/forms/all.js"></script>--}}
<script src="{{asset('')}}dashboard/js/vendor/media/slick.js"></script>
{{--<script src="{{asset('')}}dashboard/js/vendor/charts/flot/all.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/nestable/jquery.nestable.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/countdown/all.js"></script>--}}
{{--<script src="{{asset('')}}dashboard/js/vendor/angular/all.js"></script>--}}

<!-- App Scripts Bundle
  Includes Custom Application JavaScript used for the current theme/module;
  Do not use it simultaneously with the standalone modules below. -->
{{--<script src="{{asset('')}}dashboard/js/app/app.js"></script>--}}

<!-- App Scripts Standalone Modules
  As a convenience, we provide the entire UI framework broke down in separate modules
  Some of the standalone modules may have not been used with the current theme/module
  but ALL the modules are 100% compatible -->

<!-- <script src="js/app/essentials.js"></script> -->
<!-- <script src="js/app/material.js"></script> -->
<!-- <script src="js/app/layout.js"></script> -->
<!-- <script src="js/app/sidebar.js"></script> -->
<!-- <script src="js/app/media.js"></script> -->
<!-- <script src="js/app/messages.js"></script> -->
<!-- <script src="js/app/maps.js"></script> -->
<!-- <script src="js/app/charts.js"></script> -->

<!-- App Scripts CORE [html]:
      Includes the custom JavaScript for this theme/module;
      The file has to be loaded in addition to the UI modules above;
      app.js already includes main.js so this should be loaded
      ONLY when using the standalone modules; -->
<!-- <script src="js/app/main.js"></script> -->

{{--menu top--}}
<script type="text/javascript">
    $('document').ready(function () {
        var nav = $('#main-menu');
        var position = $('#main-menu').offset().top;
        $(window).scroll(function () {
            if ($(this).scrollTop() > position) {
                $('#main-menu').addClass("navbar-fixed-top");
            } else {
                $('#main-menu').removeClass("navbar-fixed-top");
            }
        });
    })
</script>
@yield('footer')
@yield('bot')
</body>
</html>