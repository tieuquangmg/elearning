<div class="modal fade" id="update_class" tabindex="-1" role="dialog" aria-labelledby="update_class">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form_update" class="form-horizontal form-label-left" method="post" action="{{route('class.update')}}">
                {{csrf_field()}}
                <input id="id" name="id" type="hidden">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="add_class">Chỉnh sửa lớp học</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="name" type="text" required class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input id="code" type="text" required class="form-control" name="code" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên môn học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select id="subject_id" name="subject_id" class="selectpicker" data-live-search="true">
                                @foreach($subjects as $k => $v)
                                    <option value="{{$k}}" data-tokens="{{$v}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giáo viên</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select id="user_id" name="user_id" class="selectpicker" data-live-search="true">
                                @foreach($teachers as $v)
                                    <option value="{{$v->id}}" data-tokens="{{$v->ho_ten}}">{{$v->ho_ten}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Năm học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select id="year" name="year" class="form-control">
                                @for($i=2016; $i<=2020; $i++)
                                    <option value="{{$i .'-'.($i+1)}}" data-tokens="{{$i}}">{{$i .'-'.($i+1)}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kỳ học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="radio">
                                <label ><input name="semester" value="1" type="radio" checked> I</label>
                                <label ><input name="semester" value="2" type="radio"> II</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sĩ số</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="limit" type="number" id="limit" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ ngày</label>
                        <div class='col-md-9 col-sm-9 col-xs-12'>
                            <input id="start_date" name="start_date" type='text' class="form-control input-sm datepicker" />
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">đến ngày</label>
                        <div class='col-md-9 col-sm-9 col-xs-12'>
                            <input id="end_date" name="end_date" type='text' class="form-control input-sm datepicker" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="">
                                <label>
                                    <input id="active" name="active" type="checkbox" checked /> Active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button class="btn btn-primary">Thực hiện</button>
                </div>
            </form>
        </div>
    </div>
</div>