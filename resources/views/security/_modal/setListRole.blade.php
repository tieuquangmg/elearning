<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="myModalLabel">Chức năng</h4>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><input checked type="checkbox" id="role_check_all"></li>
                    @foreach($roles as $row)
                        <li class="list-group-item">
                            <input checked type="checkbox" name="roleIds[]" value="{{$row->id}}" class="role_check"> {{$row->display_name}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal">Đóng</a>
                <a id="set_multi_role_user" class="btn btn-primary">Thực hiện</a>
            </div>
        </div>
    </div>
</div>