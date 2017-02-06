<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token()}}"/>
    <title>@yield('title')</title>
    <link href="{{asset('')}}build/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/vendor/font-awesome.css" rel="stylesheet">
    <link href="{{asset('')}}dashboard/css/lobibox.min.css" rel="stylesheet"/>
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

<div class="loading"></div>
@include('frontend.dasdboard._modules.nav_db')
@yield('content')
<script src="{{asset('dashboard/js/vendor/core/jquery.js')}}"></script>
<script src="{{asset('dashboard/js/vendor/core/bootstrap.js')}}"></script>

{{--menu top--}}
<script src="{{asset('dashboard/js/socket.io-1.4.5.js')}}"></script>
{{--<script src="{{asset('dashboard/js/pusher.min.js')}}"></script>--}}
<script src="{{asset('dashboard/js/notifications.min.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.hc-sticky.min.js')}}"></script>
{{--<script src="{{asset('dashboard/js/jquery.sticky-sidebar-scroll.min.js')}}"></script>--}}
@if(Auth::guard('nguoidung')->check())
    <script>
        var id = {{Auth::guard('nguoidung')->user()->id}};
    </script>
@else
    <script>
        var id = {{Auth::user()->id}};
    </script>
@endif
<script>
    var APP_URL = {!! json_encode(url('/')) !!}
    function getavatar(image){
        if (image == null) {
            var avatar = APP_URL + '/images/no-avatar.jpg';
        } else {
            var avatar = APP_URL + '/' + image;
        }
        return avatar;
    }
    function show_notify(title, msg, img) {
        Lobibox.notify('info', {
            title: title,
            showClass: 'zoomIn',
            hideClass: 'zoomOut',
            pauseDelayOnHover: true,
            delayIndicator: false,
            sound: true,
            soundPath: '{{asset('dashboard/sounds').'/'}}',
            soundExt: '.ogg',
            msg: msg,
            img: img,
        });
    }
    function append_notify(data) {
        if (data.user.image == null) {
            var avatar = APP_URL + '/images/no-avatar.jpg';
        } else {
            var avatar = APP_URL + '/' + data.user.image;
        }
        $noti = '<li class="jewelItemNew">' +
                '<a class="messagesContent" role="button" href="">' +
                '<div spacing="medium" direction="left" class="clearfix">' +
                '<div class="_ohe lfloat">' +
                '<div class="MercuryThreadImage _4qeb img _8o _8s">' +
                '<div class="_55lt" size="50" style="width: 50px; height: 50px;">' +
                '<img src="' + avatar + '" width="50" height="50" alt="" class="img"></div>' +
                '</div>' +
                '</div>' +
                '<div class="">' +
                '<div class="_42ef clearfix" direction="right">' +
                '<div class="_ohf rfloat">' +
                '<div><span></span>' +
                '<div class="x_div">' +
                '<div aria-label="Đánh dấu là đã đọc" class="_5c9q" data-hover="tooltip" data-tooltip-alignh="center" data-tooltip-content="Đánh dấu là đã đọc" role="button" tabindex="0"></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="">' +
                '<div class="content">' +
                '<div class="author">' +
                '<strong><span>' + data.message.name + '</span></strong><span class="presenceIndicator"><span class="accessible_elem"></span></span>' +
                '</div>' +
                '<div class="snippet preview"><span class="_3jy5"></span><span><span><div>' + data.message.content + '</div></span></span>' +
                '</div>' +
                '<div class="time"><abbr class="timestamp">' + data.message.created_at + '</abbr>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</a></li>';
        $('.notifbox').prepend($noti)
    }
    function append_message(data) {
        if (data.user.image == null) {
            var avatar = APP_URL + '/images/no-avatar.jpg';
        } else {
            var avatar = APP_URL + '/' + data.user.image;
        }
        $messs = '<li class="jewelItemNew">' +
                '<a class="messagesContent" role="button" href="">' +
                '<div spacing="medium" direction="left" class="clearfix">' +
                '<div class="_ohe lfloat">' +
                '<div class="MercuryThreadImage _4qeb img _8o _8s">' +
                '<div class="_55lt" size="50" style="width: 50px; height: 50px;">' +
                '<img src="' + avatar + '" width="50" height="50" alt="" class="img">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="">' +
                '<div class="_42ef clearfix" direction="right">' +
                '<div class="_ohf rfloat">' +
                '<div><span></span>' +
                '<div class="x_div">' +
                '<div aria-label="Đánh dấu là đã đọc" class="_5c9q" data-hover="tooltip" data-tooltip-alignh="center" data-tooltip-content="Đánh dấu là đã đọc" role="button" tabindex="0">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="">' +
                '<div class="content">' +
                '<div class="author"><strong>' +
                '<span>' + data.user.ho_ten + '</span>' +
                '</strong>' +
                '<span class="presenceIndicator">' +
                '<span class="accessible_elem"></span>' +
                '</span>' +
                '</div>' +
                '<div class="snippet preview">' +
                '<span class="_3jy5"></span><span><span>' + data.message.content + '</span></span>' +
                '</div>' +
                '<div class="time">' +
                '<abbr class="timestamp">' + data.message.created_at + '</abbr>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</a></li>';
        $('#messbox').prepend($messs)
    }
</script>
<script>
    var socket = io(':6002'),
        channel = [
                id,
                'system-notify',
                'all-user-notify',
                'all-nguoidung-notify'
        ];
    socket.on('connect', function (){
        socket.emit('subscribe', channel);
    });
    socket.on('error', function (error) {
        console.warn('Error', error);
    });
    //    socket.on('tinnhan', function (message) {
    //        console.info(message);
    //    });
    socket.on(id+':notify', function (data) {
        console.log(data);
        show_notify(data.message.name, data.message.content, getavatar(data.user.image));
        append_notify(data);
    });

    socket.on(id + ':tinnhan', function (data) {
        show_notify(data.user.ho_ten, data.message.content, getavatar(data.user.image));
        append_message(data);
    });
    socket.on('system-notify:notify-sys', function (data) {
        show_notify(data.user.ho_ten, data.message.content, getavatar(data.user.image));
        append_notify(data);
    });
    socket.on('all-user-notify:notify-sys', function (data) {
        show_notify(data.user.ho_ten, data.message.content, getavatar(data.user.image));
        append_notify(data);
    });
    socket.on('all-nguoidung-notify:notify-sys', function (data) {
        show_notify(data.user.ho_ten, data.message.content, getavatar(data.user.image));
        append_notify(data);
    });
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    $(document).ready(function () {
        $(document).on('click', '#read_all_mes', function () {
            $.ajax({
                url: '{{route('study.readallmess')}}',
                method: 'post',
                success: function (data) {
                    console.log(data.success);
                    if (data.success == true) {
                        $('#count_mess').text('');
                    } else {
                        alert('lỗi kết nối server !')
                    }
                },
                error: function () {
                    alert('lỗi kết nối server !')
                }
            });
        });
        $(document).on('click', '#read_all_not', function () {
            $.ajax({
                url: '{{route('study.readallnoti')}}',
                method: 'post',
                success: function (data) {
                    console.log(data.success);
                    if (data.success == true) {
                        $('#count_noti').text('');
                    } else {
                        alert('lỗi kết nối server !')
                    }
                },
                error: function () {
                    alert('lỗi kết nối server !')
                }
            });
        })
    })
</script>
<script>
    $('#sidebar').hcSticky({
        top: 50,
        bottomEnd: 0,
        wrapperClassName: 'quang99'
    });
    $('#rightbar').hcSticky({
        top: 50,
        bottomEnd: 0,
        wrapperClassName: 'quang99'
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