@extends('_basic.master')
@section('content')
@endsection
@section('bot')
    <script src="{{asset('')}}js/pagination.js"></script>
    <script>
        var f_url_paginate = '{{$action['paginate']}}';
        var f_url_delete = '{{$action['delete']}}';
        var order ='{{$column['order']}}';
    </script>
@endsection