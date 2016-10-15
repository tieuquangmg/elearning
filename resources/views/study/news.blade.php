@extends('study._layout.outline')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="row">
        <div  class="col-lg-12">
            @foreach($data as $value)
            <div class="media media-grid media-paper-shadow margin-top-none s-container">
                <div class="media-left">
                    <div class="icon-block half img-circle bg-grey-300">
                        <i class="fa fa-file-text text-white"></i>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-body">
                            <div class="pull-right">
                                <a href="website-blog-post.html" class="btn btn-white btn-flat"><i class="fa fa-comments fa-fw"></i> 9</a>
                            </div>
                            <h4 class="text-title media-heading">
                                <a href="website-blog-post.html" class="link-text-color">{{$value->title}}</a>
                            </h4>
                            <p class="text-light text-caption">
                                Đăng bởi
                                <a href="#">
                                    <img src="{{asset($value->user->image)}}" alt="person" class="img-circle width-20"> {{$value->user->first_name.' '.$value->user->last_name}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i>{{$value->updated_at->format('m/d/Y')}}
                            </p>
                            <p class="text-light"{{$value->intro}}></p>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
@endsection