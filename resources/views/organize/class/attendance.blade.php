@extends('_basic.master')
@section('content')
    <div class="loading">
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('class.data')}}"><span class=" glyphicon glyphicon-home"></span> Lớp học</a></li>
                <li><a href="{{route('admin')}}">Chi tiết</a></li>
                <li><a >Hoàn thành bài giảng</a></li>
            </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4">
                            Điểm chuyên cần
                        </div>
                        <div class="pull-right">
                            <a href="{{route('class.data')}}"><i class="glyphicon glyphicon-backward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if($data->isEmpty())
                        <div class="alert alert-info">abc</div>
                    @else
                        <form id="update_test" method="post" action="">
                            {!! csrf_field() !!}
                            <input type="hidden" name="class_id" value="{{$class_id}}">
                            <table class="table-responsive table table-bordered">
                                <tr>
                                    <th>
                                        <input type="checkbox" id="check_all">
                                    </th>
                                    <th class="column-title">Tên sinh viên</th>
                                    @foreach($unit as $value)
                                        <th class="column-title">{{$value->name}}</th>
                                    @endforeach
                                    <td>Điểm chuyên cần</td>
                                </tr>
                                @foreach($data as $row)
                                    <tr class="even pointer check">
                                        <td class="a-center">
                                            <input type="checkbox" class="check" value="{{$row[0]->id}}">
                                        </td>
                                        <td id="">{{$row[0]->full_name}}</td>
                                        <?php
                                        $watched = 0;
                                        $all_theories = 0;
                                        $chuyencan = 0;
                                        $j = 0;
                                        ?>
                                        @foreach($row[1] as $value)

                                            @if(!$value->theory->isEmpty())
                                                <td style="vertical-align: middle;">
                                                    <?php
                                                    $tong = 0;
                                                    $i = 0;
                                                    ?>
                                                    @foreach($value->theory as $value1)
                                                        <?php
                                                        $all_theories ++;
                                                        ?>
                                                        @if($value1->user_theory->first()['watch_time'] === 0)
                                                            <?php
                                                            $tong += 1;
                                                            ?>
                                                        @endif
                                                    @endforeach
                                                    <p style="color: red;display: inline">{{$tong}}</p> /
                                                    {{count($value->theory)}}
                                                    <?php $watched += $tong  ?>
                                                </td>
                                            @else
                                                <td>_</td>
                                            @endif
                                            <?php $j ++; ?>
                                        @endforeach
                                        {{--<td>{{$chuyencan/$j}}</td>--}}
                                        <td>
                                            <input style="width: 40px" type="text" name="user[{{$row[0]->id}}]" value="@if($watched != 0){{round($watched/$all_theories*10,2)}}@else 0 @endif">
                                        </td>
                                    </tr>
                                @endforeach
                                <tfoot>
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <input class="btn btn-sm btn-success" type="submit" value="Lưu thông tin">
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
            console.log($(this).serializeArray());
            $.ajax({
                type:"POST",
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
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection