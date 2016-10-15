@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#">Tài Khoản</a></li>
        <li><a href="#">Cập nhật</a></li>
    </ol>
    <form class="form-horizontal" method="post" action="{{route('auth.user.update')}}">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    {{trans('button.update').' '. trans('table.users')}}
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
        <div class="panel-body">
                <input type="hidden" name="_token"  value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$user->id}}" >
                <div class="row">
                        <div class="form-group col-sm-6">
                            <label class=" col-sm-2 control-label">{{trans('label.first_name')}}</label>
                            <div class="col-sm-10">
                                <input required type="text" name="first_name" value="{{$user->first_name}}" class=" form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class=" col-sm-2 control-label">{{trans('label.last_name')}}</label>
                            <div class="col-sm-10">
                            <input required type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
                                </div>
                        </div>
                </div>
                <div class="row">
                    <div class=" form-group col-sm-4">
                        <label class=" col-sm-3 control-label">{{trans('label.email')}}</label>
                        <div class="col-sm-9">
                            <input required type="email" name="email" value="{{$user->email}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="form-group">
                            <label class=" col-sm-3 control-label">{{trans('label.phone_number')}}</label>
                            <div class="col-sm-9">
                                <input required type="number" name="phone_number" value="{{$user->phone_number}}"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-4">
                        <div class="form-group">
                            <label class=" col-sm-3 control-label">{{trans('label.birthday')}}</label>
                            <div class="col-sm-9 input-group date" id="datetimepicker10">
                                <input type='text' value="{{$user->birthday}}" name="birthday" class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar">
                                </span>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label class="control-label col-sm-3">Giới tính</label>
                        <div class="col-sm-9">
                            <label>
                                <input  @if($user->sex == 1 )checked @endif type="radio" name="sex" value="1"> {{trans('label.male')}}
                            </label>
                            <label>
                                <input  @if($user->sex == 0 )checked @endif type="radio" name="sex" value="0"> {{trans('label.female')}}
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="control-label col-sm-3">Quản lý</label>
                        <div class="col-sm-9">
                            <label>
                                <input @if($user->manager == 1 )checked @endif type="checkbox" value="1" name="manager">{{trans('label.manager')}}
                            </label>
                        </div>
                    </div>
                    <div class=" form-group col-lg-4">
                        <label class="control-label col-sm-3">Trạng thái</label>
                        <div class="col-sm-9">
                            <label><input  @if($user->active == 1 )checked @endif  type="checkbox" value="1" name="active">{{trans('label.active')}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label class="control-label col-sm-2" >{{trans('label.address')}}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address">{{$user->address}}</textarea>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label class="control-label col-sm-2" >Mật khẩu</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="password">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="clearfix">
                <div class="pull-right">
                    <button class="btn btn-primary">{{trans('button.update')}}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}build/eonasdan-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />
@endsection
@section('bot')
    <script type="text/javascript" src="{{asset('')}}build/moment/js/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}build/eonasdan-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        });
    </script>
@endsection
