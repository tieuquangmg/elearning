@extends('frontend.dasdboard._layout.layout_db')
@section('content')
    <div class="container">
        <div class="page-section">
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li class="active">Hỏi đáp</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4>Sinh viên: {{Auth::user()->ho_ten}}</h4>
                        </div>
                        <div class="pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Hỏi đáp</a></li>
                                <li><a href="#">Về lớp học</a></li>
                                <li><a href="#">Diễn đàn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                            <div class="form-group-sm">
                                <label>Lớp</label>
                                <input class="form-control input-sm" type="text" name="classes">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <table class="table table-bordered">
                                <thead class="green">
                                <tr>
                                    <th></th>
                                    <th>Chủ đề</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Chưa trả lời
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Đã trả lời</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Tổng</td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="clearfix">
                        <div class="pull-left">
                            <input type="submit" class="btn btn-sm" value="Tìm kiếm">
                            <a class="btn btn-sm">Xem tất cả</a>
                            <a class="btn btn-sm">Câu hỏi mới</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4 green">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>Hỏi đáp
                        </div>
                        <div class="pull-right green">
                            <a href="#"><i class="glyphicon glyphicon-backward"></i>Trở lại</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <thead style="background-color: #3a5795;color: white">
                        <tr>
                            <td>ID</td>
                            <td>Câu hỏi</td>
                            <td>Lớp</td>
                            <td>Hoạt động</td>
                            <td>Độ trễ</td>
                            <td>Trạng thái</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td class="col-xs-6">
                                    <span><a href="{{route('study.getaddanswer',$row->id)}}">{{$row->ten_cau_hoi}}</a></span><br>
                                    <span>{{$row->user->ho_ten}}</span>

                                </td>
                                <td class="col-xs-2">{{$row->unit->subject->name}}</td>
                                <td class="col-xs-2">{{$row->updated_at}}<br> {{$row->user->ho_ten}}</td>
                                <td class="col-xs-1">
                                    @if($row->tra_loi->first() != '')
                                    {{$row->created_at->diffForHumans($row->tra_loi->first()->created_at,true)}}</td>
                                @else
                                    @endif
                                <td class="col-xs-1">{{($row->status == 1)? 'Mở': 'Đóng'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection