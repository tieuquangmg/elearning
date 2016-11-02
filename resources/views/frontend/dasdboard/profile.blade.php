@extends('frontend.dasdboard._layout.layout')
@section('page-header')
    <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="{{asset($profile->image)}}" alt="people" class="img-circle width-80"/>
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">{{$profile->first_name.' '.$profile->last_name}}</h1>
                    {{--<p class="text-subhead"><a class="link-white text-underline" href="#">xem thông tin cá nhân</a></p>--}}
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Học sinh</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#"><i class="fa fa-fw fa-lock"></i> <span
                                            class="hidden-sm hidden-xs">Quản lý tài khoản</span></a></li>
                            {{--<li><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs"></span></a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                                <form method="post" action="{{route('study.profile')}}" enctype="multipart/form-data" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Ảnh cá nhân</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block width-100 bg-grey-100">
                                                        {{--<i class="fa fa-photo text-light"></i>--}}
                                                        <img style="width: 100%; height: 100%"
                                                             src="{{asset($profile->image)}}">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <input data-z="0.5" data-hover-z="1" data-animated data-animated class="btn btn-white btn-sm paper-shadow relative" type="file" name="image">
                                                    {{--<a href="#" class="btn btn-white btn-sm paper-shadow relative"--}}
                                                       {{--data-z="0.5" data-hover-z="1" data-animated>Thêm ảnh<i--}}
                                                                {{--class="fa fa-upl"></i></a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Họ và tên</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input name="first_name" type="text" class="form-control"
                                                               id="exampleInputFirstName" placeholder="Tên của bạn"
                                                               value="{{$profile->first_name}}">
                                                        @if(!$profile->first_name)
                                                            <label for="exampleInputFirstName">Họ, tên đệm</label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input name="last_name" type="text" class="form-control"
                                                               id="exampleInputLastName" placeholder="Tên của bạn"
                                                               value="{{$profile->last_name}}">
                                                        @if(!$profile->last_name)
                                                            <label for="exampleInputLastName">Tên</label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Địa chỉ Email</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-envelope"></i></span>
                                                    <input name="email" type="email" class="form-control"
                                                           id="inputEmail3" placeholder="Email"
                                                           value="{{$profile->email}}">
                                                    @if(!$profile->email)
                                                        <label for="inputEmail3">địa chỉ email</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Địa chỉ</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                    <input name="address" type="text" class="form-control used"
                                                           id="website" value="{{$profile->address}}">
                                                    @if(!$profile->address)
                                                        <label for="website">Địa chỉ</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-2 control-label">Mật khẩu</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input name="password" type="password" class="form-control"
                                                       id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-2 control-label">Nhập lại mật khẩu</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="repassword" class="form-control"
                                                       id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn btn-primary paper-shadow relative"
                                                    data-z="0.5" data-hover-z="1" data-animated>Lưu thông tin
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- // END Panes -->

                    </div>
                    <!-- // END Tabbable Widget -->

                    <br/>
                    <br/>

                </div>
                <div class="col-md-3">

                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Thông tin cá nhân</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><a class="link-text-color"
                                                               href="{{route('study.profile')}}">Tổng quan</a></li>
                                <li class="list-group-item"><a class="link-text-color"
                                                               href="{{route('study.mycourse')}}">Lớp của tôi</a></li>
                                <li class="list-group-item active"><a class="link-text-color"
                                                                      href="{{route('study.profile')}}">Thông tin cá
                                        nhân</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="{{asset('logout')}}">Tin
                                        nhắn</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="{{asset('logout')}}"><span>Đăng xuất</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h4>Lớp học khác</h4>
                    <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1"
                         data-items-sm="1" data-items-xs="1">
                        @foreach($feature as $value)
                            <div class="item">
                                <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1"
                                     data-animated>
                                    <div class="panel-body">
                                        <div class="media media-clearfix-xs">
                                            <div class="media-left">
                                                <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                    <span class="img icon-block s90 bg-default"></span>
                        <span class="overlay overlay-full padding-none icon-block s90 bg-default">
<img class="v-center height-100" src="{{asset($value->subject->image)}}">
                        </span>
                                                    <a href="{{route('study.subject',$value->id)}}"
                                                       class="overlay overlay-full overlay-hover overlay-bg-white">
                          <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                          </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading margin-v-5-3"><a
                                                            href="{{route('study.subject',$value->id)}}">{{$value->name}}</a>
                                                </h4>
                                                <p class="small margin-none">
                                                    {{$value->code}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection