@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Môn học</a></li>
        <li><a href="#">Nội dung</a></li>
    </ol>
    <div class="col-lg-12">
        <div class="text-right form-group">
            <a href="{{route('subject.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> {{trans('button.add')}}</a>
            <button class="btn btn-danger"><i class="fa fa-trash"></i> {{trans('button.delete')}}</button>
        </div>
    </div>
    <ul class="timeline">
        <li>
            <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Lý thuyết</h4>
                </div>
                <div class="timeline-body">
                    <p>Description...</p>
                </div>
            </div>
        </li>

        <li>
            <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Tài liệu</h4>
                </div>
                <div class="timeline-body">
                    <p>Description...</p>
                </div>
            </div>
        </li>

        <li>
            <div class="timeline-badge warning"><i class="fa fa-sun-o"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Bài kiểm tra</h4>
                </div>
                <div class="timeline-body">
                    <p>Description...</p>
                </div>
            </div>
        </li>
    </ul>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}_base/time_line/single.css">
@endsection