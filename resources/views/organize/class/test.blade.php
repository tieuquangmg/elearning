@extends('_basic.master')
@section('content')
    <div class="loading">
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{route('class.data')}}"><span class=" glyphicon glyphicon-home"></span> Lớp học</a></li>
                <li><a href="{{route('admin')}}">Chi tiết</a></li>
                <li><a >Bảng điểm</a></li>
            </ol>
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
                        <table class="table-responsive table table-bordered">
                            <tr>
                                <th>
                                    <input type="checkbox" id="check_all">
                                </th>
                                <th class="column-title">Tên sinh viên</th>
                                @foreach($all_test as $value)
                                    <th class="column-title">{{$value->name}}</th>
                                @endforeach
                            </tr>
                            @foreach($data as $row)
                                <tr class="even pointer check">
                                    <td class="a-center">
                                        <input type="checkbox" class="check" value="{{$row[0]->id}}">
                                    </td>
                                    <td id="">{{$row[0]->first_name.' '.$row[0]->last_name}}</td>
                                    @foreach($row[1] as $value)
                                        @if(!$value->user_test->isEmpty())
                                            <td>{{$value->user_test->first()['score']}}</td>
                                        @else
                                            <td></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>

                        {{--<table class="table-responsive table table-bordered">--}}
                        {{--<tr>--}}
                        {{--<th>--}}
                        {{--<input type="checkbox" id="check_all">--}}
                        {{--</th>--}}
                        {{--<th class="column-title">Tên sinh viên</th>--}}
                        {{--@foreach($all_test as $value)--}}
                        {{--<th class="column-title">{{$value->name}}</th>--}}
                        {{--@endforeach--}}
                        {{--</tr>--}}
                        {{--@foreach($data as $row)--}}
                        {{--<tr class="even pointer check" >--}}
                        {{--<td class="a-center">--}}
                        {{--<input type="checkbox" class="check" value="{{$row[0]->id}}">--}}
                        {{--</td>--}}
                        {{--<td id="">{{$row[0]->first_name.' '.$row[0]->last_name}}</td>--}}
                        {{--@foreach($row[1] as $value)--}}
                        {{--<td>{{$value->unit_test->first()['score']}}</td>--}}
                        {{--@endforeach--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</table>--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bot')
    <script>
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