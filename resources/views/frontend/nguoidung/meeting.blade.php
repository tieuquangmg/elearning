@extends('frontend._layout.outline')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('')}}build/style/css/meeting.css">
    @endsection
@section('container')
    {{ csrf_field() }}
    <div class="container ">
        <div class="panel" style="margin-top: 50px">
            <div class="panel-heading" style="padding: 5px 7px; background: #017e3e">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="{{asset(Session::get('url_back'))}}"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="jumbotron meeting_waper" style="text-align: center;">

                    <h4>Tên lớp: {{$meeting->name}}</h4>
                    <div class=meeting_se>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Thời gian</th>
                                <th>Thời gian học</th>
                                <th>tình trạng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($meeting->class_meeting_time as $row)
                            <tr>
                                <td>{{$row->time_start->format("H:i")}} - ngày {{$row->time_start->format('d-m/Y')}}</td>
                                <td>{{$row->duration}} phút</td>
                                <td>{{($row->status == 1) ? 'đã mở' : 'chưa mở'}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if(Auth::guard('nguoidung')->user() != null && Auth::guard('nguoidung')->user()->id == $class->user_id)
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
                        <div class="wait_meeting">
                            <img src="{{asset('dashboard/images/10.gif')}}">
                        </div>
                    @endif
                </div>

            </div>
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
            @if(Auth::guard('nguoidung')->user() != null && Auth::guard('nguoidung')->user()->id == $class->user_id)
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
                        error: function (i){
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
