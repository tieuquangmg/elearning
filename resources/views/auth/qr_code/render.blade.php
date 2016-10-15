@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Auth</a></li>
        <li><a href="#">QrCode</a></li>
        <li class="active">Render</li>
    </ol>
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label>Text</label>
                <textarea name="" id="textGenerate"  rows="7" class="form-control">{{$generate}}</textarea>
            </div>
            <div class="form-group">
                <label>Size</label>
                <input type="range" name="size" min="20" max="500" value="{{$size}}" step="1" id="sizeInputId" list="powers" oninput="sizeOutputId.value = sizeInputId.value" >
                <output name="size" id="sizeOutputId">20</output>
                <datalist id="powers">
                    @for($i=1; $i<=50; $i++)
                        <option value="{{$i*10}}">
                    @endfor
                </datalist>
            </div>
            <div class="form-group">
                <label>Color</label>
                <div class="input-group qr">
                    <input type="text" name="color" required value="#000000" id="colorQr" class="form-control" />
                    <span class="input-group-addon"><i></i></span>
                </div>
            </div>
            <div class="form-group">
                <label>Background Color</label>
                <div class="input-group qr">
                    <input type="text" name="bgColor" id="bgColorQr" required value="#ffffff" class="form-control" />
                    <span class="input-group-addon"><i></i></span>
                </div>
            </div>
            <div class="form-group">
                <label>Format Image</label>
                <select name="format" id="formatImage" class="form-control">
                    <option value="png">PNG</option>
                    <option value="eps">EPS</option>
                    <option value="svg">SVG</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <img id="imageQrCode" src="data:image/png;base64, {{ $qrCode }}">
        </div>
        <div class="col-lg-12">
            <a class="btn btn-primary" id="download_image" target="_blank" download="{{str_random(10)}}" href="data:image/png;base64, {{ $qrCode }}"><span class="glyphicon glyphicon-plus-sign"></span> Donwnlod</a>

        </div>
    </div>


@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap-colorpicker.min.css">
@endsection
@section('bot')
    <script type="text/javascript" src="{{asset('')}}js/bootstrap-colorpicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#sizeInputId').change(function(){
                ajaxChangeQr();
            });
            $('#textGenerate').change(function(){
                ajaxChangeQr();
            });
        });

        $(function(){
            $('.qr').colorpicker().on('changeColor.colorpicker', function(event){
                ajaxChangeQr();
            });
        });

        function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
        function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
        function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
        function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}

        function componentToHex(c) {
            var hex = c.toString(16);
            return hex.length == 1 ? "0" + hex : hex;
        }

        function rgbToHex(r, g, b) {
            return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
        }
        function ajaxChangeQr(){
            var x = $('#colorQr').val();
            var y = $('#bgColorQr').val();
            var color = new Array();
            color['r'] = hexToR(x);
            color['g'] = hexToG(x);
            color['b'] = hexToB(x);
            var bgColor = new Array();
            bgColor['r'] = hexToR(y);
            bgColor['g'] = hexToG(y);
            bgColor['b'] = hexToB(y);
            var size = $('#sizeInputId').val();
            var format = $('#formatImage').val();
            var generate = $('#textGenerate').val();
            $.ajax({
                url: "{{route('auth.qr_code.change')}}",
                type: 'post',
                dataType: 'json',
                data:{generate: generate, size: size, r: color['r'], g: color['g'], b: color['b'], bgr: bgColor['r'], bgg: bgColor ['g'], bgb: bgColor['b'],format:format,_token:'{{csrf_token()}}'},
                success: function(data){
                    $('#imageQrCode').attr('src','data:image/png;base64,'+data);
                    $('#download_image').attr('href','data:image/png;base64,'+data);
                    $('#download_image').attr('download', Math.random().toString(36).substring(7));
                },
                error: function(error){
                    console.log('Bạn thay đổi qua nhiều hãy reset và bình tĩnh lựa chọn');
                }
            });
        }
    </script>
@endsection