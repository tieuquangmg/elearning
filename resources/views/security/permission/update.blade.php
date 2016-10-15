@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a {{route('permission.data')}}>{{trans('table.permission')}}</a></li>
    </ol>
    <form method="post" action="{{route('permission.update')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$permission->id}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">{{trans('label.name')}}</label>
                    <input type="text" name="name" value="{{$permission->name}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">{{trans('label.display_name')}}</label>
                    <input type="text" name="display_name" value="{{$permission->display_name}}" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >{{trans('label.description')}}</label>
            <textarea class="mceEditor form-control" name="description">{{$permission->display_name}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">{{trans('button.update')}}</button>
        </div>
    </form>
@endsection
@section('bot')

@endsection