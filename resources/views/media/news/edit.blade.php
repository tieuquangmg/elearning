@extends('_basic.master')
@section('head')
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Media</a></li>
        <li><a href="{{route('news.data')}}">Tin tức</a></li>
        <li class="active">Sửa bài</li>
    </ol>
    <form class="form-horizontal" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Tiêu đề</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$data->title}}" name="title" required placeholder="Name ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tóm tắt</label>
            <div class="col-sm-10">
                <textarea name="intro"  class="form-control" placeholder="Intro ...">{{$data->intro}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Nội dung</label>
            <div class="col-sm-10">
                <textarea name="content"  class="form-control mceEditor" placeholder="Content ...">{{$data->content}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="active" @if($data->active ==1) checked @endif> Hiển thị
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class="glyphicon"></span>Xác nhận</button>
            </div>
        </div>
    </form>
@endsection
@section('bot')

@endsection
