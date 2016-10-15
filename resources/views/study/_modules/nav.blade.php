<nav class="navbar navbar-default  navbar-custom" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('')}}"> <span>NamViet</span> <span>ELeaning</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{asset('')}}">Trang chủ</a></li>
                <li><a href="{{route('study.news')}}">Tin Tức</a></li>
                <li><a href="{{route('study.mycourse')}}">Các lớp đang học</a></li>
                <li class="dropdown">
                    <a href="{{asset('study/transcript/'.Auth::user()->id)}}" class="dropdown-toggle" >Kết quả học tập<span class="caret"></span></a>
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#">Action</a></li>--}}
                    {{--</ul>--}}
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text">Liên hệ<i class="fa fa-envelope"></i></p></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>{{Auth::user()->first_name.' '.Auth::user()->last_name}}</b> <span class="caret"></span></a>
                    <ul id="login-dp" class="dropdown-menu">
                        {{--<li>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--Đăng nhập bằng--}}
                                    {{--<div class="social-buttons">--}}
                                        {{--<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>--}}
                                        {{--<a href="#" class="btn btn-tw"><i class="fa fa-google"></i> Google</a>--}}
                                    {{--</div>--}}
                                    {{--Hoặc--}}
                                    {{--<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="sr-only" for="exampleInputEmail2">Email address</label>--}}
                                            {{--<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="sr-only" for="exampleInputPassword2">Password</label>--}}
                                            {{--<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>--}}
                                            {{--<div class="help-block text-right"><a href="">Quên mật khẩu ?</a></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>--}}
                                        {{--</div>--}}
                                        {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox"> Nhớ tài khoản--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                                {{--<div class="bottom text-center">--}}
                                    {{--Bạn chưa có tài khoản ? <a href="#"><b>Đăng ký</b></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        <li><a href="{{asset('admin')}}">Trang quản trị</a></li>
                        <li><a>Thông tin cá nhân</a></li>
                        <li><a href="{{asset('logout')}}">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>