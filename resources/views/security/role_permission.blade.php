@extends('_basic.master')
@section('content')

    <div >
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
            <li><a>Bảo mật</a></li>
            <li><a href="#">Phân quyền</a></li>
        </ol>
        <ul class="nav nav-tabs" role="tablist">
            @foreach($roles as $role)
                <li role="presentation" @if($role->name==$roles[0]->name)class=" active" @endif><a href="#{{$role->name}}" aria-controls="{{$role->name}}" role="tab" data-toggle="tab">{{$role->display_name}}</a></li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($roles as $role)
                <form method="post" action="{{route('role.assign')}}" role="tabpanel" class="tab-pane @if($role->name==$roles[0]->name) active @endif " id="{{$role->name}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="role" value="{{$role->id}}">
                    @foreach($permissions as $permission)
                        <li class="list-group-item">
                            <span class="pull-left">
                                <input type="checkbox" value="{{$permission->id}}" name="permissions[]" @if($role->hasPermission($permission->name)) checked @endif>
                            </span>
                            &nbsp;
                            &nbsp;
                            {{$permission->display_name}}
                        </li>
                    @endforeach
                    <li class="list-group-item"><button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Xác nhận">Xác nhận</button></li>
                </form>
            @endforeach
        </div>
    </div>
@endsection