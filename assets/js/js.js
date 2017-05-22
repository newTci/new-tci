
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

	var i = 0;
	$(window).scroll(function (event) {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			//$(".left-side-banner").next("div").remove();
			$(".left-side-banner").next("div").addClass('ilang')
			$(".right-side-banner").next("div").addClass('ilang')
			//$(".ilang").remove();
			console.log("ASD")
			$(".ilang").css({
				visibility: 'hidden'
			});
		}else {
		}
	});
	//  owl carousel
 	// 	var owl = $('.owl-carousel');
	// 	owl.owlCarousel({
	//  items:1,
	//  loop:true,
	//  margin:10,
	//  autoplay:true,
	//  autoplayTimeout:6000,
	//  autoplayHoverPause:true
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
    var banner = $(".left-side-banner, .right-side-banner")
    var leftBanner = $(".left-side-banner")
    var imgLeftBanner = $(".left-side-banner img")
    var jualbeli = $("#jualbeli")
    var bannerKiri = (".left-side-banner")
    var bannerKanan = (".right-side-banner")

    //console.log $(window).width()
    $(".left-side-banner, .right-side-banner").stick_in_parent();
 	//    if (mq.matches) {
	//    $(window).scroll(function (event) {
	//     var scroll = $(window).scrollTop();
	//     if (scroll > 1580){
	//     	leftBanner.css({
	//     		position: 'absolute',
	//     		bottom: '350px'
	//     	});
	    	
	//     }
	//     else{
	//     	leftBanner.css({
	//     		position: 'fixed',
	//     		top: '165px'
	//     	});
	//     	leftBanner.css('margin-left', '-130px');
	//     }
	// });
	// } else {
	// $(window).scroll(function (event) {
	//     var scroll = $(window).scrollTop();
	//     if (scroll > 2485){
	//     	leftBanner.css({
	//     		position: 'absolute',
	//     		bottom: '0'
	//     	});
	//     }
	//     else{
	//     	leftBanner.css({
	//     		position: 'fixed',
	//     		top: '165px'
	//     	});
	//     	leftBanner.css('margin-left', '-130px');
	//     }
	// });
	// }
});