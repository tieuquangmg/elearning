@extends('_basic.master')

@section('bread')
    <li><a href="#">Exercise</a></li>
@endsection

@section('right_content')
    @include('exercise._include.exercise')
@endsection

@section('left_info')
    <a href="#" class="list-group-item">Lesson <span class="pull-right label label-success">Grammar</span></a>
@endsection

@section('head')
    <style>
        button, .btn{
            margin-bottom: 0 !important;
        }
    </style>
@endsection