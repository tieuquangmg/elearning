@extends('_basic.master')
@section('head')
@endsection
@section('container')
    <ol class="breadcrumb">
        <li><a href="#">News</a></li>
        <li class="active"> Detail </li>
    </ol>
@if($news->count())
    <h3>{!! $news ->title !!}</h3>
    <p>{!! $news ->intro !!}</p>
    <hr>
    <p>{!! $news ->details !!}</p>
    <hr>
<div class="text-right">
    <p><strong>Ngày viết: </strong>{!! $news->created_at !!}. <strong>Views: </strong>{!! $news->views !!}</p>
</div>
@else
    Bài viết không tồn tại
@endif

@endsection
@section('bottomNav')
    @include('includes.navBot.newsDetail')
@endsection
@section('bot')
    <script src="{{asset('')}}js/news/details.js"></script>
@endsection