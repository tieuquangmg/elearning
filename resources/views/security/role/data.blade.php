@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a >Phân quyền</a></li>
        <li><a href="#">Danh sách vai trò</a></li>
    </ol>
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    Vai trò
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
        <div class="panel-body">
            @include('security.role._active')
            {{--<div class="form-group text-right">--}}
            {{--<a class="btn btn-danger btn-sm" id="delete" ><span class="glyphicon glyphicon-trash"></span> {{trans('button.delete')}}</a>       --}}
            {{--</div>--}}
            <table class="table table-condensed">
                <tr>
                    <th><input type="checkbox" id="check_all"></th>
                    <th>{{trans('label.name')}}</th>
                    <th class="hidden-xs">{{trans('label.display_name')}}</th>
                    {{--<th>{{trans('label.description')}}</th>--}}
                    <th class="hidden-xs">{{trans('label.created_at')}}</th>
                    <th>Hành động</th>
                </tr>
                @include('security.role.table')
            </table>
            {!! $roles->links() !!}
        </div>
    </div>

@endsection
@section('bot')
    <script>
        var url_delete = '{{route('role.delete')}}';
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection