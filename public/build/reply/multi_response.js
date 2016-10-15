/**
 * Created by FightLightDiamond on 5/10/2016.
 */
$(document).on('click', '#add_reply_multi_response', function () {

    var html = '<tr class="text-center">'+
        '<td ><input type="checkbox" name="answer[]"></td>'+
        '<td><input name="reply[]" type="text" class="form-control input-sm"></td>'+
        '<td >'+
        '<div class="btn-group" role="group" aria-label="...">'+
        '<a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-film"></span></a>'+
        '<a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-picture"></span></a>'+
        '<a class="btn btn-default btn-sm"><span class="glyphicon glyphicon-volume-up"></span></a>'+
        '</div>'+
        '</td>'+
        '<td ><a class="btn btn-default btn-sm remove_reply_multi_response"><span class="glyphicon glyphicon-remove"></span></a></td>'+
        '</tr>';
    $('#table_content').append(html);
    setAnswerArray();
});
$(document).on('click', '.remove_reply_multi_response', function () {
    $(this).parent().parent().remove();
    setAnswerArray();
});

function setAnswerArray() {
    var i =0;
    $('input[name="answer[]"]').each(function () {
        $(this).val(i++);
    });
}