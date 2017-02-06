@foreach($data as $row)
    <tr>
        <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
        <td>{{$row->name}}</td>
        <td class="text-right">{{$row->time}}</td>
        <td class="text-right">{{$row->entity_id}}</td>
        <td class="text-right">{{($row->sender != null) ? ($row->sender->full_name) : ''}}</td>
        <th class="text-right"><span notyid="{{$row->id}}" class="btn btn-sm btn-success send-notify">Gửi</span></th>
        <td class="text-right">@include('_basic.includes.is.active')</td>
        {{--<td>{{$row->created_at}}</td>--}}
        <td class="text-right"><a class="btn btn-sm btn-default" href="{{route('notify.edit', $row->id)}}"><span class="glyphicon glyphicon-edit"> </span>Sửa</a></td>
    </tr>
@endforeach