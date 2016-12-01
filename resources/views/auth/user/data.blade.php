@extends('_basic.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#">Tài Khoản</a></li>
        </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="clearfix">
                        <div class="pull-left h4">
                            Tài Khoản
                        </div>
                        <div class="pull-right">

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @include('auth.user._active')

                    <table class="table">
                        <tr>
                            <th><input type="checkbox" id="check_all"></th>
                            <th>Mã sinh viên</th>
                            <th>Họ tên</th>
                            <th>{{trans('label.email')}}</th>
                            <th>Địa chỉ</th>
                            <th>{{trans('label.phone_number')}}</th>
                            <th>{{trans('label.active')}}</th>
                            <th><span class="btn btn-xs btn-primary"><i class="fa fa-filter"></i></span></th>
                        </tr>
                        @include('auth.user.table')
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>

        </div>
    </div>
@endsection
@section('bot')
    <script>
        var url_delete = '{{route('auth.user.delete')}}';
        $(document).on('click','.setactive',function (){
            var id = $(this).attr('data');
            var selec = $(this);
            $.ajax({
                url: '{{route("auth.user.active")}}/'+id,
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