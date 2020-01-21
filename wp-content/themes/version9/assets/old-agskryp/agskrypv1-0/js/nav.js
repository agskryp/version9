$(document).ready(function() {
	$('.contact').click(function() {
		$("#contactTab").css({'top':"50px",'z-index':"666660"});
	});
	$('#close').click(function() {
		$("#contactTab").css({'top':"-250px",'z-index':"-10"});
	});
});