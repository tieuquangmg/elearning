<div class="row">
    <form method="get" action="{{route('permission.data')}}">
        <div class="col-lg-2 form-group">
            {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}
        </div>
        <div class="col-lg-8">
            <div class="input-group form-group">
                <input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Tìm kiếm ... ">
                <div class="input-group-btn" id="f_select_search">
                    <input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-default " data-toggle="tooltip" data-placement="top" title="Tìm kiếm !">
                </div><!-- /btn-group -->
            </div><!-- /input-group -->
        </div>
    </form>
    <div class="col-lg-2" role="group">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-danger" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>
            <a class="btn btn-primary btn-sm" href="{{route('permission.add')}}"><span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>
        </div>
    </div>
</div>