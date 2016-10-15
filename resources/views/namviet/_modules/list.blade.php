<div class="container">
    <div class="row">
        <div class="well">
            <h1 class="text-center">Vote for your favorite</h1>
            <div class="list-group">
                @foreach(\App\Modules\Subject\Models\Subject::limit(1)->get() as $row)
                <a href="#" class="list-group-item">
                    <div class="media col-md-3">
                        <figure class="pull-left">
                            <img class="media-object img-rounded img-responsive" src="{{asset('')}}{{$row->image}}">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h4 class="list-group-item-heading"> {{$row->name}} </h4>
                        <p class="list-group-item-text"> {{$row->description}} </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h2> 13540 <small> votes </small></h2>
                        <button type="button" class="btn btn-primary btn-lg btn-block">Vote Now!</button>
                        <div class="stars">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </div>
                        <p> Average 4.1 <small> / </small> 5 </p>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
</div>