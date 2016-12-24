<nav class="navbar navbar-default yamm" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse large-icons-nav" id="horizontal-navbar">
        <ul class="nav navbar-nav">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{route('class.data')}}"><i class="fa fa-columns"></i> <span>{{trans('table.class')}}</span></a></li>
            <li><a href="{{route('subject.data')}}"><i class="fa fa-group"></i> <span>{{trans('table.subject')}}</span></a></li>
            <li><a href="{{route('notify.data')}}"><i class="fa fa-pencil"></i> <span>Thông báo</span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cog"></i> <span>Chương trình<i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('role.data')}}">Hệ</a></li>
                    <li><a href="{{route('chuyennganh.data')}}">Chuyên ngành</a></li>
                    <li><a href="{{route('bomon.data')}}">Bộ môn</a></li>
                    <li><a href="{{route('lop.data')}}">Lớp</a></li>
                    <li><a href="{{route('auth.user.data')}}"></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cog"></i> <span>Hệ thống<i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('role.data')}}">{{trans('table.role')}}</a></li>
                    <li><a href="{{route('permission.data')}}">{{trans('table.permission')}}</a></li>
                    <li><a href="{{route('role.user')}}">Quản lý vai trò</a></li>
                    <li><a href="{{route('role.permission')}}">Thiết lập {{trans('table.role')}}</a></li>
                    <li><a href="{{route('auth.user.data')}}">Tài khoản</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cog"></i> <span>{{trans('nav.media')}}<i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('post.gallery.list')}}">{{trans('table.gallery')}}</a></li>
                    <li><a href="{{route('news.data')}}">{{trans('table.news')}}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
