@extends('_basic.master')
@section('head')
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Media</a></li>
        <li><a href="{{route('news.data')}}">Tin tức</a></li>
        <li class="active">Tất cả tin tức</li>
    </ol>
    @if(count($data)>0)
        <div class="form-group text-right">
            <a class="btn btn-sm btn-primary" href="{{route('news.create')}}"><span class="glyphicon glyphicon-plus-sign"> </span>Viết bài mới</a>
            <a id="delete" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"> </span>Xóa bài</a>
        </div>
        <table class="table" style="text-align: left">
            <tr>
                <th><input type="checkbox" id="check_all"></th>
                <th class="text-center">Mã bộ môn</th>
                <th class="text-left">Bộ môn</th>
                <th class="text-center">Số nhóm</th>
                <th class="text-center">Khóa</th>
                <th></th>
                {{--<th>{{trans('label.created_at')}}</th>--}}
            </tr>
            <tbody id="table">
            @foreach($data as $row)
                <tr>
                    <td><input type="checkbox" class="check" value="{{$row->ID_bm}}"></td>
                    <td class="text-center">{{$row->Ma_bo_mon}}</td>
                    <td class="text-left">{{$row->Bo_mon}}</td>
                    <td class="text-center">{{$row->So_nhom}}1</td>
                    <td class="text-center">{{$row->ID_khoa}}2</td>
                    {{--<td class="text-right">@include('_basic.includes.is.active')</td>--}}
                    {{--<td>{{$row->created_at}}</td>--}}
                    <td class="text-right"><a class="btn btn-sm btn-default" href="{{route('news.update', $row->ID_bm)}}"><span class="glyphicon glyphicon-edit"> </span>Sửa</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center" id="url">
            {!! $data->render() !!}
        </div>
    @else
        <div class="form-group text-right">
            <a href="{{route('news.create')}}" class="btn btn-primary"><span  class="glyphicon glyphicon-plus-sign"> </span>Viết bài mới</a>
        </div>

        <div class="alert alert-info">
            {{trans('message.no_data')}}
        </div>
    @endif
@endsection
@section('bot')
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script>
/**
 * ===============================================Delete Multi
 */
        $('#delete').click(function(){
            var arrayId = new Array();
            $('.check').each(function(){
                if($(this).is(':checked')){
                    id = $(this).val();
                    arrayId.push(id);
                }
            });
            if(arrayId.length){
                var del = confirm('Bạn thực sự muốn xóa !');
                if(del){
                    support_deletes(arrayId);
                }
            } else alert('You must check for remove');
        });

        function support_deletes(arrayId){
            $.ajax({
                url:'{{route('news.delete')}}',
                type: 'get',
                data: {ids: arrayId},
                success: function(data){
                    console.log(data);
                    if(data){
                        resetPages();
                    }
                },
                error: function(err){
                    alertError(err)
                }
            });
        }

        /**
         * get page # after ajax Pagination
         */
        function getHashPage(){
            var page = $(location).attr('hash');
            return  page.replace('#','');
        }

        function alertError(err){
            switch (err.status){
                case 401: alert('401 - Máy chủ yêu cầu bạn đăng nhập lại để thực hiện'); break;
                case 404: alert('404 - Không tìm thấy máy chủ'); break;
                case 403: alert('403 - Truy cập của bạn bị cấm'); break;
                case 500: alert('500 - Máy chủ bị lỗi. Liên hệ với kỹ thuật viên'); break;
                default : alert('Xử lý bị lỗi vui lòng thử lại liên hệ với kỹ thuật viên');
            }
        }

        function resetPages() {
            var page = getHashPage();
            paginate(page);
        }
        function paginate(page) {
            $.ajax({
                url: '{{route('news.data')}}?page='+page,
                success:function(data){
                    $('#table').html(data.table);
                    $('#url').html(data.url);
                    $('#check_all').prop('checked', false);
                },
                error: function(err){
                    alertError(err)
                }
            }).done(function(){
                location.hash = page;
            });
        }

        /**
         * change number Item on page
         */
        $('#f_select_number').change(function(){
            var number = $(this).val();
            getPages(1,number,order,sort,column_search,search)
        });
        /**
         * Search items on table
         */
        $('#search_form').keyup(function(event){
            if(event.which == 13){
                search = $(this).val();
                $(this).val('');
                getPages(1,number,order,sort,column_search,search)
            }
        });
        /**
         * Sort page glyphicon-sort
         */
        $('table th .glyphicon-sort').click(function(){
            var order = $(this).attr('data');
            if(sort == 'asc') sort = 'desc'; else sort = 'asc';
            getPages(1,number,order,sort,column_search,search);
        });

        /**
         * Pagination ajax
         */
        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $.ajax({
                url: '{{route('news.data')}}?page='+page,
                success:function(data){
                    $('#table').html(data.table);
                    $('#url').html(data.url);
                    $('#check_all').prop('checked', false);
                },
                error: function(err){
                    alertError(err)
                }
            }).done(function(){
                location.hash = page;
            });
        });
        /*
            ==============> resetPage
         */
        /**
         * get Page change numberItem
         */
        function getPages(page,number,order,sort,column_search,search){
            var url ='{{route('news.data')}}?page='+page;
            console.log(url);
            $.ajax({
                url: url,
                data:{number:number,order:order,sort:sort,column_search:column_search,search:search},
                success:function(data){
                    $('#f_content_table').html(data.content);
                    $('#f_pagination_url').html(data.url);
                    $('#f_check_all').prop('checked', false);
                },
                error: function(err){
                    alertError(err)
                }
            }).done(function(){
                location.hash = page;
            });
        }
    </script>
@endsection