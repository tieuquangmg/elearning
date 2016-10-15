@extends('frontend._layout.outline')
@section('container')
    @include('frontend._module.header')
    @include('frontend.profile._module.nav')
    <section id="timeline">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Khoá học</div>
                        <!-- List group -->
                        <ul class="list-group">
                           {{--@foreach($courses as $k=>$v)--}}
                            {{--<a class="list-group-item">{{$v}}</a>--}}
                           {{--@endforeach--}}
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Lớp học</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Tin tức</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel ">
                        <div class="panel-heading">
                            <a href=""><span class="fa fa-newspaper-o"></span></a>
                            <a href=""><span class="fa fa-picture-o"></span></a>
                            <a href=""><span class="fa fa-file"></span></a>
                        </div>
                        <div class="panel-body">
                            <textarea name="" id="" class="form-control form-group"></textarea>
                            <div class="text-right">
                                <button type="button" class="btn btn-default btn-xs">Send</button>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href=""><span class="fa fa-newspaper-o"></span></a>
                            <a href=""><span class="fa fa-picture-o"></span></a>
                            <a href=""><span class="fa fa-file"></span></a>
                        </li>
                        <li class="list-group-item">
                            <textarea name="" id="" class="form-control form-group"></textarea>
                            <div class="text-right">
                                <button type="button" class="btn btn-default btn-xs">Send</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Kiểm tra năng lực </div>
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Mini test</div>
                        <!-- List group -->
                        <ul class="list-group">
                            {{--@foreach($mini_tests as $k => $v)--}}
                            {{--<li data="{{$k}}" href="#miniTestModal" data-toggle="modal" class="list-group-item">{{$v}}</li>--}}
                            {{--@endforeach--}}
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}build/flipclock/css/flipclock.css">
@endsection

@section('bot')
    <script src="{{asset('')}}build/flipclock/js/flipclock.js"></script>
    <script>
        var clock = $('.your-clock').FlipClock(60,{
            autoStart: true,
            countdown: true,
            clockFace: 'HourlyCounter',
            defaultLanguage: 'vi'
        });
        //clock.setTime(36);
//        clock.setCountdown(true);
        clock.start(function() {
            //alert(1);
        });

        var checkTime = setInterval( function() {
            var time  = clock.getTime();
            console.log(time+'');
            if(time==0) {
                setTimeout(function(){
                    //alert('ket thuc');
                    clearInterval(checkTime);
                }, 1000);
            }
        }, 5000);

    </script>
@endsection