@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><span class=" glyphicon glyphicon-home"></span></a></li>
        <li><a>Phân vai trò cho người dùng</a></li>
    </ol>
    @if(count($users))
        <form action="" id="roleFrom">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            @include('security._modal.setListRole')
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group-sm col-xs-1">
                        <label class="form-label">Hiển thị</label>
                        <select id="f_select_number" name="number" class="form-control" title="ban ghi">
                            <option value="10">10</option>
                            <option value="30">30</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="f_check_all" title="chon tat ca"></th>
                            <th><span data="ho_ten" sort="asc" class="glyphicon glyphicon-sort">Họ Tên</span></th>
                            <th><span data="code" sort="asc" class="glyphicon gglyphicon-sort">Mã sinh viên</span></th>
                            <th><span class="glyphicon glyphicon-sort">Lớp</span></th>
                            <th><span class="glyphicon glyphicon-sort">Vai trò</span></th>
                            <td class="text-right">
                                <a data-target="#roleModal" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-cogs"></i></a>
                                <a class="btn btn-xs btn-primary userFilter"><i class="fa fa-filter"></i></a>
                            </td>
                        </tr>
                        <tr class="inputFilter hidden">
                            <th></th>
                            <th><input id="ho_ten" type="text" class="form-control"></th>
                            <th><input id="code" type="text" class="form-control"></th>
                            <th><input id="id_lop" type="text" class="form-control"></th>
                            <th>
                                <select name="roleFilter" id="roleFilter" class="form-control">
                                    <option value=""></option>
                                </select>
                            </th>
                            <th><input id="filter" class="btn btn-success" value="Tìm kiếm"></th>
                        </tr>
                        </thead>
                        <tbody id="f_content_table">
                        @include('security._includes.role_user_table')
                        </tbody>
                    </table>
                    <div id="f_pagination_url" class="text-center">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </form>
        @include('security._modal.setRole')
    @else
        <div class="alert alert-info"> Dữ liệu trống</div>
    @endif
@endsection
@section('bot')
    <script src="{{asset('')}}build/style/js/check_all.js"></script>
    <script>
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $('#role_check_all').click(function(){
            if($(this).is(':checked')){
                $('.role_check').prop('checked', true);
            }else $('.role_check').prop('checked', false);
        });

        $(document).on('click', '#_role_check_all', function () {
            if($(this).is(':checked')){
                $('._role_check').prop('checked', true);
            }else $('._role_check').prop('checked', false);
        });

        $('.userFilter').click(function () {
            $('.inputFilter').toggleClass('hidden')
        });
        $('#set_multi_role_user').click(function () {
            var checkUser = $('.check:checked').length;
            if(checkUser){
                var data = $('#roleFrom').serialize();
                $.ajax({
                    url: '{{route('user.assign')}}',
                    method:'POST',
                    data: data,
                    success:function (e) {
                        alert('Phân vai trò thành công');
                        $('#roleModal').modal('hide');
                    },
                    error:function () {
                        alert('error');
                    }
                });
            }else{
                alert("Vui lòng chọn người dùng để thực hiện gán vai trò");
            }
        });

        $(document).on('click','.setRole',function () {
            var user_id = $(this).attr('data');
            $.ajax({
                url: '{{route('role.modal')}}',
                method: 'GET',
                data: {user_id: user_id},
                success: function (data) {
                    $('#setRole').html(data);
                    $('#userModal').modal('show');
                },
                error:function (){
                    alert('error');
                }
            });
        });

        $('#set_role_user').click(function () {
            var data = $('#formSetSingleRole').serialize();
            console.log(data);
            $.ajax({
                url: '{{route('user.assign')}}',
                method:'POST',
                data: data,
                success:function (e) {

                    alert('Phân vai trò thành công');
                    $('#userModal').modal('hide');
                },
                error:function () {
                    alert('error');
                }
            });
        });


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
            var search = {
                hoten: $('#ho_ten').val(),
                code: $('#code').val(),
                id_lop: $('#id_lop').val()
            };
            var  order = null;
            var  sort = 'ASC';
            var number = $(this).val();
            alert(number);
            getPages(1,number,order,sort,search)
        });

        $('#filter').click(function (event) {
            var search = {
                hoten: $('#ho_ten').val(),
                code: $('#code').val(),
                id_lop: $('#id_lop').val()
            };
            var  order = null;
            var  sort = 'ASC';
            var number = $('#f_select_number').val();
            getPages(1,number,order,sort, search)
        });
        $('table th .glyphicon-sort').click(function(){
            var order = $(this).attr('data');
            var sort = $(this).attr('sort');
            if(sort == 'asc') sort = 'desc'; else sort = 'asc';
            var search = {
                hoten: $('#ho_ten').val(),
                code: $('#code').val(),
                id_lop: $('#id_lop').val()
            };
            var  number = 10;
            getPages(1,number,order,sort,search);
        });
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var search = {
                hoten: $('#ho_ten').val(),
                code: $('#code').val(),
                id_lop: $('#id_lop').val()
            };
            var order = null;
            var sort = 'ASC';
            var number = $('#f_select_number').val();
            getPages(page, number, order, sort, search);
            location.hash = page;
        });
        function getPages(page,number,order,sort,search){
            var url ='{{route('role.user')}}?page='+page;
            console.log(url);
            $.ajax({
                url: url,
                data:{number,order:order,sort:sort,search:search},
                beforeSend:function (){
                  $('.loading').show();
                },
                success:function(data){
                    console.log(data);
                    $('#f_content_table').html(data.table);
                    $('#f_pagination_url').html(data.url);
                    $('#f_check_all').prop('checked', false);
                    $('.loading').hide();
                },
                error: function(err){
                    $('.loading').hide();
                    alertError(err)
                }
            }).done(function(){
                location.hash = page;
            });
        }
    </script>
@endsection
@section('head')

@endsection