@extends('_basic.master')
@section('head')
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Media</a></li>
        <li><a href="{{route('notify.data')}}">Thông báo</a></li>
        <li class="active">Thêm mới</li>
    </ol>
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('notify.create')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Tiêu đề</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="title" required placeholder="Tên tiêu đề">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Chi tiết</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control mceEditor" placeholder="Nội dung"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Xác nhận</button>
            </div>
        </div>
    </form>
@endsection
@section('bot')

@endsection
