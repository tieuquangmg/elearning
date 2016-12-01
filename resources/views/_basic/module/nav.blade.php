<nav class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin')}}"> NamViet <span class="label label-success text-capitalize"> {{trans('nav.home')}}</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('nav.exam')}} <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{route('test.data')}}">{{trans('table.test')}}</a></li>--}}
                        {{--<li><a href="{{route('mini_test.data')}}">{{trans('table.mini_test')}}</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('nav.auth')}} <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{route('auth.user.data')}}">{{trans('table.user')}}</a></li>--}}
                        {{--<li><a href="{{route('auth.qr_code.index')}}">{{trans('nav.qr_code')}}<span style="color: black" class="glyphicon glyphicon-qrcode pull-right"></span></a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li><a href="{{route('class.data')}}">{{trans('table.class')}}</a></li>
                <li><a href="{{route('subject.data')}}">{{trans('table.subject')}}</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chương trình<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('role.data')}}">Hệ</a></li>
                        <li><a href="{{route('chuyennganh.data')}}">Chuyên ngành</a></li>
                        <li><a href="{{route('bomon.data')}}">Bộ môn</a></li>
                        <li><a href="{{route('lop.data')}}">Lớp</a></li>
                        <li><a href="{{route('auth.user.data')}}"></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hệ thống <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('role.data')}}">{{trans('table.role')}}</a></li>
                        <li><a href="{{route('permission.data')}}">{{trans('table.permission')}}</a></li>
                        <li><a href="{{route('role.user')}}">Quản lý vai trò</a></li>
                        <li><a href="{{route('role.permission')}}">Thiết lập {{trans('table.role')}}</a></li>
                        <li><a href="{{route('auth.user.data')}}">Tài khoản</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                   <a href="{{route('notify.data')}}">Thông báo</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('nav.media')}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('post.gallery.list')}}">{{trans('table.gallery')}}</a></li>

                        <li><a href="{{route('news.data')}}">{{trans('table.news')}}</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown topbar-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{auth()->user()->avatar?auth()->user()->avatar:''}}"></span>{{auth()->user()->first_name.' '.auth()->user()->last_name}}<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Thông tin cá nhân</a></li>
                        {{--<li><a href="#">Change Password</a></li>--}}
                        {{--<li><a href="#">Account Setting</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="#"><i class="icon-help-2"></i> Help</a></li>--}}
                        {{--<li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>--}}
                        <li><a href="{{asset('logout')}}" class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i>Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>