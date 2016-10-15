<div class="row">
    <form method="get" action="{{route('role.data')}}">
    <div class="col-lg-2 form-group">
        {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}
    </div>
    <div class="col-lg-8">
            <div class="input-group form-group">
                <input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Tìm kiếm ... " data-toggle="tooltip" data-placement="top" title="Nhập từ khóa tìm kiếm">
                <div class="input-group-btn" id="f_select_search">
                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                </div><!-- /btn-group -->
            </div><!-- /input-group -->
    </div>
    </form>
    <div class="col-lg-2" role="group">
            <a class="btn btn-danger btn-sm" id="delete"><span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Xóa"></span> {{trans('button.delete')}}</a>
            <a class="btn btn-primary btn-sm" href="{{route('role.add')}}"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Thêm"></span> {{trans('button.add')}}</a>
    </div>
</div>