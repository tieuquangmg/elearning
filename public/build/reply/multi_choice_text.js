/**
 * Created by FightLightDiamond on 5/10/2016.
 */
var index = 1;

$(document).on('click', '.add_reply_multi_choice_text', function () {
    var flag = $(this).next('input').val();
    var html =
        '<li class="list-group-item">'+
            '<div class="input-group input-group-sm">'+
                '<span class="input-group-addon btn btn-default"><input type="radio" name="answer'+flag+'"></span>'+
                    '<input type="text" name="reply'+flag+'[]" class="form-control">'+
                '<span class="remove_reply_multi_choice_text input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>'+
            '</div>'+
        '</li>';
    $(this).parent().parent().append(html);
    setAnswer(flag);
});

$(document).on('click', '.remove_reply_multi_choice_text', function () {
    $(this).parent().parent().remove();
    var name = $(this).prev('input').attr('name');
    setAnswer(name[5]);
});

$(document).on('click', '.close_multi_choice_text', function () {
    $(this).parent().parent().parent().remove();
});

$(document).on('click', '#add_panel_multi_choice_text', function () {
    ++index;
    var html =
        '<div class="panel panel-default">'+
            '<div class="panel-heading" role="tab" id="headingOne">'+
                '<h4 class="panel-title">'+
                    '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">'+
                    'Blank'+
                    '</a>'+
                    '<button type="button" class="close_multi_choice_text close"><span aria-hidden="true">&times;</span></button>'+
                '</h4>'+
            '</div>'+
            '<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">'+
                '<div class="panel-body">'+
                    '<ul class="list-group content_item">'+
                        '<li class="list-group-item text-right">'+
                            '<a class="btn btn-default btn-sm add_reply_multi_choice_text"><span class="glyphicon glyphicon-plus-sign"></span></a>'+
                            '<input type="hidden" name="flag[]" value="'+index+'">'+
                        '</li>'+
                        '<li class="list-group-item">'+
                            '<div class="input-group input-group-sm">'+
                                '<span class="input-group-addon btn btn-default"><input checked name="answer'+index+'" type="radio"></span>'+
                                '<input name="reply'+index+'[]"  type="text" checked class="form-control">'+
                                '<span class="remove_reply_multi_choice_text input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>'+
                            '</div>'+
                        '</li>'+
                    '</ul>'+
                '</div>'+
            '</div>'+
        '</div>';
    $('#accordion').append(html);
});

function setAnswer(flag){
    var i = 0;
    $('input[name="answer'+flag+'"').each(function () {
        $(this).val(i++);
    })
}