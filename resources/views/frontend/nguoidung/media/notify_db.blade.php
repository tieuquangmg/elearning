@extends('frontend.dasdboard._layout.layout_db')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/profile.css')}}">
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
            <li class="active">Trang cá nhân</li>
        </ol>
        <div class="row row-eq-height">
            <div class="col-md-2 small-padding" style="background: white">
                @include('frontend.dasdboard._modules.left_menu_profile')
            </div>
            <div class="col-md-10 small-padding">
                <div class="panel panel-default paper-shadow" data-z="0.5" data-scrollable-h="" tabindex="0"
                     style="overflow: hidden; outline: none;">
                    <ul class="list-group">
                        @foreach($notify as $row)
                            <li class="list-group-item">
                                <a href="{{route('study.getMessagedb').'?u='.$row->id}}">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <img src="{{asset($row->notify->sender->avatar())}}" width="50" alt="" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <span class="date">{{$row->notify->updated_at->diffForHumans()}}</span>
                                            <div><span class="user">{{$row->notify->sender->ho_ten}}</span></div>
                                            <div class="text-light">{!! $row->notify->content !!}</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- This wraps the whole cropper -->
@endsection
@section('bot')
@endsection