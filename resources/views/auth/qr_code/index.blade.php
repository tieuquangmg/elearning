@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Auth</a></li>
        <li><a href="#">QrCode</a></li>
        <li class="active">Render</li>
    </ol>
    <div class="row">
        <div >
            <div class="x_title">
                <h2>QrCode Builder<small> gallery design </small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row">

                    <p>You are select</p>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{asset('')}}images/4.jpg" alt="image" />
                                <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class=" glyphicon glyphicon-link"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-pencil"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <a href="{{route('auth.qr_code.scan')}}">Scan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{asset('')}}images/4.jpg" alt="image" />
                                <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class=" glyphicon glyphicon-link"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-pencil"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <a href="{{route('auth.qr_code.render')}}" >Render</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{asset('')}}images/4.jpg" alt="image" />
                                <div class="mask">
                                    <p>Your Text</p>
                                    <div class="tools tools-bottom">
                                        <a href="#"><i class=" glyphicon glyphicon-link"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-pencil"></i></a>
                                        <a href="#"><i class=" glyphicon glyphicon-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <a href="{{route('auth.qr_code.user')}}">User manager</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@section('head')

@endsection
@section('bot')

@endsection