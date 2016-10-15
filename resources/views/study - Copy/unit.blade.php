@extends('study._layout.outline')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="error-notice">
        <div class="oaerror info">
            <strong>Bài học</strong> : {{$unit->name}}  - <strong>Môn học</strong> : {{$unit->subject->name}}
        </div>
    </div>
    <div class="md-notifications">
    </div>
    @if($permission)
    <ul class="timeline">
        <li>
            <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><span class="fa fa-book"></span> Bài học</h4>
                </div>
                <div class="timeline-body">
                    <ul class="list-group">
                    @foreach($unit->theory as $row)
                    <li class="list-group-item">
                        <a href="{{route('study.theory', $row->id)}}" style="text-decoration: none; color: black"><i class="fa fa-link"></i>
                            {{$row->name}}</a><small class="text-muted pull-right"><i class="glyphicon glyphicon-time"></i>
                            @if($row->user_theory->first()->watch_time == 0)
                                <i class="glyphicon glyphicon-ok"></i>
                            @else
                                {{$row->user_theory->first()->watch_time/1000/60}} phút còn lại
                                @endif
                        </small></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge danger"><i class="fa fa-download"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><span class="fa fa-cloud-download"></span> Tài liệu</h4>
                </div>
                <div class="timeline-body">
                    <ul class="list-group">
                    @foreach($unit->document as $row)
                    <li class="list-group-item"><a download href="{{asset($row->path)}}">{{$row->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge info"><a href="{{route('study.unit.test', $unit->id)}}"><i class="fa fa-pencil"></i></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title"><i class="fa fa-check-square"></i> Bài kiểm tra</h4>
                </div>
                <div class="timeline-body">
                    <ul class="list-group">
                        @foreach($a = \App\Modules\Examination\Models\UnitTest::where('unit_id', $unit->id)->where('user_id', auth()->user()->id)->get() as $row)
                        <li class="list-group-item">
                            <span class="badge">{{$row->score.'/40'}}</span>
                            <i class="fa fa-clock-o"></i> <a href="{{route('study.tested', $unit->id)}}">{{$row->created_at}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </li>
    </ul>
    @else
    <div class="alert alert-danger">
        <strong>Chú ý: </strong>Bạn chưa hoàn thành bài trước
    </div>
    @endif
@endsection