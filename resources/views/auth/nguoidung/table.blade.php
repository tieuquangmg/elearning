@foreach($users as $row)
<tr>
    <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
    <td>{{$row->name}}</td>
    <td>{{$row->ho_ten}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->bomon->Bo_mon or '-'}}</td>
    <td>{{$row->khoa->Ten_khoa or '-'}}</td>
    <td>{{$row->phong->Phong or '-'}}</td>
    <td>{!! $row->phone_number !!}</td>
    <td class="text-center">@include('_basic.includes.is.active')</td>
    <td>
        <a class="btn btn-default edit btn-xs" href="{{route('nguoidung.edit', $row->id)}}" ><span class="glyphicon glyphicon-edit"></span></a>
    </td>
</tr>
@endforeach