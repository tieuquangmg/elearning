@extends('_basic.master')
@section('content')
    <form id="update_score" method="post" action="">
        {!! csrf_field() !!}
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('class.data')}}"><span class=" glyphicon glyphicon-home"></span> Lớp học</a></li>
            <li><a href="{{route('admin')}}">Chi tiết</a></li>
            <li><a>Kết quả học tập</a></li>
        </ol>
        <h1>Bảng điểm</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="{{route('class.data')}}"><i class="glyphicon glyphicon-backward"></i></a>
                <input type="submit" class="btn btn-success btn-sm" value="Lưu điểm">
                <a class="btn btn-success btn-sm">Xuất file excel</a>
                <a class="btn btn-success btn-sm">Đồng bộ LMS</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="sort_navy" data-itemhldr="li" data-statectn="paixu" k-name="stat-area">
                    <span>Xem điểm：</span>
                    <ul>
                        <li><a style="" href="{{route('class.attendance', $class_id)}}" data-order="">Điểm chuyên cần</a></li>
                        <li><a style="" href="{{route('class.test', $class_id)}}" data-order="">Điểm thi</a></li>
                        <li><a style="" href="{{route('class.score',$class_id)}}" data-order="">Điểm tổng kết</a></li>
                    </ul>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="clearfix">
                            <h4>Bảng điểm</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if($score->isEmpty())
                            <div class="alert alert-info">Chưa có kết quả học tập</div>
                        @else
                                <table class="table table-bordered">
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
                                                <input type="hidden" name="user[{{$row->id}}][id]" value="{{$row->id}}">
                                            </td>
                                            <td>@if($row->user_id != null){{\App\Modules\Auth\Models\User::find($row->user_id)->ho_ten}}@endif</td>
                                            <td><input id="input_chuyencan_{{$row->id}}" disabled value="{{$row->chuyencan}}" title="Điểm chuyên cần"></td>
                                            <td><input id="input_kiemtra_{{$row->id}}" disabled value="{{$row->kiemtra}}" title="Điểm kiểm tra"></td>
                                            <td><input id="input_thi_{{$row->id}}" class="input_thi" data_id="{{$row->id}}"
                                                       name="user[{{$row->id}}][thi]" type="text" style="width: 40px"
                                                       value="{{$row->thi}}"></td>
                                            <td>
                                                <label id="label_total_id_{{$row->id}}">{{$row->total}}</label>
                                                <input id="input_total_id_{{$row->id}}" name="user[{{$row->id}}][total]"
                                                       type="hidden" style="width: 40px"
                                                       value="{{$row->total}}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container -->
    </form>
@endsection

@section('bot')
    <script>
        $(document).ready(function () {
            $('input.input_thi').on("input",function () {
                var id = $(this).attr('data_id');
                $(this).css('color','red');
                calculator(id);
            });
            function calculator(id) {
                var thi = $('#input_thi_'+id).val();
                var chuyencan = $('#input_chuyencan_'+id).val();
                var kiemtra = $('#input_kiemtra_'+id).val();
                {{--{{dd($row->chuyencan)}}--}}
                {{--var chuyencan = {{$row->chuyencan}};--}}
                {{--var kiemtra = {{$row->kiemtra}};--}}
                var total = (thi*0.3 + kiemtra*0.6 + chuyencan*0.1).toFixed(2);
                $('#input_total_id_'+id).val(total).css('color','red');
                $('#label_total_id_'+id).css('color','red').text(total);
            }
        });
        $('#update_score').on('submit',function(e){
            $.ajaxSetup({
                header:$('meta[name="_token"]').attr('content')
            });
            e.preventDefault(e);
            console.log($(this).serializeArray());
            $.ajax({
                type:"GET",
                url:'{{route('class.updatescore')}}',
                data:$(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function(data){
                    $('.loading').hide();
                    Msg.show(data['message'],'success', 3000);
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
    <script>
        $(document).ready(function() {
            $("[href]").each(function() {
                if (this.href == window.location.href) {
                    $(this).addClass("active");
                }
            });
        });
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection