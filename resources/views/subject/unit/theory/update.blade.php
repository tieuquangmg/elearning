@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Danh sách môn học</a></li>
        <li><a href="{{route('subject.unit', $theory->unit->subject->id)}}">Danh sách bài học</a></li>
        <li><a href="{{route('unit.compose', $theory->unit->id)}}">{{$theory->unit->name}}</a></li>
        <li class="active">Cập nhật</li>
    </ol>
    <form action="{{route('theory.update')}}" id="update_theory" method="post" enctype="multipart/form-data">
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
            <ul class="nav nav-tabs" role="tablist">
                <li role="tab" class="active">
                    <label data-target="#op_editor">
                        <input id="editor" name="content_type" value="1" type="radio"  @if($theory->content_type == 1) checked  @endif />
                        Soạn thảo
                    </label>
                </li>
                <li role="tab">
                    <label data-target="#op_file_pdf">
                        <input id="file_pdf" name="content_type" value="2" type="radio" @if($theory->content_type == 2) checked  @endif />
                        Tải lên file
                    </label>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane @if($theory->content_type == 1) active @endif" id="op_editor">
                    <textarea id="content" name="content_html" rows="15" class="mceEditor">{{$theory->content}}</textarea>
                </div>
                <div role="tabpanel" class="tab-pane @if($theory->content_type == 2) active @endif" id="op_file_pdf">
                    <input class="form-control" type="file" name="file_pdf">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" @if($theory->notify==1) checked @endif name="notify">Thông báo kiểm tra
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" @if($theory->active==1) checked @endif name="active">Hoạt động
            </label>
        </div>
        <div class="form-group">
            <a href="{{url()->previous()}}" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Đóng</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Hoàn thành</button>
        </div>
    </form>
@endsection

@section('bot')
    <script>

        $('input[name="content_type"]').click(function () {
            //jQuery handles UI toggling correctly when we apply "data-target" attributes and call .tab('show')
            //on the <li> elements' immediate children, e.g the <label> elements:
            $(this).closest('label').tab('show');
        });
    </script>
@endsection
@section('head')
    <style>
        .nav-tabs>li>label
        {
            display: inline-block;
            padding: 1em;
            margin: 0;
            border: 1px solid transparent;
            cursor: pointer;
        }
        .nav-tabs>li.active>label
        {
            cursor: default;
            border-color: #ddd;
            border-bottom-color: white;
        }
    </style>
@endsection