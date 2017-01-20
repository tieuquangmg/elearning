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
    <form method="POST" action="{{route('class.settingadv')}}">
        {{csrf_field()}}
        <input type="hidden" name="class_id" value="{{$classes->id}}">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="clearfix">
                    <div class="pull-left h4">
                        <h4>Cài đặt khác</h4>
                    </div>
                    <div class="pull-right">
                        <input class="btn btn-sm btn-success" type="submit" value="Lưu">
                        <a class="btn btn-sm btn-danger">Hủy bỏ</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông báo</a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thời gian thi</a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home" style="padding-top: 20px">
                            <div class="panel panel-default">
                                <div class="panel-body" style="width: 600px">
                                    <div class="col-md-6 col-xs-12"></div>
                                    <label class="form-label">Thông báo lớp học</label>
                                    <textarea style="height: 400px;" class="mceEditor form-control" name="thongbao">{{($classes->setting != null) ? ($classes->setting->thongbao) : ''}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="form-group form-horizontal">
                                <label class="form-label">Ngày thi</label>
                                <input style="width: 100px" class=" date form-control" name="day"
                                       value="{{($classes->setting != null) ? ($classes->setting->thoi_gian_thi->format('dd/mm/YY')) : ''}}">
                                <label class="form-label">Giờ</label>
                                <input style="width: 100px" class=" hour form-control" name="hour"
                                       value="{{($classes->setting != null) ? ($classes->setting->thoi_gian_thi->format('H:i')) : ''}}">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages"></div>
                        <div role="tabpanel" class="tab-pane" id="settings"></div>
                    </div>
                </div>

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
        $(function (){
            $('.date').datetimepicker({
                format: 'DD/MM/YYYY'
            });
            $('.hour').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
@endsection