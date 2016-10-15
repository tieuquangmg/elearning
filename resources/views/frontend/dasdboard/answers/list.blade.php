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
                                    <a href="{{url('study/sub/'.$class->subject->id)}}"><i class="glyphicon glyphicon-backward"></i>Trở lại</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection