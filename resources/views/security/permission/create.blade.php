@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a href="{{route('permission.data')}}" >{{trans('table.permission')}}</a></li>
        <li class="active">{{trans('button.create')}}</li>
    </ol>
    <form method="post" action="{{route('permission.create')}}">
        <input type="hidden" name="_token" id="create_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">{{trans('label.name')}}</label>
                    <input type="text" name="name" id="create_name" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="">{{trans('label.display_name')}}</label>
                    <input type="text" name="display_name" id="create_display_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label >{{trans('label.description')}}</label>
            <textarea class="mceEditor form-control" name="description" id="create_description"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary"><span class="fa fa-plus"></span>{{trans('button.create')}}</button>
        </div>
    </form>
@endsection
@section('bot')

@endsection