@extends('frontend.dasdboard.layout.layout')
@section('container')
    @include('frontend.dasdboard.module.nav')
    <div class="container">
        <div class="row">
            <div class="alert alert-info">
                abc
            </div>
            <div class="alert alert-success">
                <strong>Chú ý</strong><span id="showSearchTerm"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 paddingTop20">
                <nav class="nav-sidebar">
                    <ul class="nav">
                        <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span>Trang tổng quan</a></li>
                        <li><a href="">Lớp của tôi</a></li>
                        <li><a href="">Diễn đàn</a></li>
                        <li><a href="">Tin nhắn</a></li>
                        <li class="nav-divider"></li>
                    </ul>
                </nav>
                <div><h2 class="add">abc cc c c c cccc c c c c c c c </h2></div>
            </div>
            <div class="row">
                @foreach($class as $value)
                <div class="item col-xs-12 col-sm-4 col-lg-3">
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="cover overlay cover-image-full hover" style="height: 150px;">
                            <a href="#" class="padding-none overlay overlay-full icon-block bg-primary"
                               style="height: 150px;"><img src="{{asset('').$value->subject->image}}">
                            </a>
                        </div>
                        <div class="panel-body">
                            <h4 class="text-headline margin-v-0-10"><a href="#">{{$value->name}}</a></h4>
                        </div>
                        <hr class="margin-none">
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi delectus,
                                excepturi.</p>
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="{{asset('')}}dashboard/images/people/50/guy-2.jpg" alt="People" class="img-circle width-40">
                                </div>
                                <div class="media-body">
                                    <h4><a href="">Adrian Demian</a>
                                        <br>
                                    </h4>
                                    Instructor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
    @endsection