@extends('frontend.nguoidung._layout.layout_db')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/danh-sach-sinh-vien.css')}}">
    @endsection
@section('content')
    <div class="container">
        <!-- The row that contains the three main columns of the website. -->
        <div class="row">
            <!-- Left sidebar: A cell that spans 2 columns -->
            <div class="col-md-2 fb-left-sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation">
                        <div class="thumbnail">
                            <img src="{{asset(Auth::guard('nguoidung')->user()->avatar())}}" width="185" height="185">
                        </div>
                        <div class="caption">
                            <a href="#">{{Auth::guard('nguoidung')->user()->ho_ten}}</a>
                        </div>
                    </li>
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span>Sinh viên</a>
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
                                    <img src="http://5.s110.appstore.zdn.vn/game-1/139/hangrong-110-1.jpg">
                                </span>
                                <div class="linkwrap">
                                    <span>{{$row->subject->name.'-'.$row->stt_lop}}</span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    <li role="presentation" class="content-header">Hỗ trợ học tập</li>
                    <li role="presentation" class="content_body">
                        <a href="#">
                            <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                            <div class="linkwrap">
                                <span>Diễn đàn</span>
                            </div>
                        </a>
                    </li>
                    <li role="presentation" class="content_body">
                        <a href="#">
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
            <!-- Main feed: A cell that spans 7 columns -->
            <div class="col-md-10">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-6 left">
                                <div class="controls_content_left">
                                    <form action="" method="get" id="courseform" class="form">
                                        <div class=" form-group form-group-sm">
                                            <label >Các lớp học của tôi</label>
                                            <select class="form-control input-sm" id="" name="classses" onchange="">
                                                @foreach($classes as $row)
                                                    <option value="{{$row->id}}">{{$row->subject->name.' - '.$row->stt_lop}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class=" form-group form-group-sm">
                                            <label>Sinh viên không tham gia hơn</label>
                                            <select class="form-control input-sm">
                                                <option value="" selected="selected">Select period</option>
                                                <option value="">
                                                    1 ngày
                                                </option>
                                            </select>
                                        </div>
                                        <div class=" form-group form-group-sm">
                                            <label>Quyền</label>
                                            <select class="form-control input-sm">
                                                <option value="" selected="selected">Tất cả</option>
                                                <option value="">PM2 p.VHOL TOS1</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6 right">
                                <h3 class="main text-danger">Sĩ số lớp: {{count($danh_sach)}}</h3>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tìm sinh viên">
                                            <span class="input-group-btn">
                                                <button class="btn btn-secondary" type="button">Tìm kiếm</button>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="paging">
                            {{--{!! $danh_sach->links() !!}--}}
                        </div>
                        <table cellspacing="0" id="participants" class="table table-bordered flexible">
                            <thead>
                            <tr>
                                <th class="header c0" scope="col">Hình ảnh</th>
                                <th class="header c1" scope="col">Họ tên</th>
                                <th class="header c2" scope="col">Địa chỉ</th>
                                <th class="header c3" scope="col">Truy cập gần đây</th>
                                <th class="header c3" scope="col">Online</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($danh_sach as $row)
                                <tr class="r0">
                                    <td class="cell c0">
                                        <a href="">
                                            <img class="userpicture"
                                                 src="{{asset($row->avatar())}}"
                                                 height="35" width="35" alt=""></a></td>
                                    <td class="cell c1"><strong>
                                            <a href="">{{($row->ho_ten != null)?($row->ho_ten):''}}</a></strong></td>
                                    <td class="cell c2">{{$row->address}}</td>
                                    <td class="cell c3">
                                        @if($row->isOnline() == 1)
                                            Hiện giờ
                                            @else
                                            {{(!$row->user_login->isEmpty())?($row->user_login->first()->created_at->diffForHumans()):'---'}}
                                        @endif
                                    </td>
                                    <td>
                                        <span style="@if($row->isOnline() == 1)color: green;@else color: #6a6a6a; @endif font-size: 20px">●</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="paging">
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
@endsection
@section('bot')
    <script src="{{asset('dashboard/js/script.js')}}"></script>
@endsection
@section('footer')

@endsection