@foreach($row->ans as $reply)
    <input type="checkbox" name="reply{{$row->id}}[]"> {{$reply->reply}}
@endforeach