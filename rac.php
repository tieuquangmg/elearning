<div class="container">
    <div class="page-section">
        <div class="row">
            <div class="col-md-9">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="#">Lớp đã đăng ký</a></li>
                    <li><a>{{$class->subject->name}}</a></li>
                    <li class="active">Danh sách bài học</li>
                </ol>
                <h1 class="title"><i class="fa fa-newspaper-o" aria-hidden="true"></i>{{$class->name}}</h1>
                <div class=" page-section padding-top-none">
                    <div class="media media-grid v-middle">
                        <div class="media-left">
                            <span class="icon-block half bg-blue-300 text-white">2</span>
                        </div>
                        <div class="media-body">
                            <h1 class="text-display-1 margin-none">{{$class->name}}</h1>
                        </div>
                    </div>
                    <br/>
                    <p class="text-body-2">{{$class->subject->description}}</p>
                    <p>...</p>
                </div>
                <h5 class="text-subhead-2 text-light">Danh sách bài học</h5>
                @foreach($class->subject->unit->sortBy('position') as $row)
                <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                    <div class="panel-heading panel-heading-gray" data-toggle="collapse"
                         data-target="#curriculum-2">
                        <div class="media">
                            <div class="media-left">
                                @if($row->image=='')
                                <img class="img_list"
                                     src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                @else
                                <img class="img_list" src="{{asset($row->image)}}">
                                @endif
                            </div>
                            <div class="media-body">
                                <h4 class="text-headline"><a
                                        href="{{url('study/unit/'.$row->id.'/'.$class->id)}}">{{$row->name}}</a>
                                </h4>
                                <p>{{$row->description}}</p>
                            </div>
                        </div>
                        <span class="collapse-status collapse-open">Open</span>
                        <span class="collapse-status collapse-close">Close</span>
                    </div>

                    <div class="list-group collapse" id="curriculum-2">
                        <div class="list-group-item media" data-target="website-take-course.html">
                            <div class="media-left">
                                <div class="text-crt">1.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> Installation
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">2
                                    :
                                    03
                                    min</div>
                            </div>
                        </div>
                        <div class="list-group-item media" data-target="website-take-course.html">
                            <div class="media-left">
                                <div class="text-crt">2.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> The MVC architectural pattern
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">25
                                    :
                                    01
                                    min</div>
                            </div>
                        </div>
                        <div class="list-group-item media" data-target="website-take-course.html">
                            <div class="media-left">
                                <div class="text-crt">3.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">12
                                    :
                                    10
                                    min</div>
                            </div>
                        </div>
                        <div class="list-group-item media" data-target="website-take-course.html">
                            <div class="media-left">
                                <div class="text-crt">4.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">1
                                    :
                                    25
                                    min</div>
                            </div>
                        </div>
                        <div class="list-group-item media" data-target="website-take-course.html">
                            <div class="media-left">
                                <div class="text-crt">5.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">22
                                    :
                                    30
                                    min</div>
                            </div>
                        </div>
                        <div class="list-group-item media" data-target="website-take-quiz.html">
                            <div class="media-left">
                                <div class="text-crt">6.</div>
                            </div>
                            <div class="media-body">
                                <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                            </div>
                            <div class="media-right">
                                <div class="width-100 text-right text-caption">10
                                    :
                                    00
                                    min</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <br/>
                <br/>

            </div>
            <div class="col-md-3">
                <div>
                    <div id="inst32" class="block_my_profiles sideblock">
                        <div class="content">
                            <!-- block_my_profiles  css-->
                            <div class="block_my_profile_left-sidebar1">
                                <div class="block_my_profile_anhdaidien">
                                    <a href="#">
                                        <img src="{{asset(Auth::user()->image)}}" width="100" height="100"
                                             alt="Imagen">
                                        <figure class="block_my_profile_bginfo2">
                                            <div class="block_my_profile_textvl2">
                                                <i class="fa fa-pencil-square-o fa-2x"><br><span style="font-family: Arial;
    font-size: 14px;
    font-style: normal;
    font-variant: normal;
    line-height: 20px;">Xem thông tin cá nhân</span></i>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
    <span class="block_my_profile_edit">
    </span>
                                <div class="block_my_profile_text">
                                    <a href="#" class="block_my_profile_text2"
                                       style="font-size: 16px;">{{$class->teacher->last_name}}</a>
                                    <p stye="font-size:12px !important;">{{Auth::user()->roles()->first()->display_name}}</p>
                                </div>

                            </div><!--end left-side_bar-1-->
                        </div>
                    </div>
                    <span id="sb-1" class="skip-block-to"></span>
                    <div id="inst44" class="block_toi_can_lam sideblock">
                        <div class="content">
                            <!-- block_toi_can_lams  css-->
                            <link href="./Khóa học_ TH901.QTV2_files/style(1).css" rel="stylesheet">
                            <div class="hr-top-tcl-dmh"></div>
                            <div class="block_toi_can_lam">
                                <div class="block_toi_can_lam_diem ">
                                    <a href="#">
                                        <i style="color:black;" class="fa fa-users"></i>
                                        <span style="">Danh sách lớp</span>
                                    </a>
                                </div>
                            </div><!--end left-side_bar-1-->
                        </div>
                    </div>
                </div>
                <span id="sb-3" class="skip-block-to"></span>
                <div id="inst82" class="block_tim sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(2).css" rel="stylesheet">
                        <div class="header_tim">
                            <p class="text1">TRAO ĐỔI SƯ PHẠM14</p>
                            <p class="text2"></p>

                        </div>
                        <div align="left">
                            <span class="glyphicon glyphicon-chevron-right" style="margin-left: 10px;"></span>
                            <a style="    font-size: 14px;
    color: black ;
    padding: 5px !important;
    display: inline-block;
    text-align: left;
    " href="#" target="_blank">Viết bài
                                trên TIM+</a></div>
                    </div>
                </div>
                <span id="sb-4" class="skip-block-to"></span>
                <div id="inst84" class="block_star_bank sideblock">
                    <div class="content">
                        <script>var url_tsb = "#";</script>
                        <!-- TSB API CSS
                        -->


                        <link href="./Khóa học_ TH901.QTV2_files/style(3).css" rel="stylesheet">
                        <link href="./Khóa học_ TH901.QTV2_files/style(4).css" rel="stylesheet">
                        <div class="block_star_bank_content">
                            <div class="block_ngan_hang_sao">
                                <div class="block_star_bank_header" style="background-color:#fff;">
                                    <p><i class="glyphicon glyphicon-star"></i> Ngân Hàng Sao</p>
                                </div>
                                <div class="block_star_bank_content">
                                    <div id="msg-mat-ket-noi" style="display:none;">Bạn
                                        chưa
                                        có
                                        tài
                                        khoản
                                        trên
                                        ngân
                                        hàng
                                        sao.Vui
                                        lòng
                                        liên
                                        hệ
                                        quản
                                        lý
                                        học
                                        tập
                                        để
                                        được
                                        hỗ
                                        trợ.</div>
                                    <ul class="block_star_bank_info">
                                        <li id="div-tsb-tk" class="tsb-tk"><span
                                                class="block_star_bank_account">Số tài khoản: </span><span
                                                id="tsb-tk-nhs"
                                                class="block_star_bank_number_account ">10033565</span></li>
                                        <li class="block_star_bank_star tsb-so-du" id="div-tsb-so-du"><span
                                                class="block_star_bank_account">Số sao hiện có: </span><span
                                                id="tsb-so-du" class="block_star_bank_number_star">147</span>&nbsp;<span
                                                class="glyphicon glyphicon-star"></span></li>
                                    </ul>
                                    <div style="padding-bottom: 10px;">
    <span class="glyphicon glyphicon-chevron-right"
          style="margin-left: 10px;"></span>&nbsp;&nbsp;<a style="margin-left: 5px;
    font-size: 12px;" target="_blank" class="block_star_bank_come_to_nhs"
                                                           href="#">Đến
                                            ngân hàng sao</a>
                                    </div>

                                </div>
                            </div>
                            <div style="
    display: block;
    text-align: center;
    height: 25px;
    ">

                                <a type="button" id="thuong-sao-btn" data-toggle="modal"
                                   data-target="#tsbModal-general" data-backdrop="static" data-keyboard="false"
                                   data-gv="vinhpq.gv" data-course-id="4376" data-forum-id="6034"
                                   onclick="tsb_getData_general(this);">Thưởng Sao</a>
                            </div>


                            <script type="text/javascript"
                                    src="./Khóa học_ TH901.QTV2_files/ajax_get_taikhoan.js.tải xuống"></script>
                            <script>addEventListener("load", function () {
                                    try {
                                        get_tai_khoan_tsb.GetA(url_tsb, function (data) {
                                            data = JSON.parse(data);
                                            if (data.id && data.so_du) {
                                                document.getElementById("tsb-tk-nhs").innerHTML = data.id;
                                                document.getElementById("tsb-so-du").innerHTML = data.so_du;
                                            }
                                            else {
                                                document.getElementById("div-tsb-tk").style.display = "none";
                                                document.getElementById("div-tsb-so-du").style.display = "none";
                                                document.getElementById("msg-mat-ket-noi").style.display = "";
                                            }
                                        }, function () {
                                            document.getElementById("div-tsb-tk").style.display = "none";
                                            document.getElementById("div-tsb-so-du").style.display = "none";
                                            document.getElementById("msg-mat-ket-noi").style.display = "";
                                        });
                                    } catch (e) {
                                        console.log(e);
                                        document.getElementById("div-tsb-tk").style.display = "none";
                                        document.getElementById("div-tsb-so-du").style.display = "none";
                                        document.getElementById("msg-mat-ket-noi").style.display = "";
                                    }
                                }, false);

                            </script>
                        </div>

                        <!-- Modal giangdv add 4-5-2015-->
                        <div class="modal fade" id="tsbModal-general" tabindex="-1" role="dialog"
                             aria-labelledby="tsbModalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title text-center" id="tsbModalLabel">THƯỞNG SAO THÀNH
                                            TÍCH HỌC TẬP</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div id="tsb-step-bar-general" class="hide">
                                                    <!-- progressbar -->
                                                    <ul id="progressbar">
                                                        <li id="tsb-bar-general-step-1" class="active">Tìm kiếm
                                                            sinh viên
                                                        </li>
                                                        <li id="tsb-bar-general-step-2">Nhập thông tin</li>
                                                        <li id="tsb-bar-general-step-3">Xác nhận thông tin</li>
                                                        <li id="tsb-bar-general-step-4">Kết thúc</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tsb-info-general" class="container-fluid hide">
                                            <div id="tsb-info-gv-sosaodathuong" class="row">
                                                <div id="tsb-info-gv" class="form-group col-xs-7">
                                                    <strong>Thông tin người chuyển:</strong>
                                                    <strong style="display:none" id="role">14</strong>
                                                    <strong style="display:none" id="tsb-fullname">Ths. Phạm
                                                        Quang Vinh</strong>
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <td class="tsb-info-tk" style="width:200px;">Giảng
                                                                viên:
                                                            </td>
                                                            <td id="tsb-usernameGV-general" class="tsb-strong">
                                                                ---
                                                            </td>
                                                        </tr>
                                                        <!--<tr>
                                                        <td class="tsb-info-tk" style="width:200px;">Tài khoản ngân hàng sao:</td>
                                                        <td id="tsb-tkGV-general" class="tsb-strong">---</td>
                                                        </tr>-->
                                                        <tr>
                                                            <td class="tsb-info-tk" style="width:200px;">Số sao
                                                                hiện có:
                                                            </td>
                                                            <td id="tsb-sosaoGV-general" class="tsb-strong">
                                                                ---
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="tsb-sosaodathuong-general"
                                                     class="col-xs-5 no-padding-left">
                                                    <div id="tsb_static_alert_general"
                                                         class="alert alert-success text-center" role="alert">
    <span class="glyphicon glyphicon glyphicon-star"
          aria-hidden="true"></span>
                                                        <span class="sr-only">Số sao:</span>
                                                        Số sao đã thưởng <br>(trong lớp môn này):
    <span id="so_sao_da_thuong_general"><img
            src="./Khóa học_ TH901.QTV2_files/loader_sm.gif"></span>
                                                        <span id="tsb_inp_forum_id_general" class="hide"></span>
                                                        <span id="tsb_ma_mon_general" class="hide"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tsb-search-info-sv" class="row">
                                                <div id="tsb-search-sv" class="col-xs-12">
                                                    <div class="form-group">
                                                        <label for="tsb_search_username_sv">Nhập tài khoản học
                                                            tập của sinh viên (bắt buộc)</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                   id="tsb_search_username_sv"
                                                                   placeholder="ví dụ: dungnq17072">
                                                            <div id="tsb-btn-search" class="input-group-addon">
    <span class="glyphicon glyphicon-search"
          aria-hidden="true"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="message_search" class="hide"><img
                                                            class="img-center"
                                                            src="./Khóa học_ TH901.QTV2_files/loader_md.gif">
                                                    </div>
                                                    <table id="tsb-tbl-list-sv"
                                                           class="table table-striped table-bordered table-hover hide">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Họ và tên</th>
                                                            <th>Lớp</th>
                                                            <th>Tài khoản học tập</th>
                                                            <th>Tài khoản sao</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tsb-tbl-list-sv-tbody">
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="tsb-info-sv" class="col-xs-12 hide">
                                                    <strong>Thông tin người nhận:</strong>
                                                    <div style="clear:both"></div>
                                                    <div style="float:left">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="tsb-info-tk" style="width:200px;">Tài
                                                                    khoản học tập:
                                                                </td>
                                                                <td id="tsb-usernameSV-general"
                                                                    class="tsb-strong"><img
                                                                        src="./Khóa học_ TH901.QTV2_files/loader_sm.gif">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tsb-info-tk" style="width:190px;">Họ
                                                                    và tên
                                                                </td>
                                                                <td id="tsb-hotenSV-general" class="tsb-strong">
                                                                    <img src="./Khóa học_ TH901.QTV2_files/loader_sm.gif">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tsb-info-tk" style="width:190px;">
                                                                    Lớp:
                                                                </td>
                                                                <td id="tsb-lopSV-general" class="tsb-strong">
                                                                    <img src="./Khóa học_ TH901.QTV2_files/loader_sm.gif">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tsb-info-tk" style="width:190px;">Tài
                                                                    khoản ngân hàng sao:
                                                                </td>
                                                                <td id="tsb-tkSV-general" class="tsb-strong">
                                                                    <img src="./Khóa học_ TH901.QTV2_files/loader_sm.gif">
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="tsb-avatar" style="float:right">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tsb_form_transfer" class="row">
                                                <form action="#"
                                                      method="" id="tsb_form_transfer_general_info">
                                                    <div id="tsb_form_transfer_general"
                                                         class="form-horizontal hide">
                                                        <div class="form-group">
                                                            <label for="inputSoSao_general"
                                                                   class="col-xs-3 control-label">Số sao
                                                                thưởng:</label>
                                                            <div class="col-xs-9">
                                                                <input type="text" class="form-control input-sm"
                                                                       id="inputSoSao_general"
                                                                       placeholder="Số sao thưởng">
    <span id="inputSoSao-error-general"
          class="text-danger hide">Số sao thưởng không được bằng 0.</span>
                                                                <label id="tsb-lb-so-sao-general"
                                                                       class="control-label label-normal hide"></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputLyDoThuong_general"
                                                                   class="col-xs-3 control-label">Lý do
                                                                thưởng:</label>
                                                            <div class="col-xs-6">
    <textarea role="button" data-toggle="popover"
              data-content="Ví dụ hay: Anh Châu đã có bài tập A3, PSD102B rất xuất sắc. Chúc anh sử dụng tốt kĩ năng giải quyết vấn đề trong công việc. Chúc mừng anh. Thầy TrungNT"
              class="form-control input-sm"
              id="inputLyDoThuong_general"
              placeholder="Để khích lệ tinh thần học tập của sinh viên, giảng viên cần viết tối thiều 50 kí tự."
              rows="3" data-original-title=""
              title=""></textarea>
    <span id="inputLyDoThuong-error-general"
          class="text-danger hide">Lý do thưởng không được để trống.</span>
                                                                <label id="tsb-lb-ly-do-thuong-general"
                                                                       class="control-label label-normal hide"></label>
                                                            </div>
                                                            <div id="img_vinhdanh" class="col-xs-2">
                                                                <div class="dropzone" id="dropzone" tmp_name=""
                                                                     name="" path=""></div>
                                                            </div>
    <span id="tsb_image_data" class="hide" name=""
          path=""></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- END DIV NHAP THONG TIN THUONG -->
                                        </div>
                                        <!-- END DIV INFO GENERAL -->
                                        <div class="row">
                                            <div id="tsb-modal-message" class="col-xs-12 hide">
                                                <!-- Tin nhắn sau khi thưởng sao sẽ hiển thị tại đây. -->
                                                <img class="img-center"
                                                     src="./Khóa học_ TH901.QTV2_files/loader_md.gif">
                                            </div>
                                        </div>

                                        <div id="tsb-modal-button" class="row">
                                            <div id="tsb-modal-general-step-1" class="form-group hide">
                                                <div class="col-xs-offset-5 col-xs-2">
                                                    <button id="tsb-btn-next-step-2" class="btn btn-danger"
                                                            href="#" role="button">Tiếp tục
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="tsb-modal-general-step-2" class="form-group hide">
                                                <div class="col-xs-offset-4 col-xs-2">
                                                    <button id="tsb-btn-back-step-1" class="btn btn-danger"
                                                            href="#" role="button">Quay lại
                                                    </button>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button id="tsb-btn-next-step-3" class="btn btn-danger"
                                                            href="#" role="button">Tiếp tục
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="tsb-modal-general-step-3" class="form-group hide">
                                                <div class="col-xs-offset-4 col-xs-2">
                                                    <button id="tsb-btn-back-step-2" class="btn btn-danger"
                                                            href="#" role="button">Quay lại
                                                    </button>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button id="tsb-btn-thuong-sao" class="btn btn-danger"
                                                            href="#" role="button">Thưởng sao
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="tsb-modal-close" class="form-group">
                                                <div class="col-xs-offset-5 col-xs-2">
                                                    <button id="tsb-btn-modal-close" type="button"
                                                            class="btn btn-danger" data-dismiss="modal">Đóng
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Modal body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id="sb-5" class="skip-block-to"></span>
                <div id="inst21" class="block_dggv sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(5).css" rel="stylesheet">

                        <div class="header_dggv">


                            <p class="header_text">KẾT QUẢ CÔNG VIỆC</p>


                        </div>
                        <div class="content_dggv"><a
                                href="#"
                                target="_blank" title="Click để xem chi tiết kết quả">Điểm trong tuần 7 :
                                <strong style="color:#FF0000">0</strong>/0<br> Điểm thưởng tuần 7 : <strong
                                    style="color:#006600">0</strong><br>Điểm course học : <strong
                                    style="color:#FF0000">0</strong>/0<br>Điểm thưởng course : <strong
                                    style="color:#006600">0</strong></a></div>
                    </div>
                </div>
                <span id="sb-6" class="skip-block-to"></span>
                <div id="inst37" class="block_noi_dung_mon_hoc sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(6).css" rel="stylesheet">
                        <div class="block_noi_dung_mon_hoc_content_header">
                            <a class="block_noi_dung_mon_hoc_text-topica collapsed" role="button"
                               data-toggle="collapse"
                               href="#"
                               aria-expanded="false" aria-controls="collapseExample" style="color: black;">
                                NỘI DUNG MÔN HỌC
                            </a>

                        </div>
                        <div class="collapse in" id="block_noi_dung_mon_hoc_collapseExample1">
                            <ul class="block_noi_dung_mon_hoc_list-unstyled">
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        1</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc "><a
                                        href="#">Tuần
                                        2</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        3</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        4</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        5</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        6</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        7</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        8</a></li>
                                <li class="block_noi_dung_mon_hoc_litext-tpc"><a
                                        href="#">Tuần
                                        9</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span id="sb-7" class="skip-block-to"></span>
                <div id="inst39" class="block_gioi_thieu_mon sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(7).css" rel="stylesheet">
                        <div class="block_gioi_thieu_mon_content_header">

                            <a class="block_gioi_thieu_mon_text-topica" role="button" data-toggle="collapse"
                               href="http://elearning.tvu.topica.vn/course/view.php?id=4376#collapseExample1"
                               aria-expanded="false" aria-controls="collapseExample" style="color:black;">
                                GIỚI THIỆU MÔN HỌC
                            </a>

                        </div>
                        <div class="collapse in" id="collapseExample1">

                            <ul class="block_gioi_thieu_mon_list-unstyled">

                                <li class="block_gioi_thieu_mon_litext-tpc"><a
                                        href="http://elearning.tvu.topica.vn/course/view_vmh.php?id=4376&amp;title=ttlh">Về
                                        môn học</a></li>
                                <li class="block_gioi_thieu_mon_litext-tpc"><a
                                        href="http://elearning.tvu.topica.vn/course/view.php?id=4376&amp;title=ctd">Cách
                                        tính điểm</a></li>

                                <li class="block_gioi_thieu_mon_litext-tpc"><a
                                        href="http://elearning.tvu.topica.vn/course/view_tlht.php?id=4376&amp;title=tlht">Tài
                                        liệu hướng dẫn chung</a></li>
                                <li class="block_gioi_thieu_mon_litext-tpc"><a
                                        href="https://docs.google.com/a/topica.edu.vn/forms/d/1NtCvCL1FQYIp-LnDmDBkY-9G6FItY2ZnPg6MKki4EhA/viewform"
                                        target="_blank">Đánh giá khóa học</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <span id="sb-8" class="skip-block-to"></span>
                <div id="inst65" class="block_admin sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(8).css" rel="stylesheet">
                        <div class="block_admin_content_header">
                            <a class="block_admin_text-topica" role="button" data-toggle="collapse"
                               href="http://elearning.tvu.topica.vn/course/view.php?id=4376#admin_collapse"
                               aria-expanded="false" aria-controls="collapseExample" style="color:black;">
                                ĐIỀU HÀNH
                            </a>
                        </div>
                        <div class="collapse in" id="admin_collapse">
                            <ul class="list_admin">
                                <li class="r0">
                                    <div class="icon column c0"><img src="./Khóa học_ TH901.QTV2_files/user.gif"
                                                                     alt=""></div>
                                    <div class="column c1"><a target="_blank"
                                                              href="http://elearning.tvu.topica.vn/user/user_not_login_report/index.php?course_id=4376">LMS720
                                            - Báo cáo SV chưa login</a></div>
                                </li>
                                <li class="r1">
                                    <div class="icon column c0"></div>
                                    <div class="column c1"><a
                                            href="http://elearning.tvu.topica.vn/user/view.php?id=34351&amp;course=4376">Profile</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span id="sb-1" class="skip-block-to"></span>
                <div id="inst59" class="block_my_courses_courseview sideblock">
                    <div class="content">
                        <!-- block_my_courses_courseview css -->


                        <link href="./Khóa học_ TH901.QTV2_files/style(9).css" rel="stylesheet">
                        <script type="text/javascript"
                                src="./Khóa học_ TH901.QTV2_files/material.min.js.tải xuống"></script>
                        <link href="./Khóa học_ TH901.QTV2_files/css" rel="stylesheet" type="text/css">
                        <link rel="stylesheet" type="text/css"
                              href="./Khóa học_ TH901.QTV2_files/material.teal-red.min.css">
                        <link rel="stylesheet"
                              href="./Khóa học_ TH901.QTV2_files/jquery.mCustomScrollbar(1).css">
                        <div class="block_my_courses_courseview_content_header">

                            <p>KHÓA HỌC CỦA TÔI</p>

                        </div>

                        <div class="block_my_courses_courseview_content">
                            <div id="block_my_courses_courseview_content"
                                 class="mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar">
                                <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                                     style="max-height: none;" tabindex="0">
                                    <div id="mCSB_2_container"
                                         class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                         style="position:relative; top:0; left:0;" dir="ltr">

                                        <ul class="block_my_courses_courseview_list-unstyled">


                                            <li>
                                                <div class="discussion-item2 no-margin" style="display: block">
                                                    <div class="no-padding discussion-item-main">
                                                        <div class="no-margin discussion-item-content">
                                                            <div class="no-margin cleanslate"><a
                                                                    href="http://elearning.tvu.topica.vn/course/view.php?id=4376">
                                                                    <div class="block_my_courses_courseview_icon"><i
                                                                            class="glyphicon glyphicon-bookmark"> </i>
                                                                    </div>
                                                                    <div class="block_my_courses_courseview_text">TH901.QTV2</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear:both"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="mCSB_2_scrollbar_vertical"
                                         class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"
                                         style="display: none;">
                                        <div class="mCSB_draggerContainer">
                                            <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                 style="position: absolute; min-height: 50px; height: 0px; top: 0px;"
                                                 oncontextmenu="return false;">
                                                <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                            </div>
                                            <div class="mCSB_draggerRail"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id="sb-9" class="skip-block-to"></span>
                <div id="inst5498" class="block_admin sideblock">
                    <div class="content">
                        <link href="./Khóa học_ TH901.QTV2_files/style(8).css" rel="stylesheet">
                        <div class="block_admin_content_header">
                            <a class="block_admin_text-topica" role="button" data-toggle="collapse"
                               href="http://elearning.tvu.topica.vn/course/view.php?id=4376#admin_collapse"
                               aria-expanded="false" aria-controls="collapseExample" style="color:black;">
                                ĐIỀU HÀNH
                            </a>
                        </div>
                        <div class="collapse in" id="admin_collapse">
                            <ul class="list_admin">
                                <li class="r0">
                                    <div class="icon column c0"><img src="./Khóa học_ TH901.QTV2_files/user.gif"
                                                                     alt=""></div>
                                    <div class="column c1"><a target="_blank"
                                                              href="http://elearning.tvu.topica.vn/user/user_not_login_report/index.php?course_id=4376">LMS720
                                            - Báo cáo SV chưa login</a></div>
                                </li>
                                <li class="r1">
                                    <div class="icon column c0"></div>
                                    <div class="column c1"><a
                                            href="http://elearning.tvu.topica.vn/user/view.php?id=34351&amp;course=4376">Profile</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <span id="sb-2" class="skip-block-to"></span></td>

                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                    <div class="panel-heading panel-collapse-trigger">
                        <h4 class="panel-title">Lớp học liên quan</h4>
                    </div>
                    <div class="panel-body list-group">
                        <ul class="list-group list-group-menu">

                            <div class="item">
                                <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1"
                                     data-animated>
                                    <div class="panel-body">
                                        <div class="media media-clearfix-xs">
                                            <div class="media-left">
                                                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                    <span class="img icon-block s90 bg-default"></span>
    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
    <img class="v-center height-100 width-100" src="{{asset($value->subject->image)}}">
    </span>
                                                    <a href="website-course.html"
                                                       class="overlay overlay-full overlay-hover overlay-bg-white">
    <span class="v-center">
    <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading margin-v-5-3"><a
                                                        href="website-course.html">{{$value->name}}</a></h4>
                                                <p class="small margin-none">
                                                    ------------
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($feature as $value)
                            <li class="list-group-item">
                                <div class="relate-course clearfix">
                                    <div class="relate-course-image">
                                        <a href="{{asset('/')}}" title=""><img alt=""
                                                                               src="{{asset($value->subject->image)}}"></a>
                                    </div>
                                    <div class="relate-couse-detail">
                                        <h3 class="relate-course-name"><a href="">{{$value->name}}</a></h3>
                                        <div class="relate-course-fee"><strong></strong></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
./Khóa học_ TH901.QTV2_files