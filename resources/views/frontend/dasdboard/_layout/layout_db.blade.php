<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('')}}build/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/vendor/font-awesome.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/lobibox.min.css" rel="stylesheet" />
@yield('head')
    <link href="{{asset('dashboard/css/dashboard.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
  WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('frontend.dasdboard._modules.nav_db')

@yield('content')
<script src="{{asset('dashboard/js/vendor/core/jquery.js')}}"></script>
<script src="{{asset('dashboard/js/vendor/core/bootstrap.js')}}"></script>

{{--menu top--}}
<script src="{{asset('dashboard/js/socket.io-1.4.5.js')}}"></script>
{{--<script src="{{asset('dashboard/js/pusher.min.js')}}"></script>--}}
<script src="{{asset('dashboard/js/notifications.min.js')}}"></script>
<script>
    function show_notify(title,msg,img) {
        Lobibox.notify('info', {
            title: title,
            showClass:'zoomIn',
            hideClass:'zoomOut',
            pauseDelayOnHover: true,
            delayIndicator: false,
            sound: true,
            soundPath: '{{asset('dashboard/sounds').'/'}}',
            soundExt: '.ogg',
            msg:msg,
            img: img,
        });
    }
    function append_notify(data){
        $noti = '<li class="notif ">' +
            '<a href="#">' +
            '<div class="imageblock">' +
            '<img src="http://i.9mobi.vn/cf/images/2015/04/nkk/hinh-avatar-dep-11.jpg" class="notifimage">' +
            '</div>' +
            '<div class="messageblock">' +
            '<div class="message"><strong>'+data.message.name+'</strong>'+data.message.content+
            '</div>' +
            '<div class="messageinfo">' +
            '<i class="icon-comment"></i>'+data.message.created_at +
            '</div>' +
            '</div>' +
            '</a>' +
            '</li>';
        $('.notifbox').prepend($noti)
    }
</script>
<script>
    var socket = io(':6002'),
            channel = 'classes_1';
    socket.on('connect', function () {
        socket.emit('subscribe', channel);
    });
    socket.on('error', function (error) {
        console.warn('Error', error);
    });
    socket.on('message', function (message) {
        console.info(message);
    });

    socket.on('classes_1:message', function (data) {
        show_notify(data.message.name,data.message.content,'http://i.9mobi.vn/cf/images/2015/04/nkk/hinh-avatar-dep-11.jpg');
        append_notify(data);
        console.log(data);
    });
</script>
{{--<script>--}}
    {{--// Enable pusher logging - don't include this in production--}}
    {{--Pusher.logToConsole = true;--}}

    {{--var pusher = new Pusher('c421ca21aa9a393ebfec', {--}}
        {{--cluster: 'ap1',--}}
        {{--encrypted: true--}}
    {{--});--}}
    {{--var channel = pusher.subscribe('classes_1');--}}
    {{--channel.bind('pusher:subscription_succeeded', function() {--}}
        {{--console.log('ket noi thanh cong');--}}
    {{--});--}}
    {{--channel.bind('App\\Events\\ClassPusherEvent', function(data) {--}}
        {{--show_notify(data.message.name,data.message.content,'http://i.9mobi.vn/cf/images/2015/04/nkk/hinh-avatar-dep-11.jpg');--}}
        {{--append_notify(data);--}}
        {{--console.log(data);--}}
    {{--});--}}
{{--</script>--}}
{{--<script>--}}
    {{--// Enable pusher logging - don't include this in production--}}
    {{--Pusher.logToConsole = true;--}}

    {{--var pusher = new Pusher('c421ca21aa9a393ebfec', {--}}
        {{--cluster: 'ap1',--}}
        {{--encrypted: true--}}
    {{--});--}}
    {{--var channel = pusher.subscribe('quang');--}}
    {{--channel.bind('pusher:subscription_succeeded', function() {--}}
        {{--console.log('ket noi thanh cong');--}}
    {{--});--}}
    {{--channel.bind('App\\Events\\MessagePusherEvent', function(data) {--}}
        {{--show_notify(data.user.full_name,data.message.content,'http://i.9mobi.vn/cf/images/2015/04/nkk/hinh-avatar-dep-11.jpg');--}}
{{--//        console.log(data);--}}
    {{--});--}}
{{--</script>--}}

{{--<script type="text/javascript">--}}
    {{--$('document').ready(function (){--}}
        {{--var nav = $('#main-menu');--}}
        {{--var position = $('#main-menu').offset().top;--}}
        {{--$(window).scroll(function () {--}}
            {{--if ($(this).scrollTop() > position) {--}}
                {{--$('#main-menu').addClass("navbar-fixed-top");--}}
            {{--} else {--}}
                {{--$('#main-menu').removeClass("navbar-fixed-top");--}}
            {{--}--}}
        {{--});--}}
    {{--})--}}
{{--</script>--}}
@yield('footer')
@yield('bot')
</body>
</html>