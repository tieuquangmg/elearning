<div class="row">
    {{--@foreach($courses as $row)--}}
        {{--<div class="col-sm-6 col-md-4 ">--}}
            {{--<div class="thumbnail text-center">--}}
                {{--<img class="img-responsive" src="{{asset($row->picture)}}" alt="...">--}}
                {{--<div class="caption">--}}
                    {{--<h4>{{$row->name}}</h4>--}}
                    {{--<p>Học phí: {{number_format($row->price)}} Đ</p>--}}
                    {{--<p>Giảm giá chỉ còn : {{number_format($row->promotion)}} Đ</p>--}}
                    {{--<p>--}}
                        {{--<a href="{{route('cart.add', $row->id)}}" class="btn btn-sm btn-primary" role="button"><span class="glyphicon glyphicon-bookmark"></span> Đăng ký </a>--}}
                        {{--<a href="#courseDetailModal" data-toggle="modal" class="btn btn-sm btn-default" role="button"><span class="glyphicon glyphicon-link"></span> Chi tiết </a>--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}
</div>
<div class="text-center">
    {{--{!! $courses->links() !!}--}}
</div>
