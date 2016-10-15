<label >Acceptable answers</label>
<ul class="list-group content_item">
    <li class="list-group-item text-right">
        <a class="btn btn-primary btn-sm add_reply_type_in"><span class="glyphicon glyphicon-plus-sign"></span></a>
    </li>
    @for($i=0; $i<3; $i++)
    <li class="list-group-item">
        <div class="input-group  input-group-sm" >
            <input type="text" name="reply[]" class="form-control">
            <span class="remove_reply_type_in input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
    </li>
    @endfor

</ul>
@include('exercise.reply.score')