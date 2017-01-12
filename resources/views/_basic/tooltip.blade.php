@extends('_basic.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tooltip">
                    Thông tin
                </div>
            </div>
        </div>
        <div class="row widget_top">
            <div class="col-lg-3 col-md-6">
                <div class="widget green-1 animated lightblue-1"">
                    <div class="widget-content padding">
                        <div class="widget-icon">
                            <i class="icon-globe-inv"></i>
                        </div>
                        <div class="text-box">
                            <p class="maindata">Thành viên <b>Đang truy cập</b></p>
                            <h2><span class="animate-number" data-value="25153" data-duration="3000">166</span></h2>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in băng thông
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget green-1 lightblue-2">
                    <div class="widget-content padding">
                        <div class="widget-icon">
                            <i class="icon-globe-inv"></i>
                        </div>
                        <div class="text-box">
                            <p class="maindata"><b>Thành viên</b></p>
                            <h2><span class="animate-number" data-value="25153" data-duration="3000">870</span></h2>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget lightblue-3">
                    <div class="widget-content padding">
                        <div class="widget-icon">
                            <i class="icon-globe-inv"></i>
                        </div>
                        <div class="text-box">
                            <p class="maindata">Tổng <b>Lớp học</b></p>
                            <h2><span class="animate-number" data-value="25153" data-duration="3000">70</span></h2>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget green-1 animated fadeInDown">
                    <div class="widget-content padding">
                        <div class="widget-icon">
                            <i class="icon-globe-inv"></i>
                        </div>
                        <div class="text-box">
                            <p class="maindata">Tổng <b>Môn học</b></p>
                            <h2><span class="animate-number" data-value="25153" data-duration="3000">200</span></h2>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row widget_table">
            <div class="col-md-6 col-lg-6 log_admin">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Lịch sử hoạt động
                    </div>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Hoạt Động</th>
                                <th>Đối tượng</th>
                                <th>ID</th>
                                <th>Thông Tin</th>
                                <th>Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2</td>
                                <td>Thêm</td>
                                <td>Môn học</td>
                                <td>33</td>
                                <td>Anh văn chuyên ngành</td>
                                <td>08-09-2016</td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 message">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tín nhắn
                    </div>
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>người gửi</th>
                                <th>chủ đề</th>
                                <th>thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->send_from->ho_ten}}</td>
                                <td><a href="">{{$value->content}}</a></td>
                                <td>{{$value->created_at->day.' - '.$value->created_at->month.' - '.$value->created_at->year}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
@endsection