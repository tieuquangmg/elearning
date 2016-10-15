@extends('_basic.master2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đăng nhập</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Địa chỉ email</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Ghi nhớ
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class=" glyphicon glyphicon-btn fa-sign-in"></i>Đăng nhập
                                </button>
                                <a href="{{route('auth.facebook.login')}}" class="btn btn-primary">Facebook</a>
                                <a class="btn btn-default" data-toggle="modal" data-target="#loginFacebook" id="reset"><span class="glyphicon glyphicon-qrcode"></span></a>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginFacebook" tabindex="-1" role="dialog" aria-labelledby="loginFacebookLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="loginFacebookLabel">Login Facebook1</h4>
                </div>
                <div class="modal-body">
                    <div class="thumbnail">
                        <video autoplay style="width: 100%" class="img-responsive"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="stop" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bot')
    <script src="{{asset('')}}qr_code/qcode-decoder.min.js"></script>
    <script type="text/javascript">

        var video = document.querySelector('video');
        var reset = document.querySelector('#reset');
        var stop = document.querySelector('#stop');
        var qr = new QCodeDecoder();

        reset.onclick = function () {
            (function () {
                'use strict';
                if (!(qr.isCanvasSupported() && qr.hasGetUserMedia())) {
                    alert('Your browser doesn\'t match the required specs.');
                    throw new Error('Canvas and getUserMedia are required');
                }
                function resultHandler (err, result) {
                    var i = 0;
                    if (err)
                             return console.log(err.message);
                    if(i++ == 0){
                        $.ajax({
                            url: "{{route('auth.user.qr_code')}}",
                            method: 'POST',
                            data: {
                                sdt: result, _token: '{{csrf_token()}}'
                            },
                            success: function (data) {
                                if(data){
                                    window.location.reload(true);
                                }
                                else {
                                    alert('Mã thẻ không đúng, có thẻ bạn đã nhầm lẫn');
                                }
                            }
                        });
                    }
                }
                qr.decodeFromCamera(video, resultHandler);
            })();
        };
        stop.onclick = function () {
            qr.stop();
        };
    </script>
@endsection