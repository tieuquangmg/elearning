@extends('_basic.master')
@section('content')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('subject.data')}}">{{$unit->subject->name}}</a></li>
            <li><a href="{{route('subject.unit', $unit->id)}}">{{$unit->name}}</a></li>
            <li class="active">Chỉnh sửa</li>
        </ol>
        <h1>Chỉnh sửa</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a class="btn btn-danger">hủy</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-gray">
            <div class="panel-heading">
                    <h4><i class="glyphicon glyphicon-edit"></i>{{$unit->name}}</h4>
            </div>
            <div class="panel-body">
                <div class="col-md-12 col-lg-6">
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
            </div>

        </div>

    </div> <!-- container -->



@endsection