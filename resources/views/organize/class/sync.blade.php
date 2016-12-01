@extends('_basic.master')
@section('content')
    {!! csrf_field() !!}
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                </div>
                <div class="pull-right">
                    <a id="sync" class="btn btn-success">đồng bộ</a>
                </div>
            </div>
        </div>
        <div class="panel-body" >
            <div class="col-xs-3">
                <div class="form-group-sm ">
                    <label class="form-label">thêm lớp mới</label>
                    <input type="checkbox" title=" ghi đè" name="new">
                </div>
                <div class="form-group-sm ">
                    <label class="form-label">ghi đè</label>
                    <input type="checkbox" title=" ghi đè" name="overwrite">
                </div>
            </div>
            <div class="col-xs-3">
                <label>Các cột cần đồng bộ</label>
                <ul class="list-group">
                    <li class="list-group-item"><input type="checkbox" name="id"><label>id</label></li>
                    <li class="list-group-item"><input type="checkbox" name="name"><label>tên lớp</label></li>
                    <li class="list-group-item"><input type="checkbox" name="code"><label>Mã lớp</label></li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
@section('bot')
<script>
    $(document).ready(function () {
        $('#sync').click(function ($e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                url: '{{route('class.sync.class')}}',
                data: {},
                method: 'POST',
                beforeSend:function () {
                    $('.loading').show();
                },
                success: function (result) {
                    $('.loading').hide();
                    console.log(result);
                },
                error: function (error) {
                    $('.loading').hide();
                    console.log(error);
                }
            })
        });
    })
</script>
    @endsection