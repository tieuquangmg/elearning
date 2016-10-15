@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('subject.data')}}">Môn học</a></li>
        <li><a href="{{route('subject.unit', $question->unit->subject->id)}}">{{$question->unit->subject->name}}</a></li>
        <li class="active">Câu hỏi</li>
        <li class="active">Cập nhật</li>
    </ol>
    <form  method="post" action="{{route('question.update')}}" >
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$question->id}}">
        <div class="form-group">
            <label>Câu hỏi</label>
            <textarea id="question" name="question" class="form-control mceEditor">{{$question->question}}</textarea>
        </div>
        <div class="form-group">
            <label>Đáp án</label>
            <div class="input-group form-group">
                <span class="input-group-addon">
                    <input type="radio" name="answer" @if($question->reply1==$question->answer) checked @endif required value="1">
                </span>
                <input type="text" required name="reply1" class="form-control" value="{{$question->reply1}}">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon">
                    <input type="radio" name="answer" @if($question->reply2==$question->answer) checked @endif required value="2">
                </span>
                <input type="text" required name="reply2" class="form-control" value="{{$question->reply2}}">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon">
                    <input type="radio" name="answer" @if($question->reply3==$question->answer) checked @endif required value="3">
                </span>
                <input type="text" required name="reply3" class="form-control" value="{{$question->reply3}}">
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon">
                    <input type="radio" name="answer" @if($question->reply4==$question->answer) checked @endif required value="4">
                </span>
                <input type="text" required name="reply4" class="form-control" value="{{$question->reply4}}">
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <input type="checkbox" name="active" @if($question->active == 1) checked @endif value="1">
            </div>
        </div>
        <div class="form-group">
            <a href="{{url()->previous()}}" class="btn btn-default" >Đóng</a>
            <button class="btn btn-primary">Hoàn thành</button>
        </div>
    </form>
@endsection

