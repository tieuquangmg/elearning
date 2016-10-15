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
                    <a href="{{route('subject.add')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Thêm"></span> {{trans('button.add')}}</a>

                    <a class="btn btn-danger btn-sm" id="delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Xóa"></span> {{trans('button.delete')}}</a>
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
                        <th>Tên</th>
                        {{--<th>Chi tiết</th>--}}
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    @foreach($subjects as $row)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{$row->id}}" name="id" class="check">
                            </td>
                            <td>{{$row->name}}</td>
                            {{--<td>{{$row->description}}</td>--}}
                            <th>@include('_basic.includes.is.active')</th>
                            <td class="text-right">
                                <a class="btn btn-xs btn-primary" href="{{route('subject.edit', $row->id)}}"><i class="fa fa-edit"></i> Cập nhật</a>
                                <a class="btn btn-xs btn-success" href="{{route('subject.unit', $row->id)}}"><i class="fa fa-book"></i> Bài học</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <div class="alert alert-info">
                    Danh sách môn học đang trống
                </div>
            @endif
        </div>
    </div>




@endsection
@section('bot')
    <script>
        var url_delete = '{{route('subject.delete')}}';
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection