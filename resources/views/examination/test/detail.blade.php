@extends('_basic.master')
@section('content')
    <div class="row" ng-app="myApp" ng-controller="testDetail">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2>Test Details <small>Test Details</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><button class="btn btn-primary" data-toggle="modal" data-target="#add_class"><span class="glyphicon glyphicon-plus-sign"></span> Add</button></li>
                <li><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button></li>
            </ul>
            <form class="x_content" id="formEx">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Test</label>
                        <select name="test" id="test" class="form-control">
                            <option  ng-selected="true" value="no-data">Select test</option>
                            @foreach($tests as $k => $v)
                                <option value="{{$k}}">{{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Question Style</label>
                        <select name="exercise" id="exercise" ng-model="question" class="form-control">
                            <option  ng-selected="true" value="no-data">Select style</option>
                            @foreach($exercise as $value)
                                <option value="{{$value}}">{{trans('table.'.$value)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">&nbsp;</label>
                        <button class="btn btn-primary btn-block" id="push">Push</button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <table class="table">
                    <tr >
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Table</th>
                        <th>Action</th>
                    </tr>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}assets/css/order.css">
@endsection
@section('bot')
    @foreach($exercise as $value)
        <script type="text/javascript" src="{{asset('')}}assets/js/ex/{{$value}}.js"></script>
    @endforeach
    <script>
        $(document).ready(function(){
            $('#test').change(function () {
                var test_id = $(this).val();
                $.ajax({
                    url: '{{route('test_details.where_test')}}',
                    method: 'GET',
                    data: {test_id: test_id},
                    success: function (data) {
                        $('#tbody').html(data);
                    },
                    error: function () {

                    }
                })
            });

            $('#push').click(function () {
                var test = $('#test').val();
                if(test !='no-data'){
                    var exercise = $('#exercise').val();
                    if (exercise != 'no-data'){
                        $.ajax({
                            url: '{{route('test_details.push')}}',
                            method: 'POST',
                            data: $('#formEx').serialize(),
                            success: function (data) {
                                console.log(data)
                            },
                            error: function () {
                                
                            }
                        })
                    }else {
                        alert('Vui lòng chọn dạng bài tập');
                    }
                }else{
                    alert('Vui lòng chon bài test');
                }
            })
        });

    </script>
@endsection