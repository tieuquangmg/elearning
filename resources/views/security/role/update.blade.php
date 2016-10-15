@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a href="{{route('permission.data')}}" >{{trans('table.permission')}}</a></li>
        <li class="active">{{trans('button.create')}}</li>
    </ol>
    <form method="post" action="{{route('role.update')}}">
        <input type="hidden" name="_token" id="create_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$role->id}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label >{{trans('label.name')}}</label>
                    <input type="text" name="name" value="{{$role->name}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label >{{trans('label.display_name')}}</label>
                    <input type="text" name="display_name" value="{{$role->display_name}}" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >{{trans('label.description')}}</label>
            <textarea name="description" class="mceEditor form-control" id="create_description">{{$role->description}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">{{trans('button.update')}}</button>
        </div>
    </form>
@endsection
@section('bot')

@endsection
d