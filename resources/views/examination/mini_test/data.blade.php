@extends('_basic.master')

@section('content')
    @include($prefix.'mini_test.create')
    @include($prefix.'mini_test.update')
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
                <li><a >Ngân hàng đề thi</a></li>
                <li><a href="#">Bài kiểm tra</a></li>
            </ol>
            @include($prefix.'mini_test._active')
                <table class="table">
                    <tr>
                        <th style="width: 5%"><input type="checkbox"></th>
                        <th class="col-xs-hidden">Tên bài kiểm tra</th>
                        <th class="col-xs-hidden">cai gi day</th>
                        <th class="col-xs-hidden">Chu thich</th>
                        <th>Thời gian</th>
                        <th class="text-right">
                            {{--<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> {{trans('button.create')}}</a>--}}
                            {{--<a class="btn btn-danger btn-xs" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>--}}
                        </th>
                    </tr>
                    @foreach($mini_tests as $row)
                        <tr>
                            <th><input type="checkbox"></th>
                            <td class="col-xs-hidden">{{($row->name)}}</td>
                            <td class="col-xs-hidden">{{($row->insistence)}}</td>
                            <td class="col-xs-hidden">{{($row->description)}}</td>
                            <td class="col-xs-hidden">{{($row->time)}}</td>
                            <td class="text-right">
                                <a class="btn btn-default btn-xs edit_mini_test" data-toggle="modal" data-target="#myModal" onclick="find({{$row->id}})">
                                    <span class=" glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Sửa thông tin"></span>
                                </a>
                                <a class="btn btn-danger btn-xs del_mini_test" onclick="delete_record({{$row->id}},this)" data="{{$row->id}}"><span class=" glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Xóa"></span></a>
                                <a class="btn btn-primary btn-xs" href="{{route('mini_test.detail', $row->id)}}"><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Thông tin chi tiết"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            {!! $mini_tests->links() !!}
        </div>
    </div>
    {{--<a href="" class="btn btn-default"><span class="glyphicon glyphicon-fast-backward"> </span> {{trans('button.back')}}</a>--}}
@endsection

@section('head')
    <style>
        label,th {
            color: black;
        }
    </style>
@endsection
@section('bot')
<script type="text/javascript">
    function find(id){
        $('#update_mini_test').attr('action', '{{route('mini_test.update')}}/'+id);
        $.ajax({
            url: '{{route("mini_test.find")}}/'+id,
            success:function(data){
                console.log(data);
                $('#name').val(data.name);
                $('#insistence').val(data.insistence);
                $('#description').val(data.description);
                $('input[name=time]').val(data.time);
            },
            error: function () {
                alert('Error')
            }
        });
    }
    function delete_record(id,dele){
        $.ajax({
            url: '{{route("mini_test.delete")}}/'+id,
            beforeSend:function(){
                $(".loading").show();
            },
            success:function(html){
                dele.closest("tr").remove();
                $(".loading").hide();
            }
        });
    }
    {{--$('#search_form').on('click',function () {--}}
        {{--var text = $('#search_value').val();--}}
        {{--if(text != ''){--}}
            {{--var paginate = $('#f_select_number').val();--}}
            {{--$('#form_search').attr('action','{{route('mini_test.findby')}}/'+text+'/'+paginate);--}}
        {{--}else {--}}
            {{--alert('nhập từ khóa')--}}
            {{--return false;--}}
        {{--}--}}
    {{--})--}}
</script>
@endsection
