$(document).ready(function(){
	$('.bxslider1').bxSlider({
		pager: true,
		controls: false,
		auto: true,
		pause: 4000,
		speed: 1000
	});
});
$(document).ready(function(){
	$('.bxslider2').bxSlider({
		pager: false,
		slideWidth: 200,
		minSlides: 5,
		maxSlides: 5,
		slideMargin: 20,
		moveSlides: 2,
		nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
		prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
	});
});
$(document).ready(function(){
	$('.bxslider3').bxSlider({
		pager: false,
		slideWidth: 200,
		minSlides: 4,
		maxSlides: 5,
		slideMargin: 20,
		moveSlides: 2,
		nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
		prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
	});
	$('.dog_wrap').hover(function(){
		$(this).children('a').css('display','block')
	},
	function(){
		$(this).children('a').css('display','none')
	})
});