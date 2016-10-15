@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a  href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a >Phân quyền</a></li>
        <li><a  href="#">Danh sách vai trò</a></li>
        <li><a  href="#">Thêm mới</a></li>
    </ol>
    <div class="panel panel-info">
        <div class="panel panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    Thêm vai trò mới

                </div>
            </div>
        </div>
        <div class="panel-body">
            <form method="post" action="{{route('role.create')}}" id="formRole">
                <input type="hidden" name="_token" id="create_token" required value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label >Tên vai trò</label>
                            <input type="text" pattern="^[_A-z0-9]{1,}$" minlength="5" min="3" max="10" maxlength="15" name="name"
                                   data-pattern-error="Định dạng chưa đúng em à"
                                   data-type-error="Định dạng chưa đúng em à"
                                   data-required-error="Vui lòng điền thông tin"
                                   data-min-error="Quá nhỏ em à"
                                   data-length-error="Quá nhỏ em à"
                                   data-max-error="Quá lớn mmnr"
                                   data-maxlength-error="Quá lớn mmnr"
                                   data-match-error="Độ dài ký tự chưa được"
                                   id="create_name" required class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label >{{trans('label.display_name')}}</label>
                            <input type="text" name="display_name" required id="create_display_name" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label >{{trans('label.description')}}</label>
                    <textarea name="description" class="mceEditor form-control" id="create_description"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group text-center">
                    {!! Recaptcha::render() !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="submitForm"><i class="fa fa-check"></i> Hoàn thành</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('bot')
    <script>
        $('#submitForm').click(function (e) {
            $('#formRole').validator();
            e.preventDefault();
            var captcha = $('#g-recaptcha-response').val();
            var form = $('#formRole').serialize();
            $.notifyDefaults({
                url_target: "_blank",//_blank _self
                offset: {
                    x: 25,
                    y: 50
                },
                animate: {
                    enter: 'animated rollIn',
                    exit: 'animated rollOut'
                }
            });
            if(captcha==''){
                var captcha = $('.rc-anchor').html();
                $.notify({
                    title: "<strong>Chú ý:</strong> ",
                    icon: 'fa fa-error',
                    message: "Vui lòng nhập captcha",
                    //url: "https://twitter.com/Mouse0270",
                },{
                    type: 'danger',

                });
            }
            $('#formRole').submit()

        })
    </script>
@endsection
