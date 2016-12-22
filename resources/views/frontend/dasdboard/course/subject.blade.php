@extends('frontend.dasdboard._layout.layout_db')
@section('head')
    <link href="{{asset('')}}dashboard/customs/material.teal-red.min.css" rel="stylesheet" />
    <link href="{{asset('')}}dashboard/customs/style_theme.css" rel="stylesheet" />
    <link href="{{asset('')}}dashboard/customs/style_kienpnt.css" rel="stylesheet" />
@endsection
@section('content')
    <link href="{{asset('')}}dashboard/customs/style(10).css" rel="stylesheet" />
    <div class="container">
        <div class="row">
            <div class="col-md-2 fb-left-sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation">
                        <div class="thumbnail">
                            <img src="{{asset(Auth()->user()->avatar())}}">
                        </div>
                        <div class="caption">
                            <a href="#">{{Auth()->user()->ho_ten}}</a>
                        </div>
                    </li>
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span>Sinh viên</a>
                    </li>
                    <li role="presentation">
                        <a href="{{route('study.danhsachsinhvienlop',$class->id)}}"><span class="glyphicon glyphicon-list"></span>Danh sách lớp</a>
                    </li>
                    <!-- List items that are just text are not indented, and look like the
                         Facebook section labels. -->
                    <li role="presentation" class="content-header">Nội dung môn học</li>
                    <?php $k = 1 ?>
                @foreach($class->subject->unit->sortBy('position') as $row)
                        <li role="presentation" class="content_body">
                            <a href="#">
                                <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                                <div class="linkwrap">
                                    <span>Tuần {{$k}}</span>
                                </div>
                            </a>
                        </li>
                            <?php $k ++ ?>
                    @endforeach
                    <li role="presentation" class="content-header">Lớp học của tôi</li>
                    @foreach($classes as $row)
                        <li role="presentation" class="content_body">
                            <a href="{{route('study.subject',$row)}}" title="{{$row->name}}">
                                <div class="pull-right">
                                    <span class="badge">1/7</span>
                                </div>
                                <span class="class-icon">
                                    <img src="{{asset($row->subject->anhbia())}}">
                                </span>
                                <div class="linkwrap">
                                    <span>{{$row->subject->name.'-'.$row->stt_lop}}</span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    <li role="presentation" class="content-header">Hỗ trợ học tập</li>
                    <li role="presentation" class="content_body">
                        <a href="#">
                            <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                            <div class="linkwrap">
                                <span>Diễn đàn</span>
                            </div>
                        </a>
                    </li>
                    <li role="presentation" class="content_body">
                        <a href="{{route('study.allquestion')}}">
                            <span class="glyphicon glyphicon-plus class-icon" style="line-height: 20px"></span>
                            <div class="linkwrap">
                                <span>Hỏi đáp</span>
                            </div>
                        </a>
                    </li>
                    <li role="presentation" class="content_body">
                        <a href="#">
                            <span class="glyphicon glyphicon-stop class-icon" style="line-height: 20px"></span>
                            <div class="linkwrap">
                                <span>Báo lỗi</span>
                            </div>
                        </a>
                    </li>
                    <li role="presentation" class="content-header">Hồ sơ cá nhân</li>
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-plus"></span>Thông tin cá nhân</a>
                    </li>
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-user"></span> New Groups</a>
                    </li>
                    <li role="presentation" class="content-header">Báo cáo</li>
                    <li role="presentation">
                        <a href="#"><span class="glyphicon glyphicon-pushpin"></span> Amherst, MA</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10" id="course-view">
                <div>
                    <span id="maincontent"></span>
                    <table class="topics" width="100%" summary="Layout table">
                        <tbody>
                        <tr id="section-0" class="section main">
                            <td class="left side">&nbsp;</td>
                            <td class="content">
                                <div class="summary bg-ss-week-1">
                                    <table width="100%" border="0">
                                        <tbody>
                                        <tr>
                                            <td width="20%" valign="top" align="center" colspan="1" rowspan="1">
                                                <br><br>
                                            </td>
                                            <td width="3%" rowspan="1" colspan="1"><br>
                                            </td>
                                            <td width="77%" valign="top" rowspan="1"><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="20%" valign="top" align="center" colspan="1" rowspan="4">
                                                <!-----> <font size="2"><font size="2">
                                                        <img width="180"
                                                             vspace="0"
                                                             hspace="3"
                                                             height="225"
                                                             border="0"
                                                             align="left"
                                                             src="{{asset($class->subject->image)}}"
                                                             alt="anh bia"
                                                             title="anh bia"></font></font>
                                            </td>
                                            <td width="3%" rowspan="4" colspan="1"><br><br> <br> <br>
                                            </td>
                                            <td width="77%" valign="top"><span
                                                        style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">
      <table width="100%" border="0">
          <tbody>
        <tr>
          <td width="50%" valign="top">
              <span style="color: rgb(51, 51, 51);
               font-family: helvetica,arial,sans-serif;
                font-size: 15px;
                 font-style: normal;
                  font-variant: normal;
                   font-weight: normal;
                    letter-spacing: normal;
                     line-height: 37.5px;
                      text-align: start;
                       text-indent: 0px;
                        text-transform: none;
                         white-space: normal;
                          word-spacing: 0px;
                           display: inline ! important;
                           text-transform: uppercase;
                            float: none;">
                  {{$class->subject->name}}
              </span><br>
          </td>
          <td width="50%" valign="top" align="right"><span
                      style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);"><span
                          style="color: rgb(82, 82, 82); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"></span></span> <br>
          </td>
        </tr></tbody>
      </table>
   </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);"></span>
                                                <hr>
                                                <span style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">Chào mừng đến với môn học<span
                                                            class="Apple-converted-space"> <b>{{$class->subject->name}}</b></span></span><b
                                                        style="box-sizing: border-box; font-weight: 700; color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px;">
                                                    - {{$class->code}}</b><span
                                                        style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span
                                                            class="Apple-converted-space"> </span></span><span
                                                        style="color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 37.5px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"> - ngành <span
                                                            class="Apple-converted-space"><b>Công nghệ thông tin.</b></span></span><b></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="topica-main-content-course-tuan">
                                                    <ul class="list-inline">
                                                        <li class="text-tuan">
                                                            <a href="#">
                                                                <p class="tuan">Tuần 0</p>
                                                                <p class="content-date-tuan">00/00-00/00</p>
                                                            </a>
                                                        </li>
                                                        <?php $k = 1 ?>
                                                        @foreach($class->subject->unit->sortBy('position') as $row)
                                                            <li class="text-tuan @if($row->unit_class($class->id) != null && $row->unit_class($class->id)->start_time <= \Carbon\Carbon::now() && \Carbon\Carbon::now() <= $row->unit_class($class->id)->end_time ) calendar_active @endif">
                                                                <a href="#section-{{$k}}">
                                                                    <p class="tuan">Tuần {{$k}}</p>
                                                                    <p class="content-date-tuan">{{($row->unit_class($class->id) != null)? ($row->unit_class($class->id)->start_time->format('d/m').' - '.$row->unit_class($class->id)->end_time->format('d/m')): '00/00 - 00/00'}}</p>
                                                                </a>
                                                            </li>
                                                            <?php $k++ ?>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p style="box-sizing: border-box; margin: 0px 0px 16px; padding: 0px; font-weight: normal; line-height: 24px; font-size: 14px; letter-spacing: normal; color: rgb(51, 51, 51); font-family: helvetica,arial,sans-serif; font-style: normal; font-variant: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px;">
                                                    Từ <span class="time-content-tuan" id="scrollspy1">17/10/2016</span>
                                                    Sinh viên tự ôn tập để bài thi kết thúc học phần đạt kết quả
                                                    cao nhất</p>
                                                <p class="topica-ngaythi"
                                                   style="box-sizing: border-box; margin: 0px 0px 16px; padding: 0px; font-weight: normal; line-height: 24px; font-size: 14px; letter-spacing: normal; font-family: helvetica,arial,sans-serif; font-style: normal; font-variant: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                                                    <b style="box-sizing: border-box; font-weight: 700; color: rgb(9, 129, 33);">NGÀY
                                                        THI DỰ KIẾN: </b><b
                                                            style="box-sizing: border-box; font-weight: 700; color: rgb(0, 129, 49);"><span
                                                                class="time-content-tuan" id="scrollspy1">06/11/2016</span>.</b>
                                                    Chúc anh chị học
                                                    tập tốt!</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br></div>
                            </td>
                            <td class="right side">&nbsp;</td>
                        </tr>
                        <tr class="section separator">
                            <td colspan="3" class="spacer"></td>
                        </tr>
                        <?php $k = 1 ?>
                        @foreach($class->subject->unit->sortBy('position') as $row)
                            <tr id="section-{{$k}}" class="section main">
                                <td class="left side">&nbsp;</td>
                                <td class="content">
                                    <div style="cursor:pointer;" class="summary"><p
                                                class="topica-text-week-in-course" data-toggle="collapse"
                                                data-target="#session-tuan-{{$k}}"><!--topicaweek-->TUẦN {{$k}} <span
                                                    class="time-content-tuan" id="scrollspy{{$k}}">(29/08/2016 - 04/09/2016)</span>
                                        </p><br></div>
                                    <div class="collapse bg-week-in-course bg-ss-week-1 in" id="session-tuan-{{$k}}">
                                        <ul class="section img-text">
                                            <li class="activity label" id="module-296421"><font
                                                        size="4"> </font>
                                                <table width="100%" border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%" valign="top" align="center"><img
                                                                    width="170" vspace="0" hspace="0"
                                                                    height="40" border="0" title="in" alt="in"
                                                                    src="{{asset('dashboard/images')}}/lecture.png"><br>
                                                        </td>
                                                        <td width="3%"
                                                            style="border-left: 1px solid rgb(122, 122, 122);">
                                                            <br>
                                                        </td>
                                                        <td width="77%" valign="top">
                                                            <div align="left"><font size="2">Bài {{$k}}: {{$row->name}}</font>
                                                            </div>
                                                            <font size="4"><br></font><font size="4">
                                                                <table width="100%" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        @if(!$row->meeting  == null)
                                                                            <td  valign="top"
                                                                                 align="center" style="width: 180px">
                                                                                <a href="{{url('study/meeting/'.$row->id.'/'.$class->id)}}" target="_blank" title="MP3">
                                                                                    <font  size="4">
                                                                                        <img width="150" vspace="0" hspace="0" height="60" border="0" src="{{asset('dashboard/images')}}/course_onine.png"  alt="mp3"title="mp3">
                                                                                    </font>
                                                                                </a>
                                                                            </td>
                                                                        @endif
                                                                        @if(!$row->theory->isEmpty())
                                                                            <td  valign="top" align="center">
                                                                                <a href="{{url('study/unit/theory').'/'.$row->id.'/'.$class->id}}"><img
                                                                                            vspace="0" hspace="0"
                                                                                            border="0"
                                                                                            src="{{asset('dashboard/images')}}/pdf.png"
                                                                                            alt="pdf"
                                                                                            title="pdf">
                                                                                </a>
                                                                                <br>
                                                                            </td>
                                                                        @endif
                                                                        @if($row->slide_video != null)
                                                                            <td  valign="top" align="center">
                                                                                <a href="{{url('study/unit/slide-video/'.$row->id.'/'.$class->id)}}" title="Slide">
                                                                                    <font
                                                                                            size="4">
                                                                                        <img width="87" vspace="0" hspace="0"
                                                                                             height="60"
                                                                                             border="0"
                                                                                             src="{{asset('dashboard/images')}}/slide.png"
                                                                                             alt="slide"
                                                                                             title="slide">
                                                                                    </font>
                                                                                </a>
                                                                            </td>
                                                                        @endif
                                                                        @if($row->audio != null)
                                                                            <td  valign="top"
                                                                                 align="center">
                                                                                <a href="{{url('study/unit/audio/'.$row->id.'/'.$class->id)}}" target="_blank" title="MP3"><font  size="4"><img width="87"
                                                                                                                                                                                                vspace="0"
                                                                                                                                                                                                hspace="0"
                                                                                                                                                                                                height="60"
                                                                                                                                                                                                border="0"
                                                                                                                                                                                                src="{{asset('dashboard/images')}}/mp3.png"
                                                                                                                                                                                                alt="mp3"
                                                                                                                                                                                                title="mp3"></font></a>
                                                                            </td>
                                                                        @endif
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </font><br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top">
                                                            <table width="100%" border="0">
                                                                <tbody>
                                                                <tr>
                                                                    <td width="77%" valign="top"><br>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <font size="4"> </font></li>
                                            <li class="activity label" id="module-296422"><font
                                                        size="4"> </font>
                                                <table width="100%" border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%" valign="top" align="center"><img
                                                                    vspace="0" hspace="0" border="0"
                                                                    src="{{asset('dashboard/images')}}/interaction.png"
                                                                    alt="in" title="in"><br>
                                                        </td>
                                                        <td width="3%"
                                                            style="border-left: 1px solid rgb(122, 122, 122);">
                                                            <br>
                                                        </td>
                                                        <td width="77%" valign="top">
                                                            <table width="100%" border="0">
                                                                <tbody>
                                                                <tr>
                                                                    <td width="33%" valign="top" align="center">
                                                                        <a target="_blank" href="http://namvietjsc.tk/forum.php">
                                                                            <img vspace="0" hspace="0"
                                                                                 border="0"
                                                                                 src="{{asset('dashboard/images')}}/forum.png"
                                                                                 alt="forum"
                                                                                 title="forum"></a><br>
                                                                    </td>
                                                                    <td width="33%" valign="top" align="center">
                                                                        <a href="{{url('study/unit/add_question'.'/'.$row->id.'/'.$class->id)}}"
                                                                           target="_blank">
                                                                            <img width="60"
                                                                                 vspace="0"
                                                                                 hspace="0"
                                                                                 height="60"
                                                                                 border="0"
                                                                                 src="{{asset('dashboard/images')}}/H24H.png"
                                                                                 alt="h2472"
                                                                                 title="h2472"></a>
                                                                    </td>
                                                                    <td width="33%" valign="top"><br>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <font size="4"><br></font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <font size="4"> </font></li>
                                            <li class="activity label" id="module-296423">
                                                <table width="100%" border="0">
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="20%" valign="top"><img vspace="0" hspace="0"
                                                                                          border="0"
                                                                                          src="{{asset('dashboard/images')}}/practice.png"
                                                                                          alt="p" title="p"><br>
                                                            <div align="left"><img vspace="0" hspace="0"
                                                                                   border="0"
                                                                                   src="{{asset('dashboard/images')}}/chu-y.png"
                                                                                   alt="note" title="note"><br>
                                                            </div>
                                                        </td>
                                                        <td width="3%"
                                                            style="border-left: 1px solid rgb(122, 122, 122);">
                                                            <br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td width="77%" valign="top" align="left">
                                                            @foreach($row->test as $test)
                                                                <div>
                                                                    <p><font size="2">{{$test->description}}</font></p>
                                                                    <br><font size="2">
                                                                        <img vspace="0"
                                                                             hspace="0"
                                                                             border="0"
                                                                             src="{{asset('dashboard/images')}}/LTTN.gif"
                                                                             alt="aa" title="aa">
                                                                        <a href="{{url('study/begin_test'.'/'.$test->id.'/'.$test->unit_id.'/'.$class->id)}}">{{$test->name}}</a>
                                                                    </font><br>
                                                                </div>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                        <td valign="top"><br>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul><!--class='section'-->
                                        <div style="clear: both;"></div>
                                    </div>
                                </td>
                                <td class="right side"></td>
                            </tr>
                            <tr class="section separator ">
                                <td colspan="3" class="spacer"></td>
                            </tr>
                            <?php
                            $k++;
                            ?>
                        @endforeach
                        <tr id="section-{{$k}}" class="section main">
                            <td class="left side">&nbsp;</td>
                            <td class="content">
                                <div style="cursor:pointer;" class="summary"><p
                                            class="topica-text-week-in-course" data-toggle="collapse"
                                            data-target="#session-tuan-{{$k}}"><!--topicaweek-->TUẦN {{$k}} <span
                                                id="scrollspy9" class="time-content-tuan"></span></p><br></div>
                                <div class="collapse bg-week-in-course bg-ss-week-1 in" id="session-tuan-{{$k}}">
                                    <ul class="section img-text">
                                        <li class="activity label" id="module-296447">
                                            <table width="100%" border="0">
                                                <tbody>
                                                <tr>
                                                    <td width="3%" valign="top" align="left" rowspan="1"
                                                        colspan="2"><img vspace="0" hspace="0" border="0"
                                                                         src="{{asset('dashboard/images')}}/chu-y.png"
                                                                         alt="note" title="note"><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="3%" valign="top"><br>
                                                    </td>
                                                    <td width="80%" valign="top" align="left"><font size="5">LỚP
                                                            HỌC ĐÃ KẾT THÚC</font><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="3%" valign="top"><br>
                                                    </td>
                                                    <td width="80%" valign="top" align="left"><font
                                                                size="3"><span
                                                                    style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">Sinh viên tự ôn tập, </span></font><span
                                                                style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);"><font
                                                                    size="3">luyện thi. Để ôn thi tốt và thi đạt kết quả cao, sinh viên cần</font><br></span><font
                                                                size="2"><span
                                                                    style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">- Ôn tập lý thuyết và làm các dạng bài tập cơ bản<br></span><span
                                                                    style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">- Làm tất cả các bài Luyện tập trắc nghiệm và Luyện tập trước thi<br></span><span
                                                                    style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">- Trao đổi với các sinh viên khác trên diễn đàn<br></span><span
                                                                    style="color: rgb(0, 0, 0); font-family: helvetica,arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 24px; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: rgb(255, 255, 255);">- Không trao đổi với giảng viên trên diễn đàn và H24x72</span></font><br>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br></li>
                                    </ul>
                                    <div style="clear: both;"></div>
                                </div>
                            </td>
                            <td class="right side"></td>
                        </tr>
                        <tr class="section separator ">
                            <td colspan="3" class="spacer"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        {{--<link rel="stylesheet" href="{{asset('dashboard/images')}}/font-awesome.min(1).css">--}}
        <div id="stick_right_icon">
            <ul class="tpc-icon">
                <li class="button-wrap">
                    <div class="text-bg"><a href="#" target="_blank">Hỏi đáp</a>
                    </div>
                    <div class="icon-bg btn-success"><i class="fa fa-bell fa-2x"></i>{{$thong_bao['hoi_dap']}}</div>
                    <div class="clear-both"></div>
                </li>
                <li class="button-wrap">
                    <div class="text-bg"><a href="#" target="_blank">Diễn đàn</a></div>
                    <div class="icon-bg btn-warning"><i class="fa fa-comments fa-2x"></i>{{$thong_bao['dien_dan']}}/3</div>
                    <div class="clear-both"></div>
                </li>
                <li class="button-wrap">
                    <div class="text-bg"><a href="#"
                                            target="_blank">Đăng nhập lớp</a></div>
                    <div class="icon-bg btn-success"><i class="fa fa-graduation-cap fa-2x"></i>{{$thong_bao['dang_nhap']}}/3</div>
                    <div class="clear-both"></div>
                </li>
                <li class="button-wrap" data-toggle="modal" data-target="#myModal2">
                    <div class="text-bg">Chi tiết</div>
                    <div class="icon-bg-small btn-info"><i class="fa fa-plus fa-2x"></i></div>
                    <div class="clear-both"></div>
                </li>
            </ul>
        </div>

        <div class="modal fade" id="myModal_dggv_in_course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="z-index: 9999; margin-top: 100px; display: none;">
            <div class="modal-dialog modal-lg" style="    z-index: 100000;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        <h3 class="modal-title text-center">NHẮC VIỆC GIẢNG VIÊN <strong>THS. PHẠM QUANG VINH</strong>
                        </h3>
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
                                            href="#" target="_blank">1/2</a>
                                </td>
                                <td class="text-center success"><a
                                            href="#"
                                            target="_blank">25/3</a></td>
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
                                           data-parent="#accordion"
                                           href="{{route('study.mycourse')}}#collapseOne">
                                            Chú thích
                                            <span class="pull-right glyphicon glyphicon-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
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
        <!-- Load javascript -->
    </div>
@endsection