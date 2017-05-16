$(document).ready(function() {
	$("#h-first-image").hover(function() {
		$(this).find('span').addClass('hover-1')
	}, function() {
		$(this).find('span').removeClass('hover-1')
	});

	$(".wrapper-thumbnail-4").hover(function() {
		$(this).find('span').addClass('hover-text-thumbnail')
	}, function() {
		$(this).find('span').removeClass('hover-text-thumbnail')
	});

	// // owl carousel
 //  	var owl = $('.owl-carousel');
	// owl.owlCarousel({
	//     items:1,
	//     loop:true,
	//     margin:10,
	//     autoplay:true,
	//     autoplayTimeout:6000,
	//     autoplayHoverPause:true
	// });
	$('#myCarousel').carousel({
      interval: 5000
    });

    $('#carouselLoker').carousel({
      interval: 5000
    });

});