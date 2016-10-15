@foreach($row->ans as $reply)
    <li style="background: #bcddff; color: blue" class="list-group-item">{{$reply->premise }}</li>
    <ul class="list-group matching begin" style="min-height: 40px; background: whitesmoke">

    </ul>
@endforeach

<ul class="list-group matching end" style="min-height: 40px; background: whitesmoke">
    @foreach($row->ans as $reply)
        <li class="list-group-item ans">{{$reply->response}}</li>
    @endforeach
</ul>

