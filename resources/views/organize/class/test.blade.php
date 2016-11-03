@extends('_basic.master')
@section('content')
    <div class="loading">
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('class.data')}}"><span class=" glyphicon glyphicon-home"></span> Lớp học</a></li>
                <li><a href="{{route('admin')}}">Chi tiết</a></li>
                <li><a >kết quả kiểm tra</a></li>
            </ol>
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
                        <div class="pull-left h4">
                            Bảng điểm
                        </div>
                        <div class="pull-right">
                            <a href="{{route('class.data')}}"><i class="glyphicon glyphicon-backward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if($data->isEmpty())
                        <div class="alert alert-info">Không có bài kiểm tra nào</div>
                    @else
                        <form id="update_test" method="post" action="">
                            {!! csrf_field() !!}
                            <input type="hidden" name="class_id" value="{{$class_id}}">
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                {{--<th>--}}
                                    {{--<input type="checkbox" id="check_all">--}}
                                {{--</th>--}}
                                <th class="column-title">Tên sinh viên</th>
                                @foreach($all_test as $value)
                                    <th class="column-title">{{$value->name}}</th>
                                @endforeach
                                <td>Điểm trên lớp</td>
                            </tr>
                            </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr class="even pointer check">
                                        {{--<td class="a-center">--}}
                                            {{--<input type="checkbox" class="check" value="{{$row[0]->id}}">--}}
                                        {{--</td>--}}
                                        <td id="">{{$row[0]->full_name}}</td>
                                        <?php $chuyencan = 0;
                                        $j = 0;
                                        ?>
                                        @foreach($row[1] as $value)
                                            @if(!$value->user_test->isEmpty())
                                                <td style="vertical-align: middle;">
                                                    <?php
                                                    $tong = 0;
                                                    $i = 0;
                                                    ?>

                                                    @foreach($value->user_test as $value1)
                                                        <?php
                                                        $tong += $value1->score;
                                                        $i ++;
                                                        ?>
                                                        {{$value1->score}},
                                                    @endforeach
                                                    TB <p style="font-weight:bold; color:green; display: inline">@if($i != 0)({{$tong/$i}})@else 0 @endif</p>
                                                    <?php $chuyencan += $tong/$i?>
                                                </td>
                                            @else
                                                <td>_</td>
                                            @endif
                                            <?php $j ++; ?>
                                        @endforeach
                                        <td>
                                            {{--@if($j != 0){{$chuyencan/$j}}@else 0 @endif--}}
                                        <input style="width: 40px" type="text" name="user[{{$row[0]->id}}]" value="@if($j != 0){{$chuyencan/$j}}@else 0 @endif">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            <tfoot>
                            <div class="clearfix">
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-success btn-sm" value="Lưu kết quả">
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
                $('#update_test').on('submit',function(e){
                    $.ajaxSetup({
                        header:$('meta[name="_token"]').attr('content')
                    })
                    e.preventDefault(e);
//                    console.log($(this).serializeArray());
                    $.ajax({
                        type:"GET",
                        url:'{{route('class.updatetest')}}',
                        data:$(this).serialize(),
                        dataType: 'json',
                        beforeSend: function () {
                            $('.loading').show();
                        },
                        success: function(data){
                            $('.loading').hide();
                            Msg.show('Thành công', 'success', 3000);
                        },
                        error: function(data){
                            Msg.show('Thất bại', 'danger', 3000);
                        }
                    })
                });
        function find(id){
            $('#update_class').attr('action', '{{route('class.update')}}/'+id);
            $.ajax({
                url: '{{route("class.find")}}/'+id,
                success:function(data){
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