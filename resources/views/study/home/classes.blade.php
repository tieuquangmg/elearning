<div class="list-group">
    <li class="text-center list-group-item"><h2>Các lớp<b class="blue-xin">Đang học</b></h2></li>
    @foreach($class = \App\Modules\Organize\Models\Classes::paginate(4) as $row)
        <a href="#" class="list-group-item">
            <div class="media col-md-3">
                <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive" src="{{asset('')}}{{$row->image}}">
                </figure>
            </div>
            <div class="col-md-6">

                <h4>{{($row->name)}} ({{strtoupper($row->code)}})<i class="fa fa-link"></i></h4>

                <span class="label label-primary">
                                     <strong>Giáo viên</strong>: {{$row->teacher->first_name}} {{$row->teacher->last_name}}
                                </span>
                <br>
                <span class="label label-info">
                                    <strong>Ngày học</strong>: {{$row->start_date}}
                                </span>
                <br>
                <span class="label label-success">
                                     <strong>Môn học</strong>: {{$row->subject->name}}
                                </span>
            </div>
            <div class="col-md-3 text-center">
                <h2> 13540
                    <small> votes</small>
                </h2>
                1
                <a href="{{route('study.subject', $row->id)}}" class="btn btn-primary btn-block">Vote Now! </a>
                <div class="stars">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <p> Average 4.1
                    <small> /</small>
                    5
                </p>
            </div>
        </a>
    @endforeach
</div>