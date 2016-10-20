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
                        <form id="update_score" method="post" action="">
                            {!! csrf_field() !!}
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
                                        <td>
                                            <input type="checkbox">
                                            {{--<input type="hidden" name="user[{{$row->id}}][id]" value="{{$row->id}}">--}}
                                        </td>
                                        <td>@if($row->user_id != null){{\App\Modules\Auth\Models\User::find($row->user_id)->full_name}}@endif</td>
                                        <td>{{$row->chuyencan}}</td>
                                        <td>{{$row->kiemtra}}</td>
                                        <td><input id="input_thi_{{$row->id}}" class="input_thi" data_id="{{$row->id}}" name="user[{{$row->id}}][thi]" type="text" style="width: 40px" value="{{$row->thi}}"></td>
                                        <td>
                                            <label id="label_total_id_{{$row->id}}">{{$row->total}}</label>
                                            <input id="input_total_id_{{$row->id}}" name="user[{{$row->id}}][total]"
                                                   type="hidden" style="width: 40px"
                                                   value="{{$row->total}}">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-success btn-sm" value="Lưu điểm">
                                        <a class="btn btn-success btn-sm">Xuất file excel</a>
                                    </div>
                                </div>
                                </tfoot>
                            </table>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bot')
    <script>
        $(document).ready(function () {
            $('input.input_thi').on("input",function () {
                var id = $(this).attr('data_id');
                $(this).css('color','red');
                calculator(id);
            })
            function calculator(id) {
                var thi = $('#input_thi_'+id).val();
                var chuyencan = {{$row->chuyencan}};
                var kiemtra = {{$row->kiemtra}};
                var total = (thi*0.3 + kiemtra*0.6 + chuyencan*0.1).toFixed(2);
                $('#input_total_id_'+id).val(total).css('color','red');
                $('#label_total_id_'+id).css('color','red').text(total);
            }
        })
        $('#update_score').on('submit',function(e){
            $.ajaxSetup({
                header:$('meta[name="_token"]').attr('content')
            })
            e.preventDefault(e);
            console.log($(this).serializeArray());
            $.ajax({
                type:"GET",
                url:'{{route('class.updateattendance')}}',
                data:$(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function(data){
                    $('.loading').hide();
                    Msg.show(data['message'], 'success', 3000);
                },
                error: function(data){
                    Msg.show('Thất bại', 'danger', 3000);
                }
            })
        });

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