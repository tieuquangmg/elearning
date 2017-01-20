@extends('frontend.nguoidung._layout.layout_db')
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
                    <form method="POST" action="{{route('study.addquestion')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id_unit" value="{{$unit->id}}">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h5" style="text-transform: uppercase">
                                    <i class="fa fa-question" aria-hidden="true"></i>Giáo viên: <strong>{{Auth::guard('nguoidung')->user()->ho_ten}}</strong>
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
                                <input name="ten_cau_hoi" class="form-control input-sm" type="text" style="width: 200px" placeholder="nhập tên câu hỏi">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    loại câu hỏi
                                </label>
                                <?php $loai = \App\Modules\Subject\Models\Hoi_dap_loai::all()->lists('name','id')  ?>
                                {!! Form::select('id_loai', $loai,null,['class="form-control input-sm"','style="width: 200px"']) !!}
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Nội dung câu hỏi
                                </label>
                                <textarea name="noi_dung" class="form-control" style="height: 100px" placeholder="nhập nội dung câu hỏi"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    File đính kèm
                                </label>
                                <input name="file_dinh_kem" type="file" class="form-control input-sm" style="width: 300px" placeholder="nhập nội dung câu hỏi">
                                <p class="form-description">Lưu ý : định dạng file đính kèm : .jpg, .gif, .png, .doc, .docx, .xls
                                </p>
                            </div>
                            <input class="btn btn-success btn-sm" type="submit" value="Gửi câu hỏi">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection