@extends('frontend._layout.outline')
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('')}}build/style/css/meeting.css">
@endsection
@section('container')
    {{ csrf_field() }}
    <div class="container ">
        <div class="panel" style="margin-top: 50px">
            <div class="panel-heading" style="padding: 5px 7px; background: #017e3e">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="{{asset(Session::get('url_back'))}}"><i class="glyphicon glyphicon-backward"></i>Trở lại</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="jumbotron meeting_waper" style="text-align: center;">
                    <h4>Tên lớp: {{$class->name}}</h4>
                    <form action="http://localhost/xf/index.php?login/login" method="post">
                        <input type="hidden" name="login" value="{{Auth::guard('nguoidung')->user()->code}}">
                        <input type="hidden" name="cookie_check" value="1">
                        <input type="hidden" name="redirect" value="http://localhost/xf/index.php?forums/{{$class->id}}-/&order=post_date&direction=desc">
                        <input type="hidden" name="register" value="0">
                        <input type="hidden" name="remember" value="1">
                        <input type="password" name="password" placeholder="Mật khẩu đăng nhập">
                        <input type="submit" value="Đồng ý">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection