/**
 * Created by diamond on 6/27/16.
 */
$('#delete').click(function(){
    if (typeof url_delete != 'undefined') {
        var arrayId = new Array();
        $('.check').each(function(){
            if($(this).is(':checked')){
                id = $(this).val();
                arrayId.push(id);
            }
        });
        if(arrayId.length){
            var del = confirm('Bạn thực sự muốn xóa !');
            if(del){
                support_deletes(arrayId);
            }
        } else alert('Bạn phải check vào mục cần xóa');
        $('#check_all').prop('checked', false);
    }else {
        alert('không xóa được')
    }
});

function support_deletes(arrayId){
    $.ajax({
        url: url_delete,
        type: 'get',
        data: {ids: arrayId},
    success: function(data){
        console.log(data);
        if(data > 0){
            $('.check').each(function(){
                if($(this).is(':checked')){
                    $(this).parent().parent().remove();
                }
            });
        }else {
            alert('co loi');
            //location.reload();
        }
    },
    error: function(err){
        alertError(err)
        alert(' efsdfsdf fsd fsfsd rffffff')
    }
});
}