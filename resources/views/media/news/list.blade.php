@foreach($data as $row)
    <h2>{{$row->title}}</h2>
    <p>
        {!! $row->intro !!}
    </p>
    <div class="text-center">
        <a href="{{route('news.detail', $row->id)}}" class="btn-link " ><span class="glyphicon-link glyphicon "></span>Xem bài</a>
    </div>

@endforeach
<div class="text-center">
    {!! $data->links() !!}
</div>