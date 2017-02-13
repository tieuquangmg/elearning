@extends('_basic.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="#">Sinh viên</a></li>
                    <li><a href="#">Nhập danh sách sinh viên</a></li>
                </ol>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Nhập danh sách sinh viên</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{asset('users.xls')}}" download class="btn btn-success">mẫu file .xls</a>
                            </div>
                        </div>

                        <form class="import form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('auth.user.import')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Chọn file</label>
                                <div class="col-sm-4 input-group form-group">
                                    <input type="file" name="excel" class="excel form-control">
                                    <div class="input-group-btn">
                                        <input class="btn btn-success" type="submit" value="Import">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection