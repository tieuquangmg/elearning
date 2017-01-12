@extends('frontend.dasdboard._layout.layout2')
@section('title')
    Trang chủ
@endsection
@section('content')
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col-md-12 form-group" style=" padding-bottom: 70px;">
                <div class="panel">
                    <div class="panel-heading panel-blue">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4>Chi tiết bài kiểm tra</h4>
                            </div>
                            <div class="pull-right">
                                <a href="{{url(Session::get('url_back'))}}" class="btn btn-xs"><i class=" glyphicon glyphicon-backward"></i> Quay lại</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table" style="width: 300px; margin: 0 auto;">
                            <tr>
                                <td><span>Môn học</span></td>
                                <td><p class="name_sv" style="text-transform: uppercase">{{$unit->subject->name}}</p></td>
                            </tr>
                            <tr>
                                <td><span>Sinh viên</span></td>
                                <td><p class="name_sv" style="text-transform: uppercase">{{Auth::user()->ho_ten}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Thời gian làm bài</td>
                                <td>{{$user_test->time/60}} phút</td>
                            </tr>
                            <tr>
                                <td>Mã đề</td>
                                <td>7749</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="question_waper">
                    <form action="{{route('study.unit.tested')}}" method="post">
                        <input type="hidden" id="unit_test_id" name="unit_test_id" value="{{$unit_test->id}}">
                        {{--{{csrf_field()}}--}}
                        @foreach($unit_test_detail as $k =>$value)
                            <div class="row" style="padding: 20px; font-size: 15px">
                                <div>
                                    <h4>
                                        <strong class="question_name"  id="{{$z = $k+1}}">Câu số {{$z}} </strong>
                                        <div class="checkbox checkbox-danger number_question" style="display: inline">
                                            <input id="checkbox{{$z}}" class="not_true" data="{{$z}}"  type="checkbox" >
                                            <label for="checkbox{{$z}}">
                                                {{--<i class="fa fa-bug fa text-info"></i>--}}
                                            </label>
                                        </div>
                                    </h4>
                                    <ul class="list-group" style="">
                                        <?php $row = $value->question($value->question_bank_id)?>
                                        {!! $row->question !!}
                                        <input type="hidden" name="question_id[]" value="{{$row->id}}">
                                    </ul>
                                </div>
                                <div class="funkyradio">
                                    <div class="question_answer funkyradio-{{(($value->reply == $row->reply1) && ($value->reply == $value->answer))?'success':'danger'}}">
                                        <input type="radio" value="{{$row->reply1}}"
                                               @if($value->reply == $row->reply1) checked @endif
                                               class=" did did{{$z}}" data="{{$z}}" question_id="{{$row->id}}"  name="reply{{$row->id}}" id="r1adio{{$z}}"/>
                                        <span class="questiontext" for="r1adio{{$z}}">{{$row->reply1}}</span>
                                    </div>

                                    <div class="question_answer funkyradio-{{($value->reply == $row->reply2 && $value->reply ==$value->answer)?'success':'danger'}}">
                                        <input type="radio" value="{{$row->reply2}}"
                                               @if($value->reply == $row->reply2) checked @endif
                                               class="did did{{$z}}" data="{{$z}}" question_id="{{$row->id}}" name="reply{{$row->id}}" id="r2adio{{$z}}"/>
                                        <span class="questiontext" for="r2adio{{$z}}">{{$row->reply2}}</span>
                                    </div>

                                    <div class="question_answer funkyradio-{{($value->reply == $row->reply3 && $value->reply ==$value->answer)?'success':'danger'}}">
                                        <input type="radio" value="{{$row->reply3}}"
                                               @if($value->reply == $row->reply3) checked @endif
                                               class="did did{{$z}}" data="{{$z}}" question_id="{{$row->id}}" name="reply{{$row->id}}" id="r3adio{{$z}}"/>
                                        <span class="questiontext" for="r3adio{{$z}}">{{$row->reply3}}</span>
                                    </div>

                                    <div class="question_answer funkyradio-{{($value->reply == $row->reply4 && $value->reply ==$value->answer)?'success':'danger'}}">
                                        <input type="radio" value="{{$row->reply4}}"
                                               @if($value->reply == $row->reply4) checked @endif
                                               class="did did{{$z}}" data="{{$z}}" question_id="{{$row->id}}" name="reply{{$row->id}}" id="r4adio{{$z}}"/>
                                        <span class="questiontext" for="r4adio{{$z}}">{{$row->reply4}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                        </div>
                    </form>

                </div>
            </div>
            @include('study._modules.navBot')
        </div>
    </div>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}build/flipclock/css/flipclock.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/test/test.css')}}">

@endsection
@section('bot')
    <script src="{{asset('')}}build/flipclock/js/flipclock.js"></script>
    <script>

//        $.ajaxSetup(
//                {
//                    headers: {
//                        'X-CSRF-Token': $('input[name="_token"]').val()
//                    }
//                });

        {{--var clock = $('.your-clock').FlipClock({{$unit_test->work_time}},{--}}
        {{--autoStart: true,--}}
        {{--countdown: true,--}}
        {{--clockFace: 'MinuteCounter',--}}
        {{--//defaultLanguage: 'vietnam'--}}
        {{--});--}}
        //clock.setTime(36);
        //        clock.setCountdown(true);
        //        clock.start(function() {
        //
        //        });


        //        var miniTest = setInterval( function (){
        //            var exists = alert (confirm('bạn đang học bài ?'));
        //            if(exists) {
        //                setTimeout(function(){
        //                    clearInterval(miniTest);
        //                }, 1000);
        //            }else {
        //                clock.start();
        //            }
        //        },900000);
        {{--var checkTime = setInterval( function() {--}}
        {{--var time  = clock.getTime();--}}
        {{--var id = {{$unit_test->id}};--}}
        {{--if(time==0){--}}
        {{--setTimeout(function(){--}}
        {{--clearInterval(checkTime);--}}
        {{--}, 1000);--}}
        {{--}--}}
        {{--$.ajax({--}}
        {{--url: '{{route('study.worktime')}}',--}}
        {{--method: 'POST',--}}
        {{--data: {--}}
        {{--unit_test_id: {{$unit_test->id}},--}}
        {{--time: time+''--}}
        {{--},--}}
        {{--success: function (data) {--}}
        {{--console.log(data);--}}
        {{--}--}}
        {{--});--}}
        {{--},5000);--}}
        //--------------------------------> set button
        $(document).ready(function () {
            $('.not_true').change(function(){
                var data = $(this).attr('data');
                var check = $(this).is(":checked");
                if(check){
                    $('#paginate'+data).css('background', 'indianred').css('color', 'white');
                }else {
                    if($('.did'+data).is(":checked")){
                        $('#paginate'+data).css('background', 'lightgreen').css('color', 'black');
                    }
                    else{
                        $('#paginate'+data).css('background', 'white').css('color', 'black');
                    }
                }
            });

            {{--$('.did').click(function () {--}}
            {{--var data = $(this).attr('data');--}}
            {{--if(!$('#checkbox'+data).is(":checked")){--}}
            {{--$('#paginate'+data).css('background', 'lightgreen').css('color', 'black');--}}
            {{--}--}}
            {{--var reply = $(this).val();--}}
            {{--var question_id = $(this).attr('question_id');--}}

            {{--$.ajax({--}}
            {{--url: '{{route('study.testing')}}',--}}
            {{--method: 'POST',--}}
            {{--data: {--}}
            {{--_token: '{{csrf_token()}}',--}}
            {{--unit_test_id: $('#unit_test_id').val(),--}}
            {{--question_bank_id: question_id,--}}
            {{--reply: reply--}}
            {{--},--}}
            {{--success: function (data) {--}}
            {{--console.log(data);--}}
            {{--},--}}
            {{--error: function(){--}}
            {{--alert('error')--}}
            {{--}--}}
            {{--});--}}
            {{--})--}}
        });
    </script>
@endsection