@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a href="{{route('permission.data')}}" >{{trans('table.permission')}}</a></li>
    </ol>
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                        Các chức năng
                </div>
                <div class="pull-right">
                    
                </div>
            </div>
        </div>
        <div class="panel-body">
            @include('security.permission._active')
            <table class="table">
                <tr>
                    <th><input type="checkbox" id="check_all"></th>
                    <th>{{trans('label.name')}}</th>
                    <th>{{trans('label.display_name')}}</th>
                    <th>{{trans('label.description')}}</th>
                    <th>{{trans('label.created_at')}}</th>
                    <th></th>
                </tr>
                @include('security.permission.table')
            </table>
            {!! $permissions->links() !!}
        </div>
    </div>

@endsection
@section('bot')
    <script>
        var url_delete = '{{route('permission.delete')}}';
    </script>
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script src="{{asset('')}}build/style/js/delete_page.js"></script>
@endsection