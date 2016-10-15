<ul class="list-group content_item">
    <li class="list-group-item text-right">
        <a class="btn btn-default add_reply_multi_choice_text btn-sm"><span class="glyphicon glyphicon-plus-sign"></span></a>
    </li>
    <li class="list-group-item">
        <div class="input-group input-group-sm" >
            <span class="input-group-addon btn btn-default"><input checked type="radio" name="answer0" value=""></span>
            <input type="text" name="reply[]" class="form-control ">
            <span class="remove_reply_multi_choice_text input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>
        </div>
        @for($i=0; $i<3; $i++)
            <div class="input-group input-group-sm" >
                <span class="input-group-addon btn btn-default"><input type="radio" name="answer0"></span>
                <input type="text" name="reply[]" class="form-control ">
                <span class="remove_reply_multi_choice_text input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>
            </div>
        @endfor
    </li>
</ul>