@extends('_basic.master')
@section('head')
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Chương trình</a></li>
        <li><a href="{{route('news.data')}}">Chuyên ngành</a></li>
        <li class="active">Tất cả Chuyên ngành</li>
    </ol>
    @if(count($data)>0)
        <div class="form-group text-right">
            <a class="btn btn-sm btn-primary" href="{{route('news.create')}}"><span class="glyphicon glyphicon-plus-sign"> </span>Viết bài mới</a>
            <a id="delete" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"> </span>Xóa bài</a>
        </div>
        <table class="table">
            <tr>
                <th><input type="checkbox" id="check_all"></th>
                <th>{{trans('label.title')}}</th>
                <th class="text-right">{{trans('label.view')}}</th>
                <th class="text-right">{{trans('label.active')}}</th>
                {{--<th>{{trans('label.created_at')}}</th>--}}
                <th></th>
            </tr>
            <tbody id="table">
            @foreach($data as $row)
                <tr>
                    <td><input type="checkbox" class="check" value="{{$row->Ma_chuyen_nganh}}"></td>
                    <td>{{$row->Ma_chuyen_nganh}}</td>
                    <td>{{$row->Chuyen_nganh}}</td>
                    <td>{{$row->ID_nganh}}</td>
                    {{--<td class="text-right">@include('_basic.includes.is.active')</td>--}}
                    {{--<td>{{$row->created_at}}</td>--}}
                    <td class="text-right"><a class="btn btn-sm btn-default" href="{{route('news.update', $row->ID_chuyen_nganh)}}"><span class="glyphicon glyphicon-edit"> </span>Sửa</a></td>
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