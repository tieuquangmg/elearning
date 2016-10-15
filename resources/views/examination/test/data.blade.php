@extends('_basic.master')

@section('modal')
    @include($prefix.'test.create')
    @include($prefix.'test.update')
@endsection

@section('breadcrumb')

@endsection
@section('data')
    <div class="well" >
        <div class="col-md-4">
            <select name="" id="course" class="form-control">
                <option value="">{{trans('table.course')}}</option>

            </select>
        </div>
        <div class="col-md-4">
            <select name="" id="unit" class="form-control">
                <option value="">Unit</option>
            </select>
        </div>
        <div class="col-md-4">
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <th class="text-center"> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Create</a></th>
                </li>
                <li><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th style="width: 5%">
                    <input type="checkbox" id="check-all" class="flat">
                </th>
                <th class="column-title">Test Name </th>
                <th class="column-title" style="width: 10%">Status </th>
                <th class="column-title" style="width: 10%">Edit </th>
                <th class="column-title no-link last" style="width: 10%"><span class="nobr">Add question</span>
                </th>
                <th class="column-title no-link last" style="width: 10%"><span class="nobr">Review</span>
                <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class=" glyphicon glyphicon-chevron-down"></i></a>
                </th>
            </tr>
            </thead>

            <tbody>
            @foreach($tests as $row)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" value="{{$row->id}}" name="table_records">
                    </td>
                    <td class=" ">{{$row->name}}</td>
                    <td class=" "><a class="btn btn-success btn-xs"><span class=" glyphicon glyphicon-flag"></span></a></td>
                    <td class=" last"><a class="btn btn-default btn-xs"><span class=" glyphicon glyphicon-edit"></span></a>
                    <td class=" last"><a href="{{route('test.question', 1)}}" class="btn btn-info btn-xs"><span class=" glyphicon glyphicon-question-circle"></span></a>
                    <td class=" last"><a class="btn btn-primary btn-xs" href="{{route('test_details.index')}}"><span class=" glyphicon glyphicon-folder-open"></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('bot')
    <script>
        function update(id) {
            $.ajax({
                url: "{{asset('')}}find_unit/"+id,
                method: 'GET',
                type: 'JSON',
                success: function (data) {
                    console.log(data)
                    $('#name').val(data.name);
                }
            });
        }
        var course = $('#course');
        var unit = $('#unit');

        course.change(function(){
            $('#add_question').attr('disabled', '');
            var course_id = $(this).val();

            if(course_id!=''){
                $.ajax({
                    {{--url: "{{route('unit.option')}}",--}}
                    method: 'GET',
                    data: {course_id: course_id},
                    success: function (data) {
                        unit.html('');
                        unit.append(data);
                    },
                    error: function () {

                    }
                });
            }
        });
    </script>
@endsection