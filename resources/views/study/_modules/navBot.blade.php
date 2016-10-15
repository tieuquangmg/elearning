<nav class="navbar navbar-default navbar-fixed-bottom" style="background: transparent; border: none; box-shadow: none">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bsbot">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse text-center" id="bsbot" style="height: 10px">
            <ul class="nav navbar-nav navbar-right">
                <li><div class="your-clock"></div></li>
            </ul>
            <ul class="pagination pagination-sm ">
                @for($i=1; $i<=$length; $i++)
                <li >
                    <a style="background: white; color: black" id="paginate{{$i}}" href="#{{$i}}" >{{$i}}</a>
                </li>
                @endfor
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>