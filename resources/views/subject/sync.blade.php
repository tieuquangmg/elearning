@extends('_basic.master')
@section('content')
    <style>
        table{
            padding: 4px !important;
        }
        .panel-heading{
            padding: 5px 8px !important;
        }
    </style>
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Danh sách môn học</a></li>
    </ol>
    <form action="{{route('subject.sync')}}" method="post">
        {!! csrf_field() !!}
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">

                </div>
                <div class="pull-right">
                    <input class="btn btn-success btn-sm" type="submit" value="Cập nhật">
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-xs-6">
                <h4>Các lớp được cập nhật</h4>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>mã lớp</th>
                        <th>tên lớp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($exists_id as $row)
                        <tr>
                            <input type="hidden" name="Ky_hieu[]" value="{{$row['Ky_hieu']}}">
                            <td>{{$row['Ky_hieu']}}</td>
                            <td>{{$row['Ten_mon']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-xs-6">
                <h4>Các lớp được thêm mới</h4>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>mã lớp</th>
                        <th>tên lớp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($new_id as $row)
                        <tr>
                            <input type="hidden" name="Ky_hieu[]" value="{{$row['Ky_hieu']}}">
                            <td>{{$row['Ky_hieu']}}</td>
                            <td>{{$row['Ten_mon']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </form>
    @endsection