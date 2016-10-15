<div class="modal fade" id="theoryModal" tabindex="-1" role="dialog" aria-labelledby="theoryModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{route('theory.create').'/'.$unit->id}}" id="update_theory" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bài lý thuyết</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea id="intro" name="intro" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="content" name="content" rows="15" class="mceEditor"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </div>
</div>