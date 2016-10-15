<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Khoá học</h2>
            </div>
            <div class="form-group col-lg-4 col-lg-offset-8">

                    <input type="text" class="form-control section-subheading" placeholder="Search ... ">

            </div>
        </div>

        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
            {{--<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">--}}
                {{--<div class="portfolio-hover">--}}
                    {{--<div class="portfolio-hover-content">--}}
                        {{--<i class="fa fa-plus fa-3x"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<img src="{{asset('')}}img/portfolio/roundicons.png" class="img-responsive" alt="">--}}
            {{--</a>--}}
            {{--<div class="portfolio-caption">--}}
                {{--<h4>Round Icons</h4>--}}
                {{--<p class="text-muted">Graphic Design</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        @include('frontend.course.list')

    </div>
</section>