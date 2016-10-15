@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">{{$unit->subject->name}}</a></li>
        <li><a href="{{route('subject.unit', $unit->id)}}">{{$unit->name}}</a></li>
        <li class="active">Chỉnh sửa</li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4"><i class="glyphicon glyphicon-edit"></i> {{$unit->name}}</div>
                <div class="pull-right"><a class="btn btn-danger">hủy</a></div>
            </div>

        </div>
        <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('unit.update')}}">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$unit->id}}">
                <input type="hidden" name="subject_id" value="{{$unit->subject->id}}">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tên bài học</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{$unit->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Hình ảnh</label>
                    <div class="col-sm-10">
                        <input name="image" class="form-control" type="file">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Chú thích</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control">{{$unit->description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                {{--{!! Form::checkbox('active',null,$unit->active) !!} Kích hoạt--}}
                                <input type="checkbox" value="1" name="active" @if($unit->active == 1 ) {{'checked'}} @endif>Kích hoạt
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

        </div>
        <div class="panel-footer">

        </div>
    </div>
@endsection