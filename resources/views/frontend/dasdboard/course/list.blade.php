@extends('frontend.dasdboard._layout.layout_db')

@section('content')
    <div class="container">
        <!-- The row that contains the three main columns of the website. -->
        <div class="row">
            <!-- Left sidebar: A cell that spans 2 columns -->
            <div class="col-md-2 fb-left-sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation">
                        <div class="thumbnail">
                            <img src="{{asset(Auth::user()->image)}}" width="185" height="185">
                        </div>
                        <div class="caption">
                            <a href="#">{{Auth::user()->ho_ten}}</a>
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
                                            <img src="https://litcoachlady.files.wordpress.com/2015/01/poop-happened2-180x225.jpg" width="90" height="112">
                                        </div>
                                        <div class="media-body">
                                            <a href="{{route('study.subject',$row->id)}}">{{$row->subject->name}}</a>
                                            <div class="clearfix">
                                                <div class="pull-left">Mã lớp: {{$row->code}}</div>
                                                <div class="pull-right">Thời gian học: {{$row->start_date->format('d/m/Y').' - '.$row->start_date->format('d/m/Y')}}</div>
                                            </div>
                                            <hr>
                                            <div class="clearfix">
                                                <div class="body-giaovien">
                                                    <div class="body-giaovien-left" style="">giảng viên</div>
                                                    <div class="body-giaovien-right">
                                                        {{($row->teacher != null) ? $row->teacher->ho_ten : ''}}
                                                        <br>
                                                        Phan Văn Quang
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
                                <div class="col-md-12">
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
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 nhiemvu-head">
                                    <a href="#" style="text-transform: uppercase">nhiệm vụ học tập</a>
                                </div>
                            </div>
                            <ul class="media-list nhiemvu-body">
                                <li class="media">
                                    <div class="media-left media-top nhiemvu-day">
                                        <span>
                                            <div class="day">Tuần: 6</div>
                                            <div class="year">11-11-2016</div>
                                            <div class="year">18-11-2016</div>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <ul style="list-style: none;padding-left: 5px;border-left: 1px #b9b9b9 solid">
                                            <li>
                                                <a href="#">bài kiểm tra số 2</a>(Tính điểm chuyên cần 10%)
                                                <br><p href="#">Thời gian: 11-11-2016 -> 11-11-2016</p>
                                            </li>
                                            <li>
                                                <a href="#">bài kiểm tra số 3</a>(Tính điểm chuyên cần 10%)
                                                <br><p href="#">Thời gian: 11-11-2016 -> 11-11-2016</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Right sidebar: A cell that spans 3 columns -->
            <div class="col-md-3 fb-right-sidebar">
                <!-- Nested grid! Like the outer grid, it's just a sequence of rows. -->
                <!-- Ticker. -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="pull-right">
                            <span class="glyphicon glyphicon-download-alt"></span>
                        </a>
                    </div>
                </div>
                <!-- Birthday -->
                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-gift"></span> <a href="#">Zak</a> and <a href="#">1 other</a>
                    </div>
                </div>
                <!-- Trending -->
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
                                    <li role="presentation"><a href="#"><span class="glyphicon glyphicon-tower"></span></a></li>
                                    <li role="presentation"><a href="#"><span class="glyphicon glyphicon-sunglasses"></span></a></li>
                                    <li role="presentation"><a href="#"><span class="glyphicon glyphicon-record"></span></a></li>
                                    <li role="presentation"><a href="#"><span class="glyphicon glyphicon-facetime-video"></span></a></li>
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
                                            <a href="#">George Lucas</a>: Filmmaker Criticizes New "Star Wars" Film and Direction of Franchise Under Disney
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-top">
                                            <span class="glyphicon glyphicon-flash"></span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Super Smash Bros.</a>: Game Glitch Allows Players to Control 8 Characters With 1 Controller
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left media-top">
                                            <span class="glyphicon glyphicon-flash"></span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Tuukka Rask</a>: Boston Bruins Player Debuts Goalie Mask for Winter Classic
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
                <!-- Suggested Pages -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                SUGGESTED PAGES
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="pull-right">See All</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="http://umass-cs-326.github.io/img/falafel.jpg" width="100%" />
                                <br><a href="#">Pita Pocket's</a>
                                <br> Mediterranean Restaurant · 301 likes
                                <br><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span> Like Page</button>
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
@endsection
@section('bot')
    <script src="{{asset('dashboard/js/script.js')}}"></script>
@endsection
@section('footer')

@endsection