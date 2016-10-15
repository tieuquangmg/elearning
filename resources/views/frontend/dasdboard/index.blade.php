@extends('frontend.dasdboard._layout.layout')
@section('content')
    @include('namviet._modules.carousel')
    <div class="container">
        <div class="page-section-heading">
            {{--<h2 class="text-display-1">Features</h2>--}}
            <p class="lead text-muted">NHỮNG ĐIỂM ƯU VIỆT CỦA NAMVIET ELEARNING</p>
        </div>
        <div class="row" data-toggle="gridalicious">

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-green-300 text-white">
                        <div class="panel-body">
                            <i class="fa fa-film fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline">Tính hấp dẫn</div>
                            <p>Với sự hỗ trợ của công nghệ multimedia, những bài giảng tích hợp text, hình ảnh minh hoạ, âm thanh thêm tính hấp dẫn của bài học. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-purple-300 text-white">
                        <div class="panel-body">
                            <i class="fa fa-life-bouy fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline">Tính linh hoạt</div>
                            <p>Một khoá học E-learning được phục vụ theo nhu cầu người học, chứ không nhất thiết phải bám theo một thời gian biểu cố định.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-orange-400 text-white">
                        <div class="panel-body">
                            <i class="fa fa-user fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline"> Tính cập nhật</div>
                            <p>Nội dung khoá học thường xuyên được cập nhật và đổi mới nhằm đáp ứng và phù hợp tốt nhất cho học viên.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-cyan-400 text-white">
                        <div class="panel-body">
                            <i class="fa fa-code fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline"> Không giới hạn</div>
                            <p>Sự phổ cập rộng rãi của Internet đã dần xoá đi khoảng cách về thời gian và không gian cho E-Learning</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-pink-400 text-white">
                        <div class="panel-body">
                            <i class="fa fa-print fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline">Học có sự hợp tác</div>
                            <p>Các học viên có thể dễ dàng trao đổi với nhau qua mạng trong quá trình học, trao đổi giữa các học viên và với giảng viên.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 media">
                <div class="media-left padding-none">
                    <div class="bg-red-400 text-white">
                        <div class="panel-body">
                            <i class="fa fa-tasks fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline">Dễ tiếp cận</div>
                            <p>Bảng danh mục bài giảng sẽ cho phép học viên lựa chọn đơn vị tri thức, tài liệu một cách tuỳ ý theo trình độ kiến thức</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <br/>
    {{--<div class="page-section bg-white">--}}
        {{--<div class="container">--}}
            {{--<div class="text-center">--}}
                {{--<h3 class="text-display-1">Lớp học nổi bật</h3>--}}
                {{--<p class="lead text-muted">------------------------------------------------------------</p>--}}
            {{--</div>--}}
            {{--<br/>--}}

            {{--<div class="slick-basic slick-slider" data-items="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">--}}
                {{--@foreach($classes as $value)--}}
                    {{--<div class="item">--}}
                        {{--<div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>--}}
                            {{--<div class="panel-body">--}}
                                {{--<div class="media media-clearfix-xs">--}}
                                    {{--<div class="media-left">--}}
                                        {{--<div class="cover width-90 width-100pc-xs overlay cover-image-full hover">--}}
                                            {{--<span class="img icon-block s90 bg-default"></span>--}}
                    {{--<span class="overlay overlay-full padding-none icon-block s90 bg-default">--}}
                        {{--<span class="v-center">--}}
                            {{--<img src="{{asset('').$value->subject->image}}">--}}
                        {{--</span>--}}
                    {{--</span>--}}
                                            {{--<a href="website-course.html"--}}
                                               {{--class="overlay overlay-full overlay-hover overlay-bg-white">--}}
                      {{--<span class="v-center">--}}
                            {{--<span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>--}}
                      {{--</span>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body">--}}
                                        {{--<h4 class="media-heading margin-v-5-3"><a href="{{route('study.subject',$value->id)}}">{{$value->name}}</a></h4>--}}
                                        {{--<p class="small margin-none">--}}
                                            {{--<span class="fa fa-fw fa-star text-yellow-800"></span>--}}
                                            {{--<span class="fa fa-fw fa-star text-yellow-800"></span>--}}
                                            {{--<span class="fa fa-fw fa-star text-yellow-800"></span>--}}
                                            {{--<span class="fa fa-fw fa-star-o text-yellow-800"></span>--}}
                                            {{--<span class="fa fa-fw fa-star-o text-yellow-800"></span>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            {{--<div class="text-center">--}}
                {{--<br/>--}}
                {{--<a class="btn btn-lg btn-primary" href="#">Danh sách lớp</a>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">--}}
        {{--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="v-cell">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-body">--}}

                        {{--<div class="wizard-container wizard-1" id="wizard-demo-1">--}}
                            {{--<div data-scrollable-h>--}}
                                {{--<ul class="wiz-progress">--}}
                                    {{--<li class="active">Plan &amp; Payment</li>--}}
                                    {{--<li>Account Setup</li>--}}
                                    {{--<li>Personal Details</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<form action="#" data-toggle="wizard" class="max-width-400 h-center">--}}

                                {{--<fieldset class="step relative paper-shadow form-horizontal" data-z="2">--}}
                                    {{--<div class="page-section-heading">--}}
                                        {{--<h2 class="text-h3 margin-v-0">Payment</h2>--}}
                                        {{--<h3 class="text-h4 margin-v-10 text-grey-400">Your plan is--}}
                                            {{--<strong class="text-uppercase">learner</strong> for--}}
                                            {{--<strong>&dollar;19.99/mo</strong>--}}
                                        {{--</h3>--}}
                                        {{--<a href="#">See pricing</a>--}}
                                    {{--</div>--}}
                                    {{--<hr/>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="credit-card" class="col-xs-4 control-label">Credit Card</label>--}}
                                        {{--<div class="col-xs-8">--}}
                                            {{--<div class="form-control-material">--}}
                                                {{--<input type="text" class="form-control" id="credit-card" placeholder="**** **** **** 2422">--}}
                                                {{--<label for="credit-card">Credit Card</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="card-expiration" class="col-xs-4 control-label">Expiration:</label>--}}
                                        {{--<div class="col-xs-8">--}}
                                            {{--<select id="card-expiration" data-toggle="select2">--}}
                                                {{--<option value="1" selected>January</option>--}}
                                                {{--<option value="2">February</option>--}}
                                                {{--<option value="3">March</option>--}}
                                                {{--<option value="4">April</option>--}}
                                                {{--<option value="5">May</option>--}}
                                                {{--<option value="6">June</option>--}}
                                                {{--<option value="7">July</option>--}}
                                                {{--<option value="8">August</option>--}}
                                                {{--<option value="9">September</option>--}}
                                                {{--<option value="10">October</option>--}}
                                                {{--<option value="11">November</option>--}}
                                                {{--<option value="12">December</option>--}}
                                            {{--</select>--}}
                                            {{--<select data-toggle="select2">--}}
                                                {{--<option value="2015" selected>2015</option>--}}
                                                {{--<option value="2016">2016</option>--}}
                                                {{--<option value="2017">2017</option>--}}
                                                {{--<option value="2018">2018</option>--}}
                                                {{--<option value="2019">2019</option>--}}
                                                {{--<option value="2020">2020</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="cvv" class="col-xs-4 control-label">CVV</label>--}}
                                        {{--<div class="col-xs-8">--}}
                                            {{--<div class="form-control-material">--}}
                                                {{--<input type="email" class="form-control" id="cvv" placeholder="123">--}}
                                                {{--<label for="cvv">CVV</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="text-right">--}}
                                        {{--<button type="button" class="wiz-next btn btn-primary">Next</button>--}}
                                    {{--</div>--}}
                                {{--</fieldset>--}}

                                {{--<fieldset class="step relative paper-shadow" data-z="2">--}}
                                    {{--<div class="page-section-heading">--}}
                                        {{--<h2 class="text-h3 margin-v-0">Create your account</h2>--}}
                                        {{--<h3 class="text-h4 margin-v-10 text-grey-400">This is a multi step form</h3>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="text" id="wiz-email" placeholder="Email" />--}}
                                        {{--<label for="wiz-email">Email:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="password" id="wiz-password" placeholder="Password" />--}}
                                        {{--<label for="wiz-password">Password:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="password" id="wiz-password2" placeholder="Confirm Password" />--}}
                                        {{--<label for="wiz-password2">Confirm Password:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-xs-6">--}}
                                            {{--<button type="button" class="wiz-prev btn btn-default">Previous</button>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-6 text-right">--}}
                                            {{--<button type="button" class="wiz-next btn btn-primary">Next</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</fieldset>--}}

                                {{--<fieldset class="step relative paper-shadow" data-z="2">--}}
                                    {{--<div class="page-section-heading">--}}
                                        {{--<h2 class="text-h3 margin-v-0">Personal Details</h2>--}}
                                        {{--<h3 class="text-h4 margin-v-10 text-grey-400">Your personal details are safe with us</h3>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="text" id="wiz-fname" placeholder="First name" />--}}
                                        {{--<label for="wiz-fname">First name:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="tel" id="wiz-lname" placeholder="Last name" />--}}
                                        {{--<label for="wiz-lname">Last name:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<input class="form-control" type="text" id="wiz-phone" placeholder="Phone" />--}}
                                        {{--<label for="wiz-phone">Phone:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group form-control-material">--}}
                                        {{--<textarea rows="5" class="form-control" id="wiz-address" placeholder="Your address"></textarea>--}}
                                        {{--<label for="wiz-address">Address:</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-xs-6">--}}
                                            {{--<button type="button" class="wiz-prev btn btn-default">Previous</button>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-6 text-right">--}}
                                            {{--<button type="button" class="wiz-step btn btn-primary" data-target="0">Submit</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</fieldset>--}}

                            {{--</form>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Công ty</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Giới thiêu</a></li>
                        <li><a href="#">văn phòng</a></li>
                        <li><a href="#">Đối tác</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Riêng tư</a></li>
                        <li><a href="#">Liên hệ chúng tôi</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Explore</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Các khóa học</a></li>
                        <li><a href="">.</a></li>
                        <li><a href="">.</a></li>
                        <li><a href="">.</a></li>
                        <li><a href="">.</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="text-headline text-light">Bản tin</h4>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ email...">
              <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button">Theo dõi</button>
							  </span>
                        </div>
                    </div>
                    <br/>
                    <p>
                        <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                    </p>
                    <p class="text-subhead">
                        &copy; 2016 E-Learning
                    </p>

                </div>
            </div>
        </div>
    </section>

@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('user/carousel.css')}}">
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
@endsection