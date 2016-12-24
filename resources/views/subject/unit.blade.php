@extends('_basic.master')
@section('content')
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('subject.data')}}">{{$subject->name}}</a></li>
            <li><a class="active">Danh sách bài học</a></li>
        </ol>
        <h1>Danh sách bài học</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="{{route('subject.unit.add', $subject->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>
    </div>
    <div class="container">
        @if(!isset($subject->unit) || count($subject->unit)<1)
            <div class="">
                <div class="alert alert-info">
                    <h4>Hiện tại chưa có bài học nào</h4>
                </div>
            </div>
        @endif
        <div class="panel panel-gray">
            <!-- Default panel contents -->
            <div class="panel-heading">
                <h4>Danh sách bài học</h4>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Tên bài học</th>
                        <th></th>
                        <th>Vị trí</th>
                        <th>Trạng thái</th>
                        <th class="text-right">
                        </th>
                    </tr>
                    @foreach($subject->unit as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td><img  style="width: 50px" src="{{asset($row->image)}}"></td>
                            <td>{{$row->position}}</td>
                            <td>@include('_basic.includes.is.active')</td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-default" href="{{route('unit.edit', $row->id)}}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-xs btn-success" href="{{route('unit.compose',$row->id)}}"><i class="fa fa-cog"></i></a>
                                <a class="btn btn-xs btn-danger" href="{{route('unit.delete', $row->id)}}" onclick="return confirm('bạn có muốn xóa không')"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{--<div class="panel-body">--}}
            {{--<p>{{$subject->description}}</p>--}}
            {{--</div>--}}
        </div>
    </div> <!-- container -->

@endsection