@extends('_basic.master')
@section('content')
    <form method="post" action="{{route('auth.user.create')}}">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    {{trans('button.create').' '. trans('table.users')}}

                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
        <div class="panel-body">
            <input type="hidden" name="_token"  value="{{csrf_token()}}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{trans('label.first_name')}}</label>
                        <input required type="text" name="first_name" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{trans('label.last_name')}}</label>
                        <input required type="text" name="last_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>{{trans('label.email')}}</label>
                        <input required type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>{{trans('label.phone_number')}}</label>
                        <input required type="number" name="phone_number" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>{{trans('label.birthday')}}</label>
                        <div class='input-group date' id='datetimepicker10'>
                            <input type='text' name="birthday" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar">
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input checked type="radio" name="sex" value="1"> {{trans('label.male')}}
                        </label>
                        <label>
                            <input  type="radio" name="sex" value="0"> {{trans('label.female')}}
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="manager">{{trans('label.manager')}}
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkbox">
                        <label><input  checked type="checkbox" value="1" name="active">{{trans('label.active')}}</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label >{{trans('label.address')}}</label>
                <textarea class="form-control" name="address"></textarea>
            </div>
            <div class="row form-group">
                <label class=" col-sm-1 control-label">Mật khẩu</label>
                <div class="col-sm-3">
                    <input class="form-control" name="password" placeholder="123456">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="clearfix">
                <div class="pull-right">
                    <button class="btn btn-primary">{{trans('button.create')}}</button>
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
