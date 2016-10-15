/**
 * Created by FightLightDiamond on 5/10/2016.
 */
$(document).on('click', '#add_reply_matching', function () {
    var html =  '<tr class="text-center">'+
                    '<td>'+
                        '<div class="input-group input-group-sm">'+
                            '<input type="text" name="premise[]" class="form-control">'+
                            '<span class="input-group-addon btn btn-default"><span class="glyphicon glyphicon-picture"></span></span>'+
                        '</div>'+
                    '</td>'+
                    '<td>'+
                        '<div class="input-group input-group-sm">'+
                        '<input type="text" name="response[]" class="form-control">'+
                        '<span class="input-group-addon btn btn-default"><span class="glyphicon glyphicon-picture"></span></span>'+
                        '</div>'+
                    '</td>'+
                    '<td>'+
                        '<a class="btn btn-danger btn-sm glyphicon glyphicon-remove remove_reply_matching"></a>'+
                    '</td>'+
                '</tr>';
    $('#table_content').append(html);
});
$(document).on('click', '.remove_reply_matching', function () {
    $(this).parent().parent().remove();
});