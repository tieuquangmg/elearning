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
    {{--<link href="{{asset('dashboard/css/material.min.css')}}" rel="stylesheet">--}}
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
                                            <img src="{{asset((Auth::user()->image != null)? Auth::user()->image : 'images/people/no-avatar.jpg' )}}" width="100"
                                                    height="100" alt="Imagen">
                                            <figure class="block_my_profile_bginfo2">
                                                <div class="block_my_profile_textvl2">
                                                    <i class="fa fa-pencil-square-o fa-2x"><br>
                                                        <span style="font-family: Arial; font-size: 14px; font-style: normal; font-variant: normal; line-height: 20px;">Xem thông tin cá nhân</span></i>
                                                </div>////////////////////////
                                            </figure>
                                        </a>
                                    </div>
                    <span class="block_my_profile_edit"></span>
                                    <div class="block_my_profile_text">
                                        <a href="#"
                                           class="block_my_profile_text2" style="font-size: 16px;">{{Auth::user()->ho_ten}}</a>
                                        <p stye="font-size:12px !important;">{{(Auth::user()->roles->first() != null) ? Auth::user()->roles->first()->display_name : ''}}</p>
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
                                    <a class="block_my_courses_text-topica" role="button" data-toggle="collapse" href="{{route('study.mycourse')}}" aria-expanded="false" aria-controls="collapseExample" style="color:black;font-size:14px;">
                                        Khóa học của tôi
                                    </a>
                                </div>
                                <div class="collapse in" id="collapseExample_my_course">
                                    <ul class="block_my_courses_list-unstyled">
                                        @foreach($classes as $row)
                                            <li class="block_my_courses_litext-tpc">
                                                <a title="{{$row->name}}" href="{{route('study.subject',$row)}}">{{$row->subject->name.'-'.$row->stt_lop}}</a>
                                            </li>
                                            @endforeach
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
                                        <li class="block_support_learning_litext-tpc"><a target="_blank" href="http://namvietjsc.tk/forum.php">Diễn đàn</a></li>
                                        <li class="block_support_learning_litext-tpc"><a href="{{url('/study/unit/add_question/6/1')}}">Hỏi đáp</a></li>
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
                                        <li class="block_personal_profile_litext-tpc"><a href="#">Thông Tin cá nhân</a> </li>
                                        <li class="block_personal_profile_litext-tpc"><a href="#">Hồ sơ học tập</a></li>
                                        <li class="block_personal_profile_litext-tpc"><a href="#" target="_blank">Đăng kí học lại thi lại</a></li>
                                        <li class="block_personal_profile_litext-tpc"><a target="_blank" href="#">Lấy ý kiến sinh viên</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span id="sb-5" class="skip-block-to"></span>
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
                        <span id="sb-7" class="skip-block-to"></span>
                    </div>
                </td>
                <td id="middle-column">
                    <span id="maincontent"></span>
                    <ul class="unlist print_course_middle">
                        @foreach($classes as $row)
                        <li>
                            <div class="coursebox clearfix">
                                <div class="main-content-body">
                                    <div class="main-content-body-left">
                                        <div class="main-content-body-left_tieubieu">
                                            <div>
                                                <a style="position: relative; text-align: center" id="main-content-body-left_thumbnail3"
                                                   href="{{route('study.subject',$row->id)}}">
                                                    <img  src="{{($row->subject->image != null) ? asset($row->subject->image) : asset('dashboard/images/bia-sach.jpg')}}"
                                                         width="180px" height="225px" />
                                                    @if($row->subject->image != null)
                                                    <span style="position: absolute; top: 88px;left: 30px; color:#5d5d5d">{{$row->subject->name}}</span>
                                                    @endif
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
                                                <div class="main-title-body_mtb-right"><p>Thời gian học:
                                                        <span class="ngaythang">{{$row->start_date->format('d/m/Y').' - '.$row->start_date->format('d/m/Y')}}</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="main-body-body">
                                            <div class="main-body-body-left">
                                                <div class="main-body-body-left_thongtin">
                                                    <div class="main-body-body-left_gv">GIẢNG VIÊN&nbsp;&nbsp;</div>
                                                    <div class="main-body-body-left_ttgv">
                                                        {{($row->teacher != null) ? $row->teacher->ho_ten : ''}}
                                                    </div>
                                                </div>
                                                <div class="main-body-body-left_space"></div>
                                                <div class="main-body-body-left_dcc"></div>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div class="main-body-body-right">
                                                <div class="main-body-body-right_tcl">
                                                    <p>NHIỆM VỤ HỌC TẬP</p>
                                                    <ul class="list-unstyled">
                                                        <li class="body-ul">
                                                            <span class="main-body-body-leftlip">A</span>
                                                            <a href="{{route('study.subject',$row->id)}}">
                                                                Bạn đăng nhập với quyền {{(Auth::user()->roles->first() != null) ? Auth::user()->roles->first()->display_name : ''}}</a></li>
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
                    <br>
                </td>
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
                                    <span id="tsb-chuong-trinh" chuong_trinh="1" url="#" course_id="" ma_mon=""></span>
                                    <span id="tsb-username-like" username_like="vinhpq.gv" role="14"></span>
                                    <div class="block_vinh_danh_sinh_vien_content_header"
                                         style="background-color:#fff;">
                                        <p><i class="fa fa-certificate"></i>Vinh danh sinh viên</p>
                                    </div>
                                    <div class="tabs">
                                        <div id="tab-header"><!-- Thêm mới div này -->
                                            <ul class="tab-links">
                                                <li class="active">
                                                    <a class="tab-links-first-a tsb-tooltip"
                                                       data-toggle="tab"
                                                       href="#tab-truong"
                                                    >Trường</a>
                                                </li>
                                                <li class="">
                                                    <a class="tab-links-second-a tsb-tooltip"
                                                       data-toggle="tab"
                                                       href="#tab-lop">Lớp
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- END Thêm mới div này -->
                                        <div class="tab-content">
                                            <div id="tab-truong" class="tab active">
                                                <table class="table table-striped" id="tsb-top-truong-table">
                                                    <tbody id="tsb-top-truong-table-body">
                                                    @foreach($standings as $row)
                                                    <tr>
                                                        <td class="vinh_danh_sinh_vien_td_image">
                                                            <a id="thumbnail11">
                                                                <img class="sm-avatar"
                                                                     src="{{asset($row->image)}}">
                                                                <div id="tittle11">
                                                                    <div>#1</div>
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
                                                                   data-original-title="Họ và tên: {{$row->full_name}}. <br>Lớp: 131124.QTV2">
                                                                    {{substr($row->full_name,0,10)}}
                                                                </a><br>
                                                                <span class="glyphicon glyphicon-star"></span><span
                                                                        class="sosao">1</span>
                                                            </div>
                                                        </td>
                                                        <td class="vinh_danh_sinh_vien_td_like">
                                                            <a class="tsb-like top_truong-phunglth3004" position="block" loai_chuc_mung="top_truong" id="phunglth3004" liked_yn="N" tong_so_sao="1" onclick="tsb_like(this);"> <i class="fa fa-thumbs-o-up"></i> </a>
                                                            <br>
                                                            <span class="count-like"> <a href="#" id="tsb-ds-like-top_truong-phunglth3004" data-toggle="modal" class="tsb-tooltip tsb-ds-like-top_truong-phunglth3004" data-placement="top" title="" username_nhan="phunglth3004" loai_chuc_mung="top_truong" data-target="#Modal_Like" onclick="get_ds_liked(this);" data-original-title="huet, hueht, chinl và 18 người khác đã chúc mừng điều này"> 21 </a></span>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                                            <div id="tab-lop" class="tab">
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
                        <div id="inst95" class="block_online_users sideblock">
                            <div class="content">
                                <div class="block_online_users">
                                    <div class="block_online_users_header">
                                        <p><i class="fa fa-comment"></i>THÀNH VIÊN ONLINE</p>
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
                                                                    <span class="block_online_users_message">
                                                                        <a title="Add / send message" href="#"
                                                                           onclick="this.target='message_29489';return openpopup('/message/discussion.php?id=29489', 'message_29489', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);">
                                                                            <img class="iconsmall mCS_img_loaded"
                                                                                 src="{{asset('dashboard/images')}}/message.gif"
                                                                                 alt="Add / send message">
                                                                        </a>
                                                                    </span>
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
                                        <label class="mdl-textfield__label" for="username">
                                            <i class="fa fa-search fa-tpc"></i>
                                        </label>
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
        {{--<div class="row">--}}
            {{--<div class="col-md-2 col-xs-12">--}}
                {{--<div  id="left-column">--}}
                    {{--<div>--}}
                        {{--<div id="inst27" class="block_my_profiles sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<!-- block_my_profiles  css-->--}}
                                {{--<div class="block_my_profile_left-sidebar1">--}}
                                    {{--<div class="block_my_profile_anhdaidien">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset((Auth::user()->image != null)? Auth::user()->image : 'images/people/no-avatar.jpg' )}}" width="100"--}}
                                                 {{--height="100" alt="Imagen">--}}
                                            {{--<figure class="block_my_profile_bginfo2">--}}
                                                {{--<div class="block_my_profile_textvl2">--}}
                                                    {{--<i class="fa fa-pencil-square-o fa-2x"><br>--}}
                                                        {{--<span style="font-family: Arial; font-size: 14px; font-style: normal; font-variant: normal; line-height: 20px;">Xem thông tin cá nhân</span></i>--}}
                                                {{--</div>////////////////////////--}}
                                            {{--</figure>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<span class="block_my_profile_edit"></span>--}}
                                    {{--<div class="block_my_profile_text">--}}
                                        {{--<a href="#"--}}
                                           {{--class="block_my_profile_text2" style="font-size: 16px;">{{Auth::user()->ho_ten}}</a>--}}
                                        {{--<p stye="font-size:12px !important;">{{(Auth::user()->roles->first() != null) ? Auth::user()->roles->first()->display_name : ''}}</p>--}}
                                    {{--</div>--}}

                                {{--</div><!--end left-side_bar-1-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-1" class="skip-block-to"></span>--}}
                        {{--<div id="inst92" class="block_tim sideblock">--}}
                            {{--<div class="content">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-2" class="skip-block-to"></span>--}}
                        {{--<div id="inst19" class="block_my_courses sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<!-- block_my_courses css -->--}}
                                {{--<div class="block_my_courses_content_header">--}}
                                    {{--<a class="block_my_courses_text-topica" role="button" data-toggle="collapse" href="{{route('study.mycourse')}}" aria-expanded="false" aria-controls="collapseExample" style="color:black;font-size:14px;">--}}
                                        {{--Khóa học của tôi--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="collapse in" id="collapseExample_my_course">--}}
                                    {{--<ul class="block_my_courses_list-unstyled">--}}
                                        {{--@foreach($classes as $row)--}}
                                            {{--<li class="block_my_courses_litext-tpc">--}}
                                                {{--<a title="{{$row->name}}" href="{{route('study.subject',$row)}}">{{$row->subject->name.'-'.$row->stt_lop}}</a>--}}
                                            {{--</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-3" class="skip-block-to"></span>--}}
                        {{--<div id="inst21" class="block_support_learning sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<div class="block_support_learning_content_header" style="background-color: #fff;">--}}
                                    {{--<a class="block_support_learning_text-topica" role="button" data-toggle="collapse"--}}
                                       {{--href="#" aria-expanded="false"--}}
                                       {{--aria-controls="collapseExample" style="color:black;font-size:14px;">--}}
                                        {{--Hỗ trợ học tập--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="collapse in" id="collapseExample1">--}}
                                    {{--<ul class="block_support_learning_list-unstyled">--}}
                                        {{--<li class="block_support_learning_litext-tpc"><a target="_blank" href="http://namvietjsc.tk/forum.php">Diễn đàn</a></li>--}}
                                        {{--<li class="block_support_learning_litext-tpc"><a href="{{url('/study/unit/add_question/6/1')}}">Hỏi đáp</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-4" class="skip-block-to"></span>--}}
                        {{--<div id="inst20" class="block_personal_profile sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<div class="block_personal_profile_content_header" style="background-color: #fff;">--}}
                                    {{--<a class="block_personal_profile_text-topica" role="button" data-toggle="collapse"--}}
                                       {{--href="#" aria-expanded="false"--}}
                                       {{--aria-controls="collapseExample" style="color:black;font-size:14px;">--}}
                                        {{--Hồ sơ cá nhân--}}
                                    {{--</a>--}}

                                {{--</div>--}}
                                {{--<div class="collapse in" id="collapseExample">--}}

                                    {{--<ul class="block_personal_profile_list-unstyled">--}}
                                        {{--<li class="block_personal_profile_litext-tpc"><a href="#">Thông Tin cá nhân</a> </li>--}}
                                        {{--<li class="block_personal_profile_litext-tpc"><a href="#">Hồ sơ học tập</a></li>--}}
                                        {{--<li class="block_personal_profile_litext-tpc"><a href="#" target="_blank">Đăng kí học lại thi lại</a></li>--}}
                                        {{--<li class="block_personal_profile_litext-tpc"><a target="_blank" href="#">Lấy ý kiến sinh viên</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-5" class="skip-block-to"></span>--}}
                        {{--<div id="inst29" class="block_thongbao sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<div class="block_thongbao_content_header" style="background-color: #fff;">--}}
                                    {{--<a class="block_thongbao_text-topica" role="button" data-toggle="collapse"--}}
                                       {{--href="#" aria-expanded="false"--}}
                                       {{--aria-controls="collapseExample" style="color:black;font-size:14px;">--}}
                                        {{--Thông Báo--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="collapse in" id="collapsethongbao">--}}
                                    {{--<ul class="block_thongbao-unstyled">--}}
                                        {{--<li>Chưa có thông báo nào cho bạn!</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-7" class="skip-block-to"></span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-7 col-xs-12">--}}
                {{--<div id="middle-column">--}}
                    {{--<span id="maincontent"></span>--}}
                    {{--<ul class="unlist print_course_middle">--}}
                        {{--@foreach($classes as $row)--}}
                            {{--<li>--}}
                                {{--<div class="coursebox clearfix">--}}
                                    {{--<div class="main-content-body">--}}
                                        {{--<div class="main-content-body-left col-xs-12 col-md-3">--}}
                                            {{--<div class="main-content-body-left_tieubieu">--}}
                                                {{--<div>--}}
                                                    {{--<a style="position: relative; text-align: center" id="main-content-body-left_thumbnail3"--}}
                                                       {{--href="{{route('study.subject',$row->id)}}">--}}
                                                        {{--<img  src="{{($row->subject->image != null) ? asset($row->subject->image) : asset('dashboard/images/bia-sach.jpg')}}"--}}
                                                              {{--width="180px" height="225px" />--}}
                                                        {{--@if($row->subject->image != null)--}}
                                                            {{--<span style="position: absolute; top: 88px;left: 30px; color:#5d5d5d">{{$row->subject->name}}</span>--}}
                                                        {{--@endif--}}
                                                        {{--<div id="main-content-body-left_title3">--}}
                                                            {{--<div class="main-content-body-left_textvl">--}}
                                                                {{--<div class="main-content-body-left_icon_course">--}}
                                                                    {{--<i class="fa fa-graduation-cap fa-3x"></i>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="main-content-body-left_icon_enter_course">--}}
                                                                    {{--VÀO LỚP--}}
                                                                    {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="main-content-body-right col-xs-12 col-md-9">--}}
                                            {{--<a href="{{route('study.subject',$row->id)}}">--}}
                                                {{--<div class="main-title-body">--}}
                                                    {{--<div class="main-title-body_mtb-left">--}}
                                                        {{--<p class="main-title-body-code-class">{{$row->code}}</p>--}}
                                                        {{--<p class="main-title-body-name-class ">{{$row->subject->name}}</p>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="main-title-body_mtb-right"><p>Thời gian học:--}}
                                                            {{--<span class="ngaythang">{{$row->start_date->format('d/m/Y').' - '.$row->start_date->format('d/m/Y')}}</span></p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</a>--}}
                                            {{--<div class="main-body-body">--}}
                                                {{--<div class="main-body-body-left">--}}
                                                    {{--<div class="main-body-body-left_thongtin">--}}
                                                        {{--<div class="main-body-body-left_gv">GIẢNG VIÊN&nbsp;&nbsp;</div>--}}
                                                        {{--<div class="main-body-body-left_ttgv">--}}
                                                            {{--{{($row->teacher != null) ? $row->teacher->ho_ten : ''}}--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="main-body-body-left_space"></div>--}}
                                                    {{--<div class="main-body-body-left_dcc"></div>--}}
                                                    {{--<div style="clear:both"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="main-body-body-right">--}}
                                                    {{--<div class="main-body-body-right_tcl">--}}
                                                        {{--<p>NHIỆM VỤ HỌC TẬP</p>--}}
                                                        {{--<ul class="list-unstyled">--}}
                                                            {{--<li class="body-ul">--}}
                                                                {{--<span class="main-body-body-leftlip">A</span>--}}
                                                                {{--<a href="{{route('study.subject',$row->id)}}">--}}
                                                                    {{--Bạn đăng nhập với quyền {{(Auth::user()->roles->first() != null) ? Auth::user()->roles->first()->display_name : ''}}</a></li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="main-body-body-right_tuan3"><p--}}
                                                                {{--class="main-body-body-right_t3">Tuần 7</p>--}}
                                                        {{--<p class="main-body-body-right_nthang">03/10-09/10</p>--}}
                                                        {{--<a href="{{route('study.subject',$row->id)}}">--}}
                                                            {{--<button type="button"--}}
                                                                    {{--class="btn btn-danger btn-lg btn-block main-body-body-right_vaolop">--}}
                                                                {{--<b style="font-size: 14px;">VÀO LỚP </b><span--}}
                                                                        {{--class="glyphicon glyphicon-chevron-right glp"--}}
                                                                        {{--style="font-size: 12px;margin-left:5px;"></span>--}}
                                                            {{--</button>--}}
                                                        {{--</a>--}}
                                                        {{--<div style="clear:both"></div>--}}
                                                    {{--</div>--}}
                                                    {{--<div style="clear:both"></div>--}}
                                                {{--</div>--}}
                                                {{--<div style="clear:both"></div>--}}
                                            {{--</div><!--end body-body-->--}}
                                        {{--</div>--}}
                                    {{--</div> <!--1-->--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--<br>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-xs-12">--}}
                {{--<div style="width: 100%;" id="right-column">--}}
                    {{--<div>--}}
                        {{--<div id="inst22" class="block_vinh_danh_sinh_vien sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<!-- Bảng vinh danh ngân hàng sao START -->--}}
                                {{--<!-- TSB TBL-VINHDANH CSS -->--}}
                                {{--<link href="{{asset('dashboard/images')}}/dataTables.bootstrap.css" rel="stylesheet">--}}
                                {{--<link href="{{asset('dashboard/images')}}/toastr.css" rel="stylesheet">--}}
                                {{--<link rel="stylesheet" href="{{asset('dashboard/images')}}/jquery.dataTables.css">--}}
                                {{--<link href="{{asset('dashboard/images')}}/edit_style.css" rel="stylesheet">--}}
                                {{--<div class="block_vinh_danh_sinh_vien">--}}
                                    {{--<span id="tsb-chuong-trinh" chuong_trinh="1" url="#" course_id="" ma_mon=""></span>--}}
                                    {{--<span id="tsb-username-like" username_like="vinhpq.gv" role="14"></span>--}}
                                    {{--<div class="block_vinh_danh_sinh_vien_content_header"--}}
                                         {{--style="background-color:#fff;">--}}
                                        {{--<p><i class="fa fa-certificate"></i>Vinh danh sinh viên</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="tabs">--}}
                                        {{--<div id="tab-header"><!-- Thêm mới div này -->--}}
                                            {{--<ul class="tab-links">--}}
                                                {{--<li class="active">--}}
                                                    {{--<a class="tab-links-first-a tsb-tooltip"--}}
                                                       {{--data-toggle="tab"--}}
                                                       {{--href="#tab-truong"--}}
                                                    {{-->Trường</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="">--}}
                                                    {{--<a class="tab-links-second-a tsb-tooltip"--}}
                                                       {{--data-toggle="tab"--}}
                                                       {{--href="#tab-lop">Lớp--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div><!-- END Thêm mới div này -->--}}
                                        {{--<div class="tab-content">--}}
                                            {{--<div id="tab-truong" class="tab active">--}}
                                                {{--<table class="table table-striped" id="tsb-top-truong-table">--}}
                                                    {{--<tbody id="tsb-top-truong-table-body">--}}
                                                    {{--@foreach($standings as $row)--}}
                                                        {{--<tr>--}}
                                                            {{--<td class="vinh_danh_sinh_vien_td_image">--}}
                                                                {{--<a id="thumbnail11">--}}
                                                                    {{--<img class="sm-avatar"--}}
                                                                         {{--src="{{asset($row->image)}}">--}}
                                                                    {{--<div id="tittle11">--}}
                                                                        {{--<div>#1</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</a>--}}
                                                            {{--</td>--}}
                                                            {{--<td class="vinh_danh_sinh_vien_td_name">--}}
                                                                {{--<div class="namevdsv">--}}
                                                                    {{--<a href="{{route('study.mycourse')}}#Modal_History"--}}
                                                                       {{--class="tsb-tooltip" data-toggle="modal"--}}
                                                                       {{--data-target="#Modal_History"--}}
                                                                       {{--username_nhan="phunglth3004"--}}
                                                                       {{--loai_chuc_mung="top_truong"--}}
                                                                       {{--onclick="tsb_lich_su_thuong_sv(this);"--}}
                                                                       {{--data-placement="top" title=""--}}
                                                                       {{--data-original-title="Họ và tên: {{$row->full_name}}. <br>Lớp: 131124.QTV2">--}}
                                                                        {{--{{substr($row->full_name,0,10)}}--}}
                                                                    {{--</a><br>--}}
                                                                    {{--<span class="glyphicon glyphicon-star"></span><span--}}
                                                                            {{--class="sosao">1</span>--}}
                                                                {{--</div>--}}
                                                            {{--</td>--}}
                                                            {{--<td class="vinh_danh_sinh_vien_td_like">--}}
                                                                {{--<a class="tsb-like top_truong-phunglth3004" position="block" loai_chuc_mung="top_truong" id="phunglth3004" liked_yn="N" tong_so_sao="1" onclick="tsb_like(this);"> <i class="fa fa-thumbs-o-up"></i> </a>--}}
                                                                {{--<br>--}}
                                                                {{--<span class="count-like"> <a href="#" id="tsb-ds-like-top_truong-phunglth3004" data-toggle="modal" class="tsb-tooltip tsb-ds-like-top_truong-phunglth3004" data-placement="top" title="" username_nhan="phunglth3004" loai_chuc_mung="top_truong" data-target="#Modal_Like" onclick="get_ds_liked(this);" data-original-title="huet, hueht, chinl và 18 người khác đã chúc mừng điều này"> 21 </a></span>--}}
                                                            {{--</td>--}}
                                                        {{--</tr>--}}
                                                    {{--@endforeach--}}
                                                    {{--<tr class="tr-last">--}}
                                                        {{--<td colspan="5" class="text-center"><a--}}
                                                                    {{--href="{{route('study.mycourse')}}#Modal_Truong"--}}
                                                                    {{--data-toggle="modal" class="tsb-tooltip"--}}
                                                                    {{--data-placement="top" title=""--}}
                                                                    {{--onclick="tsb_modal_click(this);"--}}
                                                                    {{--data-original-title="Bảng chi tiết">Xem thêm</a>--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--</tbody>--}}
                                                {{--</table>--}}
                                            {{--</div>--}}
                                            {{--<div id="tab-lop" class="tab">--}}
                                                {{--<table class="table table-striped" id="tsb-top-lop-table">--}}
                                                    {{--<tbody id="tsb-top-lop-table-body">--}}
                                                    {{--<tr>--}}
                                                        {{--<td colspan="5" class="text-center">Chỉ dành cho sinh viên</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td colspan="5" class="text-center"><a--}}
                                                                    {{--href="#"--}}
                                                                    {{--data-toggle="modal"--}}
                                                                    {{--class="tsb-tooltip vinh_danh_sinh_vien_modallop"--}}
                                                                    {{--data-placement="top" title=""--}}
                                                                    {{--onclick="tsb_modal_click(this);"--}}
                                                                    {{--data-original-title="Bảng chi tiết">Xem thêm</a>--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--</tbody>--}}
                                                {{--</table>--}}
                                            {{--</div>--}}
                                        {{--</div> <!-- END tab content -->--}}
                                    {{--</div> <!-- END Thêm mới div này -->--}}

                                    {{--<!-- Modal Truong  tabindex="-1" role="dialog" aria-labelledby="Modal_Mon_Label" aria-hidden="true"  id="Modal_Mon_Label"-->--}}
                                    {{--<div class="modal fade" id="Modal_Truong">--}}
                                        {{--<div class="modal-dialog">--}}
                                            {{--<div class="modal-content">--}}
                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                            {{--aria-label="Close"><span aria-hidden="true">×</span>--}}
                                                    {{--</button>--}}
                                                    {{--<h4 class="modal-title text-center">Bảng vinh danh</h4>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--<table id="tsb-modal-truong-table"--}}
                                                           {{--class="table table-striped tsb-tbl-detail">--}}
                                                        {{--<thead>--}}
                                                        {{--<tr>--}}
                                                            {{--<th class="text-center" style="width: 25px;"></th>--}}
                                                            {{--<th class="text-center">Sinh viên <i class="fa fa-user"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center">Số sao được thưởng<i--}}
                                                                        {{--class="fa fa-star"></i></th>--}}
                                                            {{--<th class="text-center">Số chúc mừng <i--}}
                                                                        {{--class="fa fa-thumbs-up"></i></th>--}}
                                                            {{--<th class="text-center"></th>--}}
                                                        {{--</tr>--}}
                                                        {{--</thead>--}}
                                                        {{--<tbody id="tsb-modal-truong-table-body">--}}
                                                        {{--</tbody>--}}
                                                    {{--</table>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Modal Lop  tabindex="-1" role="dialog" aria-labelledby="Modal_Course_Label" aria-hidden="true" id="Modal_Course_Label"-->--}}
                                    {{--<div class="modal fade" id="Modal_Lop">--}}
                                        {{--<div class="modal-dialog">--}}
                                            {{--<div class="modal-content">--}}
                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                            {{--aria-label="Close"><span aria-hidden="true">×</span>--}}
                                                    {{--</button>--}}
                                                    {{--<h4 class="modal-title text-center">Bảng vinh danh</h4>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--<table id="tsb-modal-lop-table"--}}
                                                           {{--class="table table-striped tsb-tbl-detail">--}}
                                                        {{--<thead>--}}
                                                        {{--<tr>--}}
                                                            {{--<th class="text-center" style="width: 25px;"></th>--}}
                                                            {{--<th class="text-center">Sinh viên <i class="fa fa-user"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center">Số sao được thưởng<i--}}
                                                                        {{--class="fa fa-star"></i></th>--}}
                                                            {{--<th class="text-center">Số chúc mừng <i--}}
                                                                        {{--class="fa fa-thumbs-up"></i></th>--}}
                                                            {{--<th class="text-center"></th>--}}
                                                        {{--</tr>--}}
                                                        {{--</thead>--}}
                                                        {{--<tbody id="tsb-modal-lop-table-body">--}}
                                                        {{--</tbody>--}}
                                                    {{--</table>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--Modal Chúc Mừng  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  id="myModalLabel"-->--}}
                                    {{--<div class="modal fade" id="Modal_Like">--}}
                                        {{--<div class="modal-dialog">--}}
                                            {{--<div class="modal-content">--}}
                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                            {{--aria-label="Close"><span aria-hidden="true">×</span>--}}
                                                    {{--</button>--}}
                                                    {{--<h4 class="modal-title">Những người đã chúc mừng thành tích này</h4>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--<table id="tsb-chuc-mung-modal-table"--}}
                                                           {{--class="table table-hover tsb-tbl-detail">--}}
                                                        {{--<thead>--}}
                                                        {{--<tr>--}}
                                                            {{--<th></th>--}}
                                                            {{--<th style="width: 380px;">Sinh viên</th>--}}
                                                            {{--<th>Lớp</th>--}}
                                                        {{--</tr>--}}
                                                        {{--</thead>--}}
                                                        {{--<tbody id="tsb-chuc-mung-modal-table-body">--}}
                                                        {{--<!-- noi dung them boi nut click -->--}}
                                                        {{--</tbody>--}}
                                                    {{--</table>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Modal Lịch sử thưởng  -->--}}
                                    {{--<div class="modal fade" id="Modal_History">--}}
                                        {{--<div class="modal-dialog modal-lg">--}}
                                            {{--<div class="modal-content">--}}
                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                            {{--aria-label="Close"><span aria-hidden="true">×</span>--}}
                                                    {{--</button>--}}
                                                    {{--<h4 class="modal-title text-center" id="modal-title-ls-thuong">Thành--}}
                                                        {{--tích của sinh viên</h4>--}}
                                                    {{--<img src="#" class="dsm-avatar"--}}
                                                         {{--id="modal-title-avatar">--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--<table id="tsb-tbl-detail-sv"--}}
                                                           {{--class="table table-striped tsb-tbl-detail">--}}
                                                        {{--<thead>--}}
                                                        {{--<tr>--}}
                                                            {{--<th class="text-center" style="width: 25px;"></th>--}}
                                                            {{--<th class="text-center">Người thưởng <i--}}
                                                                        {{--class="fa fa-user"></i></th>--}}
                                                            {{--<th class="text-center">Số sao <i class="fa fa-star"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center">Ngày <i class="fa fa-calendar"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center">Lý do <i class="fa fa-comment"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center">Số <i class="fa fa-thumbs-up"></i>--}}
                                                            {{--</th>--}}
                                                            {{--<th class="text-center"><i class="fa fa-thumbs-up"></i></th>--}}
                                                        {{--</tr>--}}
                                                        {{--</thead>--}}
                                                        {{--<tbody id="tsb-tbl-body-detail-sv">--}}
                                                        {{--</tbody>--}}
                                                    {{--</table>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<span id="sb-8" class="skip-block-to"></span>--}}
                        {{--<div id="inst95" class="block_online_users sideblock">--}}
                            {{--<div class="content">--}}
                                {{--<div class="block_online_users">--}}
                                    {{--<div class="block_online_users_header">--}}
                                        {{--<p><i class="fa fa-comment"></i>THÀNH VIÊN ONLINE</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="block_online_users_content">--}}
                                        {{--<div id="block_online_users_content"--}}
                                             {{--class="mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar">--}}
                                            {{--<div id="mCSB_2"--}}
                                                 {{--class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"--}}
                                                 {{--style="max-height: none;" tabindex="0">--}}
                                                {{--<div id="mCSB_2_container"--}}
                                                     {{--class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"--}}
                                                     {{--style="position:relative; top:0; left:0;" dir="ltr">--}}
                                                    {{--<div id="mCSB_2"--}}
                                                         {{--class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"--}}
                                                         {{--style="max-height: 300px;" tabindex="0">--}}
                                                        {{--<div id="mCSB_2_container" class="mCSB_container"--}}
                                                             {{--style="position:relative; top:0; left:0;" dir="ltr">--}}
                                                            {{--<ul class="list_online">--}}
                                                                {{--<li class="block_online_users_person_online">--}}
                                                                    {{--<div class="online_ttcn"><span class="online"><i--}}
                                                                                    {{--class="fa fa-circle online_icon"></i></span><a--}}
                                                                                {{--class="block_online_users_link"--}}
                                                                                {{--href="#&amp;course=1"--}}
                                                                                {{--title="Hiện giờ">{{Auth::user()->full_name}}</a>--}}
                                                                        {{--<figure class="online_user_figure">--}}
                                                                            {{--<div class="online_user_text">--}}
                                                                                {{--<i class="fa fa-user"></i>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                        {{--<div class="clearer"><!-- --></div>--}}

                                                                    {{--</div>--}}
                                                                    {{--<span class="block_online_users_message">--}}
                                                                        {{--<a title="Add / send message" href="#"--}}
                                                                           {{--onclick="this.target='message_29489';return openpopup('/message/discussion.php?id=29489', 'message_29489', 'directories=no,titlebar=no,toolbar=no,location=yes,status=no,menubar=no', 0);">--}}
                                                                            {{--<img class="iconsmall mCS_img_loaded"--}}
                                                                                 {{--src="{{asset('dashboard/images')}}/message.gif"--}}
                                                                                 {{--alt="Add / send message">--}}
                                                                        {{--</a>--}}
                                                                    {{--</span>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<div class="clearer"><!-- --></div>--}}

                                                        {{--</div>--}}
                                                        {{--<div id="mCSB_2_scrollbar_vertical"--}}
                                                             {{--class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical"--}}
                                                             {{--style="display: none;">--}}
                                                            {{--<div class="mCSB_draggerContainer">--}}
                                                                {{--<div id="mCSB_2_dragger_vertical" class="mCSB_dragger"--}}
                                                                     {{--style="position: absolute; min-height: 50px; display: block; height: 0px; max-height: 290px; top: 0px;"--}}
                                                                     {{--oncontextmenu="return false;">--}}
                                                                    {{--<div class="mCSB_dragger_bar"--}}
                                                                         {{--style="line-height: 50px;"></div>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="mCSB_draggerRail"></div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div id="mCSB_2_scrollbar_vertical"--}}
                                                     {{--class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical">--}}
                                                    {{--<div class="mCSB_draggerContainer">--}}
                                                        {{--<div id="mCSB_2_dragger_vertical" class="mCSB_dragger"--}}
                                                             {{--style="position:absolute;" oncontextmenu="return false;">--}}
                                                            {{--<div class="mCSB_dragger_bar"></div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="mCSB_draggerRail"></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="mdl-textfield mdl-js-textfield">--}}
                                        {{--<input id="search-comment2" class="mdl-textfield__input"--}}
                                               {{--placeholder="  Tìm kiếm bạn bè" type="text">--}}
                                        {{--<label class="mdl-textfield__label" for="username">--}}
                                            {{--<i class="fa fa-search fa-tpc"></i>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="block_online_users_hotline">--}}
                                        {{--<p><span class="glyphicon glyphicon-headphones">--}}
                                                {{--<span style=" font-family: Open Sans;margin-left: 1px;font-size:14px;">--}}
                                                    {{--&nbsp;HOTLINE:&nbsp;&nbsp;04567&nbsp;8909</span></span></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<span id="sb-10" class="skip-block-to"></span></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div id="stick_right" data-toggle="modal" data-target="#myModal">
            <div class="float-body">
                <div class="float-title">
                    <h3>NHẮC VIỆC SINH VIÊN <strong style="text-transform: uppercase">{{Auth::user()->full_name}}</strong><br></h3>
                    <p>Tuần từ ngày {{ \Carbon\Carbon::now()->startOfWeek()->format('d/m/y') }} đến {{\Carbon\Carbon::now()->endOfWeek()->format('d/m/y')}}</p>
                </div>

                <div class="float-body-main">
                    <table class="table table-striped table-bordered">
                        <thead class="text-danger">
                        <tr>
                            <th class="text-center vcenter">
                                <span class="help" data-toggle="tooltip" data-placement="top" title=""
                                      data-original-title="Số câu hỏi đã đặt">
                                    <i class="fa fa-bell"></i>
                                    Hỏi đáp</span>
                            </th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số chủ đề đã gửi/Yêu cầu"><i
                                            class="fa fa-comments"></i> Diễn đàn</span>
                            </th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Số lần đăng nhập LMS/Yêu cầu"><i
                                            class="fa fa-graduation-cap"></i> Đăng nhập lớp</span>
                            </th>
                            <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                  data-placement="top" title=""
                                                                  data-original-title="Thời điểm bắt đầu phải chấm bài hoặc Số lượng bài đã chấm/Tổng số bài"><i
                                            class="fa fa-edit"></i>Làm bài tập</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center success">
                                <a href="#" target="_blank">0</a>
                            </td>
                            <td class="text-center warning warning-fix">
                                <a href="#" target="_blank">1/3</a>
                            </td>
                            <td class="text-center success">
                                <a href="#" target="_blank">25/3</a>
                            </td>
                            <td class="text-center success">---</td>
                            <td class="text-center success">
                                <a href="#" target="_blank">1/1</a>
                            </td>
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h2 class="modal-title text-center">NHẮC VIỆC SINH VIÊN<strong>{{Auth::user()->full_name}}</strong>
                        </h2>
                        <p class="modal-tilte text-center">Tuần từ ngày {{\Carbon\Carbon::now()->startOfWeek()->format('d/m/Y')}} đến {{\Carbon\Carbon::now()->endOfWeek()->format('d/m/Y')}}</p>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-bordered">
                            <thead class="text-danger">
                            <tr>
                                <th class="text-center vcenter">
                                    <span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Danh sách các course học đang giảng dạy">Lớp môn</span>
                                </th>
                                <th class="text-center vcenter"><span class="help" data-toggle="tooltip"
                                                                      data-placement="top" title=""
                                                                      data-original-title="Số câu hỏi chưa trả lời"><i
                                                class="fa fa-bell"></i> Hỏi đáp</span></th>
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_unit as $row)
                            <tr>
                                <td class="text-left"><a href="#">{{$row['class']->subject->name}}</a></td>
                                <td class="text-center success"><a href="#" target="_blank">---</a></td>
                                <td class="text-center warning warning-fix"><a href="#" target="_blank">---</a></td>
                                <td class="text-center @if($row['user-unit'] != null && $row['user-unit']->login_time >= 3)
                                        success
                                        @else
                                        warning warning-fix
                                        @endif
                                        ">
                                    <a href="#" target="_blank">
                                        @if($row['user-unit'] != null)
                                            {{$row['user-unit']->login_time}}/3
                                        @else 0/3
                                        @endif
                                    </a></td>
                                <td class="text-center
                                    @if(!$row['test']['tested']->isEmpty() && count($row['test']['tested']) >= $row['test']['total'])
                                        success
                                        @else
                                        warning warning-fix
                                        @endif
                                        ">
                                    @if(!$row['test']['tested']->isEmpty())
                                        {{count($row['test']['tested'])}}
                                    @else 0
                                    @endif
                                    /{{$row['test']['total']}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- Thêm Giải thích chi tiết -->
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a style="display: block;" class="accordion-toggle" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                                            Chú thích
                                            <span class="pull-right glyphicon glyphicon-minus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><strong>Hỏi đáp:</strong> Số câu hỏi Hỏi đáp hiện có cần trả lời</li>
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
                                        </ul>
                                        <span class="label label-success">GV đã hoàn thành công việc theo định mức</span><br>
                                        <span class="label label-warning">GV đang thực hiện một phần công việc. Đối với Hỏi đáp: câu hỏi chưa quá 72h</span><br>
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
@endsection
@section('bot')
    <script src="{{asset('dashboard/js/script.js')}}"></script>
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
