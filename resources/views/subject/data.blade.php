@extends('_basic.master')
@section('content')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Danh sách môn học</a></li>
        </ol>
        <h1>Danh sách môn học</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="{{route('subject.add')}}" class="btn btn-primary btn-xs">
                    <span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Thêm"> </span>
                    {{trans('button.add')}}</a>
                <a class="btn btn-danger btn-xs" id="delete">
                        <span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top"
                              title="Xóa"></span> {{trans('button.delete')}}
                </a>
                <a href="{{route('subject.sync')}}" class="btn  btn-xs" id="delete">
                        <span class="glyphicon glyphicon-check" data-toggle="tooltip" data-placement="top"
                              title="Xóa"></span>Đồng bộ</a>
                <a data-target="#importModal" data-toggle="modal" class="btn btn-success btn-xs ">
                    <i class="glyphicon glyphicon-import"></i>Nhập Excel</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Danh sách môn học</h4>
            </div>
            <form method="get" action="{{route('subject.data')}}">
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="check_all">
                            </th>
                            <th>Mã môn</th>
                            <th>Tên</th>
                            <th>Bộ môn</th>
                            {{--<th>Chi tiết</th>--}}
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th><a href="{{route('subject.data')}}" class="btn btn-success">đặt lại</a></th>
                            <th><input class="form-control input-sm" value="{{old('code')}}" type="text" name="code" id="code" placeholder="mã môn"></th>
                            <th><input class="form-control input-sm" value="{{old('tenmon')}}" type="text" name="tenmon" id="tenmon" placeholder="tên môn"></th>
                            <th><input class="form-control input-sm" value="{{old('bomon')}}" type="text" name="bomon" id="bomon" placeholder="bộ môn"></th>
                            <th><input class="form-control input-sm" value="{{old('trangthai')}}" type="text" name="trangthai" id="trangthai" placeholder="trạng thái"></th>
                            <th><input class="form-control input-sm" type="submit" value="tìm kiếm"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(isset($subjects) && count($subjects))
                            @foreach($subjects as $row)
                                <tr>
                                    <td>
                                        <input type="checkbox" value="{{$row->id}}" name="id" class="check">
                                    </td>
                                    <td>{{$row->Ky_hieu}}</td>
                                    <td class="text-nowrap">{{$row->name}}</td>
                                    <td>{{($row->plan_bomon != null )?  $row->plan_bomon->name : ''}}</td>
                                    {{--<td>{{$row->description}}</td>--}}
                                    <th>@include('_basic.includes.is.active')</th>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{route('subject.edit', $row->id)}}">
                                            <i class="fa fa-edit"></i></a>
                                        <a class="btn btn-xs btn-success" href="{{route('subject.unit', $row->id)}}">
                                            <i class="fa fa-book"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-info">
                                Danh sách môn học đang trống
                            </div>
                        @endif
                        </tbody>
                    </table>

                </div>
                <div class="panel-footer">
                    <div class="clearfix">
                        <div class="pull-left">{!! $subjects->links() !!}</div>
                        <div class="pull-right">
                            {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control input-sm','onchange'=>"this.form.submit()")) !!}
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="importModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="classModalLabel">Thêm Môn học</h4>
                    </div>
                    <div class="modal-body"  style="margin: auto 40px">
                        <form id="form_file" action="{{route('subject.import')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="form-label">
                                    Chọn file Excel
                                </label>
                                <input class="form-control" type="file" id="subject_excel" name="subject_excel" placeholder="click chọn file">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Mã môn
                                </label>
                                <select name="opt[Ky_hieu]" class="form-control option_row">

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Tên môn
                                </label>
                                <select name="opt[name]" class="form-control option_row">

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    ghi chú
                                </label>

                                <select name="opt[description]" class="form-control option_row">

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-success" value="Đồng ý" onclick="return confirm('bạn muốn nhập môn học từ file')">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
@endsection
@section('bot')
    <script>
        var url_delete = '{{route('subject.delete')}}';

        $('input[type=file]').change(function(e){
//            var in = $(this).val();
            var excel = $('input[type=file]')[0].files[0];
            var data = new FormData();
            data.append('file', excel);
            data.append('_token','{!! csrf_token()  !!}');
            console.log(data);
            $.ajax({
                url: '{{route('subject.check')}}',
                method: 'POST',
                data: data,
                processData: false,
                contentType: false,

                success:function (result) {
                    $.each(result, function (key, value) {
                        console.log(key+': '+value);
                            $('.option_row').append($('<option>', {
                                value: value,
                                text : value
                            }));
                    });
                },
                error:function () {
                    alert(123);
                }
            });
        });
//        $('#form_file').submit(function () {
//                data = ('#subject_excel').valueOf();

//        })
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection