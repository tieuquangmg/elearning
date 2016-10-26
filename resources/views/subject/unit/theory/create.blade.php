@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Danh sách môn học</a></li>
        <li><a href="{{route('subject.unit', $unit->subject->id)}}">Danh sách bài học</a></li>
        <li><a href="{{route('unit.compose', $unit->id)}}">{{$unit->name}}</a></li>
        <li class="active">Thêm</li>
    </ol>
    <form action="{{route('theory.create')}}" id="update_theory" method="post" enctype="multipart/form-data">
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
        <div class="checkbox">
            <label>
                <input type="checkbox" checked name="notify"> Thông báo
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" checked name="active"> Hoạt động
            </label>
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <ul class="nav nav-tabs" role="tablist">
                <li role="tab" class="active">
                    <label data-target="#op_editor">
                        <input id="editor" name="content_type" value="1" type="radio" checked />
                        Soạn thảo
                    </label>
                </li>
                <li role="tab">
                    <label data-target="#op_file_pdf">
                        <input id="file_pdf" name="content_type" value="2" type="radio" />
                        Tải lên file
                    </label>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="op_editor">
                    <textarea id="content" name="content_html" rows="15" class="mceEditor"></textarea>
                </div>
                <div role="tabpanel" class="tab-pane " id="op_file_pdf">
                    <input class="form-control" type="file" name="file_pdf">
                </div>

            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> Đóng</button>
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