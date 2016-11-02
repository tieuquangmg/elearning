@extends('_basic.master')
@section('content')
    <div class="loading">
    </div>
    <div class="row">
        @include('organize.class.create')
        @include('organize.class.update')
        {{--@include($prefix.'class.update')--}}
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
                <li><a >Lớp học</a></li>
            </ol>
            <form method="get" action="{{route('class.data')}}" class="form-inline">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="clearfix">
                            <div class="pull-left h4">
                                Danh sách lớp
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-danger btn-xs" id="delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Xóa"></span> {{trans('button.delete')}}</a>
                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add_class"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Thêm"></span> {{trans('button.add')}}</a>
                                <a class="btn btn-success btn-xs"><i class="glyphicon glyphicon-import"></i>Nhập excel</a>
                                <a class="btn btn-success btn-xs"><i class="glyphicon glyphicon-check"></i>Đồng bộ</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="pull-left form-group">
                            <label class="">Hiển thị</label>
                            {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control input-inline','onchange'=>"this.form.submit()")) !!}
                        </div>
                        <table class="classes_table table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="check_all">
                                </th>
                                <th class="column-title">Tên lớp </th>
                                <th class="column-title">Mã lớp</th>
                                <th class="column-title">Giáo viên </th>
                                <th class="column-title">Môn học </th>
                                <th class="column-title">Năm học </th>
                                <th class="column-title">Kỳ học </th>
                                <th class="column-title">Trạng thái</th>
                                <th class="column-title">Hành động</th>
                            </tr>
                            <tr>
                                <th class="column-title">
                                    <a class="btn btn-default btn-block" href="{{route('class.data')}}" rel="tooltip" title="" data-original-title="Reset"><i class="fa fa-power-off fa-fw"></i></a>
                                </th>
                                <th class="column-title">
                                    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="name" placeholder="Tên lớp... " data-toggle="tooltip" data-placement="top" title="Tên lớp">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('code')}}" type="text" name="code" class="form-control" placeholder="mã lớp">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('teacher')}}" type="text" name="teacher" class="form-control" placeholder="Giáo viên">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('subject')}}" type="text" name="subject" class="form-control" placeholder="Môn học">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('year')}}" type="text" name="year" class="form-control" placeholder="Năm học">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('semester')}}" type="text" name="semester" class="form-control" placeholder="Kỳ học">
                                </th>
                                <th class="column-title">
                                    {!! Form::select('active', ['1' => 'Đang học', '-1' => 'Hoàn thành'], old('active'), ['placeholder' => 'Trạng thái','class'=>'form-control','onchange'=>'this.form.submit()']) !!}
                                </th>
                                <th class="column-title">
                                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                                </th>
                            </tr>

                            </thead>
                            <tbody>
                            @if($classes->isEmpty())
                                <tr><td class="text-center" colspan="9" >Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($classes as $row)
                                    <tr class="even pointer check" >
                                        <td class="a-center">
                                            <input type="checkbox" class="check" value="{{$row->id}}">
                                        </td>
                                        <td id="">{{$row->name}}</td>
                                        <td>{{$row->code}}</td>
                                        <td>{{$row->teacher->first_name.' '.$row->teacher->last_name}}</td>
                                        <td>{{$row->subject->name}}</td>
                                        <td>{{$row->year}}</td>
                                        <td>{{$row->semester}}</td>
                                        <td>
                                            @include('_basic.includes.is.active')
                                        </td>
                                        <td class="last">
                                            <div class="colum-control" style="display:inline-flex">
                                                <a href="#update_class" data-toggle="modal" data-taget="#update_class" class="btn btn-default btn-xs btn_edit_class" onclick="find({{$row->id}})">
                                                    <span class=" glyphicon glyphicon-edit"></span>
                                                </a>
                                                <a href="{{route('class.detail', $row->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-list"></i></a>
                                                {{--<a href="{{route('class.test', $row->id)}}" class="btn btn-primary btn-xs">Điểm</a>--}}
                                                {{--<a class="btn btn-primary btn-xs" href="{{route('class.attendance',$row->id)}}">chuyên cần</a>--}}
                                                {{--<a class="btn btn-primary btn-xs" href="{{route('class.score',$row->id)}}">Tổng kết</a>--}}
                                                <select class=" form-group-sm" name="forma" onchange="location = this.value;">
                                                    <option value="">Điểm</option>
                                                    <option value="{{route('class.test', $row->id)}}">Điểm Thi</option>
                                                    <option value="{{route('class.attendance', $row->id)}}">Chuyên cần</option>
                                                    <option value="{{route('class.score',$row->id)}}">Tổng kết</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {!! $classes->links() !!}
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
@section('bot')
    <script>
        function find(id){
            $('#form_update').attr('action', '{{route('class.update')}}/'+id);
            $.ajax({
                url: '{{route("class.find")}}/'+id,
                success:function(data){
                    $('#name').val(data.name);
                    $('#id').val(data.id);
                    $('#code').val(data.code);
                    $('#subject_id').val(data.subject_id).change();
                    $('#user_id').val(data.user_id).change();
                    $('#year').val(data.year);
                    $('#semester').val(data.semester);
                    $('#active').val(data.active);
                    $('#limit').val(data.limit);
                },
                error: function () {
                    alert('Error')
                }
            });
        }
        function delete_record(){
            var ids = [];
             $(".check input:checked").map(function(){
                 ids.push($(this).val());
                 $(this).parent().parent().parent().remove();
             });
            $.ajax({
                url: '{{route("class.delete")}}/'+ids,
                beforeSend:function(){
                    $(".loading").show();
                },
                success:function(html){
                    $(".loading").hide();
                }
            });
        }
    </script>
    <script>
        var url_delete = '{{route('class.delete')}}';
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection