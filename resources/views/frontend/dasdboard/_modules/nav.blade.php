<div id="main-menu" class="navbar navbar-default navbar-size-large paper-shadow" data-z="1" data-animated role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-logo">
                <a class="svg" href="{{asset('')}}">
                    {{--<i style="height: 50px" src="{{asset('dashboard/images/logo_e.png')}}"></i>--}}
                    <i class="fa fa-home" aria-hidden="true"></i> Trang chủ
                </a>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-nav-margin-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach(\App\Modules\Media\Models\News_category::all() as $row)
                        <li><a href="{{route('study.news',$row->id)}}">{{$row->name}}</a></li>
                            @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lớp học<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('study.mycourse')}}">Lớp học đã đăng ký</a></li>
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kết quả học tập<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{asset('study/transcript/'.Auth::user()->id)}}">Bảng điểm</a></li>
                        <li><a href="#">Bảng điểm tổng hợp</a></li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-right">
                @if(Auth::user())
                <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                    <!-- user -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('').Auth::user()->image}}" alt="" class="img-circle" /> {{Auth::user()->first_name.' '.Auth::user()->last_name}}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-bar-chart-o"></i>Trang cá nhân</a></li>
                            <li><a href="#"><i class="fa fa-mortar-board"></i>Tin nhắn</a></li>
                            <li><a href="{{route('study.profile')}}"><i class="fa fa-user"></i>Cập nhật thông tin</a></li>
                            <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- // END user -->
                </ul>
                @else
                <a href="{{asset('login')}}" class="navbar-btn btn btn-primary">Đăng nhập</a>
                @endif
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>
