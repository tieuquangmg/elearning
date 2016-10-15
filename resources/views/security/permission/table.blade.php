@foreach($permissions as $row)
<tr>
    <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
    <td>{{$row->name}}</td>
    <td>{{$row->display_name}}</td>
    <td>{!! $row->description !!}</td>
    <td>{{$row->created_at}}</td>
    <td data="{{$row->id}}">
        <a class="btn btn-default edit btn-xs" href="{{route('permission.edit', $row->id)}}" ><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"></span></a>
    </td>
</tr>
@endforeach