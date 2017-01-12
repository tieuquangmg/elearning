@extends('frontend.dasdboard._layout.layout')

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
                    <h1 class="title"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tin tổng hợp</h1>
                    @foreach($data as $value)
                        <div class="media media-grid  margin-top-none s-container">
                            <div class="media-left">
                                <div class="icon-block half img-circle bg-grey-300">
                                    <i class="fa fa-file-text text-white"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="panel panel-default " data-z="0.5">
                                    <div class="panel-body">
                                        <div class="pull-right">
                                            <a href="{{route('study.newsdetail',$value->id)}}" class="btn btn-white btn-flat"><i class="fa fa-comments fa-fw"></i></a>
                                        </div>
                                        <h4 class="text-title media-heading">
                                            <a href="{{route('study.newsdetail',$value->id)}}" class="link-text-color">{{$value->title}}</a>
                                        </h4>
                                        <p class="text-light text-caption">
                                            Đăng bởi
                                            <a href="#"><img src="{{asset($value->user->image)}}" alt="person" class="img-circle width-20"> {{$value->user->first_name.' '.$value->user->last_name}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i>{{$value->updated_at->format('m/d/Y')}}
                                        </p>
                                        <p class="text-light"{{$value->intro}}></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group form-control-material">
                                <input id="forumSearch" type="text" class="form-control" placeholder="Type to search"><span class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                                <label for="forumSearch">Tìm kiếm ...</label>
                            </div>
                            <a href="#" class="btn btn-blue-A200 paper-shadow relative" data-z="0.5" data-hover-z="1">Tìm kiếm</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Thể loại</h4>
                        </div>
                        <ul class="list-group list-group-menu">
                            <li class="list-group-item active">
                                <a href="#"><i class="fa fa-chevron-right fa-fw"></i>Thông báo</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"><i class="fa fa-chevron-right fa-fw"></i>Tin đơn vị sinh viên</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"><i class="fa fa-chevron-right fa-fw"></i>Thông tin tuyển sinh</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"><i class="fa fa-chevron-right fa-fw"></i> Bản tin</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"><i class="fa fa-chevron-right fa-fw"></i> Bản tin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

