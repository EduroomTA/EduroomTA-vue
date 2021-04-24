$(document).ready(function(){
	$('select').formSelect({
		closeOnClick: true
	});
});
$(document).ready(function(){
	$('.dropdown-trigger.drop').dropdown({
		closeOnClick: true
	});
});
$(document).ready(function(){
	$('.dropdown-trigger.no-drop').dropdown({
		closeOnClick: false
	});
});
$(document).ready(function(){
	$('.select-search').formSelect2({
		closeOnClick: false
	});
});
$(document).ready(function(){
	$('.modal').modal();
});