@extends('_basic.master')

@section('content')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('subject.data')}}">Bài kiểm tra</a></li>
            <li class="active">Thêm</li>
        </ol>
        <h1></h1>
        <div class="options">
            <div class="btn-toolbar">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('test.create')}}">
                {{csrf_field()}}
                <input type="hidden" name="unit_id" value="{{$id}}">
                <div class="form-group">
                    <label class="col-sm-2 control-label">{{trans('label.name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Tên bài kiểm tra">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Số câu hỏi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="number_question" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Số lần làm bài tối đa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="number_test" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tính điểm</label>
                    <div class="col-sm-10">
                        <input type="checkbox" value="1" class="form-control" name="scoring">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Cách tính điểm</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="scoring_method_id">
                            <option value="1">Bài đầu tiên</option>
                            <option value="2">Trung bình các bài</option>
                            <option value="3">Bài cao nhất</option>
                            <option value="4">Bài cuối cùng</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Thời gian làm bài</label>
                    <div class="col-sm-10">
                        <input type="number" name="time" class="form-control" placeholder="Thời gian làm bài">
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
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Thực hiện</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection