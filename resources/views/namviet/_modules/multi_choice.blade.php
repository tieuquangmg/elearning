<div class="container well" >
    <div class="col-md-6">
        @foreach(\App\Modules\Subject\Models\QuestionBank::limit(1)->get() as $row)
        <h4>{{$row->question}}</h4>
        <div class="funkyradio">

            <div class="funkyradio-primary">
                <input type="radio" name="radio" id="r1adio{{$row->id}}"/>
                <label for="r1adio{{$row->id}}">{{$row->reply1}}</label>
            </div>
             <div class="funkyradio-primary">
                <input type="radio" name="radio" id="r2adio{{$row->id}}"/>
                <label for="r2adio{{$row->id}}">{{$row->reply2}}</label>
            </div>
             <div class="funkyradio-primary">
                <input type="radio" name="radio" id="r3adio{{$row->id}}"/>
                <label for="r3adio{{$row->id}}">{{$row->reply3}}</label>
            </div>
             <div class="funkyradio-primary">
                <input type="radio" name="radio" id="r4adio{{$row->id}}"/>
                <label for="r4adio{{$row->id}}">{{$row->reply4}}</label>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <h4>Checkbox Buttons</h4>

        <div class="funkyradio">
            <div class="funkyradio-default">
                <input type="checkbox" name="checkbox" id="checkbox1" checked/>
                <label for="checkbox1">First Option default</label>
            </div>
            <div class="funkyradio-primary">
                <input type="checkbox" name="checkbox" id="checkbox2" checked/>
                <label for="checkbox2">Second Option primary</label>
            </div>
            <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox3" checked/>
                <label for="checkbox3">Third Option success</label>
            </div>
            <div class="funkyradio-danger">
                <input type="checkbox" name="checkbox" id="checkbox4" checked/>
                <label for="checkbox4">Fourth Option danger</label>
            </div>
            <div class="funkyradio-warning">
                <input type="checkbox" name="checkbox" id="checkbox5" checked/>
                <label for="checkbox5">Fifth Option warning</label>
            </div>
            <div class="funkyradio-info">
                <input type="checkbox" name="checkbox" id="checkbox6" checked/>
                <label for="checkbox6">Sixth Option info</label>
            </div>
        </div>
    </div>
</div>