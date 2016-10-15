<label >Answer</label>
<div class="text-right">
    <a class="btn btn-primary" id="add_reply_sequence"><span class=" glyphicon glyphicon-plus"></span></a>
</div>
<div class="form-group">
    <ul class="sortable">
        @for($i = 0; $i< 3;$i++)
        <li class="ui-state-highlight">
            <div class="input-group" style="padding-top: 5px">
                <span  class="input-group-addon"></span>
                <input type="text" name="reply[]" class="form-control">
                <span class="input-group-addon remove_reply_sequence"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        </li>
        @endfor
    </ul>
</div>
@include('exercise.reply.score')