@extends('frontend._layout.outline')
@section('container')
    {{ csrf_field() }}
    <div class="container">
        <div class="jumbotron" style="text-align: center;margin-top: 10%;">
            <h4>Tên lớp: {{$meeting->name}}</h4>
            @if(Auth::user()->id == $class->user_id)
                @if($running)
                    <p>Trạng thái: <span class="span" id="meeting_status">Đang học</span></p>
                    <a class="btn btn-danger btn-large" href="javascript:void(0)" id="end_meeting">Kết thúc</a>
                    <a class="btn btn-success btn-large" href="javascript:void(0)" id="action_meeting"
                       style="display: none;">vào lớp</a>
                    {{--<a class="btn btn-success btn-large" href="{{$getJoinMeetingURL}}" id="join_class" target="_blank">Vào lớp</a>--}}
                @else
                    <p>Trạng thái: <span class="span" id="meeting_status">Chưa mở</span></p>
                    <a class="btn btn-danger btn-large" href="javascript:void(0)" id="end_meeting"
                       style="display: none">Kết thúc</a>
                    <a class="btn btn-success btn-large" href="javascript:void(0)" id="action_meeting">Bắt đầu học</a>
                    {{--<a style="display: none" class="btn btn-success btn-large" href="{{$getJoinMeetingURL}}" id="join_class" target="_blank">Vào lớp</a>--}}
                @endif
            @else
                <span style="color: red">Vui lòng đợi giáo viên vào lớp</span>
                <div class="wait_meeting"><img
                            src="http://4.bp.blogspot.com/-lfvYU-6wo5A/TlvoOnipJhI/AAAAAAAAAWs/UoDXyBl6Z20/s1600/10.gif">
                </div>
            @endif
        </div>
    </div>
@endsection
@section('bot')
    <script type="text/javascript">
        $(document).on('ready', function () {
            $.ajaxSetup(
                    {
                        headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }
                    });
            @if(Auth::user()->id == $class->user_id)
                $('#action_meeting').on('click', function () {
                    var a = $(this);
                    var id = '{{$meeting->id}}';
                    var class_id = '{{$class->id}}';
                    var running = '{{$running}}';
                    $.ajax({
                        url: '{{route('study.meeting')}}',
                        data: {id, class_id},
                        method: "POST",
                        beforeSend(){
                            $('.loading').show();
                        },
                        success: function (url) {
                            $('#action_meeting').hide();
                            $('#end_meeting').show();
                            $('#meeting_status').text('Đang học');

    //                        if (a.hasClass('btn-success')) {
    //                            a.toggleClass('btn-danger btn-success');
    //                            a.text('Kết thúc');
    //                        } else {
    //                            a.toggleClass('btn-success btn-danger');
    //                            a.text('Bắt đầu học');
    //                        }
                            window.open(url, '_blank');
                        },
                        error: function (i) {
                            alert(i);
                        }
                    })
                });
                $('#end_meeting').on('click', function () {
                    var a = $(this);
                    var id = '{{$meeting->id}}';
                    var class_id = '{{$class->id}}';
                    $.ajax({
                        url: '{{route('study.endmeeting')}}',
                        data: {id, class_id},
                        method: "POST",
                        success: function (url) {
                            $('#action_meeting').show();
                            $('#end_meeting').hide();
                            $('#meeting_status').text('Chưa mở');
                        },
                        error: function (i) {
                            alert(i);
                        }
                    })
            });
            @else

            var id = {{$meeting->id}}
            var class_id = {{$class->id}}
                setInterval(function(){
                $.ajax({
                    url: '{{route("study.ismeetingrunning")}}',
                    data: {id, class_id},
                    method: "POST",
                    success:function (result){
                            console.log(result);
                        if(result){
                            $(location).attr('href','{{route('study.meeting').'/'.$unit->id.'/'.$class->id}}');
                        }
                    }
                });
            }, 3000);
            @endif
        })
    </script>
@endsection
