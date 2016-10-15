<div class="row">
    <div class="col-lg-2 form-group">
        <select name="" class="form-control" id="f_select_number">
            <option value="10">10</option>
        </select>
    </div>
    <div class="col-lg-8">
        <div class="input-group form-group">
            <div class="input-group-btn" id="f_select_search">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm kiếm<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a data="XXXX">XXX</a></li>
                    <li><a data="">All</a></li>
                </ul>
            </div><!-- /btn-group -->
            <input type="text" class="form-control" id="search_form" placeholder="Tìm kiếm">
        </div><!-- /input-group -->
    </div>
    <div class="col-lg-2" role="group">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-danger" id="delete"><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>
            <a href="{{route('permission.add')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>
        </div>
    </div>
</div>