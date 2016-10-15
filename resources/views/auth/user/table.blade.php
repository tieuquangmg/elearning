@foreach($users as $row)
<tr>
    <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
    <td>{{$row->first_name}}</td>
    <td>{{$row->last_name}}</td>
    <td>{{$row->email}}</td>
    <td>{!! $row->phone_number !!}</td>
    <td class="text-center">@include('_basic.includes.is.active')</td>
    <td>
        <a class="btn btn-default edit btn-xs" href="{{route('auth.user.edit', $row->id)}}" ><span class="glyphicon glyphicon-edit"></span></a>
    </td>
</tr>
@endforeach