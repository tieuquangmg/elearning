@extends('_basic.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h1>{{$gallery->name}}</h1>
        </div>
    </div>
    
    <div class="row">
        <div id="gallery_images">
            @foreach($gallery->images as $row)
                <div class="col-xs-6 col-md-3 col-lg-2" >
                    <a href="{{url($row->file_path)}}" data-lightbox="roadtrip" class="thumbnail">
                        <img style="height: 185px" src="{{url($row->file_path)}}" class="img-responsive" >
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<form method="post" action="{{route('post.image.upload')}}"--}}
                {{--class="dropzone" id="addImages"--}}
            {{-->--}}
                {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                {{--<input type="hidden" name="gallery_id" value="{{$gallery->id}}">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="http://avime20-sdk.awifi.vn/api/video/create"
                class="dropzone" id="addImages" enctype="multipart/form-data"
            >
                <input type="hidden" name="access_token" value="c4cbdcf270b7c4411a92666d14d175fb">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{route('post.gallery.list')}}" class="btn btn-default"><span class="glyphicon glyphicon-backward"></span> Bank</a>
        </div>
    </div>
@endsection
@section('bot')
    <script src="{{asset('build/dropzone.js')}}"></script>
    <script>
        $(document).ready(function()
        {
            $.ajaxSetup(
                    {
                        crossDomain: true,
                        type: "POST",
                        error(jqXHR, textStatus, errorThrown)
                        {
                            alert("Có lỗi xảy ra!");
                        }
                    });
        });
        Dropzone.options.addImages = {
            crossOrigin: false,
            paramName: "video_upload",
            maxFilesize: 20,
            method:"POST",
//            acceptedFiles: 'image/*',
            success: function (file, response) {
                console.log(file);
                console.log(response);
                alert('success');
                if(file.status == 'success'){
                    handleDropzoneFileUpload.handleSuccess(response);
                }else {
                    handleDropzoneFileUpload.handleError(response);
                }
            }
        };
        var handleDropzoneFileUpload = {
            handleError: function (response) {
                console.log(response);
            },
            handleSuccess: function (response) {
                console.log(response);
                var imageSrc = "{{asset('')}}"+response.file_path;
                var html =  '<div class="col-xs-6 col-md-3 col-lg-2">'  +
    '                       <a href="'+imageSrc+'" data-lightbox="roadtrip" class="thumbnail">'+
                            '<img src="'+imageSrc+'" class="img-responsive" >'+'</a>'+ '</div>';
                $('#gallery_images').append(html);
            }
        };
//        lightbox.option({
//            'resizeDuration': 	700,
//            'wrapAround': true,
//            'showImageNumberLabel':true
//        })
    </script>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('build/dropzone.css')}}">
@endsection