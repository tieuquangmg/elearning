@extends('frontend.dasdboard._layout.layout_db')
@section('title')
@endsection
@section('head')
    <meta charset="utf-8" content="text/html">
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/customs/style_theme.css')}}">
@endsection
@section('content')
    <div id="content">
        <ol class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
            <li><a href="#">Lớp đã đăng ký</a></li>
            <li><a>{{$class->subject->name}}</a></li>
            <li><a></a></li>
            <li class="active"></li>
        </ol>
        <table id="layout-table">
            <tbody>
            <tr>
                <td id="middle-column">
                    <div class="bt72">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <h3 style="font-weight: bold;text-transform: uppercase;text-align: left;color: #017e3e;margin-top: 5px;">
                                                <span class="glyphicon glyphicon-list-alt"></span> Luyện tập trắc nghiệm {{$unit->name}}
                                            </h3>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{route('study.subject',$class->id)}}"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table border="0" width="60%" align="center">
                                        <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h2 style="text-transform: uppercase;font-weight: bold;margin-top: -5px;">{{$test->name}}</h2>
                                                @if($test->scoring == 1)
                                                    <h2>(Tính điểm chuyên cần)</h2>
                                                @endif
                                                <hr style="border: 1px solid gainsboro">
                                                <h3 style="text-transform: uppercase;">Chúc anh/chị hoàn thành bài luyện tập với số điểm tuyệt đối</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">
                                                <p align="left" style="margin-left: 165px; font-weight: bold !important;">- Số lần được phép làm bài</p>
                                                <p align="left" style="margin-left: 165px; font-weight: bold !important">- Cách tính điểm</p>
                                                <p align="left" style="margin-left: 165px; font-weight: bold !important">- Thời gian làm bài</p>
                                                <p align="left" style="margin-left: 165px; font-weight: bold !important">- Đã làm</p>
                                            </td>
                                            <td width="50%">
                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : @if($test->number_test == 0) Không giới hạn @else {{$test->number_test}} @endif </p>
                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : {{$test->scoring_method->name}}</p>
                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : {{$test->time/60}}Phút</p>
                                                <p align="left" style="text-transform: uppercase;font-weight: 600">
                                                    : {{count($test->user_test)}} lần</p>
                                            </td>
                                        </tr>
                                        @if($test->user_test->isEmpty())
                                            <tr>
                                                <td colspan="2" style="text-align:center;">
                                                    <div>
                                                        <a href="{{route('study.unit.test',$test->id)}}"
                                                           class="btn"
                                                           style="font-weight:600;width: 40%;background-color: #3a5795;color: white;margin-top: 10px"
                                                           onclick="return confirm('Bạn có muốn tiếp tục?');" >Bắt đầu làm bài</a>
                                                    </div>
                                                    <hr style="border: 1px solid gainsboro">
                                                    <h3>Hệ thống làm bài hỗ trợ tốt nhất trên trình duyệt Firefox. Anh chị có thể tải về và cài đặt
                                                        <a style="font-weight: bold;" href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank">tại
                                                            đây</a>.
                                                    </h3>
                                                </td>
                                            </tr>
                                            @else

                                            <tr>
                                            <td colspan="2" style="text-align: center">
                                                <p align="center" style="text-transform: uppercase;font-weight: 800">
                                                    Thông tin các lần làm trước đây
                                                </p>
                                            </td>
                                        </tr>
                                        <tr style="text-align: center">
                                            <td colspan="2">
                                                <table style="width: 600px; margin: 0 auto" class="table table-dèault">
                                                    <thead>
                                                    <tr>
                                                        <th>Lần làm bài</th>
                                                        <th>Được hoàn thành</th>
                                                        <th>Thời gian làm bài</th>
                                                        <th>Điểm /10</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i = 0 ?>
                                                    @foreach($user_test as $row)
                                                        <?php $i++ ?>
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td>{{$row->end_time}}</td>
                                                            <td>{{round($row->work_time/60)}} phút</td>
                                                            <td>{{round($row->score,2)}}/10</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>

                                            </td>
                                        </tr>
                                        <tr style="text-align:center">
                                            <td colspan="2">
                                                <h3>
                                                    {{--<b> lần cao nhất : 10</b>--}}
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center;">
                                                <div>
                                                    <a href="{{route('study.unit.test',$test->id)}}"
                                                       class="btn"
                                                       style="font-weight:600;width: 40%;background-color: #3a5795;color: white;margin-top: 10px"
                                                       onclick="return confirm('Bạn có muốn tiếp tục?');" >Làm thêm lần nữa</a>
                                                </div>
                                                <hr style="border: 1px solid gainsboro">
                                                <h3>Hệ thống làm bài hỗ trợ tốt nhất trên trình duyệt Firefox. Anh chị có thể tải về và cài đặt
                                                    <a style="font-weight: bold;" href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank">tại
                                                        đây</a>.
                                                </h3>
                                            </td>
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('bot')
@endsection