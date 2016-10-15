@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Danh sách môn học</a></li>
        <li><a href="{{route('subject.unit', $theory->unit->subject->id)}}">Danh sách bài học</a></li>
        <li><a href="{{route('unit.compose', $theory->unit->id)}}">{{$theory->unit->name}}</a></li>
        <li class="active">Cập nhật</li>
    </ol>
    <form action="{{route('theory.update')}}" id="update_theory" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$theory->id}}">
        <div class="form-group">
            <label>Tên</label>
            <input id="name" type="text" name="name"  value="{{$theory->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea id="intro" name="intro" rows="5" class="form-control">{{$theory->intro}}</textarea>
        </div>
        <div class="form-group">
            <label>Thời gian tối thiểu (phút)</label>
            <input id="intro" name="time" value="{{$theory->time}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <textarea id="content" name="content" rows="15" class="mceEditor">{{$theory->content}}</textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" @if($theory->notify==1) checked @endif name="notify"> Thông báo kiểm tra
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" @if($theory->active==1) checked @endif name="active"> Hoạt động
            </label>
        </div>
        <div class="form-group">
            <a href="{{url()->previous()}}" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Đóng</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Hoàn thành</button>
        </div>
    </form>
@endsection