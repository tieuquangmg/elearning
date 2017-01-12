@extends('frontend.dasdboard._layout.layout')
@section('content')
    <div class="container">
        <div class="parallax overflow-hidden bg-blue-400 page-section third">
            <div class="container parallax-layer" data-opacity="true" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                <div class="media v-middle">
                    <div class="media-left text-center">
                        <a href="#">
                            <img src="{{asset(Auth::user()->image)}}" alt="people" class="img-circle width-80">
                        </a>
                    </div>
                    <div class="media-body">
                        <h1 class="text-white text-display-1 margin-v-0">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</h1>
                        <p class="text-subhead"><a class="link-white text-underline" href="#">thông tin cá nhân</a></p>
                    </div>
                    <div class="media-right">
                        <span class="label bg-blue-500">Sinh viên</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Bảng kết quả học tập
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Môn</th>
                        <th>Điểm</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$value)
                        <tr>
                            <td>{{$value['subject']->name}}</td>
                            <td>
                                @foreach($value['unit'] as $key=>$row)
                                    @if(!$row->user_test->isEmpty())
                                        {{$row->name.': '.$row->user_test->first()->score}}<br>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    @endsection
