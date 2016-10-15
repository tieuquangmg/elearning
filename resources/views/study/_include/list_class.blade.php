<div class="row">
    <div class="col-lg-12">
        <div class="timeline-centered">
            @foreach($classes as $row)
{{--<<<<<<< HEAD--}}
                {{--<article class="timeline-entry">--}}
                    {{--<div class="timeline-entry-inner">--}}
                        {{--<div class="timeline-icon bg-success">--}}
                            {{--<i class="entypo-feather"></i>--}}
                        {{--</div>--}}
                        {{--<div class="timeline-label">--}}
                            {{--<h2><a href="{{route('study.subject', $row->id)}}">{{($row->name)}}</a> <span>({{strtoupper($row->code)}})</span></h2>--}}
                            {{--<p >--}}
                                {{--<strong>Giáo viên</strong>: {{$row->teacher->first_name}} {{$row->teacher->last_name}}--}}
                                {{--<strong>Ngày học</strong>: {{$row->start_date}}--}}
                                {{--<strong>Môn học</strong>: {{$row->subject->name}}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--@endforeach--}}
            {{--<article class="timeline-entry">--}}
                {{--<div class="timeline-entry-inner">--}}
                    {{--<div class="timeline-icon bg-success">--}}
                        {{--<i class="entypo-feather"></i>--}}
                    {{--</div>--}}
                    {{--<div class="timeline-label">--}}
                        {{--{!! $classes->links() !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
            {{--<article class="timeline-entry begin">--}}
                {{--<div class="timeline-entry-inner">--}}
                    {{--<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">--}}
                        {{--<i class="entypo-flight"></i> +--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
        {{--</div>--}}

                    <a href="{{route('study.subject', $row->id)}}" class="list-group-item">
                        <h3><strong>{{($row->name)}} ({{strtoupper($row->code)}})</strong> <i class="fa fa-link"></i></h3>
                        <p >
                            <span class="label label-primary " style="padding: 10px">
                                 <strong>Giáo viên</strong>: {{$row->teacher->first_name}} {{$row->teacher->last_name}}
                            </span>

                                    <span class="label label-info" style="padding: 10px">
                                <strong>Ngày học</strong>: {{$row->start_date}}
                            </span>

                                    <span class="label label-success" style="padding: 10px">
                                 <strong>Môn học</strong>: {{$row->subject->name}}
                            </span>
                        </p>
                    </a>
                    <hr>
                @endforeach
                {{--<div class="text-center">--}}
                    {{--{!! $classes->links() !!}--}}
                {{--</div>--}}
            </div>
    </div>

</div>
