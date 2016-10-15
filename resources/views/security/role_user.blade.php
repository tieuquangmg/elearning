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
                    <table class="table">
                        <tr>
                            <th><input type="checkbox" id="check_all"></th>
                            <th>Tên</th>
                            <th>Họ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <td class="text-right">
                                <a data-target="#roleModal" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-cogs"></i></a>
                                <a class="btn btn-xs btn-primary userFilter"><i class="fa fa-filter"></i></a>
                            </td>
                        </tr>
                        <tr class="inputFilter hidden">
                            <th></th>
                            <th><input type="text" class="form-control"></th>
                            <th><input type="text" class="form-control"></th>
                            <th><input type="text" class="form-control"></th>
                            <th><input type="text" class="form-control"></th>
                            <th>
                                <select name="roleFilter" id="roleFilter" class="form-control">
                                    <option value=""></option>
                                </select>
                            </th>
                            <th><input type="submit" class="btn btn-success" value="Tìm kiếm"></th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td><input type="checkbox" class="check" name="userIds[]" value="{{$user->id}}"></td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>
                                @foreach($user->roles as $value)
                                    {{$value->name}} |
                                @endforeach
                            </td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-default setRole" data={{$user->id}} >
                                    <i class="fa fa-cog"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="text-center">
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

        $('.setRole').click(function () {
            var user_id = $(this).attr('data');
            $.ajax({
                url: '{{route('role.modal')}}',
                method: 'GET',
                data: {user_id: user_id},
                success: function (data) {
                    $('#setRole').html(data);
                    $('#userModal').modal('show');
                },
                error:function () {
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
        })
    </script>
@endsection
@section('head')

@endsection