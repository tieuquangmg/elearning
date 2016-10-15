@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Bài kiểm tra</a></li>
        <li class="active">Thêm</li>
    </ol>
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('test.update')}}">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$test->id}}">
        <input type="hidden" name="unit_id" value="{{$test->unit_id}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">{{trans('label.name')}}</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{$test->name}}" placeholder="Tên bài kiểm tra">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Số câu hỏi</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="number_question" value="{{$test->number_question}}" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Thời gian làm bài</label>
            <div class="col-sm-10">
                <input type="number" name="time" class="form-control" value="{{$test->time}}" placeholder="Thời gian làm bài">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input name="active" value="{{$test->active}}" type="checkbox" checked> Kích hoạt
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Thực hiện</button>
            </div>
        </div>
    </form>
@endsection