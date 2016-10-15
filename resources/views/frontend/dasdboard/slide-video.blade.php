@extends('frontend.dasdboard._layout.layout')
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li><a href="#">Lớp đã đăng ký</a></li>
                        <li><a>{{$class->subject->name}}</a></li>
                        <li><a>{{$unit->name}}</a></li>
                        <li class="active">{{$unit->slide_video->name}}</li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4 green">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>{{$unit->name}}
                                </div>
                                <div class="pull-right green">
                                    <a href="{{url('study/sub/'.$class->subject->id)}}"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="slide-video">
                                <div style="margin: 0 auto; display: table">
                                @if($permission)
                                <iframe width="854px" height="480px" src="https://www.youtube.com/embed/{{$unit->slide_video->url}}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            @else
                                <div class="alert alert-danger">
                                    <strong>Chú ý: </strong>Bạn chưa hoàn thành bài trước
                                </div>
                            @endif
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{--<div class="col-md-3">--}}

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

                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection