<span class="fa fa-clock-o fa-3x"></span>
@foreach($mini_test ->question as $row)
    <div class="alert alert-info">
        {{$row->question}}
    </div>
    <li class="list-group-item">
        @include('exercise.review.'.$row->type)
    </li>
    <hr>
@endforeach