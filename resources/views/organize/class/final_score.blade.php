@extends('_basic.master')
@section('content')
    <div class="loading">
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('class.data')}}"><span class=" glyphicon glyphicon-home"></span> Lớp học</a></li>
                <li><a href="{{route('admin')}}">Chi tiết</a></li>
                <li><a>Kết quả học tập</a></li>
            </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4"> Bảng điểm
                        </div>
                        <div class="pull-right">
                            <a href="{{route('class.data')}}"><i class="glyphicon glyphicon-backward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if($score->isEmpty())
                        <div class="alert alert-info">Chưa có kết quả học tập</div>
                    @else
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="check_all">
                                </th>
                                <th class="column-title">Tên sinh viên</th>
                                <th class="column-title">Điểm chuyên cần</th>
                                <th class="column-title">Điểm kiểm tra</th>
                                <th class="column-title">Điểm thi</th>
                                <th class="column-title">Điểm tổng kết</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($score as $row)
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>@if($row->user_id != null){{\App\Modules\Auth\Models\User::find($row->user_id)->full_name}}@endif</td>
                                    <td>{{$row->chuyencan}}</td>
                                    <td>{{$row->kiemtra}}</td>
                                    <td><input type="text" style="width: 40px" value="{{$row->thi}}"></td>
                                    <td><input type="text" style="width: 40px"
                                               value="{{$row->chuyencan*0.1 + $row->kiemtra*0.6 + $row->thi*0.3}}">
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <div class="clearfix">
                                <div class="pull-right">
                                    <a class="btn btn-success btn-sm">Lưu điểm</a>
                                    <a class="btn btn-success btn-sm">Xuất file excel</a>
                                </div>
                            </div>
                            </tfoot>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bot')
    <script>
        function find(id) {
            $('#update_class').attr('action', '{{route('class.update')}}/' + id);
            $.ajax({
                url: '{{route("class.find")}}/' + id,
                success: function (data) {
                    console.log(data);
                    $('#course_id').val(data.course_id);
                    $('#name').val(data.name);
                    $('#user_id').val(data.user_id);
                    $('#year').val(data.year);
                    $('#active').val(data.active);
                },
                error: function () {
                    alert('Error')
                }
            });
        }
        function delete_record() {
            var ids = [];
            $(".check input:checked").map(function () {
                ids.push($(this).val());
                $(this).parent().parent().parent().remove();
            });
            $.ajax({
                url: '{{route("class.delete")}}/' + ids,
                beforeSend: function () {
                    $(".loading").show();
                },
                success: function (html) {
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