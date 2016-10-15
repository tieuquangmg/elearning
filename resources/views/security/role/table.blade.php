@foreach($roles as $row)
    <tr>
        <th><input type="checkbox" class="check" value="{{$row->id}}"></th>
        <td>{{$row->name}}</td>
        <td class="hidden-xs">{{$row->display_name}}</td>
        {{--<td >{!! $row->description !!}</td>--}}
        <td class="hidden-xs">{{$row->created_at}}</td>

        <td >
            <a class="btn btn-default edit btn-xs" href="{{route('role.edit', $row->id)}}"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa"></span></a>
            {{--<a class="btn btn-danger btn-xs del_mini_test" href="{{route('role.delete', $row->id)}}"><span class=" glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Xóa"></span></a>--}}
            {{--<a class="btn btn-primary btn-xs" href="{{route('mini_test.detail', $row->id)}}"><i class="fa fa-question-circle" data-toggle="tooltip" data-placement="top" title="Chi tiết"></i></a>--}}
        </td>
    </tr>
@endforeach
