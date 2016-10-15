<div class="text-right">
    <a class="btn btn-primary" id="add_panel_fill_in_blank"><span class=" glyphicon glyphicon-plus"></span></a>
</div>
<label>Acceptable answers</label>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Blank
                </a>
                <button type="button" class="close close_fill_in_blank"><span aria-hidden="true">&times;</span></button>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <ul class="list-group content_item">
                    <li class="list-group-item text-right">
                        <a class="btn btn-default btn-sm add_reply_fill_in_blank"><span class="glyphicon glyphicon-plus-sign"></span></a>
                        <input type="hidden" name="flag[]" value="1">
                    </li>
                @for($i=0; $i<3; $i++)
                    <li class="list-group-item">
                        <div class="input-group input-group-sm" >
                            <input type="text" name="reply1[]" class="form-control">
                            <span class="remove_reply_fill_in_blank input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </li>
                @endfor
                </ul>

            </div>
        </div>
    </div>
</div>
@include('exercise.reply.score')
