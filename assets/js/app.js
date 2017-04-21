$(".slider--container > div:gt(0)").hide();
setInterval(function() {
  $('.slider--container > div:first')
    .fadeOut(500)
    .next()
    .fadeIn(500)
    .end()
    .appendTo('.slider--container');
},  6000);

$("[data-trigger=scroll]").click(function(){
	var target = $(this).attr('data-target');
	var scrollTo = $('#' + target);
	$('html, body').animate({
		scrollTop: scrollTo.offset().top
	}, 300);
});
