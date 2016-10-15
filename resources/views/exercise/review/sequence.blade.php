<ul class="list-group sequence" style="min-height: 40px; background: whitesmoke">
    @foreach($row->ans as $reply)
        <li class="list-group-item ans">
            <input type="hidden" name="reply[]{{$row->id}}" value="{{$reply->reply}}">
            {{$reply->reply}}
        </li>
    @endforeach
</ul>

