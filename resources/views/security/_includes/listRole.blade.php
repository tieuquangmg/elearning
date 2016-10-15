{{csrf_field()}}
<input type="hidden" id="user_id" name="userIds[]" value="{{$user[0]->id}}">
<ul class="list-group">
    <li class="list-group-item">Họ tên: {{$user[0]->first_name." ".$user[0]->last_name}}</li>
    <li class="list-group-item">Email: {{$user[0]->email}}</li>
    <li class="list-group-item">Số điện thoại{{$user[0]->phone_number}}</li>
</ul>
<ul class="list-group">
    <li class="list-group-item"><input type="checkbox" id="_role_check_all"></li>
    @foreach($roles as $row)
        <li class="list-group-item">
            <input @if($user[0]->hasRole($row->name)) checked @endif type="checkbox" name="roleIds[]" value="{{$row->id}}" class="_role_check"> {{$row->display_name}}
        </li>
    @endforeach
</ul>