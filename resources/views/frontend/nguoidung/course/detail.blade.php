@extends('frontend.dasdboard._layout.layout')
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-section padding-top-none">
                        <img src="{{asset('').$course->subject->image}}">
                    </div>
                    <h3 class="text-subhead-2 text-light">Danh sách các unit</h3>
                    @foreach($course->subject->unit as $value)
                        <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-headline">{{$value->name}}</h4>
                                        <p>{{$value->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Tài nguyên</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item active"><a class="link-text-color" href="website-take-course.html">Bài học</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-course-forums.html">Diễn đàn</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-take-quiz.html">Kiểm tra</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-quiz-results.html">Kết quả kiểm tra</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Giáo viên</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="{{asset('')}}dashboard/images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#">cô giáo</a></h4>
                                    <span class="caption text-light">Tiến sĩ</span>
                                </div>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <p>kinh nghiệm 10 năm trong nghề</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection