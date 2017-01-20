@extends('frontend.nguoidung._layout.layout_db')
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li><a href="#">Lớp đã đăng ký</a></li>
                        <li><a>{{$class->subject->name}}</a></li>
                        <li><a>{{$unit->name}}</a></li>
                        <li class="active">nội dung bài học</li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4 green">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>{{$unit->name}}
                                </div>
                                <div class="pull-right green">
                                    <a href="{{url('study/sub/'.$class->id)}}"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                                @if($permission)
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title"><span class="fa fa-book"></span> Bài học</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <ul class="list-group">
                                                        @foreach($unit->theory as $row)
                                                            <li class="list-group-item">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <h5 class="list-group-item-heading">
                                                                            <a href="{{url('study/theory/'.$row->id.'/'.$class->id)}}" style="text-decoration: none; color:#0a568c">
                                                                                <i class="fa fa-link"></i>
                                                                                {{$row->name}}</a>
                                                                        </h5>
                                                                        <p class="list-group-item-text">{{$row->intro}}</p>
                                                                        </div>
                                                                    <small class="text-muted pull-right">
                                                                            @if(!$row->user_theory->isEmpty())
                                                                                @if($row->user_theory->first()->watch_time == 0)
                                                                                    <i class="glyphicon glyphicon-time icon-green"></i>
                                                                                    <i class="glyphicon glyphicon-ok icon-green"></i>
                                                                                @elseif($row->user_theory->first()->watch_time == $row->time)
                                                                                    <i class="glyphicon glyphicon-time icon-red"></i>
                                                                                    {{--<i class="glyphicon glyphicon-times icon-red"></i>--}}
                                                                                @else
                                                                                    <i class="glyphicon glyphicon-time icon-yellow"></i>
                                                                                    <span class="icon-yellow"> {{floor($row->user_theory->first()->watch_time/1000) / 60 % 60}}
                                                                                        phút còn lại</span>
                                                                                @endif
                                                                            @endif
                                                                    </small>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <div class="alert alert-danger">
                                        <strong>Chú ý: </strong>Bạn chưa hoàn thành bài trước
                                    </div>
                                @endif
                        </div>
                    </div>

                </div>
                    {{--<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">--}}
                        {{--<div class="panel-heading panel-collapse-trigger">--}}
                            {{--<h4 class="panel-title">Resources</h4>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body list-group">--}}
                            {{--<ul class="list-group list-group-menu">--}}
                                {{--<li class="list-group-item active"><a class="link-text-color" href="#">Danh sách bài--}}
                                        {{--học</a></li>--}}
                                {{--<li class="list-group-item"><a class="link-text-color" href="#">Tài liệu</a></li>--}}
                                {{--<li class="list-group-item"><a class="link-text-color" href="#">Bài kiểm tra</a></li>--}}
                                {{--<li class="list-group-item"><a class="link-text-color" href="#">giáo viên</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">--}}
                    {{--<div class="panel-heading panel-collapse-trigger">--}}
                    {{--<h4 class="panel-title">Giáo viên</h4>--}}
                    {{--</div>--}}
                    {{--<div class="panel-body">--}}
                    {{--<div class="media v-middle">--}}
                    {{--<div class="media-left">--}}
                    {{--<img src="#" alt="About Adrian" width="60" class="img-circle" />--}}
                    {{--</div>--}}
                    {{--<div class="media-body">--}}
                    {{--<h4 class="text-title margin-none"><a href="#">Tên</a></h4>--}}
                    {{--<span class="caption text-light">Biography</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<br/>--}}
                    {{--<div class="expandable expandable-indicator-white expandable-trigger">--}}
                    {{--<div class="expandable-content">--}}
                    {{--<p>----</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection