@extends('frontend.dasdboard._layout.layout_db')
@section('page-header')
    <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="{{asset($profile->image)}}" alt="people" class="img-circle width-80"/>
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">{{$profile->first_name.' '.$profile->last_name}}</h1>
                    {{--<p class="text-subhead"><a class="link-white text-underline" href="#">xem thông tin cá nhân</a></p>--}}
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Học sinh</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('head')
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/profile.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('dashboard/css/avatar/croppie.css')}}">
    @endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
            <li class="active">Trang cá nhân</li>
        </ol>
        <div class="row row-eq-height">
            <div class="col-md-2 small-padding" style="margin-bottom: 20px;background: white;">
                @include('frontend.dasdboard._modules.left_menu_profile')
            </div>
            <div class="col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4>Thông tin cá nhân</h4>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="account" class="tab-pane active">
                            <form method="post" action="{{route('study.profile')}}" enctype="multipart/form-data"
                                  class="form-horizontal">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                <input type="hidden" name="avatar" id="avatar64">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Ảnh đại diện</label>
                                    <div class="col-md-6">
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <div class="icon-block width-100 bg-grey-100">
                                                    {{--<i class="fa fa-photo text-light"></i>--}}
                                                    <img id="vartarimage" style="height:135px; width: 135px"
                                                         src="{{asset($profile->image)}}">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <button type="button" data-toggle="modal" data-target="#myavatar">Đổi
                                                    avatar
                                                </button>
                                            </div>
                                            <div class="modal fade" id="myavatar" tabindex="-1" role="dialog"
                                                 aria-labelledby="đổi avatar">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">Đổi ảnh đâị
                                                                diện</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="image-editor">
                                                                <input type="file" class="cropit-image-input"
                                                                       value="chọn file ảnh">
                                                                <div class="cropit-preview"></div>
                                                                <div class="image-size-label">Thay
                                                                    đổi
                                                                    kích
                                                                    thước
                                                                    ảnh</div>
                                                                <input type="range" class="cropit-image-zoom-input">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Hủy
                                                            </button>
                                                            <button type="button" class="btn btn-primary export">Lưu
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">Họ và tên</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input name="ho_ten" type="text"
                                                   class="form-control input-sm"
                                                   id="exampleInputLastName" placeholder="Tên"
                                                   value="{{$profile->ho_ten}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">Địa chỉ Email</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input name="email" type="email" class="form-control" id="inputEmail3"
                                                   placeholder="Email"
                                                   value="{{$profile->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 control-label">Địa chỉ</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input name="address" type="text" class="form-control used"
                                                   id="website" value="{{$profile->address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-2 control-label">Mật khẩu</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input name="password" type="password" class="form-control"
                                                   id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-2 control-label">Nhập lại mật khẩu</label>
                                    <div class="col-md-6">
                                        <div class="form-control-material">
                                            <input type="repassword" class="form-control"
                                                   id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group margin-none">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary paper-shadow relative"
                                                data-z="0.5" data-hover-z="1" data-animated>Lưu thông tin
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- This wraps the whole cropper -->

@endsection
@section('bot')
    <script type="text/javascript" src="{{asset('dashboard/js/jquery.cropit.js')}}"></script>
    <script>
        $(function() {
            $('.image-editor').cropit({
                exportZoom: 1.25,
                imageBackground: true,
                imageBackgroundBorderWidth: 20,
                imageState: {
                    src: 'http://lorempixel.com/500/400/',
                },
            });

            $('.rotate-cw').click(function() {
                $('.image-editor').cropit('rotateCW');
            });
            $('.rotate-ccw').click(function() {
                $('.image-editor').cropit('rotateCCW');
            });

            $('.export').click(function() {
                var imageData = $('.image-editor').cropit('export');
                $('#vartarimage').attr('src',imageData);
                $('#avatar64').attr('value',imageData);
                $('#myavatar').modal('hide');
            });
        });
    </script>
@endsection