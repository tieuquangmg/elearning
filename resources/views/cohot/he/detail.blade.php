@extends('_basic.master')
@section('head')
@endsection
@section('content')
    @if(count($data)>0)
        <h2>{{$data->title}}</h2>
        <p>
            {!! $data->intro !!}
        </p>
       <p>
           {!! $data->content !!}
       </p>
        <p><strong>Writer: {{$data->user->name}} - Created at: {{$data->created_at}} - View: {{$data->view}} - Last view: {{$data->last_view->format('d-m-Y H:i:s')}}</strong></p>
    @endif
@endsection
@section('bot')

@endsection