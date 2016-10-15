<label>Reply</label>
<table class="table">
    <tr >
        <th>Correct</th>
        <th>Premise</th>
        <th>Media</th>
    </tr>
    <tr>
        <td><input name="answer" checked value="1" type="radio"></td>
        <td>true</td>
        <td>
            <span class="glyphicon glyphicon-film"></span>
            <span class="glyphicon glyphicon-picture"></span>
            <span class="glyphicon glyphicon-volume-up"></span>
        </td>
    </tr>
    <tr>
        <td><input name="answer" value="0" type="radio"></td>
        <td>false</td>
        <td>
            <span class="glyphicon glyphicon-film"></span>
            <span class="glyphicon glyphicon-picture"></span>
            <span class="glyphicon glyphicon-volume-up"></span>
        </td>
    </tr>
</table>
@include('exercise.reply.score')