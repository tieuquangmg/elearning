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
            <div class="row row-eq-height">
                <div class="col-md-2 small-padding" style="background: white;margin-bottom: 20px">
                    @include('frontend.dasdboard._modules.left_menu_profile')
                </div>
                <div class="col-md-10 small-padding">
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
                                <form action="{{route('study.synthetic.transcripts')}}" method="get">
                                    <div class="form-group">
                                        <label>Học kỳ</label>
                                        {!! Form::select('hoc_ky', ['0' => 'Tất cả', '1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'],$input['hoc_ky'],['class'=>"form-control input-sm","onchange"=>"this.form.submit()"]) !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Lọc</label>
                                        <select name="loc" class="form-control input-sm" onchange="this.form.submit()">
                                            <option value="0" @if($input['loc'] == 0) selected @endif >Tất cả</option>
                                            <option value="1" @if($input['loc'] == 1) selected @endif >Những học phần Elearning</option>
                                            <option value="2" @if($input['loc'] == 2) selected @endif >Những học phần Elearning đã có điểm</option>
                                            <option value="3" @if($input['loc'] == 3) selected @endif >Những học phần đã có điểm</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <table class="table table-bordered tb_bang_diem">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Mã học phần</th>
                                    <th>Tên học phần</th>
                                    <th>Số tín chỉ</th>
                                    <th>Chuyên cần</th>
                                    <th>Kiểm tra</th>
                                    <th>Thi</th>
                                    <th>Tổng kết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $i = 0 ?>
                                @foreach($scrore as $key=>$value)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$value->Ky_hieu}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->So_hoc_trinh}}</td>
                                        <td>{{$value->chuyencan}}</td>
                                        <td>{{$value->kiemtra}}</td>
                                        <td>{{$value->thi}}</td>
                                        <td>{{$value->total}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- This wraps the whole cropper -->
@endsection
@section('bot')
@endsection