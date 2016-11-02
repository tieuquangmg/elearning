@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Danh sách môn học</a></li>
    </ol>
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    Danh sách môn học
                </div>
                <div class="pull-right">
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
        <div class="panel-body">
            <div class="row">
                <form method="get" action="{{route('subject.data')}}">
                    <div class="col-lg-2 form-group">
                        {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group form-group">
                            <input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Tìm kiếm ... " data-toggle="tooltip" data-placement="top" title="Nhập từ khóa tìm kiếm">
                            <div class="input-group-btn" id="f_select_search">
                                <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->
                    </div>
                </form>
            </div>
            @if(isset($subjects) && count($subjects))
                <table class="table">
                    <tr>
                        <th>
                            <input type="checkbox" id="check_all">
                        </th>
                        <th>Mã lớp</th>
                        <th>Tên</th>
                        <th>Bộ môn</th>
                        <th>Hệ đào tạo</th>
                        {{--<th>Chi tiết</th>--}}
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    @foreach($subjects as $row)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{$row->id}}" name="id" class="check">
                            </td>
                            <td>{{$row->Ky_hieu}}</td>
                            <td>{{$row->name}}</td>
                            <td>Khoa học cơ bản</td>
                            <td>Đại học</td>
                            {{--<td>{{$row->description}}</td>--}}
                            <th>@include('_basic.includes.is.active')</th>
                            <td class="text-right">
                                <a class="btn btn-xs btn-primary" href="{{route('subject.edit', $row->id)}}"><i class="fa fa-edit"></i> Cập nhật</a>
                                <a class="btn btn-xs btn-success" href="{{route('subject.unit', $row->id)}}"><i class="fa fa-book"></i> Bài học</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {!! $subjects->links() !!}
            @else
                <div class="alert alert-info">
                    Danh sách môn học đang trống
                </div>
            @endif
        </div>
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