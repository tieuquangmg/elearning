<div class="modal fade" id="add_class" tabindex="-1" role="dialog" aria-labelledby="add_class">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal form-label-left" method="post" action="{{route('class.create')}}">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="add_class">Thêm lớp học</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" required class="form-control input-sm" name="name">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" required class="form-control input-sm" name="code">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên môn học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="subject_id" class="selectpicker mon-hoc with-ajax" data-abs-request-delay="0"
                                    data-live-search="true">
                                {{--@foreach($subjects as $k => $v)--}}
                                {{--<option value="{{$k}}" data-tokens="{{$v}}">{{$v}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giáo viên</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="user_id" class="selectpicker " data-live-search="true">
                                @foreach($teachers as $v)
                                    <option value="{{$v->id}}"
                                            data-tokens="{{$v->first_name.' '.$v->last_name}}">{{$v->first_name.' '.$v->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Năm học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select id="year" name="year" class="form-control" title="năm học">
                                @foreach(\App\Modules\Organize\Models\PLAN_HocKyDangKy_TC::orderBy('Ky_dang_ky','desc')->get() as $row)
                                    <option value="{{$row->Ky_dang_ky}}"
                                            data-tokens="{{$row->Ky_dang_ky}}">{{$row->Nam_hoc}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kỳ học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="radio">
                                <label><input name="semester" type="radio" checked value="1"> I</label>
                                <label><input name="semester" type="radio" value="2"> II</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sĩ số</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input name="limit" type="number" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Từ ngày</label>
                        <div class='col-md-9 col-sm-9 col-xs-12'>
                            <input name="start_date" type='text' class="form-control input-sm datepicker"/>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">đến ngày</label>
                        <div class='col-md-9 col-sm-9 col-xs-12'>
                            <input name="end_date" type='text' class="form-control input-sm datepicker"/>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="">
                                <label>
                                    <input value="1" name="active" type="checkbox" checked/> Active
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