@extends('frontend.nguoidung._layout.layout_db')
@section('content')
    <div class="container">
        <div class="page-section">
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li class="active">Kết quả kiểm tra</li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4 green">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> Kết quả kiểm tra
                        </div>
                        <div class="pull-right green">
                            <a href="#"><i class="glyphicon glyphicon-backward"></i>Trở lại</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <h4>Bài thi: <strong>{{$test->name}}</strong></h4>
                    <table class="table table-responsive">
                        <thead style="background-color: #3a5795;color: white">
                        <tr>
                            <td>ID</td>
                            <td>Mã sinh viên</td>
                            <td>Họ tên</td>
                            @for($i = 1; $i <= $test->number_test; $i ++)
                                <td>Lần thi: {{$i}}</td>
                            @endfor
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row=>$value)
                            <tr>
                                <td>{{$value['user']->id}}</td>
                                <td>{{$value['user']->code}}</td>
                                <td>{{$value['user']->ho_ten}}</td>
                                @for($i = 0; $i < $test->number_test; $i ++)
                                    <td>{{($value['diem']->get($i) != null) ? ($value['diem']->get($i)->score)  : ''}}</td>
                                @endfor
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection