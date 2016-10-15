<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="classModalLabel">Thêm sinh viên( Lớp : {{$class->name}} - Sĩ số {{$class->student->count().'/'.$class->limit}})</h4>
            </div>
            <div class="modal-body">
                <div class="form-group text-right">
                    <a class="btn btn-primary"><i class="fa fa-check-circle"></i> Thêm sinh viên</a>
                </div>
                <table class="table">
                    <tr>
                        <th><input type="checkbox" id="check_all"></th>
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Mã SV</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>
                            <a class="btn btn-primary btn-xs"><i class="fa fa-filter"></i></a>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input type="text" class="form-control input-sm" name="last_name"></th>
                        <th><input type="text" class="form-control input-sm" name="last_name"></th>
                        <th><input type="text" class="form-control input-sm" name="last_name"></th>
                        <th><input type="text" class="form-control input-sm" name="last_name"></th>
                        <th><input type="text" class="form-control input-sm" name="last_name"></th>
                        <th><span class="btn btn-success btn-sm"><i class="fa fa-refresh"></i></span></th>
                    </tr>
                    @include('organize.class.includes.listAddStudent')
                </table>
                <div class="text-center">
                    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>