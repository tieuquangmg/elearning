<nav class="navbar navbar-fixed-top navbar-default nav-top">
    <div class="container">
        <!-- This code is only active when viewing the site on mobile. We will not
             cover responsive design, but we'll leave this in, as it's part of the
             example code.-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Use a "home" glyphicon as a logo. -->
            <a class="" href="{{route('study.mycourse')}}">
                <!-- This is how you display a glyphicon. -->
                <img src="{{asset('dashboard/images/elearning-logo.png')}}" class="glyphicon glyphicon-home"/>
            </a>
            {{--<hgroup>--}}
            {{--<a href="/" title="E-learning"><div class="logo"></div></a>--}}
            {{--</hgroup>--}}
        </div>
        <!-- On mobile, this div is hidden by default. The user hits the button
             in the `navbar-header` to see the content of the div.
             On desktop, this div is visible all of the time. -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
                <!-- Left-aligned items. -->
                <div class="input-group">
                    <input type="text" class="form-control input-sm fb-search" placeholder="Tìm kiếm">
                    <span class="input-group-btn">
                          <button type="submit" class="btn btn-default btn-sm">
                              <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                </div>
            </form>
            <div class="nav navbar-nav navbar-right">
                <!-- Right-aligned items -->
                <div class="btn-toolbar pull-right" role="toolbar">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default navbar-btn btn-sm">
                            Trang cá nhân
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default navbar-btn btn-sm">
                            Trang chủ
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default navbar-btn" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-comment"></span>
                            <span class="badge">
                                <?php
                                $count = $message->filter(function ($value, $key) {
                                    return $value->status == 0;
                                });
                                ?>
                                {{count($count)}}
                            </span>
                        </button>
                        <div class="dropdown-menu __tw toggleTargetClosed _1y2l uiToggleFlyout" role="dialog"
                             aria-labelledby="fbMercuryJewelHeader">
                            <div class="uiHeader uiHeaderBottomBorder jewelHeader">
                                <div class="clearfix uiHeaderTop">
                                    <div class="rfloat _ohf"><h3 class="accessible_elem" id="fbMercuryJewelHeader">Tin
                                            nhắn</h3>
                                        <div class="uiHeaderActions fsm fwn fcg"><a class="_1c1m" href="#" role="button"
                                                                                    tabindex="0">Đánh dấu tất cả là đã
                                                đọc</a><span role="presentation" aria-hidden="true"> · </span>
                                            <a href="" accesskey="m" rel="dialog" role="button" id="u_0_c">Tin nhắn mới</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3v_l">
                                <div data-reactroot=""
                                     class="_2q3u uiScrollableArea uiScrollableAreaWithShadow contentAfter"
                                     style="max-height: 600px;">
                                    <ul class="jewelContent">
                                        <li>
                                            <div class="_1xfk"></div>
                                        </li>
                                        @foreach($message as $row)
                                            <li class="jewelItemNew">
                                                <a class="messagesContent" role="button" href="">
                                                    <div spacing="medium" direction="left" class="clearfix">
                                                        <div class="_ohe lfloat">
                                                            <div class="MercuryThreadImage _4qeb img _8o _8s">
                                                                <div class="_55lt" size="50"
                                                                     style="width: 50px; height: 50px;"><img
                                                                            src="{{asset($row->send_from->image)}}"
                                                                            width="50" height="50" alt=""
                                                                            class="img"></div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="_42ef clearfix" direction="right">
                                                                <div class="_ohf rfloat">
                                                                    <div><span></span>
                                                                        <div class="x_div">
                                                                            <div aria-label="Đánh dấu là đã đọc"
                                                                                 class="_5c9q"
                                                                                 data-hover="tooltip"
                                                                                 data-tooltip-alignh="center"
                                                                                 data-tooltip-content="Đánh dấu là đã đọc"
                                                                                 role="button"
                                                                                 tabindex="0"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="content">
                                                                        <div class="author"><strong>
                                                                                <span>{{$row->send_from->ho_ten}}</span>
                                                                            </strong>
                                                                            <span class="presenceIndicator">
                                                                                <span class="accessible_elem"></span>
                                                                            </span>
                                                                        </div>
                                                                        <div class="snippet preview">
                                                                            <span class="_3jy5"></span><span><span>{{$row->content}}</span></span>
                                                                        </div>
                                                                        <div class="time">
                                                                            <abbr class="timestamp">{{$row->created_at->diffForHumans()}}</abbr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div id="MercuryJewelFooter"><span></span>
                                <div class="jewelFooter">
                                    <a class="seeMore" href="" target="" accesskey="4"><span>Xem tất cả</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default navbar-btn" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-globe"></span>
                            <span class="badge">
                                <?php
                                $count = $notify->filter(function ($value, $key) {
                                    return $value->status == 0;
                                });
                                ?>
                                {{count($count)}}</span>
                        </button>
                        <div class="dropdown-menu __tw toggleTargetClosed _1y2l uiToggleFlyout" role="dialog"
                             aria-labelledby="fbMercuryJewelHeader">
                            <div class="uiHeader uiHeaderBottomBorder jewelHeader">
                                <div class="clearfix uiHeaderTop">
                                    <div class="rfloat _ohf"><h3 class="accessible_elem" id="fbMercuryJewelHeader">Tin
                                            nhắn</h3>
                                        <div class="uiHeaderActions fsm fwn fcg"><a class="_1c1m" href="#" role="button"
                                                                                    tabindex="0">Đánh dấu tất cả là đã
                                                đọc</a><span role="presentation" aria-hidden="true"> · </span><a
                                                    ajaxify="/ajax/messaging/composer.php" href="/messages/new/"
                                                    accesskey="m" rel="dialog" role="button" id="u_0_c">Tin nhắn mới</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3v_l">
                                <div data-reactroot=""
                                     class="_2q3u uiScrollableArea uiScrollableAreaWithShadow contentAfter"
                                     style="max-height: 600px;">
                                    <ul class="jewelContent">
                                        <li>
                                            <div class="_1xfk"></div>
                                        </li>
                                        @foreach($notify as $row)
                                            <li class="jewelItemNew">
                                                <a class="messagesContent" role="button" href="">
                                                    <div spacing="medium" direction="left" class="clearfix">
                                                        <div class="_ohe lfloat">
                                                            <div class="MercuryThreadImage _4qeb img _8o _8s">
                                                                <div class="_55lt" size="50"
                                                                     style="width: 50px; height: 50px;"><img
                                                                            src="{{asset(($row->notify->sender != null)?($row->notify->sender->image):'')}}"
                                                                            width="50" height="50" alt=""
                                                                            class="img"></div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="_42ef clearfix" direction="right">
                                                                <div class="_ohf rfloat">
                                                                    <div><span></span>
                                                                        <div class="x_div">
                                                                            <div aria-label="Đánh dấu là đã đọc"
                                                                                 class="_5c9q"
                                                                                 data-hover="tooltip"
                                                                                 data-tooltip-alignh="center"
                                                                                 data-tooltip-content="Đánh dấu là đã đọc"
                                                                                 role="button"
                                                                                 tabindex="0"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="content">
                                                                        <div class="author">
                                                                            <strong><span>{{($row->notify->sender != null)?($row->notify->sender->ho_ten):''}}</span></strong><span
                                                                                    class="presenceIndicator"><span
                                                                                        class="accessible_elem"></span></span>
                                                                        </div>
                                                                        <div class="snippet preview"><span
                                                                                    class="_3jy5"></span><span><span>{!! $row->notify->content !!}</span></span>
                                                                        </div>
                                                                        <div class="time"><abbr
                                                                                    class="timestamp">{{$row->created_at}}</abbr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div id="MercuryJewelFooter"><span></span>
                                <div class="jewelFooter">
                                    <a class="seeMore" href="" target="" accesskey="4"><span>Xem tất cả</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height:46px; color: white !important;
                           text-decoration:none; background-color: #3a5795">
                            <img src="{{asset('').Auth::user()->image}}" alt=""
                                 class="img-circle" height="30px"/>
                            <span style="margin-left: 10px">{{Auth::user()->ho_ten}}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-bar-chart-o"></i>Trang cá nhân</a></li>
                            <li><a href="#"><i class="fa fa-mortar-board"></i>Tin nhắn</a></li>
                            <li><a href="{{route('study.profile')}}"><i class="fa fa-user"></i>Cập nhật thông tin</a>
                            </li>
                            <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                        </ul>
                        {{--<button type="button" class="btn btn-default navbar-btn">--}}
                        {{--<img src="{{asset('').Auth::user()->image}}" alt=""--}}
                        {{--class="img-circle" height="30px" />{{Auth::user()->ho_ten}}--}}
                        {{--</button>--}}
                        {{--<div class="btn-group" role="group">--}}
                        {{--<button type="button" class="btn btn-default dropdown-toggle navbar-btn" data-toggle="dropdown">--}}
                        {{--<span class="caret"></span>--}}
                        {{--</button>--}}
                        {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Log out...</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
</nav>
