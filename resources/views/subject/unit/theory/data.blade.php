@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Môn học</a></li>
    </ol>

    <div class="row">
        <div class="col-lg-2 form-group">
            <select name="" class="form-control" id="f_select_number">
                <option value="10">05</option>
                <option value="10">10</option>
                <option value="10">15</option>
                <option value="10">20</option>
            </select>
        </div>
        <div class="col-lg-8">
            <div class="input-group form-group">
                <div class="input-group-btn" id="f_select_search">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm kiếm</button>
                </div><!-- /btn-group -->
                <input type="text" class="form-control" id="search_form" placeholder="Search ... ">
            </div><!-- /input-group -->
        </div>
        <div class="col-lg-2" role="group">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-danger" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>

                <a href="{{route('subject.add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> {{trans('button.add')}}</a>

            </div>
        </div>
    </div>


    @if(isset($subjects) && count($subjects))
    <table class="table">
        <tr>
            <th>
                <input type="checkbox">
            </th>

            <th>Tên</th>
            <th>Chi tiết</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>

        @foreach($subjects as $row)
            <tr>
                <td>
                    <input type="checkbox" value="{{$row->id}}" name="id" class="check">
                </td>

                <td>{{$row->name}}</td>
                <td>{{$row->description}}</td>
                <th>@include('_basic.includes.is.active')</th>
                <td class="text-right">
                    <a class="btn btn-xs btn-primary" href="{{route('subject.edit', $row->id)}}"><i class="fa fa-edit"></i> Cập nhật</a>
                    <a class="btn btn-xs btn-success" href="{{route('subject.composer', $row->id)}}"><i class="fa fa-book"></i> Bài học</a>
                </td>
            </tr>
        @endforeach
    </table>
    @else
        <div class="col-lg-12">
            <div class="alert alert-info">
                Hiện tại chưa có lớp học nào
            </div>

        </div>
    @endif
@endsection