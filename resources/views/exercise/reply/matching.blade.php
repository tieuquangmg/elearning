<label>Answer</label>
<table class="table table-responsive table-bordered">
    <tr >
        <th>Premise</th>
        <th>Response</th>
        <th><a class="btn btn-sm btn-primary btn-block" id="add_reply_matching"><span class="glyphicon glyphicon-plus"></span></a></th>
    </tr>
    <tbody id="table_content">
    @for($i=0; $i<3; $i++)
        <tr class="text-center">
            <td>
                <div class="input-group input-group-sm">
                    <input type="text" name="premise[]" class="form-control">
                    <span class="input-group-addon btn btn-default"><span class="glyphicon glyphicon-picture"></span></span>
                </div>
            </td>
            <td>
                <div class="input-group input-group-sm">
                    <input type="text" name="response[]" class="form-control">
                    <span class="input-group-addon btn btn-default"><span class="glyphicon glyphicon-picture"></span></span>
                </div>
            </td>
            <td>
                <a class="btn  btn-sm btn-danger glyphicon glyphicon-remove remove_reply_matching"></a>
            </td>
        </tr>
    @endfor
    </tbody>

</table>
    @include('exercise.reply.score')
