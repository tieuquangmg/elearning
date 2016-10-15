/**
 * Created by FightLightDiamond on 5/10/2016.
 */
var index = 1;
$(document).on('click', '.add_reply_fill_in_blank', function () {
    var flag = $(this).next('input').val();
    var html =
        '<li class="list-group-item">'+
            '<div class="input-group input-group-sm">'+
                '<input type="text" name="reply'+flag+'[]" class="form-control">'+
                '<span class="remove_reply_fill_in_blank input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>'+
            '</div>'+
        '</li>';
    $(this).parent().parent().append(html);
    setAnswer(flag);
});
$(document).on('click', '.remove_reply_fill_in_blank', function () {
    var name = $(this).prev('input').attr('name');
    $(this).parent().remove();
    setAnswer(name[5]);
});
$(document).on('click', '.close_fill_in_blank', function () {
    $(this).parent().parent().parent().remove();
});
$(document).on('click', '#add_panel_fill_in_blank', function () {
    index++;
    var html =
        '<div class="panel panel-default">'+
            '<div class="panel-heading" role="tab" id="headingOne">'+
                '<h4 class="panel-title">'+
                    '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">'+
                        'Blank'+
                    '</a>'+

            
                    '<button type="button" class="close close_fill_in_blank"><span aria-hidden="true">&times;</span></button>'+

            
                '</h4>'+
            '</div>'+
            '<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">'+
                '<div class="panel-body">'+
            

                    '<ul class="list-group content_item">'+
                        '<li class="list-group-item text-right">'+
                            '<a class="btn btn-sm btn-default add_reply_fill_in_blank"><span class="glyphicon glyphicon-plus-sign"></span></a>'+
                            '<input type="hidden" name="flag[]" value="'+index+'">'+
                        '</li>'+
                        '<li class="list-group-item">'+
                            '<div class="input-group input-group-sm">'+
                                '<input type="text" name="reply'+index+'[]" class="form-control">'+
                                '<span class="remove_reply_fill_in_blank input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>'+
                            '</div>'+
                        '</li>'+
                    '</ul>'+


                '</div>'+
            '</div>'+
        '</div>';
    $('#accordion').append(html);
});