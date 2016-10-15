@foreach($row->ans as $reply)
    <input name="reply{{$row->id}}" type="radio" value="{{$reply->reply}}"> {{$reply->reply}}
@endforeach