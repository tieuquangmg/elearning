@extends('frontend.dasdboard._layout.layout')

{{--@section('page-header')--}}
    {{--<div class="parallax overflow-hidden page-section bg-cyan-300">--}}
        {{--<div class="container parallax-layer" data-opacity="true"--}}
             {{--style="transform: translate3d(0px, 0px, 0px); opacity: 1;">--}}
            {{--<div class="media media-grid v-middle">--}}
                {{--<div class="media-left">--}}
                    {{--<span class="icon-block half bg-cyan-500 text-white"><i class="fa fa-file-text-o"></i></span>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="text-display-2 text-white margin-none">Thông tin đáng chú ý</h5>--}}
                    {{--<p class="text-white text-subhead">Tin tức mới nhất</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li class="active">Tin tổng hợp</li>
                    </ol>
                    <div class="page-section padding-top-none">
                        <div class="s-container">
                            <h1 class="text-display-1 margin-top-none">{{$new->title}}</h1>
                            <p class="text-light text-caption">
                                Đăng bởi
                                <a href="#">
                                    <img src="{{asset('').$new->user->image}}" alt="person" class="img-circle width-20">
                                    {{$new->user->first_name.' '.$new->user->first_name}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 phút trước
                            </p>
                        </div>
                        <br>
                        {!! $new->content !!}
                        <br>
                        <span class="label bg-gray-dark">tin tuc</span>
                        <span class="label label-grey-200">thong tin</span>
                        <span class="label label-grey-200">dao tao</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group form-control-material">
                                <input id="forumSearch" type="text" class="form-control"
                                       placeholder="Type to search"><span class="ma-form-highlight"></span><span
                                        class="ma-form-bar"></span>
                                <label for="forumSearch">Tìm kiếm ...</label>
                            </div>
                            <a href="#" class="btn btn-inverse paper-shadow relative" data-z="0.5" data-hover-z="1">Tìm
                                kiếm</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Thể loại</h4>
                        </div>
                        <ul class="list-group list-group-menu">
                            <li class="list-group-item active">
                                <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i>Tất cả</a>
                            </li>
                            <li class="list-group-item">
                                <a href="website-blog.html"><i class="fa fa-chevron-right fa-fw"></i> General</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

