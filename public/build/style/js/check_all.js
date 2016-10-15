/**
 * Created by diamond on 6/27/16.
 */


$(document).on('click','#check_all',function(){
    if($(this).is(':checked')){
        $('.check').prop('checked', true);
    }else $('.check').prop('checked', false);
});
$(document).on('click','#check_all_unenroll',function(){
    if($(this).is(':checked')){
        $('.unenroll').prop('checked', true);
    }else $('.unenroll').prop('checked', false);
});
