<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Title -->
    <title>namviet Elearning</title>

    <link rel="icon" href="{{asset('/landing')}}/images/favicon.ico" type="image/x-icon"/>

    <!-- Bootstrap 3.2.0 stylesheet -->
    <link href="{{asset('/landing')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icon stylesheet -->
    <link href="{{asset('/landing')}}/css/font-awesome.min.css" rel="stylesheet">

    <!-- Owl Carousel stylesheet -->
    <link href="{{asset('/landing')}}/css/owl.carousel.css" rel="stylesheet">

    <!-- Pretty Photo stylesheet -->
    <link href="{{asset('/landing')}}/css/prettyPhoto.css" rel="stylesheet">

    <!-- Custom stylesheet -->
    <link href="{{asset('/landing')}}/style.css" rel="stylesheet">

    <link href="{{asset('/landing')}}/css/color/white.css" rel="stylesheet">


    <!-- Custom Responsive stylesheet -->
    <link href="{{asset('/landing')}}/css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- ====== Header Section ====== -->
<header id="top">
    <div class="bg-color">
        <div class="top section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-sm-7 col-md-7">
                        <div class="content">
                            <h1><strong>NamViet</strong> Elearning</h1>
                            <h2>The best educational software for students</h2>
                            <p>là phương thức học tập có sử dụng kết nối mạng để phục vụ học tập, lấy tài liệu học, trao đổi giao tiếp giữa người học với nhau và với giảng viên.</p>
                            <div class="button" id="download-app1">
                                <a href="{{asset('/')}}" class="btn btn-default btn-lg custom-btn"><i class="fa fa-cloud-download"></i>Demo</a>
                            </div> <!-- end .button -->
                        </div> <!-- end .content -->
                    </div> <!-- end .top > .container> .row> .col-md-7 -->

                    <div class="col-sm-5 col-md-5">
                        <div class="photo-slide">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="{{asset('landing')}}/images/Picture1.png" alt="">
                                    </div>
                                    <div class="item active left">
                                        <img src="{{asset('landing')}}/images/Picture2.png" alt="">
                                    </div>
                                    <div class="item next left">
                                        <img src="{{asset('landing')}}/images/phone.png" alt="">
                                    </div>
                                </div> <!-- end .carousel-inner -->
                            </div> <!-- end #carousel -->
                        </div> <!-- end .photo-slide -->
                    </div> <!-- end .top > .container> .row> .col-md-5 -->

                </div> <!-- end .top> .container> .row -->
            </div> <!-- end .top> .container -->
        </div> <!-- end .top -->
    </div> <!-- end .bg-color -->
</header>
<!-- ====== End Header Section ====== -->
<!-- ====== Menu Section ====== -->
<section id="menu">
    <div class="navigation">
        <div id="main-nav" class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Namviet Elearning</a>
                </div> <!-- end .navbar-header -->

                <div class="navbar-collapse collapse">
                    <ul id="ulnav" class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#top">Trang chủ</a></li>
                        <li><a href="#features">Tính năng nổi bật</a></li>
                        <li><a href="#screenshots">Hình ảnh</a></li>
                        <li><a href="#description">Description</a></li>
                        <li><a href="#testimonial">Reviews</a></li>
                        <li><a href="#contact">Liên hệ</a></li>
                    </ul>
                </div><!-- end .navbar-collapse -->

            </div> <!-- end .container -->
        </div> <!-- end #main-nav -->
    </div> <!-- end .navigation -->
</section>
<!-- ====== End Menu Section ====== -->
<!-- ====== Features Section ====== -->
<section id="features">
    <div class="features section-padding">
        <div class="container">

            <div class="header">
                <h1>Đặc điểm nổi bật</h1>
                <p>E-Learning đang phát triển mạnh mẽ và được coi là phương thức đào tạo cho tương lai. Vậy điều gì khiến cho E-Learning được coi trọng như vậy?</p>
                <div class="underline">
                    <i class="fa fa-briefcase"></i>
                </div>
            </div> <!-- end .container> .header -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-desktop"></i></div>
                        </div>
                        <div class="meta-text">
                            <h3>ONLINE</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-send"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>E-DOC</h3>
                            <p>Học liệu điện tử đa phương tiện (hình ảnh, âm thanh, video)</p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (2nd item) -->
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-gears"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>LUYỆN TẬP - THI</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-search"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>Smart Device
                            </h3>
                            <p>Smart Phone, Tablet, Computer
                            </p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (4th item) -->
            </div> <!-- end .feature-list> .row -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-file"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>LMS</h3>
                            <p>Hệ thống quản lý học tập
                            </p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (5th item) -->
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-mobile-phone"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>Video tương tác
                            </h3>
                            <p></p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (6th item) -->
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-file"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>ĐÁNH GIÁ XẾP LOẠI
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, culpa.</p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (5th item) -->
                <div class="col-sm-6 col-md-3">
                    <div class="featured-item">
                        <div class="icon">
                            <div class="icon-style"><i class="fa fa-mobile-phone"></i></div>
                        </div> <!-- end icon -->
                        <div class="meta-text">
                            <h3>LCMS</h3>
                            <p>Hệ thống quản lý nội dung học tập
                            </p>
                        </div> <!-- end .meta-text -->
                    </div> <!-- end .featured-item -->
                </div> <!-- end .feature-list> .row > .col-md-6 (6th item) -->
            </div>
        </div> <!-- end .container -->
    </div> <!-- end .features -->
</section>
<!-- ====== End Features Section ====== -->
<!-- ====== Screenshots Section ====== -->
<section id="screenshots">
    <div class="screenshots section-padding dark-bg">
        <div class="container">
            <div class="header">
                <h1>Hình ảnh</h1>
                <p></p>
                <div class="underline"><i class="fa fa-image"></i></div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture4.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture4.png" alt="item photo"></a>
                </div> <!-- end item -->
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture5.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture5.png" alt="item photo"></a>
                </div> <!-- end item -->
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture6.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture6.png" alt="item photo"></a>
                </div> <!-- end item -->
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture7.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture7.png" alt="item photo"></a>
                </div> <!-- end item -->
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture4.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture4.png" alt="item photo"></a>
                </div> <!-- end item -->
                <div class="item">
                    <a href="{{asset('landing')}}/images/Picture5.png" data-rel="prettyPhoto"><img src="{{asset('landing')}}/images/Picture5.png" alt="item photo"></a>
                </div> <!-- end item -->
            </div> <!-- end owl carousel -->
        </div> <!-- .container -->
    </div> <!-- end .screenshots -->
</section>




<!-- ====== End Screenshots Section ====== -->
<!-- ====== Description Section ====== -->
<section id="description">
    <div class="description">
        <div class="description-one section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="app-image">
                            <img src="{{asset('landing')}}/images/tuiuiouteterteu.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="content">
                            <h1>Ưu điểm</h1>
                            <h4></h4>
                            <p>Giáo dục trực tuyến cho phép đào tạo mọi lúc mọi nơi, truyền đạt kiến thức theo yêu cầu, thông tin đáp ứng nhanh chóng. Học viên có thể truy cập các khoá học bất kỳ nơi đâu như văn phòng làm việc, tại nhà, tại những điểm Internet công cộng, 24 giờ một ngày, 7 ngày trong tuần.
                                <br>
                                - Tiết kiệm chi phí <br>
                                - Tiết kiệm thời gian <br>
                                - Uyển chuyển và linh động <br>
                                - Tối ưu: Nội dung truyền tải nhất quán <br>
                                - Hệ thống hóa: E-learning dễ dàng tạo và cho phép học viên tham gia học, dễ dàng theo dõi tiến độ học tập, và kết quả học tập của học viên. Với khả năng tạo những bài đánh giá, người quản lí dễ dàng biết được nhân viên nào đã tham gia học, khi nào họ hoàn tất khoá học, làm thế nào họ thực hiện và mức độ phát triển của họ.                            </p>
                        </div>
                    </div>
                </div> <!-- .container> .row -->
            </div> <!-- .container -->
        </div> <!-- end .description-one -->

        <div class="description-two section-padding dark-bg">
            <div class="container">
                <div class="row">

                    <div class="col-sm-7 col-md-6">
                        <div class="content">
                            <h1>Moduls</h1>
                            <ul class="list-item">
                                <li><i class="fa fa-table"></i> Lớp học trực tuyến</li>
                                <li><i class="fa fa-video-camera"></i> Giáo trình dạng text, pdf, word,...</li>
                                <li><i class="fa fa-volume-up"></i>Video bài giảng</li>
                                <li><i class="fa fa-umbrella"></i> Audio: Ghi âm bài giảng</li>
                                <li><i class="fa fa-table"></i> Lớp học trực tuyến</li>
                                <li><i class="fa fa-video-camera"></i>Diễn đàn</li>
                                <li><i class="fa fa-volume-up"></i>Hỏi đáp</li>
                                <li><i class="fa fa-table"></i>Kiểm tra trắc hết bài</li>
                                <li><i class="fa fa-video-camera"></i>Thi</li>
                            </ul>
                        </div> <!-- end .content -->
                    </div> <!-- .container> .row> .col-md-6 -->
                    <div class="col-sm-5 col-md-6">
                        <div class="app-image">
                            <img class="img-responsive" src="{{asset('landing')}}/images/E-Learning.jpg" alt="">
                        </div> <!-- end .app-image -->
                    </div> <!-- .container> .row> .col-md-6 -->

                </div> <!-- .container> .row -->
            </div> <!-- .container -->
        </div> <!-- end .description-two -->

    </div> <!-- end .description -->
</section>
<!-- ====== End Description Section ====== -->
<!-- ====== Testimonial Section ====== -->
{{--<section id="subscribe">--}}
    {{--<div class="subscribe section-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="subscribe-header">--}}
                {{--<h1>Newsletter</h1>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                {{--<form action="" class="form subscribe-form">--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="input-group">--}}
                            {{--<label for="f-name" class="sr-only">Newsletter</label>--}}
                            {{--<input type="text" class="form-control" id="f-name" placeholder="Enter your email address">--}}
                            {{--<div class="input-group-addon">--}}
                                {{--<button class="" type="submit">SUBMIT</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--<div class="social">--}}
                {{--<ul>--}}
                    {{--<li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a class="google-plus" href=""><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li><a class="youtube" href=""><i class="fa fa-youtube"></i></a></li>--}}
                    {{--<li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--<li><a class="pinterest" href=""><i class="fa fa-pinterest"></i></a></li>--}}
                    {{--<li><a class="dribbble" href=""><i class="fa fa-dribbble"></i></a></li>--}}
                    {{--<li><a class="flickr" href=""><i class="fa fa-flickr"></i></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}


<footer id="contact">
    <div class="footer section-padding">
        <div class="container">
            <h1>Liên hệ</h1>
            <form action="" class="form contact">

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="name" class="sr-only">Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Tên">
                        </div> <!-- end .form-group -->

                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div> <!-- end .form-group -->

                        <div class="form-group">
                            <label for="subject" class="sr-only">Chủ đề</label>
                            <input type="text" class="form-control" id="subject" placeholder="Chủ đề">
                        </div> <!-- end .form-group -->
                    </div> <!-- end .form> .row> .col-md-4 -->

                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="message" class="sr-only">Tin nhắn</label>
                            <textarea name="message" id="message" placeholder="Tin nhắn"></textarea>
                        </div> <!-- end .form-group -->
                    </div>
                </div> <!-- end .form> .row -->

                <button class="btn btn-default contact-submit custom-btn" type="submit"><i class="fa fa-hand-o-right"></i>Xác nhận</button>
            </form> <!-- end .form -->
        </div> <!-- end .container -->
    </div> <!-- end .footer -->
</footer>
<!-- ====== End Contact Section ====== -->
<!-- ====== Copyright Section ====== -->
<section class="copyright dark-bg">
    <div class="container">
        <p>&copy; 2016 <a href="#">namviet</a>, All Rights Reserved</p>
    </div> <!-- end .container -->
</section>
<!-- ====== End Copyright Section ====== -->

<!-- jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="{{asset('/landing')}}/js/jquery.js"></script>

<!-- Modernizr js -->
<script src="{{asset('/landing')}}/js/modernizr-latest.js"></script>

<!-- Bootstrap 3.2.0 js -->
<script src="{{asset('/landing')}}/js/bootstrap.min.js"></script>

<!-- Owl Carousel plugin -->
<script src="{{asset('/landing')}}/js/owl.carousel.min.js"></script>

<!-- ScrollTo js -->
<script src="{{asset('/landing')}}/js/jquery.scrollto.min.js"></script>

<!-- LocalScroll js -->
<script src="{{asset('/landing')}}/js/jquery.localScroll.min.js"></script>

<!-- jQuery Parallax plugin -->
<script src="{{asset('/landing')}}/js/jquery.parallax-1.1.3.js"></script>

<!-- Skrollr js plugin -->
<script src="{{asset('/landing')}}/js/skrollr.min.js"></script>

<!-- jQuery One Page Nav Plugin -->
<script src="{{asset('/landing')}}/js/jquery.nav.js"></script>

<!-- jQuery Pretty Photo Plugin -->
<script src="{{asset('/landing')}}/js/jquery.prettyPhoto.js"></script>


<!-- Custom JS -->
<script src="{{asset('/landing')}}/js/main.js"></script>

<script>
    jQuery(document).ready(function($) {
        "use strict";
        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({social_tools:false});
    });
</script>
</body>
</html>