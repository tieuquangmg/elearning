<label >Answer</label>
<table class="table table-responsive table-bordered">
    <tr >
        <th>Text</th>
        <th>Answer</th>
        <th>Text</th>
        <th class="text-center"><a class="btn btn-primary btn-xs" id="add_reply_word_blank"><span class="glyphicon glyphicon-plus"></span></a></th>
    </tr>
    <tbody id="table_content">
        @for($i=0; $i<3; $i++)
        <tr class="text-center">
            <td>
                <input type="text" name="premise{{$i}}" class="form-control input-sm">
            </td>
            <td>

                <input type="text" name="response{{$i}}" class="form-control input-sm">
            </td>
            <td>

                <input type="text" name="response{{$i}}" class="form-control input-sm">
            </td>
            <td>
                <a class="btn btn-danger btn-sm  remove_reply_word_blank"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
        @endfor
    </tbody>
</table>
@include('exercise.reply.score')