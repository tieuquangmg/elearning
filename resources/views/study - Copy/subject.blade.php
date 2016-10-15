@extends('study._layout.outline')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="error-notice">
        <div class="oaerror info">
            <h3 class="text-primary">Danh sách bài học</h3>
            <p class="text-right">
                <small><strong>Lớp: </strong> : {{$class->name}}  - <strong>Môn: </strong> : {{$class->subject->name}} - <strong>Giáo viên</strong> : {{$class->teacher->last_name}}</small>
            </p>
        </div>
    </div>
    <div class="qa-message-list" id="wallmessages">
        @foreach($class->subject->unit as $row)
        <div class="message-item" id="m16">
            <div class="message-inner">
                <div class="message-head clearfix">
                    <div class="avatar pull-left">
                        <a href="./index.php?qa=user&amp;qa_1=Oleg+Kolesnichenko">
                            @if($row->image=='')
                            <img class="img_list" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                @else
                                <img class="img_list" src="{{asset($row->image)}}">
                            @endif
                        </a>
                    </div>
                    <div class="user-detail">
                        <a href="{{route('study.unit', $row->id)}}"><h5 class="handle">{{$row->name}}</h5></a>
                        <div class="post-meta">
                            <div class="asker-meta">
                                <span class="qa-message-what"></span>
                                <span class="qa-message-when">
                                    <span class="qa-message-when-data">Jan 21</span>
                                </span>
                                <span class="qa-message-who">
                                    <span class="qa-message-who-pad">tạo bởi </span>
                                    <span class="qa-message-who-data"><a href="./index.php?qa=user&amp;qa_1=Oleg+Kolesnichenko">Thầy Nguyễn Khánh Tùng</a></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-justify">
                        {{$row->description}}
                    </p>
                </div>
                <div class="qa-message-content text-right">
                    <a href="{{route('study.unit', $row->id)}}"><i class="fa fa-pencil"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection