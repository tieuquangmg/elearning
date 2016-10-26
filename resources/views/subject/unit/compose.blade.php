@extends('_basic.master')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="glyphicon glyphicon-home"></i></a></li>
        <li><a href="#">Môn học</a></li>
        <li><a href="#">Nội dung</a></li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="pull-left h4">
                    <i class="glyphicon glyphicon-dashboard"></i>
                    Nội dung bài học
                </div>
                <div class="pull-right">
                    <a class="btn btn-danger" href="#">Quay lại</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4">
                                    Bài học
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{route('theory.add', $unit->id)}}" data-toggle="tooltip" data-placement="top" title="Thêm bài học"><i class="glyphicon glyphicon-plus"></i>Thêm bài học</a>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @if($unit->theory)
                                    @foreach($unit->theory as $row)
                                        <li class="list-group-item">
                                            {{$row->name}}
                                            <span class="pull-right">
                                                {{--<a href="" data-toggle="tooltip" data-placement="top" title="Thông báo"><i class="fa fa-bell"></i></a>--}}
                                                <a href="{{route('theory.edit', $row->id)}}" data-toggle="tooltip" data-placement="top" title="Cập nhật"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a href="{{route('theory.delete').'/'.$row->id}}" data-toggle="tooltip" data-placement="top" title="Xóa" class="delete_theory" data="{{$row->id}}"
                                                   onclick="confirm('Bạn muốn xóa ?')"><i class="glyphicon glyphicon-trash "></i></a>
                                            </span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4">
                                    Tài liệu
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success"  data-toggle="modal" data-target="#documentModal" data-placement="top" title="Thêm bài học"><i class="glyphicon glyphicon-plus"
                                                                                                                                                              data-toggle="tooltip"
                                                                                                                                                              data-placement="top"
                                                                                                                                                              title="Thêm tài liệu"></i>Thêm tài liêu</a>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @if($unit->document)
                                    @foreach($unit->document as $row)
                                        <li class="list-group-item">
                                            {{$row->name}}
                                            <span class="pull-right">
                                    <a class="edit_document" data="{{$row->id}}" data-placement="top" title="Cập nhật"
                                       data-toggle="modal" data-target="#documentModal"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="{{route('document.delete', $row->id)}}" data-toggle="tooltip"
                                       data-placement="top" title="Xóa" class="delete_document" data="{{$row->id}}"
                                       onclick="confirm('Bạn muốn xóa tài liệu này')"><i class="glyphicon glyphicon-trash "></i></a>
                                    </span>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4">
                                    Bài kiểm tra
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{route('test.add', $unit->id)}}" data-toggle="tooltip" data-placement="top" title="Thêm bài kiểm tra"><i class="glyphicon glyphicon-plus"></i>Thêm bài kiểm tra</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @if($unit->test)
                                    @foreach($unit->test as $row)
                                        <li class="list-group-item">
                                            {{$row->name}}
                                            <span class="pull-right">
                                    <a href="{{route('test.edit', $row->id)}}" data-toggle="tooltip"
                                       data-placement="top" title="Cập nhật"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="{{route('test.delete').'/'.$row->id}}" data-toggle="tooltip"
                                       data-placement="top" title="Xóa" class="delete_theory" data="{{$row->id}}"
                                       onclick="confirm('Bạn muốn xóa ?')"><i class="glyphicon glyphicon-trash "></i></a>
                                    </span>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4">
                                    Lớp học trực tuyến
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{route('meeting.add', $unit->id)}}" data-toggle="tooltip" data-placement="top" title="Thêm Lớp học trực tuyến">
                                        <i class="glyphicon glyphicon-plus"></i>Thêm</a>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @if($unit->meeting)
                                        <li class="list-group-item">
                                            {{--{{dd($row)}}--}}
                                            {{--{{$row->name}}--}}
                                            <span class="pull-right">
                                    <a href="{{route('meeting.edit', $unit->meeting->id)}}" data-toggle="tooltip"
                                       data-placement="top" title="Cập nhật"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="{{route('meeting.delete').'/'.$unit->meeting->id}}" data-toggle="tooltip"
                                       data-placement="top" title="Xóa" class="delete_theory" data="{{$unit->meeting->id}}"
                                       onclick="confirm('Bạn muốn xóa ?')"><i class="glyphicon glyphicon-trash "></i></a>
                                    </span>
                                        </li>
                                @endif

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="clearfix">
                                <div class="pull-left h4">
                                    Ngân hàng câu hỏi
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{route('question.add', $unit->id)}}" data-toggle="tooltip" data-placement="top" title="Thêm câu hỏi">
                                        <i class="glyphicon glyphicon-plus"></i>Thêm câu hỏi</a>
                                    <a href="" data-toggle="tooltip" data-placement="top" title="Xuất file excel"
                                       class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-export"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Nhập bằng file excel"
                                       class="btn btn-sm btn-primary" id="importQuestionBtn"
                                    ><i class="glyphicon glyphicon-import"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($question as $row)
                                    <li class="list-group-item">{{str_limit(strip_tags($row->question), 125)}}
                                        <span class="pull-right">
                                <a href="{{route('question.edit', $row->id)}}" data-toggle="tooltip"
                                   data-placement="top" title="Cập nhật"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{{route('question.delete').'/'.$row->id}}" data-toggle="tooltip"
                                   data-placement="top" title="Xóa" class="delete_question" data="{{$row->id}}"
                                   onclick=" return confirm('Bạn muốn xóa tài liệu này')"><i
                                            class="glyphicon glyphicon-trash "></i></a>
                            </span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-center">
                                {!! $question->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="importQuestionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm câu hỏi bằng file excel</h4>
                </div>
                <div class="modal-body">
                    <input type="file" name="file">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-close"></i>Đóng
                    </button>
                    <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Thêm</button>
                </div>
            </div>
        </div>
    </div>
    @include('subject.unit.modal.document')
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('')}}_base/time_line/single.css">
@endsection
@section('bot')
    <script>
        $(document).on('ready', function () {
            $(".edit_document").on('click', function () {
                var id = $(this).attr('data');
                $('#update_document').attr('action', '{{route('document.update')}}/' + id);
                $.ajax({
                    url: '{{route("document.find")}}/' + id,
                    success: function (data) {
                        console.log(data);
                        $('#name_document').val(data.name);
                    },
                    error: function () {
                        alert('Error')
                    }
                });
            });
        });
        $('#importQuestionBtn').click(function () {
            $('#importQuestionModal').modal('show');
        })
    </script>
@endsection