<table class="table">
    <tr>
        <th><input type="checkbox" id="check_all"></th>
        <th>Họ Tên</th>
        <th>Lớp</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>SĐT</th>
        <th>
            <a class="btn btn-primary btn-xs"><i class="fa fa-filter"></i></a>
        </th>
    </tr>
    <tr>
        <th></th>
        <th><input type="text" class="form-control input-sm " id="f_first_name" name="first_name" value="{{@$filter['first_name']}}" ></th>
        <th><input type="text" class="form-control input-sm " id="f_last_name" name="last_name" value="{{@$filter['last_name']}}"></th>
        <th><input type="text" class="form-control input-sm " id="f_code" name="code" value="{{@$filter['code']}}"></th>
        <th><input type="text" class="form-control input-sm " id="f_email" name="email" value="{{@$filter['email']}}"></th>
        <th><input type="text" class="form-control input-sm " id="f_phone_number" name="phone_number" value="{{@$filter['phone_number']}}"> </th>
        <th><span class="btn btn-success btn-sm" id="filter"><i class="fa fa-refresh"></i></span></th>
    </tr>
    @if($students != null)
    @foreach($students as $row)
        <tr>
            <td><input type="checkbox" class="check" value="{{$row->id}}"></td>
            <td>{{$row->ho_ten}}</td>
            <td>{{$row->id_lop}}</td>
            <td>{{$row->code}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phone_number}}</td>
            <td><a class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a></td>
        </tr>
    @endforeach
        @else
        <tr>
            <td colspan="7" class="text-center"><h4>Không có dữ liệu</h4></td>
        </tr>
    @endif
</table>
<div class="text-center">
    {!! $students->links() !!}
</div>