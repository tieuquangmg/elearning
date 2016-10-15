<form method="post" action="{{route('user.assign')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @foreach($roles as $role)
        <li class="list-group-item">
            <span class="pull-left">
                <input type="checkbox" value="{{$role->id}}" name="role_ids[]" @if($user->hasRole($role->name)) checked @endif>
            </span>
            &nbsp;
            &nbsp;
            {{$role->display_name}}
        </li>
    @endforeach
    <li class="list-group-item"><button class="btn btn-primary">Done</button></li>
</form>