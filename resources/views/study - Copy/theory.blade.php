@extends('study._layout.outline')
@section('title')
    Trang chủ
@endsection
@section('content')
        <div class="row">
            <div class="col-lg-8" style="font-size:16px">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-bookmark"> </i> {{$theory->name}}</div>
                    <div class="panel-body" >
                        @if($permission)
                        {!! $theory->intro !!}
                        <hr>
                        {!! $theory->content !!}
                        @else
                            <h4 style="color: palevioletred">Bạn chưa hoàn thành bài trước</h4>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-clock-o"></i>Thời gian tối thiếu học bài</div>
                    <ul class="list-group">
                        <li class="list-group-item"><i class="your-clock"></i></li>
                    </ul>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-list"> </i>Danh sách bài học</div>
                    <ul class="list-group">
                        @foreach($theory->unit->theory as $row)
                            @if($row->user_theory->first()->watch_time == 0)
                                <li class="list-group-item"><a style="text-decoration: none; color:dimgray " href="{{route('study.theory', $row->id)}}">{{$row->name}}</a>
                                    <span class="glyphicon glyphicon-ok"></span>
                            @else
                                <li class="list-group-item"><a style="text-decoration: none"  href="{{route('study.theory', $row->id)}}">{{$row->name}}</a>
                                    <span>{{$row->time/1000/60}} Phút</span>
                                    @endif
                                </li>
                                @endforeach
                    </ul>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-list"> </i> Lish sử làm bài</div>
                    <ul class="list-group">
                        @foreach($theory->unit->theory as $row)
                            <li class="list-group-item"><a style="text-decoration: none" href="{{route('study.theory', $row->id)}}">{{$row->name}}</a></li>
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        <a href="" class="btn btn-primary"><i class="fa fa-pencil"> </i> Làm bài tập</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-list"> </i> Danh sách chương</div>
                    <ul class="list-group">
                        @foreach($theory->unit->subject->unit as $row)
                            <li class="list-group-item"><a style="text-decoration: none" href="{{route('study.unit', $row->id)}}">{{$row->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    {{--<div class="error-notice">--}}
        {{--<div class="oaerror info">--}}
            {{--<strong></strong> {{$theory->name}}  - <strong>Bài học</strong> : {{$theory->unit->name}}--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}build/flipclock/css/flipclock.css">
@endsection
@section('bot')
    <script src="{{asset('')}}build/flipclock/js/flipclock.js"></script>
    @if($permission)
    <script>
        var watch_time = {{$watch_time/1000}};
        var clock = $('.your-clock').FlipClock(watch_time ,{
            autoStart: true,
            countdown: true,
            clockFace: 'HourlyCounter',
            defaultLanguage: 'vi_VN'
        });
        //clock.setTime(36);
        //        clock.setCountdown(true);
        clock.start(function() {
        });

        function update_time(time) {
//            var data = $('#formSetSingleRole').serialize();
            console.log(time+'');
            data = {
                user_id:'{{Auth::user()->id}}',
                theory_id:{{$theory->id}},
                time:time+''
            };
            $.ajax({
                url: '{{route('study.updatetime')}}',
                method:'GET',
                data: data,
                success:function (e) {
                    console.log(e);
                }
//                error:function (){
//                    alert('lỗi');
//                }
            });
        }
        var checkTime = setInterval( function() {
            var time  = clock.getTime()*1000;
            update_time(time);
            console.log(time+'');
            if(time==0) {
                setTimeout(function(){
                    clearInterval(checkTime);
                }, 100);
            }
        }, 60000);
//        clock.stop();
    </script>
    @endif
@endsection