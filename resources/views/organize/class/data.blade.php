@extends('_basic.master')
@section('content')
    @include('organize.class.create')
    @include('organize.class.update')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="{{route('admin')}}">Dashboard</a></li>
            <li><a class="active">Lớp học</a></li>
        </ol>
        <h1>Danh sách lớp</h1>
        <div class="options">
            <div class="btn-toolbar">
                {{--<div class="btn-group hidden-xs">--}}
                    {{--<a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Text File (*.txt)</a></li>--}}
                        {{--<li><a href="#">Excel File (*.xlsx)</a></li>--}}
                        {{--<li><a href="#">PDF File (*.pdf)</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <a class="btn btn-danger btn-xs" id="delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Xóa"></span> {{trans('button.delete')}}</a>
                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add_class"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Thêm"></span> {{trans('button.add')}}</a>
                <a class="btn btn-success btn-xs"><i class="glyphicon glyphicon-import"></i>Nhập excel</a>
                <a href="{{route('class.sync.class')}}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-check"></i>Đồng bộ</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="get" action="{{route('class.data')}}" class="form-inline">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Danh sách lớp</h4>
                    </div>
                    <div class="panel-body">
                        <table class="classes_table table table-bordered table-striped">
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
                                    <a class="btn btn-default btn-block btn-sm" href="{{route('class.data')}}" rel="tooltip" title="" data-original-title="Reset"><i class="fa fa-power-off fa-fw"></i></a>
                                </th>
                                <th class="column-title">
                                    <input value="{{old('name')}}" name="name" type="text" class="form-control input-sm" id="name" placeholder="Tên lớp... " data-toggle="tooltip" data-placement="top" title="Tên lớp">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('code')}}" type="text" name="code" class="form-control input-sm" placeholder="mã lớp">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('teacher')}}" type="text" name="teacher" class="form-control input-sm" placeholder="Giáo viên">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('subject')}}" type="text" name="subject" class="form-control input-sm" placeholder="Môn học">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('year')}}" type="text" name="year" class="form-control input-sm" placeholder="Năm học">
                                </th>
                                <th class="column-title">
                                    <input value="{{old('semester')}}" type="text" name="semester" class="form-control input-sm" placeholder="Kỳ học">
                                </th>
                                <th class="column-title">
                                    {!! Form::select('active', ['1' => 'Đang học', '-1' => 'Hoàn thành'], old('active'), ['placeholder' => 'Trạng thái','class'=>'form-control input-sm','onchange'=>'this.form.submit()']) !!}
                                </th>
                                <th class="column-title">
                                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($classes->isEmpty())
                                <tr><td style="background-color:#b9b9b9" class="text-center" colspan="9" >Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($classes as $row)
                                    <tr class="even pointer check" >
                                        <td class="a-center">
                                            <input type="checkbox" class="check" value="{{$row->id}}">
                                        </td>
                                        <td id="">{{$row->name}}</td>
                                        <td>{{$row->code}}</td>
                                        <td>
                                            @if($row->teacher != null)
                                                {{$row->teacher->ho_ten}}
                                            @endif
                                        </td>
                                        <td>
                                            {{$row->subject->name}}
                                        </td>
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
                                                <a href="{{route('class.setting', $row->id)}}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-cog"></i></a>
                                                <a href="{{route('class.score',$row->id)}}" class="btn btn-primary btn-xs">Điểm</a>
                                                {{--<a href="{{route('class.test', $row->id)}}" class="btn btn-primary btn-xs">Điểm</a>--}}
                                                {{--<a class="btn btn-primary btn-xs" href="{{route('class.attendance',$row->id)}}">chuyên cần</a>--}}
                                                {{--<a class="btn btn-primary btn-xs" href="{{route('class.score',$row->id)}}">Tổng kết</a>--}}
                                                {{--<select class=" form-group-sm" name="forma" onchange="location = this.value;">--}}
                                                {{--<option value="">Điểm</option>--}}
                                                {{--<option value="{{route('class.test', $row->id)}}">Điểm Thi</option>--}}
                                                {{--<option value="{{route('class.attendance', $row->id)}}">Chuyên cần</option>--}}
                                                {{--<option value="{{route('class.score',$row->id)}}">Tổng kết</option>--}}
                                                {{--</select>--}}
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
                        <div class="clearfix">
                            <div class="pull-left">{!! $classes->links() !!}</div>
                            <div class="pull-right form-group">
                                <label class="">Hiển thị</label>
                                {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'input-sm form-control input-inline','onchange'=>"this.form.submit()")) !!}
                            </div>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div> <!-- container -->
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
                    $('#start_date').val(moment(data.start_date).format('D/M/Y'));
                    $('#end_date').val(moment(data.end_date).format('D/M/Y'));
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
    <script>
        $(function () {
            $('.datepicker').datetimepicker({
                format: 'DD/MM/YYYY',
                locale: 'vi'
            });
        });
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection