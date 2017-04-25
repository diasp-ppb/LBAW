$(document).ready(function () {

$("#search_title").click(function () {
	if(this.checked)
		$('.resultTitle').show();
	else
		$('.resultTitle').hide();
});


$('#search_tags').click(function () {
	if(this.checked)
		$('.resultTag').show();
	else
		$('.resultTag').hide();
});


$('#search_users').click(function () {
	if(this.checked)
		$('.resultUser').show();
	else
		$('.resultUser').hide();
});


$('#search_content').click(function () {
	
	if(this.checked)
		$('.resultContent').show();
	else
		$('.resultContent').hide();
});

});


