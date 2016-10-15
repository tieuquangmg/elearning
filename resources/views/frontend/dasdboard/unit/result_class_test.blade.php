@extends('frontend.dasdboard._layout.layout')
@section('title')
@endsection
@section('head')
    <meta charset="utf-8" content="text/html">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @include('_basic.includes.alert.index')
                <div class="panel panel-default" style="width: 500px; margin: 30px auto">
                    <div class="panel-heading">
                        <div class="clearfix">
                            <div class="pull-left h4">
                                Kết quả kiểm tra
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bot')
@endsection