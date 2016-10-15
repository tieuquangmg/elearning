@extends('_basic.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
                <li><a href="{{route('class.data')}}">Danh sách lớp học</a></li>
                <li><a >{{$class->name}}</a></li>
                <li><a >Danh sách sinh viên</a></li>
            </ol>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- primary panel contents -->
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4">
                            <i class="fa fa-list"></i>Danh sách sinh viên
                        </div>
                        <div class="pull-right">
                            <a data-toggle="modal" data-target="#classModal" id="add_student" class="btn btn-success btn-xs "><i class="glyphicon glyphicon-plus"></i>Thêm</a>
                            <a data-toggle="modal" data-target="" id="" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-export"></i>Xuất excel</a>
                            <a id="unenroll" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-trash"></i>Xóa</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th><input type="checkbox" id="check_all_unenroll"></th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Mã SV</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>
                            <i class="fa fa-wrench"></i>
                        </th>
                    </tr>
                    @foreach($class->student as $row)
                    <tr>
                        <td><input type="checkbox" class="unenroll" value="{{$row->id}}"></td>
                        <td>{{$row->first_name}}</td>
                        <td>{{$row->last_name}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone_number}}</td>
                        <td>@if($row->sex == 1)Nam @else Nữ @endif</td>
                        <td>{{$row->birthday->format('d-m-Y')}}</td>
                        <td>
                            <a href=""><i class="glyphicon glyphicon-info-sign"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="classModalLabel">Thêm sinh viên( Lớp : {{$class->name}} - Sĩ số {{$class->student->count().'/'.$class->limit}})</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group text-right">
                            <a id="enroll" class="btn btn-primary"><i class="fa fa-check-circle"></i> Thêm sinh viên</a>
                        </div>

                        <div id="data_sutdent">
                            <div  class="loading_student"></div>
                            {{--<table class="table">--}}
                                {{--<tr>--}}
                                    {{--<th><input type="checkbox" id="check_all"></th>--}}
                                    {{--<th>Họ</th>--}}
                                    {{--<th>Tên</th>--}}
                                    {{--<th>Mã SV</th>--}}
                                    {{--<th>Email</th>--}}
                                    {{--<th>SĐT</th>--}}
                                    {{--<th>--}}
                                        {{--<a class="btn btn-primary btn-xs"><i class="fa fa-filter"></i></a>--}}
                                    {{--</th>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<th></th>--}}
                                    {{--<th><input type="text" class="form-control input-sm " id="f_first_name" name="last_name" ></th>--}}
                                    {{--<th><input type="text" class="form-control input-sm " id="f_last_name" name="name"></th>--}}
                                    {{--<th><input type="text" class="form-control input-sm " id="f_code" name="masv"></th>--}}
                                    {{--<th><input type="text" class="form-control input-sm " id="f_email" name="email"></th>--}}
                                    {{--<th><input type="text" class="form-control input-sm " id="f_phone_number" name="sdt"></th>--}}
                                    {{--<th><span class="btn btn-success btn-sm" id="filter"><i class="fa fa-refresh"></i></span></th>--}}
                                {{--</tr>--}}
                                {{--@foreach($students as $row)--}}
                                {{--<tr>--}}
                                {{--<td><input type="checkbox" class="check" value="{{$row->user_id}}"></td>--}}
                                {{--<td>{{$row->first_name}}</td>--}}
                                {{--<td>{{$row->last_name}}</td>--}}
                                {{--<td>{{$row->code}}</td>--}}
                                {{--<td>{{$row->email}}</td>--}}
                                {{--<td>{{$row->phone_number}}</td>--}}
                                {{--<td><a class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a></td>--}}
                                {{--</tr>--}}
                                {{--@endforeach--}}
                            {{--</table>--}}
                            {{--<div class="text-center">--}}
                                {{--{!! $students->links() !!}--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bot')
    <script>
        var class_id = '{{$class->id}}';
        var url_delete = '{{route('class.enroll')}}';
        var url_unenroll = '{{route('class.unenroll')}}'
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','#unenroll',function(){
                if( url_unenroll != 'undefined'){
                    var unEnrollId = new Array();
                    $('.unenroll').each(function(){
                        if($(this).is(':checked')){
                            id = $(this).val();
                            unEnrollId.push(id);
                        }
                    });
                    if(unEnrollId.length){
                        var confirm_unenroll = confirm('Xóa sinh viên đã chọn!');
                        if(confirm_unenroll){
                            console.log(unEnrollId);
                            support_unenroll(unEnrollId);
                        }
                    } else alert('Bạn phải chọn sinh viên');
                    $('#unenroll').prop('checked', false);
                }else {
                    alert('đã xãy ra lỗi');
                }
            });
            $(document).on('click','#enroll',function(){
                if (typeof url_delete != 'undefined'){
                    var arrayId = new Array();
                    $('.check').each(function(){
                        if($(this).is(':checked')){
                            id = $(this).val();
                            arrayId.push(id);
                        }
                    });
                    if(arrayId.length){
                        var del = confirm('Thêm sinh viên đã chọn vào lớp!');
                        if(del){
                            console.log(arrayId);
                            support_enroll(arrayId);
                        }
                    } else alert('Bạn phải check vào sinh viên cần thêm');
                    $('#check_all').prop('checked', false);
                }else {
                    alert('đã xảy ra lỗi')
                }
            });
            function support_enroll(arrayId){
                $.ajax({
                    url: url_delete,
                    type: 'get',
                    data: {ids: arrayId,class_id:class_id},
                    success: function(data){
                        console.log(data);
                        if(data > 0){
                            $('.check').each(function(){
                                if($(this).is(':checked')){
                                    $(this).parent().parent().remove();
                                }
                            });
                        }else {
                            //alert('co loi');
                            location.reload();
                        }
                    },
                    error: function(err){
                        alertError(err)
                        alert('đã xảy ra lỗi')
                    }
                });
            }
            function support_unenroll(unEnrollId){
                $.ajax({
                    url: url_unenroll,
                    type: 'get',
                    data: {ids: unEnrollId,class_id:class_id},
                    success: function(data){
                        console.log(data);
                        if(data > 0){
                            $('.unenroll').each(function(){
                                if($(this).is(':checked')){
                                    $(this).parent().parent().remove();
                                }
                            });
                        }else {
                            //alert('co loi');
                            location.reload();
                        }
                    },
                    error: function(err){
                        alertError(err)
                        alert('đã xảy ra lỗi')
                    }
                });
            }
        })
    </script>
    <script>
        function getDatas(page) {
            var data = {};
            var id = {{$class->id}}
                    data['first_name'] = $('#f_first_name').val();
            data['last_name'] = $('#f_last_name').val();
            data['code'] = $('#f_code').val();
            data['email'] = $('#f_email').val();
            data['phone_number'] = $('#f_phone_number').val();
            data['page'] = page;
            console.log(data);
            $.ajax({
                url: '{{route('class.filter')}}/'+id,
                type: 'get',
                data: data,
                beforeSend:function () {
                    $('#data_sutdent').html(null);
//                    alert(1);
                    $('#data_sutdent').append('<div class="loading_student"></div>');
                    $('div#classModal div.loading_student').show();
                },
                success:function (e) {
                    $('#data_sutdent').html(e);
                    $('div#classModal div.loading_student').hide();
                },
                error: function (error) {
                    alert('loi');
                }
            })
        }
        $("#data_sutdent").on('click',"#filter",function (e){
            getDatas(1);
        });
        $(document).ready(function() {
            $(document).on('click', '#add_student', function () {
                getDatas(1);
            });
            $(document).on('click', '.pagination a', function (e) {
                getDatas($(this).attr('href').split('page=')[1]);
                e.preventDefault();
            });
        });
    </script>

@endsection