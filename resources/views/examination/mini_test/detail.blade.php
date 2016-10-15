@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a>Ngân hàng câu hỏi</a></li>
        <li><a href="#">Bài kiểm tra</a></li>
    </ol>
    @include('exercise.question.create')
    @include($prefix.'mini_test.update')
    @include($prefix.'mini_test.review')
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr >
                    <th>Câu hỏi</th>
                    <th>Điểm</th>
                    <th>Thể loại</th>
                    <th>
                        <button data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-plus"></span></button>
                        <button data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-import"></span></button>
                        <button data-target="#reView" class="btn btn-primary btn-xs" data-toggle="modal" data-placement="left" title="review minitest" ><span class="glyphicon glyphicon-ege"></span></button>
                        <button class="btn btn-primary btn-xs"><span class="fa fa-check"></span></button>
                    </th>
                </tr>
                <tbody id="tbody">
                    @foreach($mini_test ->question as $row)
                        <tr>
                            <td>{{$row->question}}</td>
                            <td>{{$row->score}}</td>
                            <td>{{trans('table.'.$row->type)}}</td>
                            <td>
                                <a href="" class="btn btn-default btn-xs"><span class=" glyphicon glyphicon-edit"></span></a>
                                <a href="{{route('ex.question.delete', $row->id)}}" class="btn btn-danger btn-xs"><span class=" glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{--@include($prefix.'mini_test.making')--}}
        </div>
    </div>
@endsection
@section('head')
    <style>
        label,th {
            color: black;
        }
    </style>
    @yield('subHead')
@endsection
@section('bot')
    <script src="{{asset('')}}build/jquery-ui/js/jquery-ui.min.js"></script>
    <script>
        var want, need, iswant, isneed, iswrap;
        $('.begin').sortable({
            connectWith: '.matching',
            receive: function(event, ui) {
                iswrap = false;
                var $this = $(this);
                iswant = $(this);
                if ($this.children('li').length > 1) {
                    iswrap = true;
                    $(ui.sender).sortable('cancel');
                    want = $this.html();
                }
            },
            stop: function (event, ui) {
                var $this = $(this);
                isneed = $(this);
                need = $this.html();
                if(iswrap!=''){
                    iswant.html(need);
                    isneed.html(want);
                    iswrap = false;
                }
            }
        });
        $('.end').sortable({
            connectWith: '.matching',
            start: function (event, ui) {
                var $this = $(this);
                console.log($this.children('li').length);
            }
        });
        $('.sequence').sortable({

        });

    </script>
    @yield('subBot')
@endsection