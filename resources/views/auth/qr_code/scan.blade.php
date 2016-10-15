@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Auth</a></li>
        <li><a href="#">QrCode</a></li>
        <li class="active">Scan</li>
    </ol>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            <video autoplay></video>
            <div>
              {{--<button class="btn btn-default" id="reset">Reset</button>--}}
              {{--<button class="btn btn-danger" id="stop" >Stop</button>--}}
            </div>

        </div>
    </div>
@endsection
@section('head')

@endsection
@section('bot')
    <script src="{{asset('')}}qr_code/qcode-decoder.min.js"></script>
    <script type="text/javascript">

        (function () {
            'use strict';

            var qr = new QCodeDecoder();

            if (!(qr.isCanvasSupported() && qr.hasGetUserMedia())) {
                alert('Your browser doesn\'t match the required specs.');
                throw new Error('Canvas and getUserMedia are required');
            }

            var video = document.querySelector('video');
            var reset = document.querySelector('#reset');
            var stop = document.querySelector('#stop');


            function resultHandler (err, result) {
                if (err)
                    return console.log(err.message);

                alert(result);
            }

            // prepare a canvas element that will receive
            // the image to decode, sets the callback for
            // the result and then prepares the
            // videoElement to send its source to the
            // decoder.

            qr.decodeFromCamera(video, resultHandler);


            // attach some event handlers to reset and
            // stop whenever we want.

            reset.onclick = function () {
                qr.decodeFromCamera(video, resultHandler);
            };

            stop.onclick = function () {
                qr.getTracks().forEach(function (track) { track.stop(); });
                try { qr.stop(); } catch(e) { }
                try {
                    var track = qr.getTracks()[0];
                    track.stop();
                } catch(e) { }
                //qr.stop();
            };

        })();
    </script>
@endsection