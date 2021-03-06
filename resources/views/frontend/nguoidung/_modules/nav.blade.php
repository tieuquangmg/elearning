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
                    <i class="fa fa-home" aria-hidden="true">Trang chủ</i>
                </a>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-left">
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
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kết quả học tập<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{asset('study/transcript/'.Auth::user()->id)}}">Bảng điểm</a></li>--}}
                        {{--<li><a href="{{route('study.synthetic.transcripts',Auth::user()->id)}}">Bảng điểm tổng hợp</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
                @if(Auth::user())
                {{--<ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">--}}
                            {{--<i class="fa fa-envelope fa-fw"></i>--}}
                            {{--<i class="fa fa-caret-down"></i>--}}
                            {{--<span class="jewelCount" id="u_0_f" style="--}}
                                    {{--position: absolute;--}}
                                    {{--line-height: 1;--}}
                                    {{--right: 18px;--}}
                                    {{--color: white;--}}
                                    {{--top: 7px;--}}
                                    {{--background-color: #fa3e3e;--}}
                                    {{--border-radius: 2px;--}}
                                    {{--padding: 1px 3px;--}}
                                    {{--font-size: 12px;--}}
                            {{--">--}}
                                {{--<span class="_51lp _3z_5 _5ugh" id="mercurymessagesCountValue">1</span>--}}
                            {{--</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu dropdown-messages">--}}
                            {{--@foreach($message as $row)--}}
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<div>--}}
                                            {{--<strong>{{$row->send_from->full_name}}</strong>--}}
                                            {{--<span class="pull-right text-muted">--}}
                                        {{--<em>{{$row->created_at->diffForHumans()}}</em>--}}
                                    {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<div>{{$row->content}}</div>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="divider"></li>--}}
                            {{--@endforeach--}}
                            {{--<li>--}}
                                {{--<a class="text-center" href="#">--}}
                                    {{--<strong>Xem tất cả tin nhắn</strong>--}}
                                    {{--<i class="fa fa-angle-right"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.dropdown-messages -->--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">--}}
                            {{--<i class="fa fa-bell fa-fw"></i>--}}
                            {{--<i class="fa fa-caret-down"></i>--}}
                            {{--<span class="jewelCount" id="u_0_f" style="--}}
                                    {{--position: absolute;--}}
                                    {{--line-height: 1;--}}
                                    {{--right: 18px;--}}
                                    {{--color: white;--}}
                                    {{--top: 7px;--}}
                                    {{--background-color: #fa3e3e;--}}
                                    {{--border-radius: 2px;--}}
                                    {{--padding: 1px 3px;--}}
                                    {{--font-size: 12px;--}}
                            {{--">--}}
                                {{--<span class="_51lp _3z_5 _5ugh" id="">1</span>--}}
                            {{--</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu dropdown-alerts notifications" id="notificationMenu">--}}
                            {{--<li class="titlebar">--}}
                                {{--<span class="title">Thông báo</span>--}}
                                {{--<span class="settings"><i class="icon-cog"></i></span>--}}
                            {{--</li>--}}
                            {{--<div class="notifbox">--}}
                                {{--@if($notify != null && $notify != '')--}}
                                {{--@foreach($notify as $row)--}}
                                    {{--<li class="notif--}}
                                              {{--@if($row->where('user_id',Auth::user()->id)->first() == null)--}}
                                            {{--unread--}}
                                            {{--@endif--}}
                                            {{--">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="imageblock">--}}
                                                {{--<img src="{{asset(($row->notify->sender != null)?($row->notify->sender->image):'')}}" class="notifimage">--}}
                                            {{--</div>--}}
                                            {{--<div class="messageblock">--}}
                                                {{--<div class="message">--}}
                                                    {{--<strong>{{($row->notify->sender != null)?($row->notify->sender->ho_ten):''}}</strong>{!! $row->notify->content !!}--}}
                                                {{--</div>--}}
                                                {{--<div class="messageinfo">--}}
                                                    {{--<i class="icon-comment"></i>{{$row->created_at}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                                    {{--@endif--}}
                            {{--</div>--}}
                            {{--<li class="seeall">--}}
                                {{--<a href="">Xem tất cả</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.dropdown-alerts -->--}}
                    {{--</li>--}}
                    {{--<!-- user -->--}}
                    {{--<li class="dropdown user">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                            {{--<img src="{{asset('').Auth::user()->image}}" alt=""--}}
                                 {{--class="img-circle"/> {{Auth::user()->first_name.' '.Auth::user()->last_name}}<span--}}
                                    {{--class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="#"><i class="fa fa-bar-chart-o"></i>Trang cá nhân</a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-mortar-board"></i>Tin nhắn</a></li>--}}
                            {{--<li><a href="{{route('study.profile')}}"><i class="fa fa-user"></i>Cập nhật thông tin</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{asset('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<!-- // END user -->--}}
                {{--</ul>--}}
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('study.mycourse')}}" style="font-weight: bold;text-transform: uppercase">vào lớp học</a></li>
                        <li class="user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('').Auth::user()->image}}" alt=""
                                     class="img-circle"/>{{Auth::user()->ho_ten}}
                                <span></span>
                            </a>
                        </li>
                    </ul>
                @else
                     <ul class="nav navbar-nav navbar-right">
                         <li><a style="color: red" href="{{asset('login')}}">Đăng nhập</a></li>
                     </ul>
                @endif
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>
