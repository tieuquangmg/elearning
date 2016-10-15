<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form id="update_mini_test" method="post" action="{{route('mini_test.create')}}">
            {{csrf_field()}}
            @if(isset($test->id))
                <input type="hidden" value="{{$test->id}}" name="test_id">
            @endif
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tạo bài kiểm tra</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tên bài</label>
                        <textarea id="name" name="name" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">yêu cầu</label>
                        <textarea id="insistence" name="insistence" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">chú thích</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Thời gian</label>
                        <input id="time" name="time" class="form-control" type="number" placeholder="Thời gian được tính bằng phút">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">{{trans('button.save')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>