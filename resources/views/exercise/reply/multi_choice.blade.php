<label >Reply</label>
<table class="table table-bordered table-responsive">
    <tr >
        <th style="width: 5%">Correct</th>
        <th>Premise</th>
        <th style="min-width: 10%">Media</th>
        <th style="width: 5%"><a class="btn btn-primary btn-block btn-xs" id="add_reply_multi_choice"><span class="glyphicon glyphicon-plus"></span></a></th>
    </tr>

    <tbody id="question_content">
    @for($i=0; $i<3;$i++)
    <tr class="text-center">
        <td ><input type="radio" name="answer" value="{{$i}}"></td>
        <td><input name="reply[]" type="text" class="form-control input-sm"></td>
        <td >
            <div class="btn-group" role="group" aria-label="...">
                <a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-film"></span></a>
                <a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-picture"></span></a>
                <a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-volume-up"></span></a>
            </div>
        </td>
        <td ><a class="btn btn-default btn-sm remove_reply_multi_choice"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
    @endfor
    </tbody>

</table>
@include('exercise.reply.score')