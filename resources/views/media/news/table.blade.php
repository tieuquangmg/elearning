@foreach($data as $row)
    <tr>
        <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
        <td>{{$row->title}}</td>
        <td class="text-right">{{$row->view}}</td>
        <td class="text-right">@include('_basic.includes.is.active')</td>
        {{--<td>{{$row->created_at}}</td>--}}
        <td class="text-right"><a class="btn btn-sm btn-default" href="{{route('news.update', $row->id)}}"><span class="glyphicon glyphicon-edit"> </span>Sửa</a></td>
    </tr>
@endforeach