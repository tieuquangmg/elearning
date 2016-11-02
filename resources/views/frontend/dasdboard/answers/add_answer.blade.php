@extends('frontend.dasdboard._layout.layout')
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li><a href="#">Lớp đã đăng ký</a></li>
                        <li><a>{{$class->subject->name}}</a></li>
                        <li><a>{{$unit->name}}</a></li>
                        <li class="active">Thêm câu hỏi</li>
                    </ol>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4" style="text-transform: uppercase">
                                    <i class="fa fa-question" aria-hidden="true"></i> {{Auth::user()->roles()->first()->display_name.' '.Auth::user()->full_name}}
                                </div>
                                <div class="pull-right green">
                                    <a href="{{url('study/sub/'.$class->id)}}"><i class="glyphicon glyphicon-backward"></i> Trở lại</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="form-label">
                                    Tên câu hỏi
                                </label>
                                <input class="form-control" type="text" style="width: 200px" placeholder="nhập tên câu hỏi">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    loại câu hỏi
                                </label>
                                <select name="topic" class="form-control" style="width: 200px">
                                    <option  value="">Chọn loại câu hỏi</option>
                                    <option value="1">Báo lỗi kỹ thuật</option>
                                    <option value="2">Đề xuất nâng cấp</option>
                                    <option value="3">Báo lỗi nội dung lớp môn</option>
                                    <option value="4">Khác</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Nội dung câu hỏi
                                </label>
                                <textarea class="form-control" style="height: 100px" placeholder="nhập nội dung câu hỏi"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    File đính kèm
                                </label>
                                <input type="file" class="form-control" style="width: 300px" placeholder="nhập nội dung câu hỏi">
                                <p class="form-description">Lưu ý : định dạng file đính kèm : .jpg, .gif, .png, .doc, .docx, .xls
                                </p>
                            </div>
                                <input class="btn btn-success btn-sm" type="submit" value="Gửi câu hỏi">
                         </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection