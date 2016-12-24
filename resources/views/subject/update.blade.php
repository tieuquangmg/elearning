@extends('_basic.master')
@section('content')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('subject.data')}}">Môn học</a></li>
            <li><a class="active">Cập nhật</a></li>
        </ol>
        <h1>Chỉnh sửa lớp</h1>
        <div class="options">
            <div class="btn-toolbar">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Chỉnh sửa lớp</h4>
            </div>
            <div class="panel-body">
                <div class="col-md-12 col-lg-6">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('subject.update')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$subject->id}}">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{trans('label.name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{$subject->name}}" placeholder="Tên ... ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input name="image" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Chú thích</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Chú thích">{{$subject->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input name="active" value="1" type="checkbox" @if($subject->active == 1) checked @endif> Kích hoạt
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Thực hiện</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div> <!-- container -->
@endsection