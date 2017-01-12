@extends('frontend.dasdboard._layout.layout_db')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/profile.css')}}">
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
            <li class="active">Trang cá nhân</li>
        </ol>
        <div class="row">
            <div class="col-md-2">
                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">Nội dung chính</h4>
                    </div>
                    <div class="panel-body list-group">
                        <ul class="list-group list-group-menu">
                            <li class="list-group-item">
                                <a class="link-text-color" href="{{route('study.quatrinh')}}">
                                    <span class="imgwrap"><i class="glyphicon glyphicon-scissors"></i></span>
                                    <div>Hồ sơ học tập</div>
                                </a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{route('study.mycourse')}}">Lớp của tôi</a></li>
                            <li class="list-group-item">
                                <a class="link-text-color" href="{{route('study.profile')}}">
                                    <span class="imgwrap"><i class="glyphicon glyphicon-scissors"></i></span><div>Thông tin cá nhân</div></a>
                            </li>
                            <li class="list-group-item"><a class="link-text-color" href="{{asset('logout')}}">Tin nhắn</a></li>
                            <li class="list-group-item"><a class="link-text-color" href="{{asset('logout')}}"><span>Đăng xuất</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-xs-4">
                            <table class="table">
                                <tr>
                                    <td>Mã sinh viên</td>
                                    <td>{{Auth::user()->code}}</td>
                                </tr>
                                <tr>
                                    <td>Họ tên</td>
                                    <td>{{Auth::user()->ho_ten}}</td>
                                </tr>
                                <tr>
                                    <td>Trạng thái</td>
                                    <td>Đang học</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xs-4">
                            <table class="table">
                                <tr>
                                    <td>Lớp</td>
                                    <td>{{Auth::user()->lop->ten_lop}}</td>
                                </tr>
                                <tr>
                                    <td>Ngành:</td>
                                    <td>{{Auth::user()->lop->chuyen_nganh->chuyen_nganh}}</td>
                                </tr>
                                <tr>
                                    <td>Khóa</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Học kỳ</label>
                                <select name="hoc_ky" class="form-control input-sm">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lọc</label>
                                <select name="loc" class="form-control input-sm">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4>Quá trình học tập</h4>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Mã học phần</th>
                                <th>Tên học phần</th>
                                <th>Số tín chỉ</th>
                                <th>Chuyên cần</th>
                                <th>Thi</th>
                                <th>Tổng kết</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach()
                                <tr>
                                    <td>Stt</td>
                                    <td>Mã học phần</td>
                                    <td>Tên học phần</td>
                                    <td>Số tín chỉ</td>
                                    <td>Chuyên cần</td>
                                    <td>Thi</td>
                                    <td>Tổng kết</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </div>
    </div>
    <!-- This wraps the whole cropper -->

@endsection
@section('bot')
@endsection