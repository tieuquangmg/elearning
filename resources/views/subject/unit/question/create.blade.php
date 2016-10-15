@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Môn học</a></li>
        <li><a href="{{route('subject.unit', $unit->subject->id)}}">{{$unit->subject->name}}</a></li>
        <li class="active">Câu hỏi</li>
        <li class="active">Thêm</li>
    </ol>


    <form  method="post" action="{{route('question.create')}}" >
        {{csrf_field()}}
        <input type="hidden" name="unit_id" value="{{$unit->id}}">
        <div class="form-group">
            <label>Câu hỏi</label>
            <textarea id="question" name="question" class="form-control mceEditor"></textarea>
        </div>
        <div class="form-group">
            <label>Đáp án</label>
            @for($i=1; $i<=4; $i++)
                <div class="input-group form-group">
                    <span class="input-group-addon">
                        <input type="radio" name="answer" required value="{{$i}}" aria-label="...">
                    </span>
                    <input type="text" required name="reply{{$i}}" class="form-control" aria-label="...">
                </div>
            @endfor
            <div class="form-group">
                <label>Kích hoạt</label>
                <input type="checkbox" name="active" checked value="1">
            </div>
        </div>
        <div class="form-group">
            <a href="{{url()->previous()}}" class="btn btn-default" >Đóng</a>
            <button class="btn btn-primary">Hoàn thành</button>
        </div>
    </form>


@endsection

