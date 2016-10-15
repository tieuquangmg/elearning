<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1" style="background-image: url({{asset('/img/slide1.jpg')}})"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Lễ trao bằng tốt nghiệp</h1>
                                <h3>Sinh viên tốt nghiệp khóa 1 năm học 2016</h3>
                            </hgroup>
                            <a href="{{asset('study/news')}}" class="btn btn-hero btn-lg" role="button">Xem thêm</a>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2" style="background-image: url({{asset('/img/slide2.jpg')}})"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Chương trình văn nghệ</h1>
                                <h3>Sinh viên E-Learning với tiết mục Văn nghệ đạt Giải Nhất - Hội diễn văn nghệ Sinh viên</h3>
                            </hgroup>
                            <a href="{{asset('study/news')}}" class="btn btn-hero btn-lg" role="button">Xem thêm</a>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-3" style="background-image: url({{asset('/img/slide3.jpg')}})"></div>
                        <div class="hero">
                            <hgroup>
                                <h1>Phương pháp học tập elearning</h1>
                                <h3>Phương pháp học tập elearning</h3>
                            </hgroup>
                            <a href="{{asset('study/news')}}" class="btn btn-hero btn-lg" role="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
                {{--<!-- Wrapper for slides -->--}}
                {{--<div class="carousel-inner">--}}

                    {{--<div class="item active">--}}
                        {{--<img class="img-responsive" src="{{asset('/img/slide1.jpg')}}">--}}
                        {{--<div class="carousel-caption">--}}
                            {{--<h3>Lễ trao bằng tốt nghiệp</h3>--}}
                            {{--<p>Sinh viên tốt nghiệp khóa 1 năm học 2015<a href="{{asset('study/news')}}" target="_blank" class="label label-danger">xem chi tiết</a></p>--}}
                        {{--</div>--}}
                    {{--</div><!-- End Item -->--}}

                    {{--<div class="item">--}}
                        {{--<img class="img-responsive" src="{{asset('/img/slide2.jpg')}}">--}}
                        {{--<div class="carousel-caption">--}}
                            {{--<h3>Chương trình văn nghệ</h3>--}}
                            {{--<p>Sinh viên E-Learning với tiết mục Văn nghệ đạt Giải Nhất - Hội diễn văn nghệ Sinh viên<a href="#" target="_blank" class="label label-danger">xem chi tiết</a></p>--}}
                        {{--</div>--}}
                    {{--</div><!-- End Item -->--}}

                    {{--<div class="item">--}}
                        {{--<img class="img-responsive" src="{{asset('/img/slide3.jpg')}}">--}}
                        {{--<div class="carousel-caption">--}}
                            {{--<h3>Phương pháp học tập elearning</h3>--}}
                            {{--<p>Phương pháp học tập elearning<a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">xem chi tiết</a></p>--}}
                        {{--</div>--}}
                    {{--</div><!-- End Item -->--}}

                    {{--<div class="item">--}}
                        {{--<img class="img-responsive" src="http://placehold.it/1200x400/999999/cccccc">--}}
                        {{--<div class="carousel-caption">--}}
                            {{--<h3></h3>--}}
                            {{--<p></p>--}}
                        {{--</div>--}}
                    {{--</div><!-- End Item -->--}}

                {{--</div><!-- End Carousel Inner -->--}}
                {{--<ul class="nav nav-pills nav-justified">--}}
                    {{--<li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Lễ trao bằng tốt nghiệp<small>Sinh viên tốt nghiệp khóa 1 năm học 2015</small></a></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="1"><a href="#">Phương pháp học tập elearning<small>Phương pháp học tập elearning</small></a></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="2"><a href="#">Chương trình văn nghệ<small>Hội diễn văn nghệ Sinh viên</small></a></li>--}}
                    {{--<li data-target="#myCarousel" data-slide-to="3"><a href="#">An toàn<small></small></a></li>--}}
                {{--</ul>--}}
            {{--</div><!-- End Carousel -->--}}
        </div>
        <div class="col-sm-3 content-header-news">
            <div class="panel header-news">
                <div class="panel-heading top-header-news">
                    <a>Tin mới nhất</a>
                </div>
                <div class="panel-body header-right-content">
                    <ul>
                        @foreach($news as $row)
                        <li>
                            <a href="{{route('study.news',$row->id)}}">
                            <i class="icon-list"></i>
                            <span>{{$row->title}}</span>
                            </a>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
</div>
</div>