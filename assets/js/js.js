
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


 	$(".ckbx").click(function(event) {
 		$(this).siblings("i").css({
 			color: '#e74c3c',
 			transform: 'scale(1.2)',
 			marginRight: '5px',
 			marginLeft: '5px'
 		});
 		if ($(this).is(':checked')){
	 	}else {
	 		$(this).siblings("i").css({
				transform: 'scale(1)',
				marginRight: '0',
				marginLeft: '0',
				color: 'black'
	 		})
	 		
	 	}
 	});

 	
});

$('.konten-berita').each(function() {
    var text = $(this).text();
   	
	if(text.length > 12) {
	 	var trimmedString = text.substr(0, 20);
    	trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
		$(this).text(trimmedString + '...')
		//$(this).text(text.substring(0, 18) + '..')
	}
});

$(".konten-berita").hover(function() {
	var text = $(this).data('judul')
	$(this).text(text);
}, function() {
	var text = $(this).text();
	var k = $(this)
	var trimmedString = text.substr(0, 20);
	trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
	k.text(trimmedString + '...')
	// setTimeout(function(){
	// 	console.log($(this))
	// 	k.text(trimmedString + '...')
	// }, 200);
	
});