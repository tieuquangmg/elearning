@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Danh sách môn học</a></li>
    </ol>
    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('class.setttingunit',$classes->id)}}" class="btn btn-sm">Thời gian học</a>
            <a href="{{route('class.setting',$classes->id)}}" class="btn btn-sm">Lịch học trực tuyên</a>
            <a href="{{route('class.settingadv',$classes->id)}}" class="btn btn-sm">Cài đặt khác</a>
        </div>
    </div>
    <form method="POST" action="{{route('class.setttingunit')}}">
        {{csrf_field()}}
        <input type="hidden" name="class_id" value="{{$classes->id}}">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="clearfix">
                    <div class="pull-left h4">
                        <h4>Cài đặt bài học</h4>
                    </div>
                    <div class="pull-right">
                        <input class="btn btn-sm btn-success" type="submit" value="Lưu">
                        <a class="btn btn-sm btn-danger" type="submit" >Hủy bỏ</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                    <h4>{{$classes->name}}</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Bài học</th>
                            <th>Bắt đầu</th>
                            <th>Kết thúc</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unit as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td><input id="pick_start_{{$row->id}}" class="form-control input-sm " type="text" name="data[{{$row->id}}][pick_start]"
                                           value="{{($row->unit_class($classes->id) == null || $row->unit_class($classes->id)->start_time == null) ? '' : ($row->unit_class($classes->id)->start_time->format('d/m/Y'))}}">
                                </td>
                                <td><input id="pick_end_{{$row->id}}" class="form-control input-sm " type="text" name="data[{{$row->id}}][pick_end]"
                                           value="{{($row->unit_class($classes->id) == null || $row->unit_class($classes->id)->end_time == null) ? '' : ($row->unit_class($classes->id)->end_time->format('d/m/Y'))}}">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            </tr>
                        </tfoot>
                    </table>
            </div>
        </div>
    </form>
@endsection
@section('bot')
    <script>
//        $(document).ready(function (a) {
//            var i = 0;
//            $(document).on('click', '.add', function (qq) {
//                i++;
//                var data = $(this).attr('data');
//                $(this).parents('tr:first').before('<tr>'+
//                        '<input type="hidden" name="new'+i+'['+'class_meeting_id'+']" value="'+data+'">'+
//                        '<td><input class="datetimepicker1 form-control input-sm" type="datetime" name="new'+i+'['+'time_start'+']"> </td>' +
//                        '<td><input type="text" name="new'+i+'['+'duration'+']"> </td>' +
//                        '<td><input type="text" name="new'+i+'['+'status'+']"> </td>' +
//                        '<td><a class="rem pull-right"><i class="glyphicon glyphicon-remove"></i></a></td>' +
//                        '</tr>');
//                $(function (){
//                    $('.datetimepicker1').datetimepicker();
//                });
//            });
//            $(document).on('click', '.rem', function (re) {
//                $(this).closest('tr').remove();
//            })
//        });
        $(function(){
            $('.datetimepicker1').datetimepicker();
        });

        $(function(){
            @foreach($unit as $row)
            $('#pick_start_'+{{$row->id}}).datetimepicker();
            $('#pick_end_'+{{$row->id}}).datetimepicker();
            $('#pick_start_'+{{$row->id}}).datetimepicker({
                useCurrent: false //Important! See issue #1075
            });

            $('#pick_start_'+{{$row->id}}).on("dp.change", function (e) {
                $('#pick_end_'+{{$row->id}}).data("DateTimePicker").minDate(e.date);
            });

            $('#pick_end_'+{{$row->id}}).on("dp.change", function (e) {
                $('#pick_start_'+{{$row->id}}).data("DateTimePicker").maxDate(e.date);
            });
            @endforeach
        });
        </script>
@endsection