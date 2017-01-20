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
                    <li class="active">{{$unit->audio->name}}</li>
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
                        <div class="slide-video">
                            <div style="margin: 0 auto; display: table">
                            @if($permission)
                                <audio controls autoplay>
                                    <source src="{{asset($unit->audio->url)}}" type="audio/mpeg">
                                    Trình duyệt của bạn không hỗ trợ
                                </audio>
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

        </div>
    </div>
</div>
@endsection