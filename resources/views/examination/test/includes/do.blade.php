<div class="art-header">
    <div class="entry-title">
        <h2>{{$test->name}}</h2>
    </div>
</div>
<form method="post" action="{{route('frontend.Edu.test.did')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $test->id }}">
    <?php $number=0;?>
    @foreach($questions as $row)
        <div class="row">
            <div class="col-lg-1"># {{++$number}}</div>
            <div class="col-lg-9 well">
                <p><strong>Question: </strong>{{$row->question}}</p>
                @for($i=1; $i<=3;$i++)
                    <?php $k = 'reply'.$i;?>
                    <div class="col-lg-4">
                        <div class="input-group">
                            <input type="radio" @if(isset($result)&&$row->$k==$row->answer &&$result[$number]) checked @endif name="answer{{$row->id}}" required="" value="{{$row->$k}}">
                            {{$row->$k}}
                        </div>
                    </div>
                @endfor
            </div>
            @if(isset($result))
                @if($result[$number])
                    <div class="col-lg-2"><br><span style="color:green" class="glyphicon glyphicon-ok"></span> {{$row->answer}}</div>
                @else
                    <div class="col-lg-2"><br><span style="color:red" class="glyphicon glyphicon-remove"></span></div>
                @endif
            @endif
        </div>
    @endforeach
    <button class="btn btn-default btn-block form-group">Submit</button>
</form>