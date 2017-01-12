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
            <div class="media messages-container media-clearfix-xs-min media-grid">
                <div class="media-left">
                    <div class="messages-list">
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-scrollable-h="" tabindex="0" style="overflow: hidden; outline: none;">
                            <ul class="list-group">
                                @foreach($from as $row)
                                    <li class="list-group-item">
                                        <a href="{{route('study.getMessagedb').'?u='.$row->id}}">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <img src="{{asset($row->avatar())}}" width="50" alt="" class="media-object">
                                                </div>
                                                <div class="media-body">
                                                    <span class="date">{{$row->last_mess_from->updated_at->diffForHumans()}}</span>
                                                    <div><span class="user">{{$row->ho_ten}}</span></div>
                                                    <div class="text-light">{{$row->last_mess_from->content}}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="media-body">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a class="btn btn-primary" href="#">
                                    <i class="fa fa-envelope"></i>Gửi
                                </a>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control share-text" placeholder="Write message...">
                        </div>
                        <!-- /input-group -->
                    </div>
                    @foreach($all_mess as $row)
                        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated="">
                            <div class="panel-body">
                                <div class="media v-middle">
                                    <div class="media-left">
                                        <img src="{{asset($row->send_from->avatar())}}" alt="person" class="media-object img-circle width-50">
                                    </div>
                                    <div class="media-body message">
                                        <h4 class="text-subhead margin-none"><a href="#">{{$row->send_from->ho_ten}}</a></h4>
                                        <p class="text-caption text-light"><i class="fa fa-clock-o"></i>{{$row->updated_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                                <p>{{$row->content}}</p>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This wraps the whole cropper -->
@endsection
@section('bot')
@endsection

