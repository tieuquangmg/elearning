@extends('frontend.nguoidung._layout.layout_db')
@section('content')
    <link href="{{asset('dashboard/customs/mycourse/style(12).css')}}" rel="stylesheet">
    <div class="container">
        <!-- The row that contains the three main columns of the website. -->
        <div class="row">
            <!-- Left sidebar: A cell that spans 2 columns -->
            <div class="col-md-2 fb-left-sidebar">
                <div class="sidebar-nav-fixed affix">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation">
                            <div class="thumbnail">
                                <img src="{{asset(Auth::guard('nguoidung')->user()->avatar())}}" width="185" height="185">
                            </div>
                            <div class="caption">
                                <a style="font-size: 16px; text-transform: uppercase" href="#">{{Auth::guard('nguoidung')->user()->ho_ten}}</a>
                            </div>
                        </li>
                        <li role="presentation">
                            <a ><span class="glyphicon glyphicon-pencil"></span>Giáo viên: <strong>{{Auth::guard('nguoidung')->user()->code}}</strong></a>
                        </li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-list"></span>Danh sách sinh viên lớp</a>
                        </li>
                        <!-- List items that are just text are not indented, and look like the
                             Facebook section labels. -->
                        <li role="presentation" class="content-header">Lớp học của tôi</li>
                        @foreach($classes as $row)
                            <li role="presentation" class="content_body">
                                <a href="{{route('study.subject',$row)}}" title="{{$row->name}}">
                                    <div class="pull-right">
                                        <span class="badge">1/7</span>
                                    </div>
                                    <span class="class-icon">
                                    <img src="{{asset((!$row->subject->image == null)?($row->subject->image):'dashboard/images/bia-sach.jpg')}}">
                                </span>
                                    <div class="linkwrap">
                                        <span>{{$row->subject->name.'-'.$row->stt_lop}}</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                        <li role="presentation" class="content-header">Hỗ trợ học tập</li>
                        <li role="presentation" class="content_body">
                            <a href="http://namvietjsc.tk/forum.php" target="_blank">
                                <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                                <div class="linkwrap">
                                    <span>Diễn đàn</span>
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="content_body">
                            <a href="{{url(route('study.allquestion'))}}">
                                <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                                <div class="linkwrap">
                                    <span>Hỏi đáp</span>
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="content_body">
                            <a href="#">
                                <span class="glyphicon glyphicon-stop class-icon" style="line-height: 20px"></span>
                                <div class="linkwrap">
                                    <span>Báo lỗi</span>
                                </div>
                            </a>
                        </li>
                        <li role="presentation" class="content-header">Hồ sơ cá nhân</li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-plus"></span>Thông tin cá nhân</a>
                        </li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Hồ sơ học tập</a>
                        </li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Đăng ký học lại thi lại</a>
                        </li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-user"></span>Lấy ý kiến sinh viên</a>
                        </li>
                        <li role="presentation" class="content-header">Báo cáo</li>
                        <li role="presentation">
                            <a href="#"><span class="glyphicon glyphicon-pushpin"></span> Amherst, MA</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main feed: A cell that spans 7 columns -->
            <div class="col-md-7">
                    <!-- Status update entry -->
                    <!-- Status update #1 -->
                @foreach($classes as $row)
                    <div class="panel panel-default class fb-status-update">
                        <div class="panel-body">
                            <!-- Post metadata -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="media">
                                        <div class="media-left media-top">
                                            <img src="{{$row->subject->anhbia()}}" width="90" height="112">
                                        </div>
                                        <div class="media-body">
                                            <a href="{{route('study.subject',$row->id)}}">{{$row->subject->name}}</a>
                                            <div class="clearfix">
                                                <div class="pull-left">Mã lớp: {{$row->code}}</div>
                                                <div class="pull-right">Thời gian học: {{$row->start_date->format('d/m/Y').' - '.$row->end_date->format('d/m/Y')}}</div>
                                            </div>
                                            <hr>
                                            <div class="clearfix">
                                                <div class="body-giaovien">
                                                    <div class="body-giaovien-left" style="">giảng viên</div>
                                                    <div class="body-giaovien-right">
                                                        {{($row->teacher != null) ? $row->teacher->ho_ten : ''}}
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <span class="caret pull-right"></span>
                                </div>
                            </div>
                            <!-- Post content -->
                            <div class="row">
                                <div class="col-md-12 post-content-header">
                                    <h4>Nội dung môn học</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 description">
                                    {!! $row->subject->description !!}
                                    {{--<ul class="list-inline">--}}
                                        {{--<li>--}}
                                            {{--<a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="#"><span class="glyphicon glyphicon-share-alt"></span> Share</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 post-content-header">
                                    <h4>Thông báo</h4>
                                </div>
                                <div class="col-md-12 description">
                                    {!! ($row->setting != null) ? ($row->setting->thongbao) : '' !!}
                                    {{--<ul class="list-inline">--}}
                                    {{--<li>--}}
                                    {{--<a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="#"><span class="glyphicon glyphicon-share-alt"></span> Share</a>--}}
                                    {{--</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                        {{--<div class="panel-footer">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12 nhiemvu-head">--}}
                                    {{--<a href="#" style="text-transform: uppercase">nhiệm vụ học tập</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--@if($user_unit[$row->id]['test']['unit'] != null)--}}
                                {{--<ul class="media-list nhiemvu-body">--}}
                                    {{--<li class="media">--}}
                                        {{--<div class="media-left media-top nhiemvu-day">--}}
                                        {{--<span>--}}
                                            {{--<div class="day">Tuần:{{$user_unit[$row->id]['test']['unit']->unit->name}}</div>--}}
                                            {{--<div class="year">{{\Carbon\Carbon::now()->startOfWeek()->format('d/m/Y')}}</div>--}}
                                            {{--<div class="year">{{\Carbon\Carbon::now()->endOfWeek()->format('d/m/Y')}}</div>--}}
                                        {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<ul style="list-style: none;padding-left: 5px;border-left: 1px #b9b9b9 solid">--}}
                                                {{--@foreach($user_unit[$row->id]['test']['untestet'] as $row1)--}}
                                                    {{--<li>--}}
                                                        {{--<a href="{{route('study.begintest',[$row1->id,$row1->unit_id,$row->id])}}">{{$row1->name}}</a>--}}
                                                        {{--<p style="font-size: 11px;color: #6a6a6a">{{$row1->description}}</p>--}}
                                                        {{--<p href="#">Thời gian: 11-11-2016 -> 11-11-2016</p>--}}
                                                    {{--</li>--}}
                                                {{--@endforeach--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--@endif--}}
                        {{--</div>--}}
                    </div>
                @endforeach
            </div>
            <!-- Right sidebar: A cell that spans 3 columns -->
            <div class="col-md-3 fb-right-sidebar">
                <div class="right-nav-fixed affix">
                    <div class="well" style="background-color: white">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="pull-right">
                                    <span class="glyphicon glyphicon-download-alt"></span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-gift"></span> <a href="#">Zak</a> and <a href="#">1
                                    other</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 fb-trending">
                                <div class="row">
                                    <div class="col-md-4 fb-trending-title">
                                        TRENDING
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="nav nav-pills pull-right">
                                            <li role="presentation" class="active">
                                                <a href="#"><span class="glyphicon glyphicon-flash"></span></a>
                                            </li>
                                            <li role="presentation"><a href="#"><span
                                                            class="glyphicon glyphicon-tower"></span></a></li>
                                            <li role="presentation"><a href="#"><span
                                                            class="glyphicon glyphicon-sunglasses"></span></a></li>
                                            <li role="presentation"><a href="#"><span
                                                            class="glyphicon glyphicon-record"></span></a></li>
                                            <li role="presentation"><a href="#"><span
                                                            class="glyphicon glyphicon-facetime-video"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="media-left media-top">
                                                    <span class="glyphicon glyphicon-flash"></span>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">George Lucas</a>: Filmmaker Criticizes New "Star Wars"
                                                    Film and Direction of Franchise Under Disney
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left media-top">
                                                    <span class="glyphicon glyphicon-flash"></span>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Super Smash Bros.</a>: Game Glitch Allows Players to
                                                    Control 8 Characters With 1 Controller
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left media-top">
                                                    <span class="glyphicon glyphicon-flash"></span>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Tuukka Rask</a>: Boston Bruins Player Debuts Goalie Mask
                                                    for Winter Classic
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-left media-top">
                                                    <span class="caret"></span>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">See More</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        Thành
                                        viên
                                        online
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="pull-right">Xem tất cả</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach($thanh_vien as $row)
                                            <div class="media">
                                                <div class="media-heading" style="float: left; margin-right: 10px">
                                                    <img width="25px" height="25px" src="{{asset($row->avatar())}}">
                                                </div>
                                                <div class="media-body" style="padding-top: 3px">
                                                    <span id="name_user">{{$row->ho_ten}}</span>
                                                    <div class="pull-right">
                                                        <i style="color:#ff9f00 ;cursor: pointer"
                                                           data-id="{{$row->id}}"
                                                           data-name='{{$row->ho_ten}}'
                                                           data-toggle="modal" data-target="#modal_mess"
                                                           class="send-message glyphicon glyphicon-envelope"
                                                           title="gửi tin nhắn"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<button type="button" class="btn btn-default">--}}
                                            {{--<span class="glyphicon glyphicon-thumbs-up"></span>Tin nhắn--}}
                                            {{--</button>--}}
                                        @endforeach
                                    </div>
                                    <div class="col-md-12" style="padding-top: 20px">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm"
                                                   placeholder="Tên sinh v...">
                                            <span class="input-group-btn">
                                        <button class="btn btn-secondary btn-sm" type="button">Tìm</button>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<img src="http://umass-cs-326.github.io/img/falafel.jpg" width="100%" />--}}
                                {{--<br><a href="#">Pita Pocket's</a>--}}
                                {{--<br> Mediterranean Restaurant · 301 likes--}}
                                {{--<br><button type="button" class="btn btn-default">--}}
                                {{--<span class="glyphicon glyphicon-thumbs-up"></span>Like Page</button>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chat-popup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <span class="green">●</span> Chat (32)
                </div>
                <div class="col-md-4">
                    <div class="btn-group pull-right" role="group">
                        <button type="button" class="btn btn-xs">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button type="button" class="btn btn-xs">
                            <span class="glyphicon glyphicon-asterisk"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div id="content">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12">--}}
    {{--<ol class="breadcrumb">--}}
    {{--<li><a href="{{url('/')}}"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>--}}
    {{--<li class="active">Các lớp dang học</li>--}}
    {{--</ol>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div id="stick_right" data-toggle="modal" data-target="#myModal">
        <div class="float-body">
            <div class="float-title">
                <h3>NHẮC VIỆC SINH VIÊN <strong style="text-transform: uppercase">{{Auth::guard('nguoidung')->user()->ho_ten}}</strong><br></h3>
                <p>Tuần từ ngày {{ \Carbon\Carbon::now()->startOfWeek()->format('d/m/y') }} đến {{\Carbon\Carbon::now()->endOfWeek()->format('d/m/y')}}</p>
            </div>
            <div class="float-body-main">
                <table class="table table-striped table-bordered">
                    <thead class="text-danger">
                    <tr>
                        <th class="text-center vcenter">
                                <span class="help" data-toggle="tooltip" data-placement="top" title=""
                                      data-original-title="Số câu hỏi đã đặt">
                                    <i class="fa fa-bell"></i>
                                    Hỏi đáp</span>
                        </th>
                        <th class="text-center vcenter">
                            <span class="help" data-toggle="tooltip" data-placement="top" title=""
                                                              data-original-title="Số chủ đề đã gửi/Yêu cầu">
                                <i class="fa fa-comments"></i> Diễn đàn</span>
                        </th>
                        <th class="text-center vcenter">
                            <span class="help" data-toggle="tooltip" data-placement="top" title=""
                                                              data-original-title="Số lần đăng nhập LMS/Yêu cầu">
                                <i class="fa fa-graduation-cap"></i> Đăng nhập lớp</span>
                        </th>
                        <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                              data-placement="top" title=""
                                                              data-original-title="Thời điểm bắt đầu phải chấm bài hoặc Số lượng bài đã chấm/Tổng số bài"><i
                                        class="fa fa-edit"></i>Làm bài tập</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center success">
                            <a href="#" target="_blank">0</a>
                        </td>
                        <td class="text-center warning warning-fix">
                            <a href="#" target="_blank">1/3</a>
                        </td>
                        <td class="text-center success">
                            <a href="#" target="_blank">25/3</a>
                        </td>
                        <td class="text-center success">---</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="float-body-right">
            <img src="{{asset('dashboard/images')}}/nvht.png">
        </div>
    </div>
{{--{{dd($user_unit)}}--}}
    <div class="modal fade" id="myModal_dggv_index" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h2 class="modal-title text-center">NHẮC VIỆC GIÁO VIÊN<strong>{{Auth::guard('nguoidung')->user()->ho_ten}}</strong>
                    </h2>
                    <p class="modal-tilte text-center">Tuần từ ngày {{\Carbon\Carbon::now()->startOfWeek()->format('d/m/Y')}} đến {{\Carbon\Carbon::now()->endOfWeek()->format('d/m/Y')}}</p>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead class="text-danger">
                        <tr>
                            <th class="text-center vcenter">
                                <span class="help" data-toggle="tooltip" data-placement="top" title="" data-original-title="Danh sách các course học đang giảng dạy">Lớp môn</span>
                            </th>
                            <th class="text-center vcenter">
                                <span class="help" data-toggle="tooltip" data-placement="top" title="" data-original-title="Số câu hỏi chưa trả lời"><i class="fa fa-bell"></i> Hỏi đáp</span>
                            </th>
                            <th class="text-center vcenter">
                                <span class="help" data-toggle="tooltip" data-placement="top" title="" data-original-title="Số bài post đã gửi/Yêu cầu"><i class="fa fa-comments"></i> Diễn đàn</span></th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số lần đăng nhập LMS/Yêu cầu"><i
                                            class="fa fa-graduation-cap"></i> Đăng nhập lớp</span></th>
                            {{--<th class="text-center vcenter">--}}
                                {{--<span class="help" data-toggle="tooltip" data-placement="top" title=""--}}
                                                                  {{--data-original-title="Thời điểm bắt đầu phải chấm bài hoặc Số lượng bài đã chấm/Tổng số bài"><i--}}
                                            {{--class="fa fa-edit"></i> Làm bài tập</span>--}}
                            {{--</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user_unit as $row)
                            <tr>
                                <td class="text-left"><a href="#">{{$row['class']->subject->name}}</a></td>
                                @if($row['test']['unit'] != null)
                                    <td class="text-center success"><a href="#" target="_blank">{{$row['hoi_dap']['total']}}</a></td>
                                    <td class="text-center warning warning-fix"><a href="#" target="_blank">{{$row['forums']['total']}}</a></td>
                                    <td class="text-center @if($row['user-unit'] != null && $row['user-unit']->login_time >= 3)
                                            success
                                            @else
                                            warning warning-fix
                                            @endif
                                            ">
                                        <a href="#" target="_blank">
                                            @if($row['user-unit'] != null)
                                                {{$row['dang-nhap']['total']->login_time}}/3
                                            @else 0/3
                                            @endif
                                        </a>
                                    </td>
                                    {{--<td class="text-center--}}
                                    {{--@if(!$row['test']['tested']->isEmpty() && count($row['test']['tested']) >= $row['test']['total'])--}}
                                            {{--success--}}
                                            {{--@else--}}
                                            {{--warning warning-fix--}}
                                            {{--@endif--}}
                                            {{--">--}}
                                        {{--@if(!$row['test']['tested']->isEmpty())--}}
                                            {{--{{count($row['test']['tested'])}}--}}
                                        {{--@else 0--}}
                                        {{--@endif--}}
                                        {{--/{{$row['test']['total']}}</td>--}}
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Thêm Giải thích chi tiết -->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a style="display: block;" class="accordion-toggle" data-toggle="collapse"
                                       data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                                        Chú thích
                                        <span class="pull-right glyphicon glyphicon-minus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><strong>Hỏi đáp:</strong> Số câu hỏi Hỏi đáp hiện có cần trả lời</li>
                                        <li><strong>Diễn đàn:</strong> Thống kê số lượng bài post trên diễn đàn thời
                                            điểm hiện tại của tuần báo cáo (A/B) (A: số bài post trong tuần tính tới
                                            thời điểm báo cáo. B là định mức số bài post trong tuần báo cáo). Tuần
                                            3, tuần 5, định mức tối thiểu là 3 bài post. Các tuần còn lại post tối
                                            thiểu 2 bài.
                                        </li>
                                        <li><strong>Đăng nhập lớp:</strong> Số lần đăng nhập lớp học/số yêu cầu
                                            trong tuần. Mục đích đăng nhập: theo dõi tình hình học tập của SV trong
                                            lớp. Mỗi tuần, các thầy/cô đăng nhập tối thiểu 3 lần.
                                        </li>
                                    </ul>
                                    <span class="label label-success">GV đã hoàn thành công việc theo định mức</span><br>
                                    <span class="label label-warning">GV đang thực hiện một phần công việc. Đối với Hỏi đáp: câu hỏi chưa quá 72h</span><br>
                                    <span class="label label-danger">GV chưa thực hiện công việc hoặc đã quá hạn thực hiện công việc đó.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="modal_mess" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Gửi tin nhắn</h4>
                </div>
                <div class="modal-body">
                    <form id="form-send-mess">
                        <input type="hidden" value="" name="user_id" id="form-user_id">
                        <div class="form-group">
                            <label>Nội dung tin nhắn cho <strong id="user_name_re" style="text-transform: uppercase;color:#3a5795"></strong></label>
                            <textarea class="form-control" name="content_mess" id="content_mess" title="nội dung tin nhắn"
                                      style="height: 120px"></textarea>
                        </div>
                        <div class="form-group">
                            {!! Recaptcha::render()!!}
                        </div>
                        <div class="form-group">
                            <input id="btn-send-mess" class="btn btn-success" value="Gửi">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Hủy bỏ</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bot')
    <script src="{{asset('dashboard/js/script.js')}}"></script>
    <script>
        $(document).ready(function(){
            var htmm = $('#modal_mess').html();
            console.log(htmm);
        $(document).on('click', '.send-message', function (btn) {
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            $('#form-user_id').val(id);
            $('#user_name_re').html(name);
        });
        $(document).on('click', '#btn-send-mess', function (btn) {
            var data = $('#form-send-mess').serialize();
            $.ajax({
                url: '{{route('study.postsendmessage')}}',
                data: data,
                method: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (data) {
                    console.log(data.success);
                    if (data.success == 'true') {
                        $('#modal_mess').modal('toggle');
                    } else {
                        alert('loi');
                    }
                    $('#modal_mess').html(htmm);
                    $('.loading').hide();
                },
                error: function (error) {
                    alert('không thể kết nối đến server !')
                    $('.loading').hide();
                    $('#modal_mess').html(htmm);

                }
            })
        })
        });
    </script>
@endsection
@section('footer')

@endsection