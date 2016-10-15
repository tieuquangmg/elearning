<div class="row">
    <div class="col-md-10">
        <div class="form-group">
            <label>Question Style</label>
            <select name="type" id="exercise" class="form-control">
                <option value="no-data">Select style</option>
                @foreach($exercise as $value)
                    <option value="{{$value}}">{{trans('table.'.$value)}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">&nbsp;</label>
            <button class="btn btn-default btn-block" id="push"><span class="glyphicon glyphicon-pushpin"></span> Push</button>
        </div>
    </div>
</div>
<input type="hidden" name="mini_test_id" value="{{$mini_test->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group" >
    <label>Question</label>
    <textarea class="form-control" name="question" placeholder="Question"></textarea>
</div>
<div id="change_ex">

</div>

@section('subHead')
    <link rel="stylesheet" href="{{asset('')}}build/style/css/order-ui.css">
@endsection

@section('subBot')
    <script type="text/javascript" src="{{asset('')}}build/jquery-ui/js/jquery-ui.min.js"></script>
    @foreach($exercise as $value)
        <script type="text/javascript" src="{{asset('')}}build/reply/{{$value}}.js"></script>
    @endforeach
    <script>
        $(document).ready(function(){
            $('#exercise').change(function () {
                var ex = $(this).val();
                $.ajax({
                    url: '{{route('ex.reply.type')}}',
                    method: "GET",
                    data: {
                        ex: ex
                    },
                    success: function (data) {
                        $('#change_ex').html(data)
                    },
                    error: function () {
                        alert('error')
                    }
                })
            });
        });
    </script>
@endsection