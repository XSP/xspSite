$(document).ready(function() {	
	//$('#coda-slider-1').codaSlider();  
	jQuery('#parallax').jparallax({
	});
	
	/*$('.overviewB, .servicesB, .ways, .about, .contact').click(function () {
		$('nav a').removeClass('select'),
		$(this).addClass('select');
	});*/
    var winHeight = (window.innerHeight);
    $('.wrapper').css("min-height",(winHeight)-126);
    $('#parallax').css("height",winHeight);
});