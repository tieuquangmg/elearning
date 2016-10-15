<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="theoryModalLabel">
    <div class="modal-dialog" role="document">
        <form class="modal-content" method="post" action="{{route('question.create')}}" id="update_question">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ngân hàng câu hỏi</h4>
            </div>
            <div class="modal-body">
                {{csrf_field()}}
                <input type="hidden" name="unit_id" value="{{$unit->id}}">
                <div class="form-group">
                    <label>Câu hỏi</label>
                    <textarea id="question" name="question" class="form-control mceEditor"></textarea>
                </div>
                <div class="form-group">
                    <label>Đáp án</label>
                    @for($i=1; $i<=4; $i++)
                    <div class="input-group form-group">
                        <span class="input-group-addon">
                            <input type="radio" name="answer" required value="{{$i}}" aria-label="...">
                        </span>
                        <input type="text" required name="reply{{$i}}" class="form-control" aria-label="...">
                    </div>
                    @endfor
                    <div class="form-group">
                        <label>Kích hoạt</label>
                        <input type="checkbox" name="active" checked value="1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button class="btn btn-primary">Hoàn thành</button>
            </div>
        </form>
    </div>
</div>