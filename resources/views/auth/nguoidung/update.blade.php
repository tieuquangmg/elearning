@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#">Tài Khoản</a></li>
        <li><a href="#">Cập nhật</a></li>
    </ol>
    <form class="form-horizontal" method="post" action="{{route('nguoidung.update')}}">
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
                            <label class=" col-sm-2 control-label">Họ tên</label>
                            <div class="col-sm-10">
                                <input required type="text" name="first_name" value="{{$user->ho_ten}}" class=" form-control">
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
                </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label class="col-sm-3 control-label">{{trans('label.birthday')}}</label>
                    <div class="col-sm-9 input-group date" id="datetimepicker10">
                        <input type='text' value="{{$user->birthday}}" name="birthday" class="form-control"/>
                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar">
                                </span>
                         </span>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class=" form-group col-lg-4">
                        <label class="control-label col-sm-3">Trạng thái</label>
                        <div class="col-sm-9">
                            <label><input  @if($user->active == 1 )checked @endif  type="checkbox" value="1" name="active">{{trans('label.active')}}</label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label class="col-sm-3 control-label">Phong</label>
                    <div class="col-sm-9">
                        {!! Form::select('phong',$phong->lists('Phong','ID_phong'),$user->id_phong,array('class'=>'form-control','placeholder' => 'Chọn phòng')) !!}
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label class="col-sm-3 control-label">Khoa</label>
                    <div class="col-sm-9">
                        {!! Form::select('khoa',$khoa->lists('Ten_khoa','ID_khoa'),$user->id_khoa,array('class'=>'form-control','placeholder' => 'Chọn khoa')) !!}
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label class="col-sm-3 control-label">Bộ môn</label>
                    <div class="col-sm-9">
                        {!! Form::select('bo_mon',$bomon->lists('Bo_mon','ID_bm'),$user->id_bomon,array('class'=>'form-control','placeholder' => 'Chọn bộ môn')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <label class="control-label col-sm-3">Mật khẩu</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group">
                    <label class="control-label col-sm-3">Nhập lại mật khẩu</label>
                    <div class="col-sm-9">
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
