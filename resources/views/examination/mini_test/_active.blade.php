{{--<div class="row">--}}
    {{--<div class="col-lg-2 form-group">--}}
        {{--{!! Form::select('f_select_number', array(1 => '1', 2 => '2', 3 => '3'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}--}}
    {{--</div>--}}
    {{--<div class="col-lg-8">--}}
        {{--<form id="form_search" method="get" action="{{route("mini_test.findby").'/'.'a/1'}}" >--}}
        {{--<div class="input-group form-group">--}}
            {{--<input id="search_value" type="text" class="form-control"  placeholder="Tìm kiếm">--}}
            {{--<div class="input-group-btn" id="f_select_search">--}}
                {{--<button id="search_form"  value="Tìm kiếm" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">Tìm kiếm</button>--}}
            {{--</div><!-- /btn-group -->--}}
        {{--</div><!-- /input-group -->--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2" role="group">--}}
        {{--<div class="btn-group btn-group-justified">--}}
            {{--<a class="btn btn-danger" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>--}}
            {{--<a data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="row">
    <form method="get" action="{{route('mini_test.data')}}">
        <div class="col-lg-2 form-group">
            {!! Form::select('f_select_number', array(1 => '1', 2 => '2', 3 => '3'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()","data-toggle"=>"tooltip","title"=>"Số lượng bản ghi trên 1 trang")) !!}
        </div>
        <div class="col-lg-8">
            <div class="input-group form-group">
                <input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Tìm kiếm ... ">
                <div class="input-group-btn" id="f_select_search">
                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                    <ul class="dropdown-menu">
                        <li><a data="XXXX">XXX</a></li>
                        <li><a data="">All</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div><!-- /input-group -->
        </div>
    </form>
    <div class="col-lg-2" role="group">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-danger" id="delete" ><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>
            <a data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>

        </div>
    </div>
</div>