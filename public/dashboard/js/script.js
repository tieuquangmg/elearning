/*Initialisation DataTables*/
$(document).ready(function() {


	$('#myModal_dggv_index').modal('show');

	$('#myModal_dggv_in_course').modal('show');

	$(function () {
		$('[data-toggle="tooltip"]').tooltip({html: true});
	});

	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});

});