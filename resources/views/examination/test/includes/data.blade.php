@foreach($data as $row)
<tr>
    <td>{{$row->ex->question}}</td>
    <td>{{$row->ex->answer}}</td>
    <td>{{$row->quest}}</td>
    <td>
        <button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
        <button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
    </td>
</tr>
@endforeach