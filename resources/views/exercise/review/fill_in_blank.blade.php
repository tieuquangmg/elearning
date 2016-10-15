@for($i=1; $i<3;$i++)
<li class="list-group-item">
    <div class="input-group  input-group-sm" >
        <input type="text" name="reply[]" class="form-control">
        <span class="remove_reply_type_in input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>
    </div>
</li>
@endfor