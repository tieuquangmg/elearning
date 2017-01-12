@extends('study._layout.outline')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="error-notice">
        <div class="oaerror info">
            <h5 class="text-primary">{{Auth::user()->ho_ten}}</h5>
            <p class="text-right">
                <small><strong>Mã sinh viên: </strong> : {{Auth::user()->code}}  - <strong>Ngày sinh: </strong> :
                    {{Auth::user()->birthday->format('m/d/Y')}}
                </small>
            </p>
        </div>
    </div>
    <div class="list-group">
        <li class="text-center list-group-item"><h2>Các lớp đang học</h2></li>
        @foreach($classes as $row)
            <li class="list-group-item">
            <div class="row">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="{{asset('')}}{{$row->subject->image}}">
                    </figure>
                </div>
                <div class="col-md-9">
                    <a href="{{asset('study/sub').'/'.$row->id}}"><h4>{{($row->name)}} ({{strtoupper($row->code)}})<i class="fa fa-link"></i></h4></a>
                <span class="label label-primary">
                                     <strong>Giáo viên</strong>: {{$row->teacher->ho_ten}}
                                </span>
                    <br>
                <span class="label label-info">
                                    <strong>Ngày học</strong>: {{$row->start_date}}
                                </span>
                    <br>
                <span class="label label-success">
                                     <strong>Môn học</strong>: {{$row->subject->name}}
                                </span>
                </div>
                </div>
            </li>
        @endforeach
    </div>
@endsection