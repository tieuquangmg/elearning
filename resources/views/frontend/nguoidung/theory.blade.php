@extends('frontend.nguoidung._layout.layout_db')
@section('content')
    {{--{{dd($theory)}}--}}
    {{--{!! $pdf !!}--}}
    {{--<iframe style="margin:0 auto" src="http://www.onlineicttutor.com/wp-content/uploads/2016/04/pdf-at-iframe.pdf" width="900px" height="2000px">--}}
    {{--</iframe>--}}
    {{--{{dd(1)}}--}}
    {{--{{dd($classes_id)}}--}}
    <div class="container">
    <div class="row">
        <div class="col-lg-12" style="font-size:16px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left green h4">
                            <i class="fa fa-bookmark"></i> {{$theory->name}}
                        </div>
                        <div class="pull-right green">
                            <a href="{{url('study/unit/theory/'.$theory->unit->id.'/'.$class->id)}}">
                            <i class="glyphicon glyphicon-backward"></i>
                            Trở lại
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                        {!! $theory->intro !!}
                        <hr>
                    @if($theory->content_type == 1)
                        {!! $theory->content !!}
                        @else
                            <div id="iframe_waper">
                            <iframe src="{{asset('/gallery/document/'.$theory->content)}}" width="100%" height="100%">
                            </iframe>
                        </div>
                            @endif
                        <div class="col-xs-12 nav  theory-control green">
                            <a href="#" class="pull-left"><i class="glyphicon glyphicon-backward"></i> Bài trước</a>
                            <a href="#" class="pull-right"><i class="glyphicon glyphicon-forward"></i> Bài tiếp theo</a>
                        </div>
                </div>
            </div>
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel panel-heading">--}}
                    {{--Trao đổi bài--}}
                {{--</div>--}}
                {{--<div class="panel panel-body">--}}
                    {{--<div class="comment-box">--}}
                        {{--{!! Form::open(array('route'=>'study.addcomment','method'=>'POST', 'id'=>'addcomment')) !!}--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('comment','Thảo luận mới') !!}--}}
                            {{--{!! Form::textarea('comment',null,['placeholder'=>'Thêm thảo luận','class' => 'form-control showbutton', 'rows'=>'1']) !!}--}}
                        {{--</div>--}}
                        {{--{!! Form::hidden('user_id', Auth::user()->id) !!}--}}
                        {{--{!! Form::hidden('theory_id', $theory->id) !!}--}}

                        {{--<div class="form-group buttoncomment">--}}
                            {{--{!! Form::submit('Comment',['class'=>'send btn btn-danger']) !!}--}}
                        {{--</div>--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                    {{--<ul class="list-group ">--}}
                        {{--@foreach($comment as $row)--}}
                        {{--<li class="list-group-item">--}}
                            {{--{{$row->name}} {{$row->created_at}} {{$row->comment}}--}}
                            {{--<ul class="list-group">--}}
                                {{--@foreach($row->reply($row->id)->orderBy('created_at')->get() as $row1)--}}
                                {{--<li class="list-group-item">--}}
                                    {{--{{$row->name}} {{$row->created_at}} {{$row->comment}}--}}
                                {{--</li>--}}
                                    {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                            {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            <meta name="_token" content="{{ csrf_token() }}"/>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="view-scorm-comments commen ts-loaded" id="scorm-comments" data-toggle="comments" data-action="auto" data-scormid="16684" data-comment-type="scorm" data-comment-paid="0" data-comment-count="">
                        <div class="comment-box" id="comment-form-wapper">
                            {!! Form::open(array('route'=>'study.addcomment','method'=>'POST','class'=>'add-comment','id'=>'add-comment')) !!}
                            <div class="form-group">
                                {!! Form::label('comment','TRAO ĐỔI BÀI') !!}
                                {!! Form::textarea('comment',null,['placeholder'=>'Viết thảo luận...','class' => 'form-control showbutton','id'=>'comment', 'rows'=>'1']) !!}
                            </div>
                            {!! Form::hidden('user_id', Auth::guard('nguoidung')->user()->id) !!}
                            {!! Form::hidden('theory_id', $theory->id) !!}
                            {!! Form::hidden('parent_id',null,['id'=>'parent_id']) !!}
                            <div class="form-group buttoncomment">
                                {!! Form::submit('Bình luận',['class'=>'send btn','id'=>'addcomment']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <ul class="qa_comments" id="qa_comments">
                            @foreach($comment as $row)
                                <li id="li-comment-{{$row->id}}">
                                    <div class="comment" id="acomment-{{$row->id}}" text_comment="{{$row->comment}}">
                                        <div class="pic" style="height: 60px;padding-right: 10px;
                                        float: left"><img src="{{asset($row->user->image)}}" height="60px"></div>
                                        <div style="margin-left: 70px">
                                            <p class="meta">
                                                <span class="author">{{$row->user->ho_ten}}</span>
                                                <span class="time">{{$row->created_at}}</span>
                                            </p>
                                            <div class="content">
                                                <p>{{$row->comment}}</p>
                                            </div>
                                            <div class="actions">
                                                <a class="btnLike disabled" comment="{{$row->id}}" title="Bỏ thích" href="#like" scormid="{{$theory->id}}" qaid="841354"><span style="display: @if($row->like == 0) none @else inline @endif;">{{$row->like}}</span>Thích</a>
                                                <!--a class="btnDislike" href="#dislike" scormid="16684" qaid="841354"><span>0</span> Không thích</a-->
                                                <a class="btnReply" href="#reply" scormid="{{$theory->id}}" replyto="{{$row->id}}"><span>{{count($row->reply($row->id)->orderBy('created_at')->get())}}</span> Trả
                                                    lời</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments" id="comments-{{$row->id}}">
                                        @foreach($row->reply($row->id)->orderBy('created_at')->get() as $row1)
                                            <li>
                                                <div class="comment" id="comment-841407" text_comment="{{$row1->comment}}">
                                                    <div class="pic" style="height: 60px;padding-right: 10px;
                                        float: left"><img src="{{asset($row1->user->image)}}" height="60px"></div>
                                                    <div style="margin-left: 70px">

                                                    <p class="meta">
                                                        <span class="author">{{$row1->user->ho_ten}}</span>
                                                        <span class="time">{{$row1->created_at}}</span>
                                                    </p>
                                                    <div class="content">
                                                        <p>{{$row1->comment}}</p>
                                                    </div>
                                                    <div class="actions">
                                                        <a class="btnLike" comment="{{$row1->id}}" title="Thích" href="#like" scormid="{{$theory->id}}"
                                                           qaid="841407">
                                                            <span style="display:@if($row->like == 0) none @else inline @endif;">{{$row1->like}}</span> Thích</a>
                                                    </div>
                                                </div>
                                                    </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="col-lg-3">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading"><i class="fa fa-clock-o"></i>Thời gian tối thiếu học bài</div>--}}
                {{--<ul class="list-group">--}}
                    {{--<li class="list-group-item"><i class="your-clock"></i></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading"><i class="fa fa-list"> </i>Danh sách bài học</div>--}}
                {{--<ul class="list-group">--}}
                    {{--@foreach($theory->unit->theory as $row)--}}
                        {{--@if($row->user_theory->first()->watch_time == 0)--}}
                            {{--<li class="list-group-item"><a style="text-decoration: none; color:dimgray " href="{{url('study/theory/'.$row->id.'/'.$class->id)}}">{{$row->name}}</a>--}}
                                {{--<span class="glyphicon glyphicon-ok"></span>--}}
                        {{--@else--}}
                            {{--<li class="list-group-item"><a style="text-decoration: none"  href="{{url('study/theory/'.$row->id.'/'.$class->id)}}">{{$row->name}}</a>--}}
                                {{--<span>{{$row->time/1000/60}} Phút</span>--}}
                                {{--@endif--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading"><i class="fa fa-list"> </i> Lish sử làm bài</div>--}}
                {{--<ul class="list-group">--}}
                    {{--@foreach($theory->unit->theory as $row)--}}
                        {{--<li class="list-group-item"><a style="text-decoration: none" href="{{url('study/theory/'.$row->id.'/'.$class->id)}}">{{$row->name}}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
                {{--<div class="panel-footer">--}}
                    {{--<a href="" class="btn btn-primary"><i class="fa fa-pencil"></i>Làm bài tập</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading"><i class="fa fa-list"> </i> Danh sách chương</div>--}}
                {{--<ul class="list-group">--}}
                    {{--@foreach($theory->unit->subject->unit as $row)--}}
                        {{--<li class="list-group-item"><a style="text-decoration: none" href="{{url('study/unit/'.$row->id.'/'.$class->id)}}">{{$row->name}}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
        </div>
    <div class="bottom-right-fixed">
        <i class="fa fa-clock-o"></i>Thời gian tối thiếu học bài
        <div class="timer" data-seconds-left=123456></div>
        {{--<ul class="list-group">--}}
            {{--<li class="list-group-item"><i class="your-clock"></i></li>--}}
        {{--</ul>--}}
    </div>
    {{--<div class="error-notice">--}}
    {{--<div class="oaerror info">--}}
    {{--<strong></strong> {{$theory->name}}  - <strong>Bài học</strong> : {{$theory->unit->name}}--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
@section('head')
    {{--<link rel="stylesheet" href="{{asset('')}}build/flipclock/css/flipclock.css">--}}
    {{--<link rel="stylesheet" href="{{asset('')}}dashboard/css/timer.css">--}}
@endsection
@section('bot')
    {{--<script src="{{asset('')}}build/flipclock/js/flipclock.js"></script>--}}
    {{--<script src="{{asset('')}}dashboard/js/jquery.simple.timer.js"></script>--}}
    {{--<script>--}}
{{--//        $(function(){--}}
{{--//            $('.timer').startTimer();--}}
{{--//            console.log(timeLeft);--}}
{{--//        });--}}
    {{--</script>--}}
    {{--@if($permission)--}}
        {{--<script>--}}
            {{--var watch_time = {{$watch_time/1000}};--}}
            {{--var clock = $('.your-clock').FlipClock(watch_time ,{--}}
                {{--autoStart: true,--}}
                {{--countdown: true,--}}
                {{--clockFace: 'HourlyCounter',--}}
                {{--defaultLanguage: 'vi_VN'--}}
            {{--});--}}
            {{--//clock.setTime(36);--}}
            {{--//        clock.setCountdown(true);--}}
            {{--clock.start(function() {--}}
            {{--});--}}
            {{--function update_time(time){--}}
{{--//            var data = $('#formSetSingleRole').serialize();--}}
                {{--console.log(time+'');--}}
                {{--data = {--}}
                    {{--user_id:'{{Auth::user()->id}}',--}}
                    {{--theory_id:{{$theory->id}},--}}
                    {{--time:time+''--}}
                {{--};--}}
                {{--$.ajax({--}}
                    {{--url: '{{route('study.updatetime')}}',--}}
                    {{--method:'GET',--}}
                    {{--data: data,--}}
                    {{--success:function (e) {--}}
                        {{--console.log(e);--}}
                    {{--}--}}
{{--//                error:function (){--}}
{{--//                    alert('lỗi');--}}
{{--//                }--}}
                {{--});--}}
            {{--}--}}
            {{--update_time({{$watch_time}});--}}
            {{--var timer = 0;--}}
            {{--var checkTime = setInterval( function() {--}}
                {{--timer = timer + 60000;--}}
                {{--console.log(timer);--}}
                {{--if((timer % 900000)==0)confirm('bạn đang học bài ?');--}}

                {{--var time  = clock.getTime()*1000;--}}
                {{--update_time(time);--}}
                {{--console.log(time+'');--}}
                {{--if(time==0) {--}}
                    {{--setTimeout(function(){--}}
                        {{--clearInterval(checkTime);--}}
                    {{--}, 100);--}}
                {{--}--}}
            {{--}, 60000);--}}
            {{--//        clock.stop();--}}
        {{--</script>--}}
    {{--@endif--}}
    {{--<script>--}}
        {{--function addcomment(){--}}
            {{--$('#form_update').attr('action','{{route('.update')}}/'+id);--}}
            {{--$.ajax({--}}
                {{--url: '{{route("class.find")}}/'+id,--}}
                {{--success:function(data){--}}
                    {{--$('#name').val(data.name);--}}
                    {{--$('#id').val(data.id);--}}
                    {{--$('#code').val(data.code);--}}
                    {{--$('#subject_id').val(data.subject_id).change();--}}
                {{--},--}}
                {{--error: function (){--}}
                    {{--alert('Error')--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        {{--$('#addcomment').on('submit',function (e) {--}}
            {{--addcomment()--}}
            {{--return false;--}}
        {{--});--}}
    {{--</script>--}}
    <script type="text/javascript">
    </script>
    <script>
        $(document).on('ready',function () {
            $(document).on('click','.btnReply',function () {
                reply = $(this).attr('replyto');
                {{--html =  '<div id="reply-box">' +--}}
                        {{--'<meta name="_token" content="{{ csrf_token() }}"/>'+--}}
                        {{--'{!! Form::open(array('route'=>'study.addcomment','method'=>'POST','class'=>'reply-comment')) !!}'+--}}
                        {{--'<div class="form-group">'+--}}
                        {{--'{!! Form::textarea('comment',null,['placeholder'=>'','class' => 'form-control showbutton','id'=>'comment', 'rows'=>'1']) !!}'+--}}
                        {{--'</div>'+--}}
                        {{--'{!! Form::hidden('user_id', Auth::user()->id) !!}'+--}}
                        {{--'{!! Form::hidden('parent_id') !!}'+--}}
                        {{--'{!! Form::hidden('theory_id',$theory->id) !!}'+--}}
                        {{--'<div class="form-group buttoncomment">'+--}}
                        {{--'{!! Form::submit('Trả lời',['class'=>'send btn','id'=>'addcomment']) !!}'+--}}
                        {{--'</div>'+--}}
                        {{--'{!! Form::close() !!}'+--}}
                        {{--'</div>';--}}
                $('ul#comments-'+reply).prepend($("#comment-form-wapper"));
                $('input[name="parent_id"]').val(reply);
            });
        })
    </script>
    <script>
        $(document).on('ready',function(){
            $.ajaxSetup({
                headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
            });
                $(document).on('submit','.add-comment',function (e) {
                    e.preventDefault();
                    var formdata = $(this).serialize();
                    qqq = $(this);
                    if ($("#comment").val() == "")
                    {
                        alert("Bạn chưa nhập bình luận");
                        return false;
                    }
                    $.ajax({
                        url: '{{route('study.addcomment')}}',
                        type: "POST",
                        data: formdata,
                        success: function(html){
                                var reply_id = $("#parent_id").val();
                            if(reply_id == ''){

                                $("ul#qa_comments").prepend(html);
                                $("ul#qa_comments li:first").fadeIn('slow');
                            }else{
                                if($("#li-comment-" + reply_id).find('ul').size() > 0){

                                    $("#li-comment-" + reply_id + " ul:first").prepend(html);
                                }else{

                                    $("#li-comment-" + reply_id).append(html);
                                }
                            }
                            $("#scorm-comments").prepend($("#comment-form-wapper"));
                            document.getElementById('comment').value='';
                            $("#comment_name").attr("value", "");
                        },
                        error:function () {
                            alert('loi');
                        }
                    });
                });

                $(document).on('click', '.btnLike', function () {
                    btn = $(this);
                    var comment_id = $(this).attr('comment');
                    $.ajax({
                        url: '{{route('study.likecomment')}}',
                        type: "POST",
                        data: {comment_id:comment_id},
                        success: function(data) {
                            data = JSON.parse(data);
                            if(data.success == true){
                                btn.css("color","#888");
                                btn.find('span').html(data.like);
                                btn.find('span').css("display","inline");
                            }
                        },
                        error:function () {
                            alert('mất kết nối đến máy chủ');
                        }
                    });
                })
            {{--$(document).on('submit','.reply-comment',function (e){--}}
                {{--e.preventDefault();--}}
                {{--var formdata = $(this).serialize();--}}
                {{--qqq = $(this);--}}
                {{--$.ajax({--}}
                    {{--url: '{{route('study.addcomment')}}',--}}
                    {{--type: "POST",--}}
                    {{--data: formdata,--}}
                    {{--success: function(html){--}}
                        {{--cla = qqq.closest('ul').attr('class');--}}
                        {{--id = qqq.closest('ul').attr('id');--}}
{{--//                                alert($("#"+id+" li").first().remove());--}}
                            {{--qqq.closest('ul').prepend(html);--}}
{{--//                                qqq.closest('ul').remote();--}}
                        {{--document.getElementById('comment').value='';--}}
                    {{--},--}}
                    {{--error:function (){--}}
                        {{--alert('loi');--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#iframe_waper').height($(window).height() - 44);
            var divPosid = $('#iframe_waper');
            if (!divPosid.length) {
                return;
            }
            var divPos = divPosid.offset().top;
            $("html, body").animate({scrollTop: divPos - 100}, 1000);
        })
    </script>
@endsection
