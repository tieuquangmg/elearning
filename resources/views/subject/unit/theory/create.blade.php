@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Danh sách môn học</a></li>
        <li><a href="{{route('subject.unit', $unit->subject->id)}}">Danh sách bài học</a></li>
        <li><a href="{{route('unit.compose', $unit->id)}}">{{$unit->name}}</a></li>
        <li class="active">Thêm</li>
    </ol>
    <form action="{{route('theory.create')}}" id="update_theory" method="post">
        {{csrf_field()}}
        <input type="hidden" name="unit_id" value="{{$unit->id}}">
        <div class="form-group">
            <label>Tên</label>
            <input id="name" type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea id="intro" name="intro" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Thời gian tối thiểu (phút)</label>
            <input id="intro" name="time" class="form-control">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <textarea id="content" name="content" rows="15" class="mceEditor"></textarea>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked name="notify"> Thông báo kiểm tra
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked name="active"> Hoạt động
            </label>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Đóng</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Hoàn thành</button>
        </div>
    </form>
@endsection