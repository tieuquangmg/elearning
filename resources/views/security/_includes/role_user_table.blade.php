@foreach($users as $user)

    <tr>
        <td><input type="checkbox" class="check" name="userIds[]" value="{{$user->id}}"></td>
        <td>{{$user->ho_ten}}</td>
        <td>{{$user->code}}</td>
        <td>{{($user->lop != '')?($user->lop->ten_lop) : ''}}</td>
        <td>
            @foreach($user->roles as $value)
                {{$value->name}} |
            @endforeach
        </td>
        <td class="text-right">
            <a class="btn btn-xs btn-default setRole" data={{$user->id}} >
                <i class="fa fa-cog"></i>
            </a>
        </td>
    </tr>
@endforeach