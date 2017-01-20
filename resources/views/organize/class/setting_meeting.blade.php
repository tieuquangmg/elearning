@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Danh sách môn học</a></li>
    </ol>
    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('class.setttingunit',$class->id)}}" class="btn btn-sm">Thời gian học</a>
            <a href="{{route('class.setting',$class->id)}}" class="btn btn-sm">Lịch học trực tuyên</a>
            <a href="{{route('class.settingadv',$class->id)}}" class="btn btn-sm">Cài đặt khác</a>
        </div>
    </div>
    <form method="POST" action="{{route('class.setting')}}">
        {{csrf_field()}}
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="clearfix">
                    <div class="pull-left h4">
                        <h4>Lịch học trực tuyến</h4>
                    </div>
                    <div class="pull-right">
                        <input class="btn btn-sm btn-success" type="submit" value="Lưu">
                        <a class="btn btn-sm btn-danger">Hủy bỏ</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @foreach($meeting_time as $row)
                    <h4>{{$row->name}}</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>thời gian học</th>
                            <th>số phút</th>
                            <th>trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($row->class_meeting_time as $time)
                            <tr>
                                <input type="hidden" name="{{$time->id}}[id]" value="{{$time->id}}">
                                <input type="hidden" name="{{$time->id}}[class_meeting_id]" value="{{$time->class_meeting_id}}">
                                <td><input class="datetimepicker1 form-control input-sm" type="text" name="{{$time->id}}[time_start]" value="{{$time->time_start->format('d/m/Y H:i')}}"></td>
                                <td><input type="text" name="{{$time->id}}[duration]" value="{{$time->duration}}"></td>
                                <td><input type="text" name="{{$time->id}}[status]" value="{{$time->status}}"></td>
                                <td><a class="rem pull-right"><i class="glyphicon glyphicon-minus"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="4"><a data="{{$row->id}}" class="pull-right add"><i class="glyphicon glyphicon-plus"></i></a></td>
                        </tr>
                        </tfoot>
                    </table>
                @endforeach

            </div>
        </div>
    </form>
@endsection
@section('bot')
    <script>
        $(document).ready(function (a) {
            var i = 0;
            $(document).on('click', '.add', function (qq) {
                i++;
                var data = $(this).attr('data');
                $(this).parents('tr:first').before('<tr>'+
                        '<input type="hidden" name="new'+i+'['+'class_meeting_id'+']" value="'+data+'">'+
                        '<td><input class="datetimepicker1 form-control input-sm" type="datetime" name="new'+i+'['+'time_start'+']"> </td>' +
                        '<td><input type="text" name="new'+i+'['+'duration'+']"> </td>' +
                        '<td><input type="text" name="new'+i+'['+'status'+']"> </td>' +
                        '<td><a class="rem pull-right"><i class="glyphicon glyphicon-remove"></i></a></td>' +
                        '</tr>');
                $(function (){
                    $('.datetimepicker1').datetimepicker();
                });
            });
            $(document).on('click', '.rem', function (re) {
                $(this).closest('tr').remove();
            })
        });
        $(function () {
            $('.datetimepicker1').datetimepicker();
        });
    </script>
@endsection