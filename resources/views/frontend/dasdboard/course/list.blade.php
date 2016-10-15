@extends('frontend.dasdboard._layout.layout')
@section('content')
    <link href="{{asset('dashboard/customs/mycourse/style(1).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(2).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(3).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(4).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(5).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(6).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(7).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(8).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(9).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(10).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(11).css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/customs/mycourse/style(12).css')}}" rel="stylesheet">
    <div id="content">
        <div class="row">
            <div class="col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
                    <li class="active">Các lớp dang học</li>
                </ol>
            </div>
        </div>
        <table id="layout-table" summary="layout">
            <tbody>
            <tr>
                <td style="width: 175px;" id="left-column">
                    <div>
                        <div id="inst27" class="block_my_profiles sideblock">
                            <div class="content">
                                <!-- block_my_profiles  css-->
                                <div class="block_my_profile_left-sidebar1">
                                    <div class="block_my_profile_anhdaidien">
                                        <a href="#">
                                            <img src="{{asset(Auth::user()->image)}}" width="100"
                                                    height="100" alt="Imagen">
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
                                        <a href="#"
                                           class="block_my_profile_text2" style="font-size: 16px;">{{Auth::user()->full_name}}</a>
                                        <p stye="font-size:12px !important;">{{Auth::user()->roles->first()->display_name}}</p>
                                    </div>

                                </div><!--end left-side_bar-1-->
                            </div>
                        </div>
                        <span id="sb-1" class="skip-block-to"></span>
                        <div id="inst92" class="block_tim sideblock">
                            <div class="content">
                            </div>
                        </div>
                        <span id="sb-2" class="skip-block-to"></span>
                        <div id="inst19" class="block_my_courses sideblock">
                            <div class="content">
                                <!-- block_my_courses css -->


                                <div class="block_my_courses_content_header">

                                    <a class="block_my_courses_text-topica" role="button" data-toggle="collapse"
                                       href="{{route('study.mycourse')}}"
                                       aria-expanded="false" aria-controls="collapseExample"
                                       style="color:black;font-size:14px;">
                                        Khóa học của tôi
                                    </a>

                                </div>
                                <div class="collapse in" id="collapseExample_my_course">

                                    <ul class="block_my_courses_list-unstyled">

                                        <li class="block_my_courses_litext-tpc"><a title="TH901.QTV2"
                                                                                   href="#">TH901.QTV2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-3" class="skip-block-to"></span>
                        <div id="inst21" class="block_support_learning sideblock">
                            <div class="content">
                                <div class="block_support_learning_content_header" style="background-color: #fff;">
                                    <a class="block_support_learning_text-topica" role="button" data-toggle="collapse"
                                       href="#" aria-expanded="false"
                                       aria-controls="collapseExample" style="color:black;font-size:14px;">
                                        Hỗ trợ học tập
                                    </a>
                                </div>
                                <div class="collapse in" id="collapseExample1">

                                    <ul class="block_support_learning_list-unstyled">

                                        <li class="block_support_learning_litext-tpc"><a target="_blank"
                                                                                         href="#">Diễn
                                                đàn</a></li>
                                        <li class="block_support_learning_litext-tpc"><a
                                                    href="#">H2472</a></li>
                                        <li class="block_support_learning_litext-tpc">
                                            <a target="_blank" href="#">Báo
                                                lỗi học liệu</a></li>

                                        <li class="block_support_learning_litext-tpc"><a
                                                    href="#">Online S</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-4" class="skip-block-to"></span>
                        <div id="inst20" class="block_personal_profile sideblock">
                            <div class="content">
                                <div class="block_personal_profile_content_header" style="background-color: #fff;">

                                    <a class="block_personal_profile_text-topica" role="button" data-toggle="collapse"
                                       href="#" aria-expanded="false"
                                       aria-controls="collapseExample" style="color:black;font-size:14px;">
                                        Hồ sơ cá nhân
                                    </a>

                                </div>
                                <div class="collapse in" id="collapseExample">

                                    <ul class="block_personal_profile_list-unstyled">
                                        <li class="block_personal_profile_litext-tpc"><a
                                                    href="#">Thông
                                                Tin cá nhân</a></li>
                                        <li class="block_personal_profile_litext-tpc"><a
                                                    href="#">LIPE của
                                                tôi </a></li>
                                        <li class="block_personal_profile_litext-tpc"><a
                                                    href="#">Hồ sơ học tập</a>
                                        </li>
                                        <li class="block_personal_profile_litext-tpc"><a
                                                    href="#"
                                                    target="_blank">Đăng kí học lại thi lại</a></li>
                                        <li class="block_personal_profile_litext-tpc"><a target="_blank"
                                                                                         href="https://docs.google.com/a/topica.edu.vn/forms/d/1ijpWaKLxrCDSaYGmvacSEZF9h3K6HDVkjHX0VMt_0KA/viewform">Lấy
                                                ý kiến sinh viên</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-5" class="skip-block-to"></span>
                        <div id="inst96" class="block_report sideblock">
                            <div class="content">
                                <div class="block_report_content_header" style="background-color: #fff;">
                                    <a class="block_report_text-topica" role="button" data-toggle="collapse"
                                       href="#" aria-expanded="false"
                                       aria-controls="collapseExample" style="color:black;font-size:14px;">BÁO CÁO</a>
                                </div>
                                <div class="collapse in" id="collapseExample234">
                                    <ul class="block_report_list-unstyled">
                                        <li class="block_report_litext-tpc"><a
                                                    href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> Báo cáo
                                                H2472</a><br>
                                            <a href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> Báo cáo công việc
                                                sinh viên theo Course</a></li>
                                        <li class="block_report_litext-tpc"><a
                                                    href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> Báo cáo LMS200</a>
                                        </li>
                                        <li class="block_report_litext-tpc"><a
                                                    href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> NAMVIET-BCGVCM</a>
                                        </li>
                                        <li class="block_report_litext-tpc"><a
                                                    href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> NAMVIET-BCGVDN</a>
                                        </li>
                                        <li class="block_report_litext-tpc"><a
                                                    href="#"><span
                                                        class="glyphicon glyphicon-list-alt"></span> ABBA-KetraphakyGVHD</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-6" class="skip-block-to"></span>
                        <div id="inst29" class="block_thongbao sideblock">
                            <div class="content">
                                <div class="block_thongbao_content_header" style="background-color: #fff;">

                                    <a class="block_thongbao_text-topica" role="button" data-toggle="collapse"
                                       href="#" aria-expanded="false"
                                       aria-controls="collapseExample" style="color:black;font-size:14px;">
                                        Thông Báo
                                    </a>

                                </div>
                                <div class="collapse in" id="collapsethongbao">
                                    <ul class="block_thongbao-unstyled">
                                        <li>Chưa có thông báo nào cho bạn!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-7" class="skip-block-to"></span></div>
                </td>
                <td id="middle-column"><span id="maincontent"></span>
                    <div></div>
                    <ul class="unlist print_course_middle">
                        @foreach($classes as $row)
                        <li>
                            <div class="coursebox clearfix">
                                <div class="main-content-body">
                                    <div class="main-content-body-left">
                                        <div class="main-content-body-left_tieubieu">
                                            <div>
                                                <a id="main-content-body-left_thumbnail3"
                                                   href="{{route('study.subject',$row->id)}}">
                                                    <img src="{{asset($row->subject->image)}}"
                                                         width="180px" height="225px">
                                                    <div id="main-content-body-left_title3">
                                                        <div class="main-content-body-left_textvl">
                                                            <div class="main-content-body-left_icon_course">
                                                                <i class="fa fa-graduation-cap fa-3x"></i>
                                                            </div>
                                                            <div class="main-content-body-left_icon_enter_course">
                                                                VÀO LỚP
                                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-content-body-right">
                                        <a href="{{route('study.subject',$row->id)}}">
                                            <div class="main-title-body">
                                                <div class="main-title-body_mtb-left">
                                                    <p class="main-title-body-code-class">{{$row->code}}</p>
                                                    <p class="main-title-body-name-class ">{{$row->subject->name}}</p>
                                                </div>
                                                <div class="main-title-body_mtb-right"><p>Thời gian học: <span
                                                                class="ngaythang">28/08/2016 - 06/11/2016</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="main-body-body">
                                            <div class="main-body-body-left">
                                                <div class="main-body-body-left_thongtin">
                                                    <div class="main-body-body-left_gv">GIẢNG VIÊN&nbsp;&nbsp;</div>
                                                    <div class="main-body-body-left_ttgv">
                                                        {{$row->teacher->full_name}}
                                                    </div>
                                                </div>
                                                <div class="main-body-body-left_space"></div>
                                                <div class="main-body-body-left_dcc"></div>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div class="main-body-body-right">
                                                <div class="main-body-body-right_tcl">
                                                    <p>NHIỆM VỤ HỌC TẬP </p>
                                                    <ul class="list-unstyled">
                                                        <li class="body-ul">
                                                            <span class="main-body-body-leftlip">A</span>
                                                            <a href="{{route('study.subject',$row->id)}}">Bạn đăng
                                                                nhập với quyền {{Auth::user()->roles->first()->display_name}}</a></li>
                                                    </ul>
                                                </div>

                                                <div class="main-body-body-right_tuan3"><p
                                                            class="main-body-body-right_t3">Tuần 7</p>
                                                    <p class="main-body-body-right_nthang">03/10-09/10</p>
                                                    <a href="{{route('study.subject',$row->id)}}">
                                                        <button type="button"
                                                                class="btn btn-danger btn-lg btn-block main-body-body-right_vaolop">
                                                            <b style="font-size: 14px;">VÀO LỚP </b><span
                                                                    class="glyphicon glyphicon-chevron-right glp"
                                                                    style="font-size: 12px;margin-left:5px;"></span>
                                                        </button>
                                                    </a>
                                                    <div style="clear:both"></div>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div><!--end body-body-->
                                    </div>
                                </div> <!--1-->
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <br></td>
                <td style="width: 175px;" id="right-column">
                    <div>
                        <div id="inst22" class="block_vinh_danh_sinh_vien sideblock">
                            <div class="content">
                                <!-- Bảng vinh danh ngân hàng sao START -->
                                <!-- TSB TBL-VINHDANH CSS -->
                                <link href="{{asset('dashboard/images')}}/dataTables.bootstrap.css" rel="stylesheet">
                                <link href="{{asset('dashboard/images')}}/toastr.css" rel="stylesheet">

                                <link rel="stylesheet" href="{{asset('dashboard/images')}}/jquery.dataTables.css">
                                <link href="{{asset('dashboard/images')}}/edit_style.css" rel="stylesheet">
                                <div class="block_vinh_danh_sinh_vien">

                                    <span id="tsb-chuong-trinh" chuong_trinh="1" url="#"
                                          course_id="" ma_mon=""></span>
                                    <span id="tsb-username-like" username_like="vinhpq.gv" role="14"></span>

                                    <div class="block_vinh_danh_sinh_vien_content_header"
                                         style="background-color:#fff;">
                                        <p><i class="fa fa-certificate"></i>Vinh danh sinh viên</p>
                                    </div>


                                    <div class="tabs">
                                        <div id="tab-header"><!-- Thêm mới div này -->
                                            <ul class="tab-links">
                                                <li class="active">
                                                    <a class="tab-links-first-a tsb-tooltip" data-toggle="tooltip"
                                                       data-placement="top" title=""
                                                       href="{{route('study.mycourse')}}#tab-truong" id="tab-truong"
                                                       onclick="tsb_tab_click(this);"
                                                       data-original-title="Sinh viên có thành tích tốt">Trường</a>
                                                </li>
                                                <li class="">
                                                    <a class="tab-links-second-a  tsb-tooltip" data-toggle="tooltip"
                                                       data-placement="top" title=""
                                                       href="#"
                                                       onclick="tsb_tab_click(this);"
                                                       data-original-title="Danh sách sinh viên có thành tích tốt nhất lớp">Lớp</a>
                                                </li>

                                            </ul>

                                        </div><!-- END Thêm mới div này -->

                                        <div class="tab-content">
                                            <div id="tab-truong" class="tab active" style="display: block;">
                                                <table class="table table-striped" id="tsb-top-truong-table">
                                                    <tbody id="tsb-top-truong-table-body">
                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset('dashboard/images')}}/pix(1).php">
                                                                <div id="tittle11">
                                                                    <div>#
                                                                        1</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_name">
                                                            <div class="namevdsv">
                                                                <a href="{{route('study.mycourse')}}#Modal_History"
                                                                   class="tsb-tooltip" data-toggle="modal"
                                                                   data-target="#Modal_History"
                                                                   username_nhan="phunglth3004"
                                                                   loai_chuc_mung="top_truong"
                                                                   onclick="tsb_lich_su_thuong_sv(this);"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Họ và tên: Lê Thanh Hải Phụng. <br>Lớp: 131124.QTV2">
                                                                    phunglth3004
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">1</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-phunglth3004" position="block"
                                                               loai_chuc_mung="top_truong" id="phunglth3004"
                                                               liked_yn="N" tong_so_sao="1" onclick="tsb_like(this);">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </a><br>
		<span class="count-like">
			<a href="#" id="tsb-ds-like-top_truong-phunglth3004" data-toggle="modal"
               class="tsb-tooltip tsb-ds-like-top_truong-phunglth3004" data-placement="top" title=""
               username_nhan="phunglth3004" loai_chuc_mung="top_truong" data-target="#Modal_Like"
               onclick="get_ds_liked(this);"
               data-original-title="huet, hueht, chinl và 18 người khác đã chúc mừng điều này">
				21
			</a></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset('dashboard/images')}}/pix(2).php">
                                                                <div id="tittle11">
                                                                    <div>#
                                                                        1</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_name">
                                                            <div class="namevdsv">
                                                                <a href="{{route('study.mycourse')}}#Modal_History"
                                                                   class="tsb-tooltip" data-toggle="modal"
                                                                   data-target="#Modal_History"
                                                                   username_nhan="hailnd09752"
                                                                   loai_chuc_mung="top_truong"
                                                                   onclick="tsb_lich_su_thuong_sv(this);"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Họ và tên: Lưu Ngọc Đoàn Hải. <br>Lớp: 154726.XTV4">
                                                                    hailnd09752
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">1</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-hailnd09752" position="block"
                                                               loai_chuc_mung="top_truong" id="hailnd09752" liked_yn="N"
                                                               tong_so_sao="1" onclick="tsb_like(this);">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </a><br>
		<span class="count-like">
			<a href="#" id="tsb-ds-like-top_truong-hailnd09752" data-toggle="modal"
               class="tsb-tooltip tsb-ds-like-top_truong-hailnd09752" data-placement="top" title=""
               username_nhan="hailnd09752" loai_chuc_mung="top_truong" data-target="#Modal_Like"
               onclick="get_ds_liked(this);" data-original-title=" đã chúc mừng điều này">
				0
			</a></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset('dashboard/images')}}/pix(3).php">
                                                                <div id="tittle11">
                                                                    <div>#
                                                                        1</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_name">
                                                            <div class="namevdsv">
                                                                <a href="{{route('study.mycourse')}}#Modal_History"
                                                                   class="tsb-tooltip" data-toggle="modal"
                                                                   data-target="#Modal_History"
                                                                   username_nhan="thuonglm10592"
                                                                   loai_chuc_mung="top_truong"
                                                                   onclick="tsb_lich_su_thuong_sv(this);"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Họ và tên: Lê Minh Thưởng. <br>Lớp: 154726.XTV4">
                                                                    thuonglm10592
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">3</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-thuonglm10592"
                                                               position="block" loai_chuc_mung="top_truong"
                                                               id="thuonglm10592" liked_yn="N" tong_so_sao="3"
                                                               onclick="tsb_like(this);">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </a><br>
		<span class="count-like">
			<a href="#" id="tsb-ds-like-top_truong-thuonglm10592" data-toggle="modal"
               class="tsb-tooltip tsb-ds-like-top_truong-thuonglm10592" data-placement="top" title=""
               username_nhan="thuonglm10592" loai_chuc_mung="top_truong" data-target="#Modal_Like"
               onclick="get_ds_liked(this);" data-original-title=" đã chúc mừng điều này">
				0
			</a></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset('dashboard/images')}}/pix(4).php">
                                                                <div id="tittle11">
                                                                    <div>#
                                                                        1</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_name">
                                                            <div class="namevdsv">
                                                                <a href="{{route('study.mycourse')}}#Modal_History"
                                                                   class="tsb-tooltip" data-toggle="modal"
                                                                   data-target="#Modal_History"
                                                                   username_nhan="namth27942"
                                                                   loai_chuc_mung="top_truong"
                                                                   onclick="tsb_lich_su_thuong_sv(this);"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Họ và tên: Tô Hoàng Nam. <br>Lớp: 164726.ZTV7">
                                                                    namth27942
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">1</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-namth27942" position="block"
                                                               loai_chuc_mung="top_truong" id="namth27942" liked_yn="N"
                                                               tong_so_sao="1" onclick="tsb_like(this);">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </a><br>
		<span class="count-like">
			<a href="#" id="tsb-ds-like-top_truong-namth27942" data-toggle="modal"
               class="tsb-tooltip tsb-ds-like-top_truong-namth27942" data-placement="top" title=""
               username_nhan="namth27942" loai_chuc_mung="top_truong" data-target="#Modal_Like"
               onclick="get_ds_liked(this);" data-original-title="quanpq79942, quanpq79942 đã chúc mừng điều này">
				2
			</a></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset('dashboard/images')}}/pix(5).php">
                                                                <div id="tittle11">
                                                                    <div>#
                                                                        1</div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_name">
                                                            <div class="namevdsv">
                                                                <a href="{{route('study.mycourse')}}#Modal_History"
                                                                   class="tsb-tooltip" data-toggle="modal"
                                                                   data-target="#Modal_History"
                                                                   username_nhan="badq38812" loai_chuc_mung="top_truong"
                                                                   onclick="tsb_lich_su_thuong_sv(this);"
                                                                   data-placement="top" title=""
                                                                   data-original-title="Họ và tên: Đoàn  Quang Bá. <br>Lớp: 154726.ZTV6">
                                                                    badq38812
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">24</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-badq38812" position="block"
                                                               loai_chuc_mung="top_truong" id="badq38812" liked_yn="N"
                                                               tong_so_sao="24" onclick="tsb_like(this);">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </a><br>
		<span class="count-like">
			<a href="#" id="tsb-ds-like-top_truong-badq38812" data-toggle="modal"
               class="tsb-tooltip tsb-ds-like-top_truong-badq38812" data-placement="top" title=""
               username_nhan="badq38812" loai_chuc_mung="top_truong" data-target="#Modal_Like"
               onclick="get_ds_liked(this);" data-original-title="tuudv33732 đã chúc mừng điều này">
				1
			</a></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="tr-last">
                                                        <td colspan="5" class="text-center"><a
                                                                    href="{{route('study.mycourse')}}#Modal_Truong"
                                                                    data-toggle="modal" class="tsb-tooltip"
                                                                    data-placement="top" title=""
                                                                    onclick="tsb_modal_click(this);"
                                                                    data-original-title="Bảng chi tiết">Xem thêm</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="tab-lop" class="tab" style="display: none;">
                                                <table class="table table-striped" id="tsb-top-lop-table">
                                                    <tbody id="tsb-top-lop-table-body">
                                                    <tr>
                                                        <td colspan="5" class="text-center">Chỉ dành cho sinh viên</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-center"><a
                                                                    href="#"
                                                                    data-toggle="modal"
                                                                    class="tsb-tooltip vinh_danh_sinh_vien_modallop"
                                                                    data-placement="top" title=""
                                                                    onclick="tsb_modal_click(this);"
                                                                    data-original-title="Bảng chi tiết">Xem thêm</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="tab-toitruong" class="tab" style="display: none;">
                                                <table class="table table-striped" id="tsb-top-toitruong-table">
                                                    <tbody id="tsb-top-toitruong-table-body">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- END tab content -->
                                    </div> <!-- END Thêm mới div này -->

                                    <!-- Modal Truong  tabindex="-1" role="dialog" aria-labelledby="Modal_Mon_Label" aria-hidden="true"  id="Modal_Mon_Label"-->
                                    <div class="modal fade" id="Modal_Truong">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title text-center">Bảng vinh danh</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="tsb-modal-truong-table"
                                                           class="table table-striped tsb-tbl-detail">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center" style="width: 25px;"></th>
                                                            <th class="text-center">Sinh viên <i class="fa fa-user"></i>
                                                            </th>
                                                            <th class="text-center">Số sao được thưởng<i
                                                                        class="fa fa-star"></i></th>
                                                            <th class="text-center">Số chúc mừng <i
                                                                        class="fa fa-thumbs-up"></i></th>
                                                            <th class="text-center"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tsb-modal-truong-table-body">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Lop  tabindex="-1" role="dialog" aria-labelledby="Modal_Course_Label" aria-hidden="true" id="Modal_Course_Label"-->
                                    <div class="modal fade" id="Modal_Lop">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title text-center">Bảng vinh danh</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="tsb-modal-lop-table"
                                                           class="table table-striped tsb-tbl-detail">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center" style="width: 25px;"></th>
                                                            <th class="text-center">Sinh viên <i class="fa fa-user"></i>
                                                            </th>
                                                            <th class="text-center">Số sao được thưởng<i
                                                                        class="fa fa-star"></i></th>
                                                            <th class="text-center">Số chúc mừng <i
                                                                        class="fa fa-thumbs-up"></i></th>
                                                            <th class="text-center"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tsb-modal-lop-table-body">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--Modal Chúc Mừng  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  id="myModalLabel"-->
                                    <div class="modal fade" id="Modal_Like">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title">Những người đã chúc mừng thành tích này</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table id="tsb-chuc-mung-modal-table"
                                                           class="table table-hover tsb-tbl-detail">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th style="width: 380px;">Sinh viên</th>
                                                            <th>Lớp</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tsb-chuc-mung-modal-table-body">
                                                        <!-- noi dung them boi nut click -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Lịch sử thưởng  -->
                                    <div class="modal fade" id="Modal_History">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title text-center" id="modal-title-ls-thuong">Thành
                                                        tích của sinh viên</h4>
                                                    <img src="#" class="dsm-avatar"
                                                         id="modal-title-avatar">
                                                </div>
                                                <div class="modal-body">
                                                    <table id="tsb-tbl-detail-sv"
                                                           class="table table-striped tsb-tbl-detail">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center" style="width: 25px;"></th>
                                                            <th class="text-center">Người thưởng <i
                                                                        class="fa fa-user"></i></th>
                                                            <th class="text-center">Số sao <i class="fa fa-star"></i>
                                                            </th>
                                                            <th class="text-center">Ngày <i class="fa fa-calendar"></i>
                                                            </th>
                                                            <th class="text-center">Lý do <i class="fa fa-comment"></i>
                                                            </th>
                                                            <th class="text-center">Số <i class="fa fa-thumbs-up"></i>
                                                            </th>
                                                            <th class="text-center"><i class="fa fa-thumbs-up"></i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="tsb-tbl-body-detail-sv">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <span id="sb-8" class="skip-block-to"></span>
                        <div id="inst94" class="block_star_bank sideblock">
                            <div class="content">
                                <script>var url_tsb = "#";</script>
                                <!-- TSB API CSS
                            -->
                                <div class="block_star_bank_content">
                                    <div class="block_ngan_hang_sao">
                                        <div class="block_star_bank_header" style="background-color:#fff;">
                                            <p><i class="glyphicon glyphicon-star"></i> Ngân Hàng Sao</p>
                                        </div>
                                        <div class="block_star_bank_content">
                                            <div id="msg-mat-ket-noi">Bạn
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
                                                <li id="div-tsb-tk" class="tsb-tk" style="display: none;"><span
                                                            class="block_star_bank_account">Số tài khoản: </span><span
                                                            id="tsb-tk-nhs" class="block_star_bank_number_account ">10033565</span>
                                                </li>
                                                <li class="block_star_bank_star tsb-so-du" id="div-tsb-so-du"
                                                    style="display: none;"><span class="block_star_bank_account">Số sao hiện có: </span><span
                                                            id="tsb-so-du"
                                                            class="block_star_bank_number_star">147</span>&nbsp;<span
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

                                    <script type="text/javascript"
                                            src="{{asset('dashboard/images')}}/ajax_get_taikhoan.js.tải xuống"></script>
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
                                                                            src="{{asset('dashboard/images')}}/loader_sm.gif"></span>
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
                                                                        src="{{asset('dashboard/images')}}/loader_md.gif">
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
                                                                                    src="{{asset('dashboard/images')}}/loader_sm.gif">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tsb-info-tk" style="width:190px;">Họ
                                                                            và tên
                                                                        </td>
                                                                        <td id="tsb-hotenSV-general" class="tsb-strong">
                                                                            <img src="{{asset('dashboard/images')}}/loader_sm.gif">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tsb-info-tk" style="width:190px;">
                                                                            Lớp:
                                                                        </td>
                                                                        <td id="tsb-lopSV-general" class="tsb-strong">
                                                                            <img src="{{asset('dashboard/images')}}/loader_sm.gif">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="tsb-info-tk" style="width:190px;">Tài
                                                                            khoản ngân hàng sao:
                                                                        </td>
                                                                        <td id="tsb-tkSV-general" class="tsb-strong">
                                                                            <img src="{{asset('dashboard/images')}}/loader_sm.gif">
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
                                                        <form action="#" method=""
                                                              id="tsb_form_transfer_general_info">
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
                                                             src="{{asset('dashboard/images')}}/loader_md.gif">
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
                        <span id="sb-9" class="skip-block-to"></span>
                        <div id="inst95" class="block_online_users sideblock">
                            <div class="content">
                                <div class="block_online_users">
                                    <div class="block_online_users_header">
                                        <p><i class="fa fa-comment"></i>&nbsp;&nbsp;&nbsp;THÀNH VIÊN ONLINE</p>
                                    </div>
                                    <div class="block_online_users_content">
                                        <div id="block_online_users_content"
                                             class="mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar">
                                            <div id="mCSB_2"
                                                 class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                                                 style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container"
                                                     class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                                     style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div id="mCSB_2"
                                                         class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
                                                         style="max-height: 300px;" tabindex="0">
                                                        <div id="mCSB_2_container" class="mCSB_container"
                                                             style="position:relative; top:0; left:0;" dir="ltr">
                                                            <ul class="list_online">
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#&amp;course=1"
                                                                                title="Hiện giờ">{{Auth::user()->full_name}}</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#&amp;course=1"
                                                                                title="19 secs">Trần Doãn H ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_29489';return openpopup('/message/discussion.php?id=29489', 'message_29489', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="22 secs">Trần Lý Ki� ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_29431';return openpopup('/message/discussion.php?id=29431', 'message_29431', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="23 secs">Lê Mai Anh Tú</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>
                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_23668';return openpopup('/message/discussion.php?id=23668', 'message_23668', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="23 secs">Võ Huỳnh A ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_18261';return openpopup('/message/discussion.php?id=18261', 'message_18261', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="25 secs">ThS Trần Tu� ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_28858';return openpopup('/message/discussion.php?id=28858', 'message_28858', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="41 secs">Phan Dương T ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_32107';return openpopup('/message/discussion.php?id=32107', 'message_32107', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="42 secs">Trương Thị ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_29516';return openpopup('/message/discussion.php?id=29516', 'message_29516', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="46 secs">Nguyễn Hoàn ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_34497';return openpopup('/message/discussion.php?id=34497', 'message_34497', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="49 secs">Cao Thị Minh ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_31680';return openpopup('/message/discussion.php?id=31680', 'message_31680', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="51 secs">Trần Trung H ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_27518';return openpopup('/message/discussion.php?id=27518', 'message_27518', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="52 secs">Châu Trang Nh ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href="#"
                                                                                onclick="this.target='message_29204';return openpopup('/message/discussion.php?id=29204', 'message_29204', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>
                                                                <li class="block_online_users_person_online">
                                                                    <div class="online_ttcn"><span class="online"><i
                                                                                    class="fa fa-circle online_icon"></i></span><a
                                                                                class="block_online_users_link"
                                                                                href="#"
                                                                                title="54 secs">Lại Nguyễn ...</a>
                                                                        <figure class="online_user_figure">
                                                                            <div class="online_user_text">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </figure>
                                                                        <div class="clearer"><!-- --></div>

                                                                    </div>
                                                                    <span class="block_online_users_message"><a
                                                                                title="Add / send message"
                                                                                href=#
                                                                                onclick="this.target='message_29504';return openpopup('/message/discussion.php?id=29504', 'message_29504', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);"><img
                                                                                    class="iconsmall mCS_img_loaded"
                                                                                    src="{{asset('dashboard/images')}}/message.gif"
                                                                                    alt="Add / send message"></a></span>
                                                                </li>

                                                            </ul>
                                                            <div class="clearer"><!-- --></div>

                                                        </div>
                                                        <div id="mCSB_2_scrollbar_vertical"
                                                             class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"
                                                             style="display: none;">
                                                            <div class="mCSB_draggerContainer">
                                                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                                     style="position: absolute; min-height: 50px; display: block; height: 0px; max-height: 290px; top: 0px;"
                                                                     oncontextmenu="return false;">
                                                                    <div class="mCSB_dragger_bar"
                                                                         style="line-height: 50px;"></div>
                                                                </div>
                                                                <div class="mCSB_draggerRail"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="mCSB_2_scrollbar_vertical"
                                                     class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                                             style="position:absolute;" oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input id="search-comment2" class="mdl-textfield__input"
                                               placeholder="  Tìm kiếm bạn bè" type="text">
                                        <label class="mdl-textfield__label" for="username"><i
                                                    class="fa fa-search fa-tpc"></i></label>
                                    </div>
                                    <div class="block_online_users_hotline">
                                        <p><span class="glyphicon glyphicon-headphones">
                                                <span style=" font-family: Open Sans;margin-left: 1px;font-size:14px;">
                                                    &nbsp;HOTLINE:&nbsp;&nbsp;04567&nbsp;8909</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <span id="sb-10" class="skip-block-to"></span></div>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>

        <div id="stick_right" data-toggle="modal" data-target="#myModal">
            <div class="float-body">
                <div class="float-title">
                    <h3>NHẮC VIỆC SINH VIÊN <strong>{{Auth::user()->full_name}}</strong><br></h3>
                    <p>Tuần từ ngày 03/10/2016 đến 09/10/2016</p>
                </div>

                <div class="float-body-main">
                    <table class="table table-striped table-bordered">
                        <thead class="text-danger">
                        <tr>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số câu H2472 chưa trả lời"><i
                                            class="fa fa-bell"></i> H2472</span></th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số chủ đề đã gửi/Yêu cầu"><i
                                            class="fa fa-comments"></i> Diễn đàn</span></th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số lần đăng nhập LMS/Yêu cầu"><i
                                            class="fa fa-graduation-cap"></i> Đăng nhập lớp</span></th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Thời điểm bắt đầu phải chấm bài hoặc Số lượng bài đã chấm/Tổng số bài"><i
                                            class="fa fa-edit"></i> Làm bài tập</span></th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Nhận xét TIM"><i
                                            class="fa fa-heart"></i> TIM</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center success"><a href="#"
                                                               target="_blank">0</a></td>
                            <td class="text-center warning warning-fix"><a
                                        href="#" target="_blank">1/3</a></td>
                            <td class="text-center success"><a
                                        href="#" target="_blank">25/3</a>
                            </td>
                            <td class="text-center success">---</td>
                            <td class="text-center success"><a
                                        href="#"
                                        target="_blank">1/1</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-body-right">
                <img src="{{asset('dashboard/images')}}/nvht.png">
            </div>
        </div>
        <div class="modal fade" id="myModal_dggv_index" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        <h2 class="modal-title text-center">NHẮC VIỆC SINH VIÊN <strong>{{Auth::user()->full_name}}</strong>
                        </h2>
                        <p class="modal-tilte text-center">Tuần từ ngày 03/10/2016 đến 09/10/2016</p>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-bordered">
                            <thead class="text-danger">
                            <tr>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Danh sách các course học đang giảng dạy">Lớp môn</span>
                                </th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Số câu H2472 chưa trả lời"><i
                                                class="fa fa-bell"></i> H2472</span></th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Số bài post đã gửi/Yêu cầu"><i
                                                class="fa fa-comments"></i> Diễn đàn</span></th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Số lần đăng nhập LMS/Yêu cầu"><i
                                                class="fa fa-graduation-cap"></i> Đăng nhập lớp</span></th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Thời điểm bắt đầu phải chấm bài hoặc Số lượng bài đã chấm/Tổng số bài"><i
                                                class="fa fa-edit"></i> Làm bài tập</span></th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Nhận xét TIM"><i
                                                class="fa fa-heart"></i> TIM</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left"><a href="#">TH901.QTV2</a>
                                </td>
                                <td class="text-center success"><a
                                            href="#"
                                            target="_blank">0</a></td>
                                <td class="text-center warning warning-fix"><a
                                            href="#" target="_blank">1/3</a>
                                </td>
                                <td class="text-center success"><a
                                            href="#"
                                            target="_blank">25/3</a></td>
                                <td class="text-center success">---</td>
                                <td class="text-center success"><a
                                            href="#"
                                            target="_blank">1/1</a></td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Thêm Giải thích chi tiết -->
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a style="display: block;" class="accordion-toggle" data-toggle="collapse"
                                           data-parent="#accordion" href=#>
                                            Chú thích
                                            <span class="pull-right glyphicon glyphicon-minus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><strong>H2472:</strong> Số câu hỏi H2472 hiện có cần trả lời</li>
                                            <li><strong>Diễn đàn:</strong> Thống kê số lượng bài post trên diễn đàn thời
                                                điểm hiện tại của tuần báo cáo (A/B) (A: số bài post trong tuần tính tới
                                                thời điểm báo cáo. B là định mức số bài post trong tuần báo cáo). Tuần
                                                3, tuần 5, định mức tối thiểu là 3 bài post. Các tuần còn lại post tối
                                                thiểu 2 bài.
                                            </li>
                                            <li><strong>Đăng nhập lớp:</strong> Số lần đăng nhập lớp học/số yêu cầu
                                                trong tuần. Mục đích đăng nhập: theo dõi tình hình học tập của SV trong
                                                lớp. Mỗi tuần, các thầy/cô đăng nhập tối thiểu 3 lần.
                                            </li>
                                            <li><strong>TIM:</strong> Phản hồi về nhận xét, định hướng của GVCM hệ thống
                                                TIM. Định mức là 1 lần/tuần
                                            </li>
                                        </ul>
                                        <span class="label label-success">GV đã hoàn thành công việc theo định mức</span><br>
                                        <span class="label label-warning">GV đang thực hiện một phần công việc. Đối với H2472: câu hỏi chưa quá 72h</span><br>
                                        <span class="label label-danger">GV chưa thực hiện công việc hoặc đã quá hạn thực hiện công việc đó.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    {{--<div class="container">--}}
    {{--<div class="page-section">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-9">--}}
    {{--<ol class="breadcrumb">--}}
    {{--<li><a href="#"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>--}}
    {{--<li class="active">Các lớp đã đăng ký</li>--}}
    {{--</ol>--}}
    {{--<h1 class="title"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Danh sách các lớp đang học</h1>--}}
    {{--<div class="row" data-toggle="isotope">--}}
    {{--@foreach($classes as $value)--}}
    {{--<div class="item col-xs-12 col-sm-6 col-lg-4">--}}
    {{--<div class="panel panel-default paper-shadow" data-z="0.5">--}}
    {{--<div class="panel-heading">--}}
    {{--<div class="media media-clearfix-xs-min v-middle">--}}
    {{--<div class="media-body text-caption text-light">--}}
    {{--đã học 4 / 12 bài--}}
    {{--</div>--}}
    {{--<div class="media-right">--}}
    {{--<div class="progress progress-mini width-100 margin-none">--}}
    {{--<div class="progress-bar progress-bar-blue-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:22%;">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="cover overlay cover-image-full hover">--}}
    {{--<span class="img icon-block height-150 bg-default"></span>--}}
    {{--<a href="{{asset('study/sub').'/'.$value->id}}" class="padding-none overlay overlay-full icon-block bg-default">--}}
    {{--<img class="v-center height-150" src="{{asset($value->subject->image)}}">--}}
    {{--</a>--}}

    {{--<a href="{{asset('study/sub').'/'.$value->id}}" class="overlay overlay-full overlay-hover overlay-bg-white" style="height: 150px">--}}
    {{--<span class="v-center">--}}
    {{--<span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>--}}
    {{--</span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
    {{--<h4 class="text-headline margin-v-0-10"><a href="{{asset('study/sub').'/'.$value->id}}">{{$value->name}}</a></h4>--}}

    {{--</div>--}}
    {{--<hr class="margin-none" />--}}
    {{--<div class="panel-body">--}}
    {{--<p>{{str_limit($value->subject->description,100)}}</p>--}}
    {{--<div class="media v-middle">--}}
    {{--<div class="media-left">--}}
    {{--<img src="{{asset('').$value->teacher->image}}" alt="People" class="img-circle width-40">--}}
    {{--</div>--}}
    {{--<div class="media-body">--}}
    {{--<h4>--}}
    {{--<a href="">Giáo viên: {{$value->teacher->first_name}} {{$value->teacher->last_name}}</a>--}}
    {{--<br>--}}
    {{--</h4>--}}
    {{--Thạc sĩ--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--<ul class="pagination margin-top-none">--}}
    {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
    {{--<li class="active"><a href="#">1</a></li>--}}
    {{--<li><a href="#">2</a></li>--}}
    {{--<li><a href="#">3</a></li>--}}
    {{--<li><a href="#">&raquo;</a></li>--}}
    {{--</ul>--}}
    {{--<br/>--}}
    {{--<br/>--}}
    {{--</div>--}}
    {{--<div class="col-md-3">--}}

    {{--<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">--}}
    {{--<div class="panel-heading panel-collapse-trigger">--}}
    {{--<h4 class="panel-title">Danh mục</h4>--}}
    {{--</div>--}}
    {{--<div class="panel-body list-group">--}}
    {{--<ul class="list-group">--}}
    {{--<li class="list-group-item">--}}
    {{--<span class="badge pull-right">44</span>--}}
    {{--<a class="list-group-link" href="index.html">Các lớp đã hoàn thành</a>--}}
    {{--</li>--}}
    {{--<li class="list-group-item active">--}}
    {{--<span class="badge pull-right">9</span>--}}
    {{--<a class="list-group-link" href="index.html">Các lớp đang học</a>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<h4>Các lớp nổi bật</h4>--}}
    {{--<div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">--}}
    {{--@foreach($feature as $value)--}}
    {{--<div class="item">--}}
    {{--<div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>--}}
    {{--<div class="panel-body">--}}
    {{--<div class="media media-clearfix-xs">--}}
    {{--<div class="media-left">--}}
    {{--<div class="cover width-90 width-100pc-xs overlay cover-image-full hover">--}}
    {{--<span class="img icon-block s90 bg-default"></span>--}}
    {{--<span class="overlay overlay-full padding-none icon-block s90 bg-default">--}}
    {{--<img class="v-center height-100 width-100" src="{{asset($value->subject->image)}}">--}}
    {{--</span>--}}
    {{--<a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">--}}
    {{--<span class="v-center">--}}
    {{--<span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>--}}
    {{--</span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading margin-v-5-3"><a href="website-course.html">{{$value->name}}</a></h4>--}}
    {{--<p class="small margin-none">--}}
    {{----------------}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
@endsection
@section('footer')
    <script>
        $('.slick-slider').slick({
            dots: true,
            arrows: false,
            slidesToShow: 1
        });
    </script>
@endsection
