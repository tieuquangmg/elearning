/**
 * Created by FightLightDiamond on 5/10/2016.
 */
$(document).on('click', '#add_reply_word_blank', function () {
    var html =  '<tr class="text-center">'+
        '<td>'+
        '<input type="text" name="premise" class="form-control input-sm">'+
        '</td>'+
        '<td>'+
        '<input type="text" name="response" class="form-control input-sm">'+
        '</td>'+
        '<td>'+
        '<input type="text" name="response" class="form-control input-sm">'+
        '</td>'+
        '<td>'+
        '<a class="btn btn-sm btn-danger remove_reply_word_blank"><span class="glyphicon glyphicon-remove"></span></a>'+
        '</td>'+
        '</tr>';
    $('#table_content').append(html);
});
$(document).on('click', '.remove_reply_word_blank', function () {
    $(this).parent().parent().remove();
});