@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Lớp học trực tuyến</a></li>
        <li class="active">sửa</li>
    </ol>
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('meeting.update')}}">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$data->id}}">
        <input type="hidden" name="unit_id" value="{{$data->unit_id}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">{{trans('label.name')}}</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Tên lớp học trực tuyến">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">lời chào</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$data->welcome}}" name="welcome" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">meta</label>
            <div class="col-sm-10">
                <input type="text" name="meta" class="form-control" value="{{$data->meta}}" placeholder="Meta">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Lưu trữ</label>
            <div class="col-sm-10">
                <input type="checkbox" name="record" @if($data->record == 1) checked @endif placeholder="Lưu trữ">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Tự động ghi</label>
            <div class="col-sm-10">
                <input type="checkbox" name="auto_start_recording" @if($data->auto_start_recording == 1) checked @endif placeholder="Tự động ghi">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Cho phép bắt đầu và dừng ghi</label>
            <div class="col-sm-10">
                <input type="checkbox" name="allow_start_top_recording" @if($data->allow_start_top_recording == 1) checked @endif value="1">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Thực hiện</button>
            </div>
        </div>
    </form>
@endsection