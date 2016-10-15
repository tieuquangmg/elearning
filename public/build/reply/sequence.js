/**
 * Created by FightLightDiamond on 5/10/2016.
 */

$(document).ready(function(){
    if($('.sortable').length>0){
        $('.sortable').sortable({
            revert: true,
            stop: function() {
            }
        });
    }  
});

$(document).on('mouseover', '.input-group-addon', function () {
    $('.sortable').sortable({
        revert: true,
        stop: function() {
        }
    });
});

$(document).on('click', '#add_reply_sequence', function () {

    var html =  '<li class="ui-state-highlight">'+
        '<div class="input-group" style="padding-top: 5px">'+
        '<span  class="input-group-addon"></span>'+
        '<input type="text" name="reply[]" class="form-control">'+
        '<span class="input-group-addon remove_reply_sequence"><span class="glyphicon glyphicon-remove"></span></span>'+
        '</div>'+
        '</li>';
    $('.sortable').append(html);

});
$(document).on('click', '.remove_reply_sequence', function () {
    $(this).parent().parent().remove();
});