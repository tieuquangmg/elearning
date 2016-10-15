@extends('_basic.master')
@section('head')
@endsection
@section('container')
    <ol class="breadcrumb">
        <li><a href="#">News</a></li>
        <li class="active"> Add </li>
    </ol>
    <form class="form-horizontal" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$news->id}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$news->title}}" name="title" required placeholder="Name ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">SubMenu</label>
            <div class="col-sm-10">
                <select name="sub_menu_id" class="form-control" >
                    @foreach($subMenus as $subMenu)
                        <option value="{{$subMenu->id}}">{{$subMenu->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Intro</label>
            <div class="col-sm-10">
                <textarea name="intro" required class="form-control ckeditor" placeholder="Intro ...">{{$news->intro}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Details</label>
            <div class="col-sm-10">
                <textarea name="details" required class="form-control ckeditor" placeholder="Details ...">{{$news->details}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="active" @if($news->active==1) checked @endif> Active
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Create</button>
            </div>
        </div>
    </form>
@endsection
@section('bot')

@endsection