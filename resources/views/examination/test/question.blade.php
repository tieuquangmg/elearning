@extends('_basic.master')
@section('content')
    <div class="row">
        @include('exam.test.create')
        @include('exam.test.update')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div >
                <div class="x_title">
                    <h2>Add Question For Test <small>Add Question For Test</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><button class="btn btn-primary" data-toggle="modal" data-target="#add_class"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                        </li>
                        <li><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="well" >
                        <div class="col-md-12">
                            <select name="" id="" class="form-control">
                                <option value="">Exercise</option>
                                @foreach($exercises as $value)
                                    <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">

        </div>
    </div>
@endsection

@section('bot')
@endsection