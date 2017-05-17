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

    $('#carouselJualBeli').carousel({
      interval: 5000
    });

    //2246
    var mq = window.matchMedia( "(max-width: 1200px)" );
    console.log(mq)
    var banner = $(".side-banner")
    var leftBanner = $(".left-side-banner img")
    var jualbeli = $("#jualbeli")

    //console.log $(window).width()

    if (mq.matches) {
	   $(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 1580){
	    	banner.css({
	    		position: 'relative',
	    		top: '1677px'
	    	});
	    	console.log("ASD")
	    }
	    else{
	    	banner.css({
	    		position: 'fixed',
	    		top: '110px'
	    	});
	    	leftBanner.css('margin-left', '-130px');
	    }
	});
	} else {
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 2485){
	    	banner.css({
	    		position: 'relative',
	    		top: '2640px'
	    	});
	    }
	    else{
	    	banner.css({
	    		position: 'fixed',
	    		top: '150px'
	    	});
	    	leftBanner.css('margin-left', '-130px');
	    }
	});
	}
});