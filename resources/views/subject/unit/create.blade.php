@extends('_basic.master')
@section('content')
    <div id="page-heading">
        <div class="clearfix">
            <div class="pull-left">
                <ul style="margin-top: 17px"><li><a><i class="glyphicon glyphicon-backward"></i></a></li></ul>
            </div>
            <div class="pull-left">
                <ol class="breadcrumb">
                    <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{route('subject.data')}}">Môn học</a></li>
                    <li><a href="{{route('subject.unit', $subject->id)}}">{{$subject->name}}</a></li>
                    <li class="active">Thêm bài học</li>
                </ol>
            </div>
        </div>
        <h1>Thêm bài học</h1>
        <div class="options">
            <div class="btn-toolbar">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-gray">
            <div class="panel-heading">
                <h4>Thêm bài học</h4>
            </div>
            <div class="panel-body">
                <div class="col-md-12 col-lg-6">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('unit.create')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="subject_id" value="{{$subject->id}}">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tên bài học</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Tên bài học... ">
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
                                <textarea name="description" class="form-control" placeholder="Chú thích"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input name="active" value="1" type="checkbox" checked> Kích hoạt
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i>Thực hiện</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- container -->
@endsection