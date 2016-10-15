<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Fancy navbar login / sign in form - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('build/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-social/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/style/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/order-ui.css')}}">

    <link rel="stylesheet" href="{{asset('user/outline.css')}}">
    <link rel="stylesheet" href="{{asset('user/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('user/checkbox.css')}}">
    <link rel="stylesheet" href="{{asset('user/alert.css')}}">
    <link rel="stylesheet" href="{{asset('user/button.css')}}">
    <link rel="stylesheet" href="{{asset('user/section.css')}}">
    <link rel="stylesheet" href="{{asset('user/list.css')}}">
    <link rel="stylesheet" href="{{asset('user/panel.css')}}">
    <link rel="stylesheet" href="{{asset('user/waiting.css')}}">
    <link rel="stylesheet" href="{{asset('user/quiz.css')}}">
    <link rel="stylesheet" href="{{asset('user/radio.css')}}">
    <link rel="stylesheet" href="{{asset('user/multi_choice.css')}}">
    <link rel="stylesheet" href="{{asset('user/list_left.css')}}">
    <link rel="stylesheet" href="{{asset('user/list_column.css')}}">
    {{--<link rel="stylesheet" href="{{asset('namviet/checkbox.css')}}">--}}


    <script type="text/javascript" src="{{ asset('') }}build/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}build/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}build/bootstrap-select/js/bootstrap-select.js"></script>
</head>
<body>

@include('namviet._modules.nav')
@include('namviet._modules.carousel')
@include('namviet._modules.alert')
@include('namviet._modules.button')
@include('namviet._modules.checkbox')
@include('namviet._modules.section')
@include('namviet._modules.list')
@include('namviet._modules.panel')
@include('namviet._modules.waiting')
@include('namviet._modules.quiz')
@include('namviet._modules.radio')
@include('namviet._modules.multi_choice')
@include('namviet._modules.list_left')

</body>
<script type="text/javascript">
    $(document).ready( function() {
        $('#myCarousel').carousel({
            interval:   4000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.nav').children().length -1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
</script>
<script src="{{asset('user/quiz.js')}}"></script>
</body>
</html>
