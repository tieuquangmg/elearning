<div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form action="{{route('document.create').'/'.$unit->id}}" id="update_document" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tài liệu</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên</label>
                        <input id="name_document" type="text" name="name" class="form-control">
                    </div>
                    <input id="path_document" type="file" name="path">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </div>
</div>