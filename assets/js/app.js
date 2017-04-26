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
$("[data-trigger=modal]").click(function(event){
  event.preventDefault();
  console.log('click');
  var target = $(this).attr('data-target'),
      src = $(this).attr('href');
  $('#'+target).find('img').attr('src', src);
  $('#'+target).removeClass('hidden');
});
$("[data-trigger=close]").click(function(event){
  $(this).addClass('hidden');
});
