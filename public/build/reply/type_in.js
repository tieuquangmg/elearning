/**
 * Created by FightLightDiamond on 5/10/2016.
 */

$(document).on('click', '.add_reply_type_in', function () {
    var html =
        '<li class="list-group-item">'+
            '<div class="input-group  input-group-sm" >'+
                '<input type="text" name="reply[]" class="form-control">'+
                '<span class="remove_reply_type_in input-group-addon btn btn-default"><span class="glyphicon glyphicon-remove"></span></span>'+
            '</div>'+
        '</li>';
    $(this).parent().parent().append(html);
});
$(document).on('click', '.remove_reply_type_in', function () {
    $(this).parent().parent().remove();
});