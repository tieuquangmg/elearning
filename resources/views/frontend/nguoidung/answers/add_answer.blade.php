@extends('frontend.nguoidung._layout.layout_db')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/hoi_dap/star-rating.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/hoi_dap/style.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                        <li><a href="#">Lớp đã đăng ký</a></li>
                        {{--<li><a>{{$class->subject->name}}</a></li>--}}
                        {{--<li><a>{{$unit->name}}</a></li>--}}
                        <li class="active">Trả lời câu hỏi</li>
                    </ol>
                    {!! csrf_field() !!}
                    <input type="hidden" name="id_unit" value="{{$data->id}}">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id="content">
                                <div class="frame-mid">
                                    <div class="frame-ml">
                                        <div class="frame-mr">
                                            <div class="module clearfix">
                                                <h3>
                                                    <span style="color:#ffffff; float:left; margin-top:8px;">
                                                        <strong class="member" style="color:#ffffff"
                                                                id="username_send">{{Auth::guard('nguoidung')->user()->ho_ten}}</strong>
                                                        <label style="padding-left:20px;color:#ffffff"> Mã chủ đề: {{$data->id}} </label>
                                                      <label style="color:#ffffff">{{$data->nguoidung->ho_ten}}&nbsp;|&nbsp;Trạng thái :
                                                          <img src="" height="18px" align="absmiddle">&nbsp;&nbsp;{{$data->status}}
                                                      </label>
                                                    </span>
                                                    <span style="float:right;color:#ffffff;margin-top:8px;">
                                                        <a href="" title="" style="color:#ffffff">Kho
                                                            kiến thức </a>
                                                         |
                                                        <a style="color:#ffffff" href="#" title="">Diễn đàn </a>
                                                        &nbsp; | &nbsp;
                                                        <a style="color:#ffffff" href="{{url('study/sub/1')}}" title="">Về lớp học</a>
                                                        &nbsp; | &nbsp;
                                                        <a style="color:#ffffff" href="{{route('study.allquestion')}}" title="">Trang chủ hỏi đáp</a>
                                                    </span>
                                                </h3>
                                                <div class="modulecontent clearfix"><span class="errmsg"></span>
                                                    <div class="adetail">
                                                        <div class="detail-left">
                                                            @if($data->user_type_id == 1)
                                                                <p></p>
                                                                <p>
                                                                    <img src="{{asset($data->user->avatar())}}" width="100" height="100" alt="" class="avatar">
                                                                </p>
                                                                <a href="hien thi thon tin nguoi dung nay"
                                                                   target="_blank"><strong>{{$data->user->name}}</strong></a>
                                                                <p></p>
                                                                <p><strong>{{$data->user->ho_ten}}</strong><br>
                                                                    @if($data->user->bomon == null)
                                                                        Bộ môn khác
                                                                    @else
                                                                    Giáo viên bộ môn: {{$data->user->bomon->Bo_mon}})
                                                                    @endif
                                                                </p>
                                                            @else
                                                                <p></p>
                                                                <p>
                                                                    <img src="{{asset($data->user->avatar())}}"
                                                                         width="100" height="100" alt="" class="avatar">
                                                                </p>
                                                                <a href="hien thi thon tin nguoi dung nay"
                                                                   target="_blank"><strong>{{$data->user->code}}</strong></a>
                                                                <p></p>
                                                                <p><strong>{{$data->user->ho_ten}}</strong><br>
                                                                    (Sinh viên lớp: {{$data->user->lop->ten_lop}})
                                                                </p>
                                                            @endif

                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="detail-status">

                                                                Nhóm câu hỏi : <span
                                                                        class="open">{{$data->loai->name}}</span>-- Môn
                                                                học :
                                                                <strong>{{'ma lop hoc o day'}}</strong><br>&nbsp;
                                                                &nbsp; </div>
                                                            <div class="detail-title"><img
                                                                        src="{{asset('dashboard/images/50-128copy.png')}}"
                                                                        width="32" height="32"> Câu hỏi số
                                                                : {{$data->id}}
                                                                - TH901: {{$data->loai->name}}
                                                            </div>
                                                            <strong style="display: none" id="title_question_73587">
                                                                Câu hỏi số :{{$data->id}}
                                                                - {{$data->loai->name}}</strong>
                                                            <div class="detail-des">
                                                                <p>{{$data->ten_cau_hoi}}</p>
                                                                <div>
                                                                    {!! $data->noi_dung !!}
                                                                </div>
                                                            </div>
                                                            <div style="color:#3a5795; font-weight:bold; text-align:right;">
                                                                Hỏi
                                                                lúc: {{$data->created_at->format('H:i:s d/m/Y')}}</div>
                                                            <div id="reply_button" style="text-align:right">Trả
                                                                lời</div>
                                                        </div>
                                                    </div>
                                                    <div id="listreply">
                                                        {{--{{dd($data->tra_loi)}}--}}
                                                        @foreach($data->tra_loi as $row1)
                                                            <div class="lreplay"
                                                                 style="border:solid 1px #3a5795; position: relative">
                                                                <div class="repley-left">
                                                                    <p><img src="{{asset($row1->user->avatar())}}"
                                                                            width="100" height="100" alt=""
                                                                            class="avatar"></p>
                                                                    <a href="" target="_blank"><strong>{{$row1->user->code}}</strong></a>
                                                                    <br>
                                                                    <strong>{{$row1->user->ho_ten}}</strong>
                                                                    <br>
                                                                    Sinh viên
                                                                </div>
                                                                <div class="repley-right">
                                                                    <div class="repley-des">
                                                                        <img src="{{asset('dashboard/images/Choose-the-best-answercopy.png')}}"
                                                                             width="32" height="32">
                                                                        {!! $row1->noi_dung !!}
                                                                    </div>
                                                                    <p></p>
                                                                    <!--<p>---------------------------------------------</p>-->
                                                                    <div style="
                                                                    color:#3a5795;
                                                                    font-weight:bold;
                                                                    text-align:right;
                                                                    padding-right:10px;
                                                                    position: absolute;
                                                                    right: 10px;
                                                                    bottom: 20px;
                                                                        ">
                                                                        <p><span class="repley-des"></span>Trả lời lúc:
                                                                            {{$row1->updated_at}} Mã câu trả lời
                                                                            : {{$row1->id}}
                                                                        </p>
                                                                        <p id="reply_ask" style="display:inline"></p>
                                                                    </div>
                                                                    <div class="repley-report"></div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <span class="detail-status">
                <a href="#" class="answerother" title="">
                    &nbsp;Đóng chủ đề&nbsp;&nbsp;</a>
                <a href="#" class="answerother" title="">Chuyển vào kho kiến thức</a>
            </span>
                                                    <div id="replyform" class="areply2 form-group-sm"
                                                         style="display: none">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <label class="form-label">Trả lời câu hỏi</label>
                                                            </div>
                                                            <div class="panel-body">
                                                                <form action="{{route('study.addanswer')}}"
                                                                      method="post"
                                                                      enctype="multipart/form-data">
                                                                    {!! csrf_field() !!}
                                                                    <input type="hidden" name="user_id"
                                                                           value="{{\Illuminate\Support\Facades\Auth::guard('nguoidung')->user()->id}}">
                                                                    <input type="hidden" name="id_hoi_dap"
                                                                           value="{{$data->id}}">
                                                                    <label>Nội dung</label>
                                                                    <textarea name="noi_dung"
                                                                              class="mceEditor form-control"
                                                                              title="nhập câu trả lời"></textarea>
                                                                    <div class="form-group-sm">
                                                                        <label>File đính kèm</label>
                                                                        <input style="width: 200px" class="form-control"
                                                                               type="file"
                                                                               name="file_dinh_kem" value="file đính kèm">
                                                                    </div>
                                                                    <input style="float: right; margin-top: 10px"
                                                                           class="btn btn-sm btn-success" type="submit"
                                                                           value="Trả lời">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a id="answer" style="float: right; margin-top: 10px"
                                                           class="btn btn-sm btn-success">Trả lời</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bot')
    <script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('tinymce/tinymce_editor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#replyform').css('display', 'none');
            $(document).on('click', '#answer', function () {
                $('#replyform').css('display', 'block');
                $(this).css('display', 'none');
            })
        })
    </script>
    <script type="text/javascript">
        editor_config.selector = ".mceEditor";
        editor_config.path_absolute = "{{asset('/')}}";
        editor_config.language = "{{ Session::get('locale') }}";
        editor_config.forced_root_block = 'div';
        editor_config.relative_urls = false;
        editor_config.remove_script_host = false;
        editor_config.convert_urls = true;
        tinymce.init(editor_config);
    </script>
@endsection