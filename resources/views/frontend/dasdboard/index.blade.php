@extends('frontend.dasdboard._layout.layout')
@section('content')
    @include('namviet._modules.carousel')
    <div class="content1" style="padding-bottom:25px;">
        <div class="xinwen">
            <span class="xinwen_title">
                <a href="#">Tin tức</a>
            </span>
            <span class="xinwen_more">
                <a href="#">Xem tất cả >&gt;</a>
            </span>
        </div>
        <div class="xinwen_lb">
            <div class="yaowen" style="margin-left:0;">
                <div class="focusBox" style="margin:0 auto">
                    <ul class="pic" style="position: relative; width: 324px; height: 245px;">
                        <li style="position: absolute; width: 324px; left: 0px; top: 0px;">
                            <a href="#" target="_blank">
                                <img src="http://www.hcmut.edu.vn/upload_hcmut/images/truongbachkhoa.jpg"></a>
                        </li>
                    </ul>
                    <div class="txt-bg"></div>
                    <div class="txt">
                        <ul>
                            <li style="bottom: 0px;" >
                                <a href="#" target="_blank" title="">{{$news->first()->title}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="yaowenlb" style="padding-top:20px;">
                <ul>
                    @foreach($news->splice(1,3) as $row)
                        <li>
                            <span>{{$row->updated_at}}</span>
                            <a href="" target="_blank" title="">{{$row->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="yaowenlb" style="padding-top:20px;">
                <ul>
                    @foreach($news->splice(1,3) as $row)
                        <li>
                            <span>{{$row->updated_at}}</span>
                            <a href="#" target="_blank" title="">{{$row->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="content1">
        <div class="yaowenlb" style="margin-left:0;">
            <div class="xinwen">
                <span class="xinwen_title" target="_blank">
                    <a href="#">Thông báo</a>
                </span><span class="xinwen_more"><a href="" target="_blank">Tất cả &gt;</a>
                </span>
            </div>
            <div class="xinwen_lb2">
                <ul>
                    @foreach($thongbao as $row)
                    <li>
                        <span>
                            <div class="day">{{$row->created_at->format('d')}}</div>
                            <div class="year">{{$row->created_at->format('Y-m')}}</div>
                        </span>
                        <a href="{{route('study.news',$row->id)}}" target="_blank" title="{{$row->title}}">{{$row->title}}</a>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
        <div class="yaowenlb">
            <div class="xinwen">
                <span class="xinwen_title" target="_blank"><a href="">Sinh viên</a></span>
                <span class="xinwen_more"><a href="#" target="_blank">Xem thêm &gt;</a>
                </span>
            </div>
            <div class="xinwen_lb3">
                <ul>
                    @foreach($thongbao as $row)
                    <li>
                        <a href="{{route('study.news',$row->id)}}" target="_blank" title="">
                            {{$row->title}}[{{$row->updated_at->format('m-m-Y')}}]</a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="yaowenlb">
            <div class="xinwen">
                <span class="xinwen_title" target="_blank">
                    <a href="#">Tuyển sinh</a>
                </span>
                <span class="xinwen_more"><a href="" target="_blank">Xem thêm &gt;</a>
                </span>
            </div>
            <div class="xinwen_lb4">
                <ul>
                    @foreach($tuyensinh as $row)
                    <li>
                        <table width="100%%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="source" align="center" valign="middle">{{$row->category->name}}</td>
                                <td align="left" style="padding-left:10px;">
                                    <a href="" target="_blank" title="">{{$row->title}}</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="content_grey">
        <div class="content2">
            <table class="zt" align="center" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td width="10%" height="120" align="center" style="color:#fff; font-size:18px;">Liên kết</td>
                    <td>
                        <table class="ztlb" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td align="center" valign="middle"><a href="#" target="_blank">
                                        <span>Tra cứu</span><i>&gt;</i></a></td>
                                <td align="center" valign="middle">
                                    <a href="#" target="_blank">
                                        <span>Thư viện</span><i>&gt;</i></a></td>
                                <td align="center" valign="middle">
                                    <a target="_blank" class="btn1" style="cursor:pointer">
                                        <span>Đăng ký trực tuyến</span><i>&gt;</i></a></td>
                                <td align="center" valign="middle">
                                    <a href="" target="_blank">
                                        <span>Tuyển sinh</span><i>&gt;</i>
                                    </a></td>
                                <td align="center" valign="middle">
                                    <a href="#" target="_blank">
                                        <span>Sinh viên</span><i>&gt;</i></a>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="middle"><a href="#" target="_blank">
                                        <span>Văn bản biểu mẫu</span><i>
                                            &gt;</i></a></td>
                                <td align="center" valign="middle"><a href="#"
                                                                      target="_blank"><span>Khoa học</span><i>
                                            &gt;</i></a></td>
                                <td align="center" valign="middle"><a href="#"
                                                                      target="_blank"><span>Hoạt động</span><i>&gt;</i></a>
                                </td>
                                <td align="center" valign="middle"><a href="#"
                                                                      target="_blank"><span>Tổ chức</span><i>
                                            &gt;</i></a></td>
                                <td align="center" valign="middle"><a href="#"
                                                                      target="_blank"><span>Đào tạo</span><i>
                                            &gt;</i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody></table>
        </div>
    </div>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('user/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/index/css_bisu.css')}}">
@endsection
@section('footer')
    <script>
        $('.slick-slider').slick({
            dots: true,
            arrows: false,
            slidesToShow: 4
        });
        //    $(document).ready(function() {
        //    $('.carousel').carousel({
        //    interval: 6000
        //    })
        //    });
        $(document).ready( function() {
            $('#myCarousel').carousel({
                interval:   6000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.nav').children().length -1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5804c285277fb7280d9e110f/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection

