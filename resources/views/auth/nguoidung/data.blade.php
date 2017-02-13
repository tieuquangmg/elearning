@extends('_basic.master')
@section('content')
    <form method="get" action="{{route('auth.user.data')}}">
    <div id="page-heading">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#">Tài Khoản cán bộ</a></li>
        </ol>
        <h1>Tài Khoản cán bộ</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a class="btn btn-danger btn-sm" id="delete">
                    <span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>
                <a class="btn btn-primary btn-sm" href="{{route('auth.user.add')}}">
                    <span class="glyphicon glyphicon-plus"></span> {{trans('button.add')}}</a>
                <a class="btn btn-warning btn-sm" href="{{route('auth.user.import')}}">
                    <span class="glyphicon glyphicon-import"></span> Nhập </a>
                <a download class="btn btn-warning btn-sm" href="{{route('auth.user.export')}}">
                    <span class="glyphicon glyphicon-export"></span>Xuất</a>
                <a download class="btn btn-warning btn-sm" href="">
                    <span class="glyphicon glyphicon-check"></span>
                    Đồng bộ</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                Tài Khoản cán bộ
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th><input type="checkbox" id="check_all"></th>
                        <th>Tên đăng nhập</th>
                        <th>Họ tên</th>
                        <th>{{trans('label.email')}}</th>
                        <th>Phòng</th>
                        <th>Khóa</th>
                        <th>Bộ môn</th>
                        <th>{{trans('label.phone_number')}}</th>
                        <th>{{trans('label.active')}}</th>
                        <th><span class="btn btn-xs btn-primary"><i class="fa fa-filter"></i></span></th>
                    </tr>
                    <tr>
                        <th><a class="btn btn-sm">Reset</a></th>
                        <th><input class="form-control" id="name"></th>
                        <th><input value="{{old('s') }}" name="s" type="text" class="form-control" id="search_form" placeholder="Họ và tên"></th>
                        <th></th>
                        <th>Phòng</th>
                        <th>Khóa</th>
                        <th>Bộ môn</th>
                        <th></th>
                        <th></th>
                        <th><input type="submit" id="search_button" value="Tìm kiếm" class="btn btn-success "></th>
                    </tr>
                    @include('auth.nguoidung.table')
                </table>
            </div>
            <div class="panel-body">
                <div class="clearfix">
                    <div class="pull-left">{!! $users->links() !!}</div>
                    <div class="pull-right">
                        {!! Form::select('f_select_number', array(10 => '10', 20 => '20', 30 => '30'),old('f_select_number'), array('id' => 'f_select_number','class' => 'form-control','onchange'=>"this.form.submit()")) !!}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
    </form>
@endsection
@section('bot')
    <script>
        var url_delete = '{{route('nguoidung.delete')}}';
        $(document).on('click','.setactive',function (){
            var id = $(this).attr('data');
            var selec = $(this);
            $.ajax({
                url: '{{route("nguoidung.active")}}/'+id,
                beforeSend: function(){
                    $('.loading').show();
                },
                success:function(data){
                    $('.loading').hide();
                    if(selec.hasClass('btn-success')){
                        selec.toggleClass('btn-danger btn-success');
                        selec.children().toggleClass('glyphicon-ok glyphicon-ban-circle');
                    }else{
                        selec.toggleClass('btn-success btn-danger');
                        selec.children().toggleClass('glyphicon-ban-circle glyphicon-ok');
                    }
                },
                error: function (){
                    alert('lỗi rồi nhé')
                }
            });
        });
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection