@extends('frontend.dasdboard._layout.layout_db')
@section('title')
@endsection
@section('head')
    <meta charset="utf-8" content="text/html">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/test/test.css')}}">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include('_basic.includes.alert.index')
                <div class="panel" style="width: 500px; margin: 30px auto">
                    <div class="panel-heading panel-blue">
                        <h5 style="color: white">Kết quả kiểm tra: {{$user_test->name}}</h5>
                    </div>
                    <div class="panel-body">
                        {{--@if(session()->get('success'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--<strong>{{session()->get('success')}}</strong>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Họ và tên:</td>
                                <td>
                                    <b>{{$user_test->user_test->first()->user->ho_ten}}</b>
                                </td>
                            </tr>
                            <tr>
                                <td>Bài:</td>
                                <td>{{$user_test->unit->name}}</td>
                            </tr>
                            <tr>
                                <td>Điểm:</td>
                                <td>{{$correct}}</td>
                            </tr>
                            <tr>
                                <td>Thời gian làm bài:</td>
                                <td>{{$user_test->time/60}} phút</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a style="color: white"" href="{{url(Session::get('url_back'))}}" class="btn btn-success">Trở lại</a>
                        <a style="float: right;color: white" href="{{route('study.unit.tested.detail',$user_test->id)}}"
                           class="btn btn-danger">Xem chi tiết bài kiểm tra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bot')

@endsection