<div class="modal fade" id="add_class" tabindex="-1" role="dialog" aria-labelledby="add_class">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal form-label-left" method="post" action="{{route('class.create')}}">
                {{csrf_field()}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="add_class">Thêm lớp học</h4>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" required class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mã lớp</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" required class="form-control" name="code" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên môn học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="subject_id"class="selectpicker" data-live-search="true">
                                @foreach($subjects as $k => $v)
                                    <option value="{{$k}}" data-tokens="{{$v}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giáo viên</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="user_id" class="selectpicker" data-live-search="true">
                                @foreach($teachers as $v)
                                    <option value="{{$v->id}}" data-tokens="{{$v->first_name.' '.$v->last_name}}">{{$v->first_name.' '.$v->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Năm học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select name="year" class="form-control">
                                @for($i=2016; $i<=2020; $i++)
                                    <option value="{{$i}}" data-tokens="{{$i}}">{{$i .' - '.($i+1)}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kỳ học</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <div class="radio">
                               <label ><input name="semester" type="radio" checked value="1"> I</label>
                               <label ><input name="semester" type="radio" value="2"> II</label>
                           </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sĩ số</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                              <input name="limit" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="">
                                <label>
                                    <input value="1" name="active" type="checkbox" checked /> Active
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