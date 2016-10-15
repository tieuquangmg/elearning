<div class="row">
    <form method="get" action="{{route('auth.user.data')}}">
        <div class="col-lg-2 form-group">
            {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}
        </div>
        <div class="col-lg-6">
            <div class="input-group form-group">
                <input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Tìm kiếm ... ">
                <div class="input-group-btn" id="f_select_search">
                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-success ">
                </div><!-- /btn-group -->
            </div><!-- /input-group -->
        </div>
    </form>
    <div class="col-lg-4" role="group">
            <a class="btn btn-danger btn-sm" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>
            <a class="btn btn-primary btn-sm" href="{{route('auth.user.add')}}"><span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>
        <a class="btn btn-warning btn-sm" href="{{route('auth.user.import')}}">
            <span class="glyphicon glyphicon-import"></span>
            Nhập </a>
        <a download class="btn btn-warning btn-sm" href="{{route('auth.user.export')}}">
            <span class="glyphicon glyphicon-export"></span>
            Xuất</a>
    </div>
</div>